<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $primaryKey ='roomtypeid';
    protected $fillable=['roomtypeid','roomtypename'];
}
