<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nilai_id',
        'kelas',
    ];

    protected $guarded = [
        'id'
    ];

    public function nilai()
    {
        return $this->belongsTo(Nilai::class);
    }
}
