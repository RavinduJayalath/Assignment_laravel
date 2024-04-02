<?php

namespace domain\Services;

use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;

class StudentService{

    protected $Students;

    public function __construct(){
        $this->Students=new Student();
    }


   public function store($data){
    // dd($data);
    $rules=[
        'stid' => 'required|unique:students,stid',
        'name'=>'required|string',
        'image' => 'required|string',
        'age'=>'required|integer',
        'status' => 'required',
    ];
    $validator=Validator::make($data,$rules);
    if ($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }
    // dd($this->Students->create($data));
    $this->Students->create($data);
   }


   public function all(){
    return $this->Students->all();
   }

   public function delete($id){
    $student=$this->Students->find($id);
    $student->delete();
   }

   public function get($id){
    return $this->Students->find($id);
   }

   protected function marge(Student $old, $new){
    return array_merge($old->toArray(),$new);
   }

   public function update(array $requet, $id){
    $student=$this->Students->find($id);
    $student->update($this->marge($student,$requet));
   }


}
