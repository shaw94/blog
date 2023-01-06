<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::Create([
            'first_name' => 'Mohamed',
            'last_name' => 'Shaw',
            'email' => 'admin@email.app',
            'password' => Hash::make('helloWorld2023'),
        ]);
    }
}
