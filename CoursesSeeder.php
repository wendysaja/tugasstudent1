<?php

namespace Database\Seeders;

// database/seeders/CoursesSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            ['course_name' => 'Matematika', 'description' => 'Mata kuliah tentang matematika'],
            ['course_name' => 'Pemograman', 'description' => 'Mata kuliah tentang Pemograman'],
            ['course_name' => 'Kimia', 'description' => 'Mata kuliah tentang Kimia'],
        ]);
    }
}


