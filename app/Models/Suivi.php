<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Suivi extends Model
{

	protected $table = 'suivis';
	// protected $guarded = ['*'];
	

	protected $fillable =[
						   	'id',
						   	'description',
						   	'code_cours',
						   	'heure_ct',
						   	'heure_td',
						   	'heure_tp',
						   	'date_cours',
						   	'statut',
						   	'chemin_fichier',
						   	'supprimer',
						   	'agent',
					   ];



	

	
}