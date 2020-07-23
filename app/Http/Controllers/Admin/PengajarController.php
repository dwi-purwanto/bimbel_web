<?php

namespace App\Http\Controllers\Admin;

use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\AdminRepositories\Eloquent\PengajarRepository;

class PengajarController extends Controller
{
    private $pengajarRepo;
    private $page;

    public function __construct(PengajarRepository $pengajarRepo)
    {
        //Check middelware
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();

            return $next($request);
        });

        //Repo admin
        $this->pengajarRepo = $pengajarRepo;
        //Route name
        $this->page = Route::currentRouteName();
    }

    public function listPengajar()
    {
        $data       = $this->pengajarRepo->getData();
        $activePage = $this->page;
        return view('admin.pengajar.list', compact('data', 'activePage'));
    }
    public function createPengajar()
    {
        $data       = $this->pengajarRepo->getData();
        $activePage = $this->page;

        return view('admin.pengajar.create', compact('data', 'activePage'));
    }
    public function storePengajar(Request $request)
    {
        $validatedData = $request->validate([
            'nip'           => 'required',
            'nama'          => 'required',
            'tanggal_lahir' => 'required',
            'provinsi'      => 'required',
            'tempat_lahir'  => 'required',
            'jurusan'       => 'required',
            'pendidikan'    => 'required',
            'telp'          => 'required',
            'alamat'        => 'required',
            'foto'          => 'required',
        ]);

        $data = $this->pengajarRepo->createPengajar($request);
        Alert::success('Berhasil', 'Berhasil Simpan Data');
        return redirect()->route('admin.list.pengajar');
    }

    public function updatePengajar($id, Request $request)
    {
        $validatedData = $request->validate([
            'nip'           => 'required',
            'nama'          => 'required',
            'tanggal_lahir' => 'required',
            'provinsi'      => 'required',
            'tempat_lahir'  => 'required',
            'jurusan'       => 'required',
            'pendidikan'    => 'required',
            'telp'          => 'required',
            'alamat'        => 'required',
        ]);

        $data = $this->pengajarRepo->updatePengajar($id, $request);
        Alert::success('Berhasil', 'Berhasil Simpan Data');
        return redirect()->route('admin.list.pengajar');
    }

    public function deletePengajar(Request $request)
    {
        $data = $this->pengajarRepo->deletePengajar($request);
        Alert::success('Berhasil', 'Data Berhasil dihapus');
        // return redirect('/admin/pengajar/pengajar/list');
        return redirect()->route('admin.list.pengajar')->with('success','User deleted successfully');
    }

    public function editPengajar($id)
    {
        $data       = $this->pengajarRepo->getDataById($id);
        $activePage = $this->page;
        return view('admin.pengajar.edit', compact('data', 'activePage'));
    }

}
