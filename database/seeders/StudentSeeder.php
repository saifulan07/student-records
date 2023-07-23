<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['name' => 'Ali', 'class' => 'Berlian', 'level' => 2, 'parent_contact' => '0112111111'],
            ['name' => 'Abu', 'class' => 'Zamrud', 'level' => 1, 'parent_contact' => '0113111111'],
            ['name' => 'Muthu', 'class' => 'Delima', 'level' => 3, 'parent_contact' => '0114111111'],
        ];

        foreach($students as $student) {
            Student::firstOrCreate($student, $student);
        }
    }
}
