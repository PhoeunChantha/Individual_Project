<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customerid';
    protected $fillable = ['customercode', 'customertypeid', 'customername','sex','dob','phone','passportnumber','country'];

}
