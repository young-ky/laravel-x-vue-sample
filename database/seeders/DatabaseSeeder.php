<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TreeType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TreeType::create([
            'tree_name' => 'Tropical Tree'
        ]);
        TreeType::create([
            'tree_name' => 'Rainforest Tree'
        ]);
        TreeType::create([
            'tree_name' => 'Amazon Tree'
        ]);
        TreeType::create([
            'tree_name' => 'Kalimantan Tree'
        ]);
    }
}
