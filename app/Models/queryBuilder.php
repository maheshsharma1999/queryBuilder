<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class queryBuilder extends Model
{
    use HasFactory;
    protected $table = "query_builders";
    protected $primaryKey = "id";
}
