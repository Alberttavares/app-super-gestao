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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
			$table->string('unidade', 5); //armazena a sigla da nossa unidade, cm, mm e etc
			$table->string('descricao', 30); 
            $table->timestamps();
        });

		//agora precisamos relacionar com a tabela produtos e depois com a tabela produto_detalhes

		Schema::table('produtos', function(Blueprint $table){
			$table->unsignedBigInteger('unidade_id');
			$table->foreign('unidade_id')->references('id')->on('unidades');
		});

		Schema::table('produto_detalhes', function(Blueprint $table){
			$table->unsignedBigInteger('unidade_id');
			$table->foreign('unidade_id')->references('id')->on('unidades');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
		Schema::table('produto_detalhes', function(Blueprint $table){

			//temos que remover a fk e depois a coluna unidade_id 
			$table->dropForeign('produto_detalhes_unidade_id_foreign'); //laravel por padrão passsa a propria tabela_e em seguida a coluna_foreign
			$table->dropColumn('unidade_id');
			
		});


		Schema::table('produtos', function(Blueprint $table){

			//temos que remover a fk e depois a coluna unidade_id 
			$table->dropForeign('produtos_unidade_id_foreign'); //laravel por padrão passsa a propria tabela_e em seguida a coluna_foreign
			$table->dropColumn('unidade_id');
			
		});


        Schema::dropIfExists('unidades');
    }
};
