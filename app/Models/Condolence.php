<?php

namespace App\Models;

use Database\Factories\CondolenceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'email', 'message', 'is_approved'])]
class Condolence extends Model
{
    /** @use HasFactory<CondolenceFactory> */
    use HasFactory;
}
