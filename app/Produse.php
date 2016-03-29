<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Produse extends Authenticatable {

    protected $table = 'produse';
    protected $primaryKey = 'id_produs';

}
