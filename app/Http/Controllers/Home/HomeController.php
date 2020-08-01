<?php

namespace App\Http\Controllers\Home;

use Auth;
Use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AdminRepositories\Eloquent\CmsRepository;
use App\Repositories\AdminRepositories\Eloquent\JadwalRepository;


class HomeController extends Controller
{
    private $cmsRepo, $jadwalRepo;

    public function __construct(CmsRepository $cmsRepo, JadwalRepository $jadwalRepo)
    {
        //Check middelware
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();

            return $next($request);
        });

        //Repo cms
        $this->cmsRepo    = $cmsRepo;
        $this->jadwalRepo = $jadwalRepo;

    }
    public function index()
    {
        $banner    = $this->cmsRepo->getData();
        $about     = $this->cmsRepo->getDataAbout();
        $program   = $this->cmsRepo->getDataProgram();
        $contact   = $this->cmsRepo->getDataContact();
        $head_contact  = $this->cmsRepo->getHeaderContact();
        $list_contact  = $this->cmsRepo->getListContact();
        // return $program;
        return view('frontend.content_1', compact('banner', 'about', 'program', 'contact', 'list_contact', 'head_contact'));
    }

    public function kelas(Request $request)
    {
        // set data search
        $pelajaran = !empty($request->pelajaran) ? $request->pelajaran : '';
        $tingkat   = !empty($request->tingkat) ? $request->tingkat : '';

        $banner    = $this->cmsRepo->getData();
        $program   = $this->cmsRepo->getListProgramDetailPerPage($tingkat, $pelajaran);
        $userAuth  = !empty(Auth::user()->name) ? 'login' : 'not_login';

        return view('frontend.list', compact('banner', 'program', 'userAuth'));
    }

    public function kelasDetail(Request $request, $id)
    {
        $result = $this->jadwalRepo->getJadwalByIdPelajaran($request->id_program);

        return $result;
    }

    public function register()
    {
     return view('frontend.register');
    }

    public function login()
    {
     return view('frontend.login');
    }

    public function test()
    {
        Alert::success('Success Title', 'Success Message');
        return view('welcome');
    }

}
