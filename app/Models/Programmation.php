<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Programmation extends Model
{

	protected $table = 'programmation_views';
	protected $guarded = ['*'];
	

		// protected $fillable =[
		// 				   	'id',
		// 				   	'matricule_enseignant',
		// 				   	'code_annee',
		// 				   	'code_matiere',
		// 				   	'flag_status',
		// 				   	'nom',
		// 				   	'prenom',
		// 				   	'sexe',
		// 				   	'type',
		// 				   	'rang',
		// 				   	'email',
		// 			   ];
	

	
}