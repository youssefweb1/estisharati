<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('advisor_id')->constrained('advisors')->onDelete('cascade');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone_number');
            $table->enum('consultation_time', ['9 am - 11 am', '11 am - 1 pm', '1 pm - 3 pm', '3 pm - 5 pm', '5 pm - 7 pm', '7 pm - 9 pm']);
            $table->enum('status', ['pending', 'confirmed', 'canceled']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
