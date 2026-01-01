<x-generalLayout>
 <x-StudentNavLayout />
 {{-- {{dd($user)}} --}}
    <div class="md:mx-40 flex-1 flex flex-col pb-24 mt-[140px]">
<div class=" rounded-2xl flex flex-col items-center py-6 bg-surface-light dark:bg-surface-dark transition-colors mb-2">
<div class="relative mb-4 group cursor-pointer">
<div class="bg-center bg-no-repeat bg-cover rounded-full h-28 w-28 border-4 border-white dark:border-background-dark shadow-md" data-alt="Portrait of a smiling young student with glasses" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBeF4keW0LxXbAylWsBiaX6T7EqOvgvzuStSY_4J0XWGzbO5OZnbRf09Sc7wjH8hl3dp-ciqLIWIBXIbCmfiZpfijkiVdOeiBJVzwRGrjun4Neb-ntTo6XIYfM3sN4BRdyObJ6YV1hBUZkaINWQGGIr0RZOkjGxrLDlT5A8B8DTYf3kh4MeWdwOGq5DgL_oDPg7YCNnqmkh9m5WE4e4WP5y4KlILIUk3bk3DXVNrlq9RlciEQguoiwVKV_Cz_lep1TNdNa-3dui92Do");'>
</div>
<div class="absolute bottom-0 right-0 bg-primary rounded-full p-1.5 border-2 border-white dark:border-background-dark text-white shadow-sm">
<span class="material-symbols-outlined text-[18px] font-bold block">edit</span>
</div>
</div>
<div class="flex flex-col items-center text-center space-y-1">
<h1 class="text-2xl font-bold text-text-main dark:text-white">{{$user->roommate_profile->name}}</h1>
<p class="text-text-muted dark:text-gray-400 text-sm font-medium">{{$user->roommate_profile->department}} • {{$user->roommate_profile->level}} Level</p>
</div>
<button class="mt-6 flex w-full max-w-[200px] items-center justify-center gap-2 rounded-xl h-10 px-6 bg-primary hover:bg-primary/90 text-white text-sm font-bold tracking-wide transition-all shadow-sm active:scale-95">
<span class="material-symbols-outlined text-[18px]">edit_square</span>
<span>Edit Profile</span>
</button>
</div>
<div class="px-4 mt-4">
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-5 shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-bold text-text-main dark:text-white">Personal Info</h3>
<button class="text-primary text-sm font-bold">Update</button>
</div>

<div class='flex flex-col md:flex-row md:gap-10'>
    <div class="my-4 md:w-[500px]">
<p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">University</p>
<p class="p-3 bg-background-light dark:bg-background-dark rounded-xl text-text-main dark:text-white font-semibold pl-1">{{$user->roommate_profile->institution}}</p>
</div>
<div class=" my-4 md:w-[500px]">
<p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">Department</p>
<p class="p-3 bg-background-light dark:bg-background-dark rounded-xl text-text-main dark:text-white font-semibold pl-1">{{$user->roommate_profile->department}}</p>
</div>
</div>
<div class="my-6">
<p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">Monthly Budget</p>
<div class="flex items-center gap-3">
<div class="border-1 bg-background-light py-3 px-3 rounded-xl md:w-[500px] bg-background-light">₦{{$user->roommate_profile->min_budget}}</div>
<span class="text-text-muted dark:text-gray-500 font-medium">-</span>
<div class="border-1 bg-background-light  py-3 px-3 rounded-xl md:w-[500px]  ">₦{{$user->roommate_profile->max_budget}}</div>
</div>
</div>

<div class='my-6'>
    <p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">Preferred Location</p>
    @foreach ($user->roommate_profile->locationQuery ?? [] as $location)
    <div class="flex items-start gap-2 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-primary mt-0.5 text-[18px]">location_on</span>
<span class="leading-tight">{{$location}} <br/><span class="text-xs text-gray-400">Preferred</span></span>
</div>
@endforeach
</div>
<div class='my-6'>
    <p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">intents</p>
    @foreach ($user->roommate_profile->intent ?? [] as $item)
    <div class="flex items-start gap-2 text-gray-600 dark:text-gray-300">
