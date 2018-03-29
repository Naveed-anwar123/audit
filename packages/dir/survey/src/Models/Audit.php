<?php

namespace Survey\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    //
   protected $table = 'audits';
   protected $fillable = ['name','user_id','is_published','is_archieved','checklist_id'];
}
