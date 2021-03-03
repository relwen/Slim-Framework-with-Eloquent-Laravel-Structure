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
				   	'nom',
				   	'prenom',
				   	'matricule',
				   	'sexe',
				   	'tel1',
				   	'email',
				   ];


				   



	
}