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
        Schema::create('roommate_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //step 1
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->string('tel')->nullable();
            $table->string('institution')->nullable();
            // $table->string('gender')->nullable();
            $table->string('level')->nullable();
            $table->string('department')->nullable();

            //step2
            $table->json('intent')->nullable();

            //step3
            $table->json('locationQuery')->nullable();

            //step4
            $table->date('move_in_date')->nullable();
            $table->decimal('min_budget', 12, 2)->nullable();
            $table->decimal('max_budget', 12, 2)->nullable();

            //step5
             $table->boolean('shareUtilities')->nullable();
             $table->boolean('cookTogether')->nullable();
             $table->boolean('Has_Pets')->nullable();
             $table->string('gender')->nullable();
             $table->string('cleanliness_level')->nullable();
             $table->string('mySleepSchedule')->nullable();
             $table->string('social')->nullable();
             $table->string('overnight_guest')->nullable();
             $table->longText('my_other_opinions')->nullable();
             $table->json('my_vibes')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roommate_profiles');
    }
};
