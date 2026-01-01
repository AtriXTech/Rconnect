<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roommate_preferences', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('utility_Sharing')->nullable();
            $table->boolean('shared_Expenses')->nullable();
             $table->string('Expected_Sleeping_Schedule')->nullable();
             $table->string('Expected_Cleanliness_Level')->nullable();
             $table->string('personality')->nullable();
            $table->boolean('smoking_allowed')->nullable();
            $table->boolean('alcohol_Allowed')->nullable();
            $table->boolean('pets_allowed')->nullable();
            $table->json('preferred_vibe')->nullable();
            $table->longText('other_expectation')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roommate_preferences');
    }
};
