<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemanggilan extends Model
{
    use HasFactory;
    protected $table = 'pemanggilan';

    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
