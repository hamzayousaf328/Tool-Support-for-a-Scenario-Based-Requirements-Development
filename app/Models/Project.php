<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_name',
        'functional_requirement',
        'non_functional_requirement',
        'concept',
        'stack_holder_1',
        'stack_holder_2',
        'stack_holder_3'
    ];
}
