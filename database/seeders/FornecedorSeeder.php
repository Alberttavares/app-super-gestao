<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		Fornecedor::factory()->count(20)->create();
		/*
		//Aqui é um dos métdos para criação, instânciando um objeto
        
		$fornecedor = new Fornecedor();
		$fornecedor->nome = 'Fornecedor 100';
		$fornecedor->site = 'Fornecedo100.com.br';
		$fornecedor->uf = 'CE';
		$fornecedor->email = 'contato@fornecedor100.com.br';
		$fornecedor->save();
		
		

		//aqui é o metodo create, porém devemos ficar atentos ao protected fillable do model fornecedor.
		Fornecedor::create([

			'nome' => 'Fornecedor 200',
			'site' => 'Fornecedo200.com.br',
			'uf' => 'SP',
			'email' => 'contato@fornecedor200.com.br'

		]);

		//insert convencional, esse método não passa o created_at nem o updated_at. 
		DB::table('Fornecedors')->insert([

			'nome' => 'Fornecedor 300',
			'site' => 'Fornecedo300.com.br',
			'uf' => 'RO',
			'email' => 'contato@fornecedor300.com.br'

		]);
		*/

    }
}
