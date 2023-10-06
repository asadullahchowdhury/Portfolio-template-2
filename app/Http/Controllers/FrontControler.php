<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontControler extends BaseController
{
   public function dashboard(){
       return view('Front.Pages.dashboard.dashboard');
   }

    public function resume()
    {
        return view('Front.Pages.resume.resume');
    }
}
