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

        return redirect()->route('student.form');
    }
}
