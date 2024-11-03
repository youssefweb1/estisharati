<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; 

    // علاقة مع نموذج الاستشاري
    public function consultant()
    {
        return $this->belongsTo(Consultant::class, 'consultant_id'); 
    }
    
    // الحقول القابلة للتعبئة
    protected $fillable = [
        'user_id',            // إضافة user_id
        'consultant_id',      // تأكد من تضمين معرف المستشار
        'consultation_time',
        'advisor_id',
        'user_name',          // تعديل الاسم إلى user_name
        'user_email',         // تعديل الاسم إلى user_email
        'user_phone_number',         // تعديل الاسم إلى user_phone
        'consultation_date',
        'status',             // إذا كنت تستخدم status في النموذج
    ];
}
