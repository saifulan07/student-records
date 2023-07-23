<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *p
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $rules = [
            'name' => 'required|string',
            'class' => 'required|string',
            'level' => 'required|integer',
            'parent_contact' => 'required|numeric',
        ];

        $validator = \Validator::make($row, $rules);

        if ($validator->fails()) {
            $errorMessages = $validator->errors()->all();

            throw new \Exception('Invalid data found in the Excel file: ' . implode(', ', $errorMessages));
        }

        $student = Student::firstOrCreate([
            'name' => $row['name'],
            'class' => $row['class'],
            'level' => $row['level'],
            'parent_contact' => $row['parent_contact'],
        ]);
    }
}