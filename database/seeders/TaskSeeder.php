<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TeskSeeder extends Seeder
{
    public function run(): void
    {
        Task::create([
            'title' => 'Minha tesk de exemplo',
            'description' => 'minha descrição',
            'due_date' => '2022-01-01',
            'user_id' => 1,
            'Category_id' => 1
        ]);
    }
}