<span class="leading-tight">• {{$item}} </span>
</div>
@endforeach
</div>

<div class='my-6'>
<p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">Interests</p>    
<div class="flex flex-wrap gap-2">
    @foreach ($user->roommate_profile->my_vibes ?? [] as $vibe)
    <span class="inline-flex items-center px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium border border-primary/20">
{{$vibe}}                                    
</span>
@endforeach
</div>
</div>

</div>
</div>
{{-- {{dd($user->Preference)}} --}}
<div class="px-4 mt-4">
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-5 shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-bold text-text-main dark:text-white">Glimpse abt me </h3>
<button class="text-primary text-sm font-bold">Edit</button>
</div>
@php
    $about = [];

    // Boolean-based statements
    $about[] = $user->roommate_profile->shareUtilities == 1
        ? "I’m open to sharing my utilities and Cooking utensils  "
        : "I prefer not to share my utilities & Cooking utensils ";

    $about[] = $user->roommate_profile->cookTogether == 1
        ? "I enjoy cooking together"
        : "I prefer cooking separately";

    $about[] = $user->roommate_profile->Has_Pets == 1
        ? "I’m comfortable living with pets"
        : "I prefer a pet-free space";

    // Sleep schedule
    $sleepMap = [
        'Early Bird' => "I’m an early riser",
        'Night Owl' => "I’m more active at night",
        'Flexible'  => "I have a flexible sleep schedule",
    ];
    $about[] = $sleepMap[$user->roommate_profile->mySleepSchedule] ?? null;

    // Cleanliness
    $cleanMap = [
        'Relaxed' => "I’m relaxed about cleanliness",
        'Average' => "I keep things reasonably tidy",
        'Very Clean' => "I like my space very clean",
    ];
    $about[] = $cleanMap[$user->roommate_profile->cleanliness_level] ?? null;

    // Social personality
    $socialMap = [
        'Introvert' => "I’m more of an introvert",
        'Ambivert' => "I’m an ambivert that is i'm not a introvert nor an extrovert lol ",
        'Extrovert' => "I’m very outgoing",
    ];
    $about[] = $socialMap[$user->roommate_profile->social] ?? null;

    // Overnight guests
    $guestMap = [
        'Never' => "I don’t host overnight guests",
        'Weekends' => "I prefer to  host guests occasionally on weekends",
        'Anytime' => "I’m okay with overnight guests anytime",
    ];
    $about[] = $guestMap[$user->roommate_profile->overnight_guest] ?? null;

    // Gender (optional add)
    $about[] = "I’m a {$user->roommate_profile->gender}";

    $about[]="I'm thinking of moving into my new space on {$user->roommate_profile->move_in_date->format('F j,Y')}"
@endphp

<p class="text-sm leading-relaxed text-gray-600 dark:text-gray-300">
    {{ implode('. ', array_filter($about)) }}.
</p>

</div>
</div>

<div class="px-4 mt-4">
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-5 shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-bold text-text-main dark:text-white">Preferences</h3>
<button class="text-primary text-sm font-bold">Edit</button>
</div>
@php
    $pref = $user->preference;
@endphp

