<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeteksiPneumonia extends Model
{
    protected $table   = 'sskrining';
    protected $guarded = ['id'];
}
