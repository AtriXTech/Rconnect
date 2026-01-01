<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RoomateConnect;
use App\Livewire\AgentOnboarding;
use App\Livewire\Register;
use App\Livewire\StudentOnboarding;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;



Route::post('/register',[AuthController::class,'registerProcess'])->name('register.process');
Route::post('/login',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/studentOnboarding',StudentOnboarding::class)->name('student.onboarding');
Route::get('/agent_onboarding', AgentOnboarding::class)->name('agent.onboarding');
Route::get('/studentOnboardingSuccess',[RoomateConnect::class,'studentOnboardingSuccess'])->name('studentOnboardingSuccess');
Route::get('/agentOnboardingSuccess',[RoomateConnect::class,'agentOnboardingSuccess'])->name('agentOnboardingSuccess');
Route::get('/agentProfile',[RoomateConnect::class,'agentProfile'])->name('agentProfile');
Route::get('/studentProfile/{user}',[RoomateConnect::class,'studentProfile'])->name('studentProfile');
Route::get('/discover',[RoomateConnect::class,'discover'])->name('discover');
Route::get('/hostels',[RoomateConnect::class,'hostels'])->name('hostels');
Route::get('/roomies',[RoomateConnect::class,'roomies'])->name('roomies');
Route::get('/list_chat',[ChatController::class,'list'])->name('list');
Route::get('/show_chat',[ChatController::class,'show'])->name('show');
Route::post('start_chat/{user}',[ChatController::class,'startChat'])->name('startChat');
Route::get('/agentDashboard',[RoomateConnect::class,'agentDashboard'])->name('agentDashboard');
Route::get('/agentLeads',[RoomateConnect::class,'agentLeads'])->name('agentLeads');
// Living Habits
 