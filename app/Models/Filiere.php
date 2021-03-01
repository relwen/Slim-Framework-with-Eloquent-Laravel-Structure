	<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Filiere extends Model
{

	public $table = 'filieres';
    protected $fillable =[
					   	'id',
					   	'code_filiere',
					   	'libelle_filiere',
					   	'sigle_filiere',
					   ];




	
	
}