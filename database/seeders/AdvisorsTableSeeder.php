<?php

namespace Database\Seeders; // تأكد من إضافة هذا السطر

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvisorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('advisors')->insert([
            [
                'name' => 'Dr. Ahmed Ali',
                'email' => 'ahmed.ali@example.com',
                'phone_number' => '0123456789',
                'specialization' => 'Psychology',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dr. Sarah Hassan',
                'email' => 'sarah.hassan@example.com',
                'phone_number' => '0123456790',
                'specialization' => 'Business Consulting',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dr. Mohamed Samir',
                'email' => 'mohamed.samir@example.com',
                'phone_number' => '0123456791',
                'specialization' => 'Finance',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
