<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Index()
    {

        $st = Student::all();

        $data = compact('st');

        return view('student.index')->with($data);
    }

    public function insert()
    {
        return view('student.insert');
    }

    public function store(Request $req)
    {

        $req->validate([

            'name' => 'required',
            'age' => 'required | numeric',
            'course' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'email' => 'required | email',
            'pass' => ['required' , 'regex: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/'],
            'cpass' => 'required | same:pass'
        ]);

        $st = new Student;

        $st->stname = $req['name'];
        $st->age = $req['age'];
        $st->course = $req['course'];
        $st->address = $req['address'];
        $st->dob = $req['dob'];
        $st->email = $req['email'];
        $st->password = md5($req['pass']);
        $st->save();

        return redirect('/student');
    }
}
