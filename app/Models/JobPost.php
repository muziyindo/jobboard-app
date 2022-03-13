<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $table = "job_posts"; //specifying the table connected to this model
    protected $primaryKey = "id"; //specifying the primary on the table
    //protected $fillable = ['title','description','recruiter_id','closing_date'];
    //protected $hidden = ['id']; //to hide value passed in json api
    //protected $visible = ['id']; //to specify values to be visible in json api
}

