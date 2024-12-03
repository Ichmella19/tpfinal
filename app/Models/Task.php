<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'priority', 'project_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function assignedTo(){
        return $this->belongsTo(User::class, 'assigned_to');
    }

    const STATUS_NON_COMMENCE = 'non commencé';
    const STATUS_EN_COURS = 'en cours';
    const STATUS_TERMINE = 'terminé';

    public function scopeNonCommence($query) {
        return $query->where('status', self::STATUS_NON_COMMENCE);
    }

    public function scopeEnCours($query) {
        return $query->where('status', self::STATUS_EN_COURS);
    }

    public function scopeTerminer($query) {
        return $query->where('status', self::STATUS_TERMINE);
    }

    const PRIORITE_FAIBLE = 'faible';
    const PRIORITE_MOYENNE = 'moyenne';
    const PRIORITE_FORTE = 'forte';

    public function scopeFaible($query) {
        return $query->where('priority', self::PRIORITE_FAIBLE);
    }

    public function scopeMoyenne($query) {
        return $query->where('priority', self::PRIORITE_MOYENNE);
    }

    public function scopeForte($query) {
        return $query->where('priority', self::PRIORITE_FORTE);
    }

}
