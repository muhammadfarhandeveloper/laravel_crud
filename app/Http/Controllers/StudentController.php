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
        $st->amount = $req['amount'];
        $st->email = $req['email'];
        $st->password = md5($req['pass']);
        $st->save();

        return redirect('/student');
    }

    public function delete($st_id){

        $st = Student::find($st_id);

        if(!is_null($st)){

            $st->delete();
            return redirect('/student');
        }

        return redirect('/student');

    }

    public function edit($id){

        $st = Student::find($id);

        if(!is_null($st))   {

            return view('student.update')->with('st',$st);

        }

        return redirect('/student');

    }

    public function update(Request $req,$id){

        $st = Student::find($id);

        if(!is_null($st)){

            
            $st->stname = $req['name'];
            $st->age = $req['age'];
            $st->course = $req['course'];
        $st->address = $req['address'];
        $st->dob = $req['dob'];
        $st->email = $req['email'];
        $st->amount = $req['amount'];
        $st->password = $req['pass'];
        $st->save();
        
        return redirect('/student'); 
    }

    return redirect('/student'); 

    }

}
