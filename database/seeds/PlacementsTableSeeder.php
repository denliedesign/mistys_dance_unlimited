<?php

namespace Database\Seeds;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlacementsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('placements')->insert([
            [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'email' => 'john.doe@example.com',
                'ballet' => '2',
                'tap' => '1',
                'jazz' => '2',
                'pointe' => '',
                'acro' => '1',
                'recommendation' => 'stay strong',
                'comment' => 'Promising dancer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Jane',
                'lastName' => 'Smith',
                'email' => 'jane.smith@example.com',
                'ballet' => '3',
                'tap' => '3',
                'jazz' => '3',
                'pointe' => 'Pre-Pointe',
                'acro' => '2',
                'recommendation' => 'ballet intensive',
                'comment' => 'Shows dedication and skill.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Emily',
                'lastName' => 'Richards',
                'email' => 'emily.smith@example.com',
                'ballet' => '4',
                'tap' => '3',
                'jazz' => '',
                'pointe' => '1',
                'acro' => '',
                'recommendation' => 'tap intensive',
                'comment' => 'Great progress this year.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Michael',
                'lastName' => 'Johnson',
                'email' => 'michael.johnson@example.com',
                'ballet' => '',
                'tap' => '5',
                'jazz' => '4',
                'pointe' => '',
                'acro' => '',
                'recommendation' => '',
                'comment' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Sophia',
                'lastName' => 'Davis',
                'email' => 'sophia.davis@example.com',
                'ballet' => '2',
                'tap' => '',
                'jazz' => '2',
                'pointe' => '',
                'acro' => '1',
                'recommendation' => 'ballet intensive',
                'comment' => 'Flexible and determined.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'James',
                'lastName' => 'Brown',
                'email' => 'james.brown@example.com',
                'ballet' => '2',
                'tap' => '3',
                'jazz' => '3',
                'pointe' => '',
                'acro' => '',
                'recommendation' => 'ballet intensive',
                'comment' => 'Needs practice in ballet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'Olivia',
                'lastName' => 'Miller',
                'email' => 'olivia.miller@example.com',
                'ballet' => '6',
                'tap' => '6',
                'jazz' => '6',
                'pointe' => '2',
                'acro' => '3',
                'recommendation' => 'dance camp',
                'comment' => 'Strong across all styles.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
