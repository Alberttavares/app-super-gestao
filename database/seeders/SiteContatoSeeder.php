<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
		/*
		SiteContato::create([

			'nome' => 'José',
			'telefone' => '(69) 999258478',
			'email' => 'jose@gmail.com',
			'motivo_contato' => 1,
			'mensagem' => 'Olá, qual o modelo de gestão?'

		]);
		*/
		SiteContato::factory()->count(100)->create();
    }
}
