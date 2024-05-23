<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $table = 'employee_tbl'; 
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'phone',
    ];
}
