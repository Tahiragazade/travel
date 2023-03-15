<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
	        $table->id();
	        $table->string('name');
	        $table->string('surname');
	        $table->enum('gender', ['male', 'female']);
	        $table->string('phone');
	        $table->date('dob');
	        $table->foreignId('car_id')->nullable()->constrained('cars');
	        $table->integer('car_year')->nullable();
	        $table->foreignId('car_color_id')->nullable()->constrained('car_colors');
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
