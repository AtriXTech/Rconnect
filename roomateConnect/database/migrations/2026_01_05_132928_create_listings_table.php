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
             $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            $table->string('hostel_name'); // required from step 1
            $table->string('hostel_address')->nullable();
            $table->string('tel')->nullable();
            $table->string('room_type')->nullable();
            $table->string('billing')->nullable();
            $table->decimal('hostel_price', 10, 2)->nullable();
            $table->text('price_breakdown')->nullable();
            $table->integer('number_of_available_rooms')->nullable();
            $table->date('hostel_available_from')->nullable();
            
            $table->json('hostel_amenities')->nullable();
            $table->text('more_hostel_amenities')->nullable();
            $table->text('hostel_rules')->nullable();
            $table->json('media')->nullable();

            $table->string('status')->default('draft');
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
