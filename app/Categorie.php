<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Categorie extends Authenticatable {

    protected $table = 'categori';
    protected $primaryKey = 'id_categorie';

}
