<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimentos extends Model
{
    protected $table = 'tbl_alimentos';

    protected $primaryKey = 'alimento_id';

    protected $fillable = ["nomeAlimento","tipoALimento","quantidade"];

    protected $hidden = ["created_id","uptade_at"];
}
