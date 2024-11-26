<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'deadline', 'status', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function task(){
        return $this->hasMany(Task::class);
    }

    const STATUS_EN_COURS = 'en cours';
    const STATUS_TERMINE = 'terminé';

    public function scopeEnCours($query) {
        return $query->where('status', self::STATUS_EN_COURS);
    }

    public function scopeTerminer($query) {
        return $query->where('status', self::STATUS_TERMINE);
    }

}
