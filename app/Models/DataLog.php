<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    use HasFactory;

    protected $fillable = ['data_id','date','property','previous','new'];

    public function data()
    {
       return $this->belongsTo(Data::class, 'data_id');
    }
}

