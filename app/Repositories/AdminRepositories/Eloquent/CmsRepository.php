<?php

namespace App\Repositories\AdminRepositories\Eloquent;

use DB;
use App\User;
use App\Models\About;
use App\Models\Banner;
use App\Models\Profile;
use App\Models\Program;
use App\Models\Contact;
use App\Models\DetailPrograms;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

Class CmsRepository {

    private $model_user, $model_profile, $model_banners, $model_about, $model_program, $model_contact, $model_detailprogram;

    public function __construct(User $model_user, Profile $model_profile, Banner $model_banners, About $model_about, Program $model_program, Contact $model_contact, DetailPrograms $model_detailprogram)
    {
        $this->model_user    = $model_user;
        $this->model_profile = $model_profile;
        $this->model_banners = $model_banners;
        $this->model_about   = $model_about;
        $this->model_program = $model_program;
        $this->model_contact = $model_contact;
        $this->model_detailprogram = $model_detailprogram;
    }

    public function getData() {
        // $result = $this->model_banners->findOrFail($id);
        $result = $this->model_banners->get()->first();

        return $result;
    }

    public function getDataAbout() {
        // $result = $this->model_banners->findOrFail($id);
        $result = $this->model_about->get()->first();

        return $result;
    }

    public function updateBanner($request) {

        $result = self::getData();
        if(empty($result)) {
            $result = new $this->model_banners;
        }

        //Delete File
        if( !empty($result->banner_image)) {
            $delete_file = self::deletePhoto($result->banner_image);
        }
        //function upload foto
        $file_name = self::uploadPhoto($request->image);

        $result->title          = $request->title;
        $result->description    = $request->description;
        $result->banner_image   = $file_name;

        $result->save();

        return $result;
    }

    public function updateProgram($id, $request) {

        $result = self::getDataProgramById($id);

        if( !empty($request->image)) {
            //Delete File
            $delete_file = self::deletePhoto($result->detailProgram->image);

            //function upload foto
            $file_name = self::uploadPhoto($request->image);
            $result->image          = $file_name;
        }

        // save header
        $result->title          = $request->title;
        $result->description    = $request->description;
        $result->save();

        self::saveDetailProgram($request, $result);

        return $result;
    }

    public function updateAbout($request) {

        $result = self::getDataAbout();
        if(empty($result)) {
            $result = new $this->model_about;
        }

        //Delete File
        if( !empty($result->banner_image)) {
            $delete_file = self::deletePhoto($result->banner_image);
        }
        //function upload foto
        $file_name = self::uploadPhoto($request->image);

        $result->title_1          = $request->title_1;
        $result->title_2          = $request->title_2;
        $result->description    = $request->description;
        $result->banner_image   = $file_name;

        $result->save();



        return $result;
    }

    public function uploadPhoto($image)
    {
        $file      = $image;
        $name_file = uniqid().".".$file->extension();
        //upload
        $file->storeAs( 'images_web', $name_file);

        return $name_file;
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

    public function getDataProgram() {
        $result = $this->model_program->get();

        return $result;
    }

    public function getListProgram() {
        $result = $this->model_program->get();

        return $result;
    }

    public function getListProgramDetailPerPage($tingkat, $pelajaran) {
        $result = $this->model_detailprogram->with('programHeader')->where('status', 1);
        // $result = DB::table('detail_kursus')->join('programs', 'programs.id', '=', 'detail_kursus.id_programs');
        if(!empty($tingkat)) {
            $result = $result->where('tingkatan', $tingkat);
        }

        if(!empty($pelajaran)) {
            $result = $result->where('nama_pelajaran', $pelajaran);
        }

        $result = $result->paginate(3);

        return $result;
    }

    public function getDetailProgramActive() {
        $result = $this->model_detailprogram->where('status', 1)->get();

        return $result;
    }
    public function getDetailProgramFilterByTingkatan($request) {
        $result = $this->model_detailprogram->where('tingkatan', $request->tingkatan)->get();

        return $result;
    }

    public function getDataProgramById($id) {
        // $result = $this->model_banners->findOrFail($id);
        $result = $this->model_program->findOrFail($id);

        return $result;
    }

    public function storeProgram($request) {

        $result = new $this->model_program;

        //function upload foto
        $file_name = self::uploadPhoto($request->image);

        $result->title          = $request->title;
        $result->description    = $request->description;
        $result->image          = $file_name;

        $result->save();

        // save detail
        self::saveDetailProgram($request, $result);

        return $result;
    }

    public function saveDetailProgram($request, $data) {

        $result = $this->model_detailprogram->where('id_programs',$data->id)->first();

        if(empty($result)) {
            $result              = new $this->model_detailprogram;
            $result->id_programs = $data->id;
        }

        $result->nama_pelajaran  = $request->nama_pelajaran;
        $result->tingkatan       = $request->tingkatan;
        $result->harga           = $request->harga;
        $result->status          = empty($request->status) ? 0 : 1;
        $result->save();

        return $result;
    }

    public function deleteProgram($request, $data) {

        $result = new $this->model_detailprogram;

        $result->save();

        return $result;
    }

    public function getDataContact() {
        $result = $this->model_contact->get();

        return $result;
    }

    public function getListContact() {
        $result = $this->model_contact->where('name', 'content')->get();

        return $result;
    }

    public function getHeaderContact() {
        $result = $this->model_contact->where('name', 'header')->first();

        return $result;
    }

    public function editContact($id) {
        // $result = $this->model_banners->findOrFail($id);
        $result = $this->model_contact->findOrFail($id);

        return $result;
    }

    public function updateContact($request, $id) {
        $result = self::editContact($id);

        if(empty($result)) {
            $result = new $this->model_contact;
        }

        $result->title          = $request->title;
        $result->description    = $request->description;

        $result->save();

        return $result;
    }

}
