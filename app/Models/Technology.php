<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "technologies";

    protected $fillable = ['language', 'image'];

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
