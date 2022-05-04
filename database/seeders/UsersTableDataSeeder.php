<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TableOne;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 3; $i++) { 
	    	TableOne::create([
	            'name' => "Hi"
	        ]);
    	// }
    }
}
