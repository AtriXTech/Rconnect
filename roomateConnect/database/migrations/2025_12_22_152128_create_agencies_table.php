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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            // Foreign key to users table
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('phone_country')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('photo')->nullable();

            // Step 2: Agent type
            $table->string('agent_type')->nullable(); // hostel_agent, independent_agent, both

            // Step 3: Operating locations
            $table->json('locations')->nullable(); // array of locations

            // Step 4: Services
            $table->json('services')->nullable(); // array of selected services

            // Step 5: Commission info
            $table->string('commission_type')->nullable(); // percentage or fixed
            $table->decimal('commission_value', 10, 2)->nullable();
            $table->decimal('min_budget', 12, 2)->nullable();
            $table->decimal('max_budget', 12, 2)->nullable();

            // Step 6: Verification docs
            $table->string('government_id_front')->nullable();
            $table->string('government_id_back')->nullable();
            $table->string('business_certificate')->nullable();

            // Step 7: Optional reference / extra
            $table->string('agent_reference')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
