<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class EmploiTps extends Model
{

	protected $table = 'emploi_tps';
	protected $fillable =[
						   	'filiere',
						   	'classe',
						   	'semaine',
						   	'file',
						   	'user_id',
					   ];
	
	
}