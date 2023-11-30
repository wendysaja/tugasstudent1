<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        // Ambil id mata kuliah dari tabel courses
        $courseIds = DB::table('courses')->pluck('id');

        // Masukkan data mahasiswa
        DB::table('students')->insert([
            [
                'name' => 'Faisal',
                'age' => 21,
                'classroom' => '1A',
                'course_id' => $courseIds->random(),
            ],
            [
                'name' => 'Aditya',
                'age' => 22,
                'classroom' => '4B',
                'course_id' => $courseIds->random(),
            ],
            [
                'name' => 'Wendy',
                'age' => 23,
                'classroom' => '3C',
                'course_id' => $courseIds->random(),
            ],
            [
                'name' => 'Sipa',
                'age' => 19,
                'classroom' => '2D',
                'course_id' => $courseIds->random(),
            ],
            [
                'name' => 'Rikeu',
                'age' => 20,
                'classroom' => '5E',
                'course_id' => $courseIds->random(),
            ],
        ]);
    }
}