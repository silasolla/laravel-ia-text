<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('lectures')->insert([
			[
				'name' => 'Standard ML'
			],
			[
				'name' => 'OCaml'
			],
			[
				'name' => 'Haskell'
			],
			[
				'name' => 'Idris'
			]
		]);
    }
}
