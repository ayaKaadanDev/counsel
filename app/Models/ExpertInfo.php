<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'expertness',
        'phone_num',
        'address',
        'counsel_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function counsel()
    {
        return $this->belongsTo(counsel::class);
    }

    public function date()
    {
        return $this->hasMany(Date::class);
    }
}
