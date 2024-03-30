<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filiais', function(Blueprint $table){

			$table->id();
			$table->string('filial', 30);
			$table->timestamps();

		});


		Schema::create('produto_filiais', function(Blueprint $table){

			$table->id();
			$table->unsignedBigInteger('filial_id');
			$table->unsignedBigInteger('produto_id');
			$table->decimal('preco_venda', 8, 2);
			$table->integer('estoque_minimo');
			$table->integer('estoque_maximo');
			$table->timestamps();

			//agora temos que fazer as foreign keys

			$table->foreign('filial_id')->references('id')->on('filiais');
			$table->foreign('produto_id')->references('id')->on('produtos');

		});

		//removendo nas colunas da tabela dos produtos
		Schema::table('produtos', function(Blueprint $table){
			$table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

		// se na anterior eu removi, nessa eu tenho que adicionar, pois o método down
		// implica no processo inverso do método up
		
		Schema::table('produtos', function(Blueprint $table){
			$table->decimal('preco_venda', 8, 2);
			$table->integer('estoque_minimo');
			$table->integer('estoque_maximo');
		});

		Schema::dropIfExists('produto_filiais');
		Schema::dropIfExists('filiais');
    }
};
