<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'type_id'];

    public function type()

    {

        return $this->belongsToMany(Type::class);

    }
}
