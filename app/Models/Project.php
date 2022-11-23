<?php

namespace App\Models;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    public function images()
    {
        return $this->hasMany(ProjectImages::class, 'project_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class , 'proejct_services' ,  'project_id' ,'service_id' );
    }

}
