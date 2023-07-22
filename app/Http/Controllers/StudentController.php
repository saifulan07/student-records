<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {

        $students = Student::select('id', 'name', 'class', 'level', 'parent_contact')->get();
        return view('uploadStudent', compact('students'));
    }
}
