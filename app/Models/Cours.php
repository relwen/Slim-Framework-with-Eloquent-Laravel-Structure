<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Cours extends Model
{

	protected $table = 'cours';
	protected $fillable =[
						   	'id',
						   	'matricule_enseignant',
						   	'code_annee',
						   	'code_matiere',
						   	'flag_status',
						   	'heure_tp',
						   	'supprimer',
						   	'agent',
					   ];
	






	
}