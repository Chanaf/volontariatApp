<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organisation;


class Activite extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'libelle',
        'date_debut',
        'date_fin',
        'date_cloture',
        'nbre_volontaire',
        'organisation_id',
    ];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    /**
     * The users that belong to the activite.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'participers');
    }
}
