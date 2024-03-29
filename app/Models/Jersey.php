<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    use HasFactory;
    
    protected $fillable = ['nomeJersey', 'timeJersey', 'temporadaJersey', 'tamanhoJersey', 'precoJersey', 'imagemJersey'];
    
}