<p class="text-sm text-gray-600 leading-relaxed">
    <strong>This is what I prefer my ideal roommate to look like:</strong>

    {{-- Utility & expenses --}}
    @if($pref->utility_Sharing == 1 && $pref->shared_Expenses == 1)
        Someone who is comfortable sharing utilities and splitting expenses fairly.
    @elseif($pref->utility_Sharing == 1)
        Someone open to sharing utilities.
    @elseif($pref->shared_Expenses == 1)
        Someone comfortable with shared expenses.
    @else
        Someone who prefers to handle utilities and expenses separately.
    @endif

    {{-- Sleeping schedule --}}
    @if($pref->Expected_Sleeping_Schedule)
        They should ideally be a <strong>{{ str_replace('_', ' ', $pref->Expected_Sleeping_Schedule) }}</strong>.
    @endif

    {{-- Cleanliness --}}
    @if($pref->Expected_Cleanliness_Level)
        Cleanliness matters to me, so I prefer someone who is <strong>{{ $pref->Expected_Cleanliness_Level }}</strong>.
    @endif

    {{-- Personality --}}
    @if($pref->personality === 'Social')
        I’m looking for a social and friendly roommate.
    @else
        I’d prefer a quiet and calm roommate.
    @endif

    {{-- Lifestyle allowances --}}
    @php
        $allowances = [];
        if($pref->smoking_allowed == 1) $allowances[] = 'smoking';
        if($pref->alcohol_Allowed == 1) $allowances[] = 'alcohol';
        if($pref->pets_allowed == 1) $allowances[] = 'pets';
    @endphp

    @if(count($allowances))
        I’m okay with {{ implode(', ', $allowances) }} in the apartment.
    @else
        I prefer a lifestyle without smoking, alcohol, or pets.
    @endif

    {{-- Preferred vibes --}}
   @php
    $vibes = $pref->preferred_vibe;
@endphp

@if(!empty($vibes))
    Ideally, my roommate vibes with things like
    <strong>{{ implode(', ', $vibes) }}</strong>.
@endif



    {{-- Other expectations --}}
    @if($pref->other_expectation)
        Lastly, {{ $pref->other_expectation }}.
    @endif
</p>

<div class="space-y-4">
<div>
<p class="text-xs font-bold text-text-muted dark:text-gray-500 uppercase tracking-wider mb-2">Interests</p>
<div class="flex flex-wrap gap-2">
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-background-light dark:bg-background-dark text-primary text-sm border border-transparent hover:bg-primary/5 transition-colors cursor-pointer">Gaming</span>
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-background-light dark:bg-background-dark text-primary text-sm border border-transparent hover:bg-primary/5 transition-colors cursor-pointer">Cooking</span>
<span class="inline-flex items-center px-3 py-1 rounded-lg bg-background-light dark:bg-background-dark text-primary text-sm border border-transparent hover:bg-primary/5 transition-colors cursor-pointer">Hiking</span>
</div>
</div>
</div>
</div>
</div>

<div class="px-4 mt-4 mb-4">
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-5 shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-bold text-text-main dark:text-white">My Listings</h3>
<button class="flex items-center justify-center w-8 h-8 bg-primary/10 rounded-full text-primary hover:bg-primary/20 transition-colors">
<span class="material-symbols-outlined text-[20px]">add</span>
</button>
</div>
<div class="flex gap-4 p-3 border border-gray-100 dark:border-gray-800 rounded-xl bg-background-light dark:bg-background-dark items-center hover:border-primary/50 transition-colors cursor-pointer group">
<div class="h-16 w-16 shrink-0 rounded-lg bg-cover bg-center" data-alt="Modern apartment interior with bright lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDQBlKuLYsQyEetmUPASyq6Zyb4riugWi0dRFp8FkIOFbaatJR2EM9JHEk85bdz7zPJcW9TFX6Aff0rkXxQ0SOMuuFRNzEbu0ask_7TpYmeN7Ma5swqqkmGX2vMk1OfRi40guxZRTyy2LWfiAesnSZVKt8j878lLFFNxxZ1fgob6BtsBAaRpx6BVn1p33K-FmLuvXza3YbknVEoigq6vZZTe0O7v9ZRPIXQazT_thol-Z0SxHUBQQOvdswE2SwJvFFl10lhQ6_0DyF_");'>
</div>
<div class="flex-1 min-w-0">
<div class="flex items-center gap-2 mb-1">
<h4 class="font-bold text-text-main dark:text-white truncate">Room in Brooklyn</h4>
<span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 uppercase">Active</span>
</div>
<div class="flex items-center text-text-muted dark:text-gray-400 text-xs gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
<span class="truncate">Williamsburg, NY</span>
</div>
</div>
<div class="text-text-muted dark:text-gray-500 group-hover:text-primary transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</div>
</div>
</div>
</div>
</div>
</x-generalLayout>