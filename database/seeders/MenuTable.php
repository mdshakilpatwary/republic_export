<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuName;

class MenuTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuName::insert([
            // site info data
        [
            'menuName' => 'About',
            'type' => 1,
        ],
        [
            'menuName' => 'Our Services',
            'type' => 2,
        ],
        [
            'menuName' => 'Our Product',
            'type' => 3,
        ],
        [
            'menuName' => 'Csr',
            'type' => 4,
        ],
        [
            'menuName' => 'Contact',
            'type' => 5,
        ],
        [
            'menuName' => 'Career',
            'type' => 6,
        ]
        ]);
    }
}
