<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bai3;

class Bai3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB:table('bai3')->insert([
        //     'slug' => 'nguyen',
        //     'title' =>'van',
        //     'content' =>'ninh'
        // ]);
        Bai3::factory()->count(1000)->create();
    }
}
