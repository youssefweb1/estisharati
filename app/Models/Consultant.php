<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $table = 'advisors'; 
    public function books()
    {
        return $this->hasMany(Book::class, 'consultant_id'); // تأكد من أن 'consultant_id' هو اسم العمود في جدول الكتب
    }

}

