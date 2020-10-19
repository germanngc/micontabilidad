<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// This will clear the Users table
		User::truncate();
		
		$password = Hash::make('root');

		User::create([
			'name' => 'Administrator',
			'email' => 'admin@micontabilidad.xyz',
			'password' => $password
		]);
    }
}
