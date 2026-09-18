<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index() {
        return view('Crud.Sign_up_form');
    }
    public function store(Request $request) {
        Student::create([
            'name' => $request->name,
            'course' => $request->course,
            'email' => $request->email
        ]);

        return redirect()->route('student.Dashboard');
    }

    // read operation
    public function studentView(){
        $students = Student::all();
        return view('Crud.Dashboard' , compact('students'));

        // get by id
        // $students = Student::find(2);
        // dd( $students );
        // get by name
        // $students = Student::where('name','nimra')->get();
        // dd( $students );
    }

}
