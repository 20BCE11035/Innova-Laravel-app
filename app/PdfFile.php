<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfFile extends Model
{
    protected $fillable = ['name', 'uploaded_as', 'user_id'];
}
