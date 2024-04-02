<?php

namespace App\Models\Tools;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Collegamento model user
use App\Models\User;

class Contact extends Model
{
    use HasFactory;

    //Definizione relazione con user
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
    ];
}
