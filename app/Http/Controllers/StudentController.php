<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Facades\StudentFacade;

class StudentController extends Controller
{
    public function store(Request $request){
        StudentFacade::store($request->all());
        return redirect()->back();

    }

    public function delete($id){
        // dd($id);
        StudentFacade::delete($id);
        return redirect()->back();

    }

    public function edit($id){
        $response=StudentFacade::get($id);
        return view('page\student\edit', compact('response'));
    }

    public function update(Request $request, $id){
        StudentFacade::update($request->all(),$id);
        return redirect('/manage');
    }

    public function cancel(){
        return redirect('/manage');
    }


}
