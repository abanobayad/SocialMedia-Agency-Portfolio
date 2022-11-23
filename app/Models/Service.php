<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    public function services()
    {
        return $this->belongsToMany(Project::class , 'project_services' , 'project_id' ,  'service_id'  );
    }
}
