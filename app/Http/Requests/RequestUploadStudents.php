<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class RequestUploadStudents extends FormRequest 
{
    public function rules() {
        return [
            'studentsRecord' => 'required|file_format:xlsx,csv'
        ];
    }

    public function messages()
    {
        return [
            'studentsRecord.file_format' => 'Only supported .xlsx and .csv'
        ];
    }
}