<?php

namespace App\Http\Controllers;

use Domain\Facades\StudentFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('page\student\index');
    }

    public function manage(){
        $response=StudentFacade::all();
        return view('page.student.manage', compact('response'));

        // dd($response);
    }
}

