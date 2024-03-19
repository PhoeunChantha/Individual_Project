<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CustomerType extends Model
{
    use HasFactory;
    protected $primaryKey = 'customertypeid';
    protected $fillable = [
        'customertypeid',
        'customertypename'
    ];
}
