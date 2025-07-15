<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(5)
            ->has(
                Category::factory()
                    ->count(3)
                    ->has(
                        Task::factory()->count(5)
                    )
            )
            ->create();
    }
}
