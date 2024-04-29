<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public $timestamps=false;  
    protected $table = "event_master"; 
    protected $fillable = ['id', 'name', 'description', 'start_date', 'end_date', 'start_time', 'end_time', 'event_type'];
}
