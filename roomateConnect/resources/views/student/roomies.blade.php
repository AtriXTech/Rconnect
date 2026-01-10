<x-generalLayout>
    <nav class="sticky top-0 z-50 w-full bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur-sm border-b border-border-light dark:border-border-dark">
  <div class="relative flex items-center p-4 h-16">

     <!-- Left: Back Button -->
    <div class="flex items-center">
     <a href="{{route('discover')}}">
         <button class="rounded-full p-2 hover:bg-primary/10 transition-colors group">
        <span
          class="material-symbols-outlined text-text-main dark:text-white group-hover:text-primary transition-colors"
          style="font-size: 24px;"
        >
          arrow_back
        </span>
      </button>
     </a>
    </div>

    <!-- Center: Title -->
    <h1 class="absolute left-1/2 -translate-x-1/2 text-lg font-bold tracking-tight text-text-main dark:text-white">
      Roomies
    </h1>

    <!-- Right: Spacer (optional, keeps balance if you add icons later) -->
    <div class="ml-auto w-10"></div>

  </div>
</nav>
<div class='md:mx-40 md:mt-10 mt-5'>

    <div class="flex gap-2 px-4 pb-3 overflow-x-auto hide-scrollbar snap-x">
<button class="flex shrink-0 items-center justify-center gap-x-1.5 rounded-full border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark px-4 py-2 shadow-sm snap-start">
<span class="material-symbols-outlined text-[18px] text-primary">tune</span>
<span class="text-sm font-medium">Filters</span>
</button>
<div class="w-[1px] h-8 bg-gray-200 dark:bg-gray-700 shrink-0 mx-1 self-center"></div>
<button class="flex shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9f1f0] dark:bg-[#1e2b2a] px-4 py-2 snap-start">
<span class="text-text-main-light dark:text-text-main-dark text-sm font-medium">Location</span>
<span class="material-symbols-outlined text-[16px]">expand_more</span>
</button>
<button class="flex shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9f1f0] dark:bg-[#1e2b2a] px-4 py-2 snap-start">
<span class="text-text-main-light dark:text-text-main-dark text-sm font-medium">Budget</span>
<span class="material-symbols-outlined text-[16px]">expand_more</span>
</button>
<button class="flex shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9f1f0] dark:bg-[#1e2b2a] px-4 py-2 snap-start">
<span class="text-text-main-light dark:text-text-main-dark text-sm font-medium">Room Type</span>
<span class="material-symbols-outlined text-[16px]">expand_more</span>
</button>
</div>

    <!-- Main Content Feed -->
<main class="flex-1 flex flex-col gap-4 p-4 pb-24 overflow-y-auto no-scrollbar">
<!-- Card 1: Featured/Detailed -->
@foreach ($students as $student)
    {{-- {{ dd($students) }} --}}

<article class="flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-soft overflow-hidden group/card relative transition-transform hover:scale-[1.01] duration-300 border border-transparent dark:border-gray-800">
<!-- Save Button Absolute -->
<button class="absolute top-3 right-3 z-10 p-2 rounded-full bg-white/80 dark:bg-black/40 backdrop-blur-sm text-gray-400 hover:text-red-500 hover:bg-white transition-all shadow-sm">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
<div class="p-4 flex flex-col gap-4">
<!-- Profile Header -->
<div class="flex items-center gap-3">
<div class="relative">
<img alt="Sarah's Profile" class="w-14 h-14 rounded-full object-cover border-2 border-white dark:border-gray-700 shadow-sm" data-alt="Portrait of a smiling young woman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAa6VYSMQQV5pMaxVhbfrKX2YYDlLeUyyztWWJWyjJVj2GmK54mx6OGvN80s3uieVz9mymKoutrs7RSSIFeXAi3cOPEeNGYJoY9hI9qK7p-izqR4fnQlqF7_-qjFzYaZ2VVdPko7ms4ejqND7zcMI7B9ne9tFLqNYakT1wjVew7dP08b0b72mjsPTWC9eEBrnCzvEg4PbgDBF_ftkh2doGxHi1KzNOFqF4IYpp5UrO3Zg1nIj7DBPmlyv_cVDKmBHOpBVSaDkl1BIo2"/>
<div class="absolute -bottom-1 -right-1 bg-white dark:bg-gray-800 rounded-full p-[2px]">
<span class="flex items-center justify-center w-5 h-5 bg-pink-100 dark:bg-pink-900 text-pink-600 dark:text-pink-300 rounded-full text-[10px] font-bold">
<span class="material-symbols-outlined text-[12px]">female</span>
</span>
</div>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-1">
<h3 class="text-lg font-bold text-gray-900 dark:text-white truncate">{{$student->name}}</h3>
<span class="material-symbols-outlined text-primary text-[16px] filled" title="Verified Student">verified</span>
</div>
<p class="text-sm text-gray-500 dark:text-gray-400 truncate">{{$student->institution}} • {{$student->level}}L • {{$student->department}}</p>
</div>
</div>
<!-- Details Grid -->
<div class="grid grid-cols-2 gap-3 text-sm">
@foreach (collect($student->locationQuery)->take(1) as $location)
    <div class="flex items-start gap-2 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary mt-0.5 text-[18px]">location_on</span>
