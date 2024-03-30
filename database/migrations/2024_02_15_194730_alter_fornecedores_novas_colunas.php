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
		Schema::table('fornecedors', function (Blueprint $table) {
			$table->string('uf', 2);
			$table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
		Schema::table('fornecedors', function (Blueprint $table) {
			//Para que eu consiga remover essas colunas vamos utilizar o método down 
			$table->dropColumn(['uf', 'email']); //Eu tembém posso remover as colunas de modo individual, passando apenas uma coluna como parâmetro.
        });
    }
};
