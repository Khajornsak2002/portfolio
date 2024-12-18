<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // กำหนดชื่อของตารางในฐานข้อมูล (ถ้าชื่อไม่ตรงตาม convention)
    protected $table = 'projects';

    // กำหนดฟิลด์ที่สามารถกรอกข้อมูลได้
    protected $fillable = [
        'name',
        'description',
        // เพิ่มฟิลด์อื่น ๆ ที่คุณต้องการ
    ];
}
