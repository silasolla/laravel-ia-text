<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([
			UserSeeder::class,
			// TextSeeder::class,
			LectureSeeder::class,
			LectureUserSeeder::class
		]);
		
	    // \App\Models\User::factory(3)->create();
		\App\Models\Text::factory(100)->create();
    }
}
