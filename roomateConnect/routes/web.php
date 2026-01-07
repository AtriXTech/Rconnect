<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomateConnect;
use App\Livewire\AgentOnboarding;
use App\Livewire\Register;
use App\Livewire\StudentOnboarding;
use App\Livewire\CreateListing;
use App\Livewire\ListingDetails;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginProcess'])->name('login.process');
Route::post('/register',[AuthController::class,'registerProcess'])->name('register.process');
Route::get('/register',[AuthController::class,'register'])->name('register');

Route::middleware(['auth'])->group(function(){
Route::get('/listingDetails/{listing}',ListingDetails::class)->name('listingDetails');
Route::get('/studentOnboarding',StudentOnboarding::class)->name('student.onboarding');
Route::get('/agent_onboarding', AgentOnboarding::class)->name('agent.onboarding');
Route::get('/studentOnboardingSuccess',[RoomateConnect::class,'studentOnboardingSuccess'])->name('studentOnboardingSuccess');
Route::get('/agentOnboardingSuccess',[RoomateConnect::class,'agentOnboardingSuccess'])->name('agentOnboardingSuccess');
Route::get('/agentProfile',[ProfileController::class,'agentProfile'])->name('agentProfile');
Route::get('/studentProfile/{user}',[ProfileController::class,'studentProfile'])->name('studentProfile');
Route::get('/discover',[RoomateConnect::class,'discover'])->name('discover');
Route::get('/hostels',[RoomateConnect::class,'hostels'])->name('hostels');
Route::get('/roomies',[RoomateConnect::class,'roomies'])->name('roomies');
Route::get('/list_chat',[ChatController::class,'list'])->name('list');
Route::get('/show_chat',[ChatController::class,'show'])->name('show');
Route::post('start_chat/{user}',[ChatController::class,'startChat'])->name('startChat');
Route::get('/agentDashboard',[RoomateConnect::class,'agentDashboard'])->name('agentDashboard');
Route::get('/agentLeads',[RoomateConnect::class,'agentLeads'])->name('agentLeads');
Route::get('/createListing',CreateListing::class)->name('createListing');
 });