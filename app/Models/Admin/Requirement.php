<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public $table = 'requirement_infos';

    public $fillable = [
        'type',
        'identity',
        'name',
        'phone',
        'email',
        'address',
        'message'
    ];

    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'identity' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'type' => 'nullable',
        'identity' => 'nullable',
        'name' => 'nullable',
        'phone' => 'nullable',
        'email' => 'nullable',
        'address' => 'nullable',
        'message' => 'nullable'
    ];

    
}
