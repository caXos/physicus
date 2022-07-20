<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Jorge Gomez',
            'email' => 'dom_caxos@hotmail.com',
            'password' => bcrypt('1De$ejonoturno'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Juliana',
            'email' => 'juliana@physicus.fisio.br',
            'password' => bcrypt('physicus'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Lysiane',
            'email' => 'lysiane@physicus.fisio.br',
            'password' => bcrypt('physicus'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Priscila',
            'email' => 'priscilas@physicus.fisio.br',
            'password' => bcrypt('physicus'),
        ]);
    }
}
//Lysiane, Priscila e Juliana