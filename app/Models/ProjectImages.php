<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    use HasFactory;
    protected $table ='project_images';

    protected $fillable = [
        'url',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
