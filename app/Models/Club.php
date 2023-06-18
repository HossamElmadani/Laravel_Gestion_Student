<?php

namespace App\Models;
use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function eleves() {
        return $this->hasMany(Eleve::class);
    }

    protected $fillable = ['nom'];

}
