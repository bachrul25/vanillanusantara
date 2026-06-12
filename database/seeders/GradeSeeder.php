<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    public function run()
    {
        Grade::create([
            'name' => 'Grade A',
            'description' => 'Panjang 14–20 cm, moisture 25–30%. Bungkus rapi, seragam, aroma kuat dan murni.',
            'image_path' => 'grade_a.jpg',
        ]);

        Grade::create([
            'name' => 'Grade B',
            'description' => 'Panjang bervariasi. Aroma dan kualitas baik, cocok untuk industri dan ekstraksi.',
            'image_path' => 'grade_b.jpg',
        ]);

        Grade::create([
            'name' => 'Grade C',
            'description' => 'Panjang lebih pendek. Kualitas standar, cocok untuk penggunaan pengolahan massal.',
            'image_path' => 'grade_c.jpg',
        ]);
    }
}
