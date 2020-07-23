<?php

namespace App\Http\Controllers\Admin;

Use Alert;
use Redirect;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use App\Repositories\AdminRepositories\AdminRepositoryInterface;

class AdminController extends Controller
{
    private $adminRepo;
    private $page;

    public function __construct(AdminRepositoryInterface $adminRepo)
    {
        //Check middelware
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();

            return $next($request);
        });

        //Repo admin
        $this->adminRepo = $adminRepo;
        //Route name
        $this->page = Route::currentRouteName();
    }

    // Home admin
    protected function index()
    {
        $data       = $this->user;
        $activePage = $this->page;

        return view('admin.dashboard', compact('data', 'activePage'));
    }

    protected function profile()
    {
        $data       = $this->user;
        $activePage = $this->page;

        return view('admin.profile.edit', compact('data', 'activePage'));
    }

    protected function updateProfile($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama_depan'    => 'required',
            'name'          => 'required',
            'tanggal_lahir' => 'required',
            'email'         => 'required',
            'alamat'        => 'required',
        ]);

        $result = $this->adminRepo->updateProfile($request, $id);

        Alert::success('Berhasil', 'Berhasil Update Data');
        return Redirect::back();
    }

    protected function updatePhoto($id, Request $request)
    {
        $validatedData = $request->validate([
            'image'    => 'required',
        ]);

        $result = $this->adminRepo->updatePhoto($request, $id);
        Alert::success('Berhasil', 'Berhasil Update Data');

        return Redirect::back();
    }

    protected function downloadPhoto($id){
        $data = $this->adminRepo->getById($id);

        $path_file = storage_path(). '/app/images/'. $data->profile->foto;

        if(file_exists($path_file)) {
            return response()->download($path_file, $data->profile->foto, ['Content-Type' => 'jpg']);
        }else{
            Alert::error('Gagal', 'File Tidak Ditemukan');

            return Redirect::back();
        }
    }


}
