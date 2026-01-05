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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('draft');
            $table->string('hostel_name');
            $table->string('hostel_address');
            $table->string('room_type');
            $table->string('billing');
           $table->decimal('hostel_price', 10, 2);
            $table->string('price_breakdown')->nullable();
            $table->integer('number_of_available_rooms');
            $table->date('hostel_available_from');
             $table->json('hostel_amenities')->nullable();
             $table->longText('more_hostel_amenities')->nullable();
             $table->text('hostel_rules')->nullable();
             $table->json('media');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
