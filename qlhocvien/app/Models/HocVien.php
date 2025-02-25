<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HocVien extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'hoc_viens';

    // Các trường có thể gán giá trị hàng loạt
    protected $fillable = [
        'ho_ten',
        'email',
        'so_dien_thoai',
        'dia_chi',
        'ngay_sinh',
    ];
}
