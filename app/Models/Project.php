<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "projects";

    protected $casts = [
        "publication_time"=>"date"
    ];

    protected $fillable = [ 
        "slug",
        "name",
        "image",
        "url",
        "description",
        "publication_time",
    ];
}
