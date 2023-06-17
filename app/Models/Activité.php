<?php

namespace App\Models;
use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activité extends Model
{
    use HasFactory;

    // public function eleves()
    // {
    //     return $this->belongsToMany(Eleve::class, 'activité_eleve')
    //                 ->withTimestamps()
    //                 ->withPivot('inscription_date', 'note');
    // }
}
