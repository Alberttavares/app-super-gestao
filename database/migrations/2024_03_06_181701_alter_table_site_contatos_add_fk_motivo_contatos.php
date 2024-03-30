<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Verifica se a coluna motivo_contatos_id não existe antes de adicioná-la
        if (!Schema::hasColumn('site_contatos', 'motivo_contatos_id')) {
            // Adicionando a coluna motivo_contatos_id
            Schema::table('site_contatos', function (Blueprint $table) {
                $table->unsignedBigInteger('motivo_contatos_id')->nullable();
            });

            // Criando a FK
            Schema::table('site_contatos', function (Blueprint $table) {
                $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            });

            // Atualizando os registros existentes para atribuir valor à nova coluna
            DB::table('site_contatos')->update(['motivo_contatos_id' => 1]); // Assumindo que o motivo padrão é 1
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Removendo a FK e a coluna motivo_conta
	}
}