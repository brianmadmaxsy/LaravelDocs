<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Command extends Model
{
    use SoftDeletes;
    protected $table = "commands";
    protected $fillable = ['command_order', 'command_response', 'is_command'];
    protected $dates = ['deleted_at'];
}
