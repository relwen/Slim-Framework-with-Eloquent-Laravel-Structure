<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Enseignant extends Model
{

	protected $table = 'enseignants';
	protected $fillable =[
						   	'id',
						   	'matricuel',
						   	'nom',
						   	'prenom',
						   	'sexe',
						   	'type',
						   	'rang',
						   	'code_civilite',
						   	'code_grade',
						   	'tel1',
						   	'tel2',
						   	'tel3',
						   	'email',
						   	'diplome',
						   	'vh_statutaire',
					   ];


					   



	
}