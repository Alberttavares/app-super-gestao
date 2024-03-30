<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
	use HasFactory;
	protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
	/*
	$contatos = SiteContato::where(
		function($query){
			$query->where('nome','jorge')
			->orWhere('nome','ana');
		}
	)->where(
		function($query){ 
			$query->whereIn('motivo_contato',[1,2])
			->orWhereBetween('id',[4,6]); 
		}
	)->get(); 
	*/

	//Essa seria a sintaxe e a identação correta para utilizar no script ao invés do tinker.
	
}
