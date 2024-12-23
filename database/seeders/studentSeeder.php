<?php

namespace Database\Seeders;

use Faker\Factory as mahesh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Faker\Provider\Hi_IN\Indian;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feker = mahesh::create();
        for ($a = 1; $a <= 10000; $a++) {
            $data = DB::table('query_builders')->insert([
                'name' => $feker->name,
                'age' => $feker->numberBetween(0, 100),
                'gender' => $feker->randomElement(['male', 'female']),
                'email' => $feker->email,
                'password' => $feker->password,
            ]);
        }
    }
}
