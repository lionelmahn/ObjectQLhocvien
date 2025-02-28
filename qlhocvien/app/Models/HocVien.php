<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HocVien extends Model
{
    use HasFactory;

    
    protected $table = 'hoc_viens';

    
    protected $fillable = [
        'ho_ten',
        'email',
        'so_dien_thoai',
        'dia_chi',
        'ngay_sinh',
    ];
}
