<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::create([
            'name' => 'sayah',
            'score' => '80',
            'name' => 'saya',
            'score' => '0'
        ]);
    }
}
