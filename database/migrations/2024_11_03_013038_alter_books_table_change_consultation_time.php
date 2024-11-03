<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBooksTableChangeConsultationTime extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->text('consultation_time')->change(); // تغيير إلى TEXT أو زيادة الطول إذا كان VARCHAR
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('consultation_time', 255)->change(); // إعادة الوضع الأصلي
        });
    }
}
