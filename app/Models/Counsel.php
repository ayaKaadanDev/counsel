<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsel extends Model
{
    use HasFactory;

    protected $fillable = [
        'scope',
    ];

    public function expertinfo()
    {
        return $this->hasMany(ExpertInfo::class);
    }

}
