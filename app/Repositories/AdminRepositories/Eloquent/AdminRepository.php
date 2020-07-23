<?php

namespace App\Repositories\AdminRepositories\Eloquent;

use App\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use App\Repositories\AdminRepositories\AdminRepositoryInterface;

Class AdminRepository implements AdminRepositoryInterface {

    private $model_user;
    private $model_profile;

    public function __construct(User $model_user, Profile $model_profile)
    {
        $this->model_user = $model_user;
        $this->model_profile = $model_profile;
    }

    public function getById($id) {
        $result = $this->model_user->findOrFail($id);

        return $result;
    }

    public function updateProfile($request, $id)
    {
        $result = $this->model_profile->where('user_id', $id)->first();

        if( empty($result)) {
            $result = self::saveProfile($request, $id);
        }else{
            $result->user_id           = $id;
            $result->tanggal_lahir     = date('Y-m-d', strtotime($request->tanggal_lahir));
            $result->nama_depan        = $request->nama_depan;
            $result->nama_belakang     = !empty($request->nama_belakang) ? $request->nama_belakang : $result->nama_belakang;
            $result->alamat            = $request->alamat;
            $result->save();
        }

        return $result;
    }

    public function updatePhoto($request, $id)
    {
        $result = $this->model_profile->where('user_id', $id)->first();

        //Delete File
        if( !empty($result->foto)) {
            $delete_file = self::deletePhoto($result->foto);
        }

        //function upload foto
        $file_name = self::uploadPhoto($request->image);

        //Update Data
        $result->foto = $file_name;
        $result->save();

        return $result;
    }

    public function saveProfile($request, $id)
    {
        $result = new $this->model_profile;

        $result->user_id           = $id;
        $result->tanggal_lahir     = date('Y-m-d', strtotime($request->tanggal_lahir));
        $result->nama_depan        = $request->nama_depan;
        $result->nama_belakang     = !empty($request->nama_belakang) ? $request->nama_belakang : '';
        $result->alamat            = $request->alamat;

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

    public function deletePhoto($foto)
    {
        $file = Storage::exists('images/'.$foto );
        if($file == TRUE) {
            $delete = Storage::delete('images/'.$foto);
            return $delete;
        }else{
            return false;
        }
    }
}
