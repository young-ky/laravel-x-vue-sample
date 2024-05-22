<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantedTree extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'tree_id',
        'total',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];

    protected $guarded = [
        'id'
    ];
}
