<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
	//protected $table = 'fornecedores';
	//isso servirá para um padrão de nomemclatura.

	use SoftDeletes;
	use HasFactory;
	protected $fillable = ['nome', 'site', 'uf', 'email'];
	//O métoddo fillable autoriu o método estático create a utilizar esses parâmetros,
	//para utilizar esses comandos:

	//\App\Models\Fornecedor::create(['nome'=>'Fornecedor ABC', 'site'=>'fornecedorabc.com.br', 'uf'=>'ES', 'email'=>'contato@fornece
	//dorabc.com.br']) 


	
}

