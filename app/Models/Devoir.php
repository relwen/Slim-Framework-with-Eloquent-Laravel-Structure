<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Devoir extends Model
{

	protected $table = 'devoirs';
	protected $fillable =[
						   	'filiere',
						   	'classe',
						   	'semaine',
						   	'file',
						   	'user_id',
						   	'flag',
					   ];
	
	
}