<span class="leading-tight">{{$location}} <br/><span class="text-xs text-gray-400">Preferred</span></span>
</div>
@endforeach
<div class="flex items-start gap-2 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary mt-0.5 text-[18px]">account_balance_wallet</span>
<span class="leading-tight font-bold text-gray-900 dark:text-white">₦{{$student->min_budget}} - ₦{{$student->max_budget}} <span class="text-xs font-normal text-gray-400">/ yr</span></span>
</div>
</div>
@php
    $about = [];

    // Boolean-based statements
    $about[] = $student->shareUtilities == 1
        ? "I’m open to sharing my utilities and Cooking utensils  "
        : "I prefer not to share my utilities & Cooking utensils ";

    $about[] = $student->cookTogether == 1
        ? "I enjoy cooking together"
        : "I prefer cooking separately";

    $about[] = $student->Has_Pets == 1
        ? "I’m comfortable living with pets"
        : "I prefer a pet-free space";

    // Sleep schedule
    $sleepMap = [
        'Early Bird' => "I’m an early riser",
        'Night Owl' => "I’m more active at night",
        'Flexible'  => "I have a flexible sleep schedule",
    ];
    $about[] = $sleepMap[$student->mySleepSchedule] ?? null;

    // Cleanliness
    $cleanMap = [
        'Relaxed' => "I’m relaxed about cleanliness",
        'Average' => "I keep things reasonably tidy",
        'Very Clean' => "I like my space very clean",
    ];
    $about[] = $cleanMap[$student->cleanliness_level] ?? null;

    // Social personality
    $socialMap = [
        'Introvert' => "I’m more of an introvert",
        'Ambivert' => "I’m an ambivert that is i'm not a introvert nor an extrovert lol ",
        'Extrovert' => "I’m very outgoing",
    ];
    $about[] = $socialMap[$student->social] ?? null;

    // Overnight guests
    $guestMap = [
        'Never' => "I don’t host overnight guests",
        'Weekends' => "I prefer to  host guests occasionally on weekends",
        'Anytime' => "I’m okay with overnight guests anytime",
    ];
    $about[] = $guestMap[$student->overnight_guest] ?? null;

    // Gender (optional add)
    $about[] = "I’m a {$student->gender}";

    $about[]="I'm thinking of moving into my new space on {$student->move_in_date->format('F j,Y')}"
@endphp

<p class="text-sm leading-relaxed text-gray-600 dark:text-gray-300">
    {{ implode('. ', array_filter($about)) }}.
</p>

<!-- Lifestyle Chips -->
<div class="flex flex-wrap gap-2">
@foreach ($student->my_vibes as $my_vibe)
    <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
                           {{$my_vibe}} 
                        </span>
@endforeach
</div>
<div>
<!-- Action Button -->
<a href="{{ route('studentProfile', $student->user_id) }}">
<button class="mt-1 w-full flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-[#0d3632] font-bold py-3 px-4 rounded-xl transition-all active:scale-[0.98]">
<span class="material-symbols-outlined text-[20px]">chat_bubble</span>
<span>View Profile</span>
</button>
</a>

<form  method="POST" action="{{ route('startChat',auth()->user()->id) }}">
    @csrf
  <button class="mt-1 w-full flex items-center justify-center gap-2 bg-surface-light dark:bg-surface-dark border-2 border-primary/20 hover:border-primary text-primary-content dark:text-white font-bold py-3 px-4 rounded-xl transition-all">
<span class="material-symbols-outlined text-[20px]">chat_bubble_outline</span>
<span>Message</span>
</button>
</form>
</div>

</div>
</article>
@endforeach
<!-- Card 3: Skeleton Loader State -->
<article class="flex flex-col bg-surface-light dark:bg-surface-dark rounded-2xl shadow-sm border border-transparent dark:border-gray-800 p-4 gap-4 animate-pulse">
<div class="flex items-center gap-3">
<div class="w-14 h-14 rounded-full bg-gray-200 dark:bg-gray-700"></div>
<div class="flex-1 space-y-2">
<div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-1/3"></div>
<div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-2/3"></div>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="h-8 bg-gray-200 dark:bg-gray-700 rounded"></div>
<div class="h-8 bg-gray-200 dark:bg-gray-700 rounded"></div>
</div>
<div class="flex gap-2">
<div class="h-6 w-16 bg-gray-200 dark:bg-gray-700 rounded-lg"></div>
<div class="h-6 w-20 bg-gray-200 dark:bg-gray-700 rounded-lg"></div>
</div>
<div class="h-12 bg-gray-200 dark:bg-gray-700 rounded-xl mt-1"></div>
</article>
<!-- "End of List" / Empty State Hint -->
<div class="flex flex-col items-center justify-center py-8 text-center opacity-60">
<div class="w-16 h-16 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-3">
<span class="material-symbols-outlined text-3xl text-gray-400">check_circle</span>
</div>
<p class="text-sm font-medium text-gray-500">You're all caught up!</p>
</div>
</main>
</div>
{{-- {{dd($students)}} --}}
<x-discoverDownNav />
</x-generalLayout>