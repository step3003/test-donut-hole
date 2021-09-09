<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'first_name',
        'last_name',
        'patronymic',
        'gender',
        'salary'
    ];

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
