<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

/// Custom
use App\Models\One;

class One extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        One::create([
            "name" => "Susan",
            "age" => 21,
            "dob" => "2011/01/29"
        ]);
    }
}
