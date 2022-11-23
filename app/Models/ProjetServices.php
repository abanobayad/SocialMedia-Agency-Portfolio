<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetServices extends Model
{

    use HasFactory;
    protected $table = 'proejct_services';

    protected $fillable = [
        'service_id',
        'project_id',
    ];
}
