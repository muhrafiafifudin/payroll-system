<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'category' => 'I',
                'class' => 'a',
                'mkg' => '0',
                'salary' => '1560800',
            ],
            [
                'category' => 'I',
                'class' => 'a',
                'mkg' => '2',
                'salary' => '1610000',
            ],
            [
                'category' => 'I',
                'class' => 'b',
                'mkg' => '3',
                'salary' => '1704500',
            ],
            [
                'category' => 'I',
                'class' => 'c',
                'mkg' => '3',
                'salary' => '1776600',
            ],
            [
                'category' => 'I',
                'class' => 'd',
                'mkg' => '3',
                'salary' => '1851800',
            ],
            [
                'category' => 'II',
                'class' => 'a',
                'mkg' => '0',
                'salary' => '2022200',
            ],
            [
                'category' => 'II',
                'class' => 'a',
                'mkg' => '1',
                'salary' => '2054100',
            ],
            [
                'category' => 'II',
                'class' => 'b',
                'mkg' => '3',
                'salary' => '2208400',
            ],
            [
                'category' => 'II',
                'class' => 'c',
                'mkg' => '3',
                'salary' => '2301800',
            ],
            [
                'category' => 'II',
                'class' => 'd',
                'mkg' => '3',
                'salary' => '2399200',
            ],
        ]);
    }
}
