<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.Home');
    }

    public function aboutProject()
    {
        return view('frontend.about.Project');
    }

    public function aboutTeam()
    {
        return view('frontend.about.Team');
    }

    public function aboutAssociatedPartners()
    {
        return view('frontend.about.Associated-Partners');
    }

    public function deliverablesGEGraduateDiploma()
    {
        return view('frontend.deliverables.GE-Graduate-Diploma');
    }

    public function deliverablesEducationalGEPilotPlant()
    {
        return view('frontend.deliverables.Educational-GE-Pilot-Plant');
    }

    public function deliverablesIntegratedGELaboratories()
    {
        return view('frontend.deliverables.Integrated-GE-Laboratories');
    }


    public function deliverablesEgyptianSocietyOfGE()
    {
        return view('frontend.deliverables.Egyptian-Society-of-GE');
    }

    public function events()
    {
        return view('frontend.Events');
    }

    public function projectNewsletters()
    {
        return view('frontend.Project-Newsletters');
    }

    public function contactUs()
    {
        return view('frontend.Contact-Us');
    }

    
    
}
