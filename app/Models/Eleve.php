<?php

namespace App\Models;
use App\Models\Club;
use App\Models\Activité;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    public function club(){
        return $this->belongsTo(Club::class);
    }

    protected $fillable = ['nom', 'prenom'];

    // public function activites()
    // {
    //     return $this->belongsToMany(Activité::class, 'activité_eleve')
    //                 ->withTimestamps()
    //                 ->withPivot('inscription_date', 'note');
    // }
}
