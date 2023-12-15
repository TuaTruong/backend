<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table("post")->insert([
                "title" => Str::random(5),
                "description" => Str::random(200),
                "status" => 1,
                "publish_date" => date("Y-m-d"),
                "user_id" => 1
            ]);
        }
    }
}
