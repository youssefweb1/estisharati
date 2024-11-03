<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvisorsTable extends Migration
{
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('specialization');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advisors');
    }
}
