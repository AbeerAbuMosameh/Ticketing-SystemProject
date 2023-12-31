<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Server extends Model
{
    use HasFactory , SoftDeletes;

    protected $connection = 'mysql';

    protected $fillable = ['domain', 'ip'];

    public function company()
    {
        return $this->hasMany(Company::class);
    }
}
