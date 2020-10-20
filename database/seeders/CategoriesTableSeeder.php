<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Category::truncate();

		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 10; $i++) {
			Category::create([
				'name' => $faker->sentence,
				'description' => $faker->paragraph
			]);
		}
    }
}
