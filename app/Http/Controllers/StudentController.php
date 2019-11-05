<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    public function showStudents(){
        $studs = Student::all();
        return view('absence-manager', ['studs' => $studs]);
    }

    public function incrementScore(){
        Students::find($score)->increment('score', 2);
    }

    public function decrementScore(){
        Students::find($score)->decrement('score', 2);
    }
}
