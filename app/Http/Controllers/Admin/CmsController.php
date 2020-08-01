<?php

namespace App\Http\Controllers\Admin;

use Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Repositories\AdminRepositories\Eloquent\CmsRepository;

class CmsController extends Controller
{
    private $cmsRepo;
    private $pengajarRepo;
    private $page;

    public function __construct(CmsRepository $cmsRepo)
    {
        //Check middelware
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();

            return $next($request);
        });

        //Repo admin
        $this->cmsRepo = $cmsRepo;
        //Route name
        $this->page = Route::currentRouteName();
    }

    // Banner CMS
    protected function editBanner()
    {
        $data       = $this->cmsRepo->getData();
        $activePage = $this->page;

        return view('admin.cms.banner', compact('data', 'activePage'));
    }

    // About CMS
    protected function editAbout()
    {
        $data       = $this->cmsRepo->getDataAbout();
        $activePage = $this->page;

        return view('admin.cms.about', compact('data', 'activePage'));
    }

    // Banner CMS
    protected function updateBanner(Request $request)
    {
        $validatedData = $request->validate([
            'title'         => 'required',
            'description'  => 'required',
            'image'         => 'required',
        ]);

        $data = $this->cmsRepo->updateBanner($request);
        Alert::success('Berhasil', 'Berhasil Update Data');
        return Redirect::back();
    }
    // updateAbout CMS
    protected function updateAbout(Request $request)
    {
        $validatedData = $request->validate([
            'title_1'         => 'required',
            'title_2'         => 'required',
            'description'  => 'required',
            'image'         => 'required',
        ]);

        $data = $this->cmsRepo->updateAbout($request);
        Alert::success('Berhasil', 'Berhasil Update Data');
        return Redirect::back();
    }

    public function listProgram()
    {
        $data       = $this->cmsRepo->getDataProgram();
        $activePage = $this->page;
        return view('admin.cms.program', compact('data', 'activePage'));
    }

    public function editProgram($id)
    {
        $data       = $this->cmsRepo->getDataProgramById($id);
        $activePage = $this->page;
        return view('admin.cms.edit_program', compact('data', 'activePage'));
    }

    public function updateProgram($id, Request $request)
    {
        $validatedData = $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'harga'          => 'required',
            'tingkatan'      => 'required',
            'nama_pelajaran' => 'required'
        ]);

        $data       = $this->cmsRepo->updateProgram($id, $request);

        Alert::success('Berhasil', 'Berhasil Update Data');
        return Redirect::route('admin.list.program');
    }

    public function deleteProgram(Request $request)
    {
        $data       = $this->cmsRepo->deleteProgram($request);
        $activePage = $this->page;
        return view('admin.cms.program', compact('data', 'activePage'));
    }

    public function createProgram()
    {
        $activePage     = $this->page;

        return view('admin.cms.create_program', compact('activePage'));
    }

    public function storeProgram(Request $request)
    {
        $validatedData = $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'image'          => 'required',
            'harga'          => 'required',
            'tingkatan'      => 'required',
            'nama_pelajaran' => 'required'
        ]);

        $result     = $this->cmsRepo->storeProgram($request);

        Alert::success('Berhasil', 'Berhasil Simpan Data');
        return Redirect::route('admin.list.program');
    }

    public function listContact()
    {
        $data       = $this->cmsRepo->getDataContact();
        $activePage = $this->page;

        return view('admin.cms.contact', compact('data', 'activePage'));
    }

    public function editContact($id)
    {
        $data       = $this->cmsRepo->editContact($id);
        $activePage = $this->page;

        return view('admin.cms.edit_contact', compact('data', 'activePage'));
    }

    // updateContact CMS
    protected function updateContact(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'        => 'required',
            'description'  => 'required',
        ]);

        $data = $this->cmsRepo->updateContact($request, $id);
        Alert::success('Berhasil', 'Berhasil Update Data');

        return Redirect::back();
    }
}
