<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use App\Http\Requests\RequestUploadStudents;
use App\Imports\ExcelImport;

class StudentController extends Controller
{
    public function index() {

        $students = Student::select('id', 'name', 'class', 'level', 'parent_contact')->get();
        return view('uploadStudent', compact('students'));
    }

    public function uploadStudents(RequestUploadStudents $request) {
        
        $file = $request->file('studentsRecord');
        $import = new ExcelImport();

        try {
            \Excel::import($import, $file);
            return redirect()->back()->with('success', 'Excel file imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}