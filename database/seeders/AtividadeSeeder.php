<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtividadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Atividade::factory()->create([
            'name' => 'Pilates',
        ]);
        \App\Models\Atividade::factory()->create([
            'name' => 'Liberação Miofascial',
        ]);
        \App\Models\Atividade::factory()->create([
            'name' => 'Aikido',
        ]);
        \App\Models\Atividade::factory()->create([
            'name' => 'Reiki',
        ]);
        \App\Models\Atividade::factory()->create([
            'name' => 'Microfisioterapia',
        ]);
    }
}
