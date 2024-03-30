<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

		//Se eu quiser executar apenas um deles, basta comentar a outra class aqui abaixo, ou simplesmente usar o comando:
		//php artisan db:seed --class=SiteContatoSeeder  Passando a classe desejada
		
		$this->call(FornecedorSeeder::class);
		$this->call(SiteContatoSeeder::class);
        
    }
}
