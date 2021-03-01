<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class User extends Model
{

	public $table = 'users';
    protected $fillable =[
    					'id',
					   	'username',
					   	'name',
					   	'forname',
					   	'password',
					   	'email',
					   	'code_fonct',
					   	'supprimer',
					   	'owner',
					   ];



	
	
}


?>