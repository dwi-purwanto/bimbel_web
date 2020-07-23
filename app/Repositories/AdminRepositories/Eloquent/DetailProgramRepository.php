<?php

namespace App\Repositories\AdminRepositories\Eloquent;

use App\User;
use App\Models\DetailPrograms;
use Illuminate\Support\Facades\Storage;

Class DetailProgramRepository {

    private $model_user, $model_kelas;

    public function __construct(User $model_user, DetailPrograms $model_detail
    {
        $this->model_user    = $model_user;
        $this->model_detail  = $model_detail
    }

    public function getData()
    {
        $result = $this->model_pengajar->get();

        return $result;
    }

    public function getDataById($id)
    {
        $result = $this->model_pengajar->findOrFail($id);

        return $result;
    }

    public function createPengajar($request)
    {
        //function upload foto
        $file_name = self::uploadPhoto($request->foto);
        $result = new $this->model_pengajar;

        $result->nip            = $request->nip;
        $result->nama           = $request->nama;
        $result->jenis_kelamin  = $request->jenis_kelamin;
        $result->tanggal_lahir  = date('Y-m-d', strtotime($request->tanggal_lahir));
        $result->tempat_lahir   = $request->tempat_lahir;
        $result->provinsi       = $request->provinsi;
        $result->pendidikan     = $request->pendidikan;
        $result->jurusan        = $request->jurusan;
        $result->alamat         = $request->alamat;
        $result->telp           = $request->telp;
        $result->foto           = $file_name;
        $result->status         = 0;

        $result->save();

        return $result;
    }
    public function updatePengajar($id, $request)
    {
        $result = self::getDataById($id);

        //Delete File
        if(!empty($request->foto)){
            $delete_file = self::deletePhoto($result->foto);
            //function upload foto
            $file_name      = self::uploadPhoto($request->foto);
            $result->foto   = $file_name;

        }

        $result->nip            = $request->nip;
        $result->nama           = $request->nama;
        $result->jenis_kelamin  = $request->jenis_kelamin;
        $result->tanggal_lahir  = date('Y-m-d', strtotime($request->tanggal_lahir));
        $result->tempat_lahir   = $request->tempat_lahir;
        $result->provinsi       = $request->provinsi;
        $result->pendidikan     = $request->pendidikan;
        $result->jurusan        = $request->jurusan;
        $result->alamat         = $request->alamat;
        $result->telp           = $request->telp;
        $result->status         = !empty($request->status) ? 1 : 0;

        $result->save();

        return $result;
    }

    public function uploadPhoto($image)
    {
        $file      = $image;
        $name_file = uniqid().".".$file->extension();
        //upload
        $file->storeAs( 'images', $name_file);

        return $name_file;
    }

    public function deletePengajar($request)
    {
        $result = self::getDataById($request->id);
        if(!empty($result)) {
            self::deletePhoto($result->foto);
            $result->delete();
        }

        return $result;
    }

    public function deletePhoto($foto)
    {
        $file = Storage::exists('images_web/'.$foto );
        if($file == TRUE) {
            $delete = Storage::delete('images_web/'.$foto);
            return $delete;
        }else{
            return false;
        }
    }
}
