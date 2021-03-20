<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Board;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Board::class, 15)->create();
    }
}
