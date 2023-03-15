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
        Schema::create('travels', function (Blueprint $table) {
	        $table->id();
	        $table->foreignId('customer_id')->constrained('customers');
	        $table->foreignId('region_id')->constrained('regions');
	        $table->dateTime('start_date');
	        $table->double('duration');
	        $table->double('distance');
	        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
