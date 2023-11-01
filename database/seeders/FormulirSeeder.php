<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormulirSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Formulir::factory(40)->create();

        // \App\Models\Formulir::factory()->create([
        //     'name' => 'Test Formulir',
        //     'email' => 'test@example.com',
        // ]);
    }
}
