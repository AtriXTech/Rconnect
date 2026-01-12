<x-generalLayout>
    
        <x-StudentNavLayout />

        <main class="pt-[150px]">
            <div class='px-4 grid grid-col md:grid-cols-2 gap-5 md:mx-40 '>

@foreach ($feedItems as $item)
@if($item instanceof \App\Models\roommate_profile && $item->user_id !== Auth::user()->id)
{{-- {{dd($item)}} --}}
<div class="group bg-card-light dark:bg-card-dark rounded-xl shadow-sm dark:shadow-none overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-md transition-all duration-300">
<div class="relative h-52 w-full overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Portrait of a young man with glasses looking thoughtful" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAK7CgYLBUoP6BZ4qOT8Et836p3CCHM3sJx1YiDdd2mJiMigCUQI80MmJ-j3XsMmiJFmPevZeKnPtRUyiiXQsaoBMvL3RpS8xAfhhXT2OjR0seb7pcFz2e0GiL281n-KxUOWBW3MSuspeO_dYSdDg15tAVhpCqxtQv7xNWnv9dSIJhW4RUqkGsKrXRYfK4q6Sy5oYY1Glv2IDtjvNUwCGD6nkZZqmvwTJsIEEfnVjbsbDtDO9lAW8b-lMMlKTtkKI0HrQ0KGQzfw6li');"></div>
<div class="absolute top-3 left-3 flex gap-2">
<span class="bg-white/95 dark:bg-slate-900/95 backdrop-blur px-2.5 py-1 rounded-lg text-xs font-bold text-slate-800 dark:text-slate-200 shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">school</span>
                    Student
                </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex justify-between items-end">
<div class="bg-black/40 backdrop-blur-md px-3 py-1.5 rounded-lg border border-white/10">
<p class="text-white text-xs font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                       @if ($item instanceof \App\Models\roommate_profile && !empty($item->locationQuery))
    @foreach(collect($item->locationQuery)->take(1) as $items)
        <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded text-[10px] font-semibold uppercase tracking-wider">
            {{$items}}
        </span>
    @endforeach
@endif
                    </p>
</div>
</div>
</div>
<div class="p-4 flex flex-col gap-3">
<div class="flex justify-between items-start">
<div>
<h2 class="text-lg font-bold text-slate-900 dark:text-white leading-tight">{{$item->name}}</h2>
<p class="text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">{{$item->level}} • {{$item->department}}</p>
</div>
<div class="text-right">
<p class="text-xs text-slate-500 dark:text-slate-400 mb-0.5">Budget</p>
<p class="text-sm font-bold text-primary">min: ${{$item->min_budget}} • max: ${{$item->max_budget}}<span class="text-xs font-normal text-slate-400">/yr</span></p>
</div>

{{-- @if(Auth::user()->name)
<h1 class='text-red-600'>im the auth user </h1>
@endif --}}
</div>
  {{-- {{dd($item->my_vibes)}} --}}

{{-- <p></p> --}}
<div class="flex flex-wrap gap-2 mt-1">
@if ($item instanceof \App\Models\roommate_profile && !empty($item->my_vibes))
    @foreach($item->my_vibes as $vibe)
        <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded text-[10px] font-semibold uppercase tracking-wider">
            {{$vibe}}
        </span>
    @endforeach
@endif
</div>

@php
    if ($item instanceof \App\Models\roommate_profile) {
        $parts = [];

        // Utilities & Cooking
        $parts[] = $item->shareUtilities
            ? "I’m open to sharing utilities"
            : "I prefer not to share utilities";
        $parts[] = $item->cookTogether
            ? "and enjoy cooking together"
            : "and prefer cooking separately";

        // Pets
        $parts[] = $item->Has_Pets
            ? "I’m comfortable living with pets"
            : "I prefer a pet-free space";

        // Sleep schedule, Social personality, Overnight guests
        $sleep = [
            'Early Bird' => "I’m an early riser",
            'Night Owl' => "I’m more active at night",
            'Flexible'  => "I have a flexible sleep schedule",
        ][$item->mySleepSchedule] ?? null;

        $social = [
            'Introvert' => "more introverted",
            'Ambivert' => "an ambivert",
            'Extrovert' => "very outgoing",
        ][$item->social] ?? null;

        $guest = [
            'Never' => "I don’t host overnight guests",
            'Weekends' => "I occasionally host guests on weekends",
            'Anytime' => "I’m okay with overnight guests anytime",
        ][$item->overnight_guest] ?? null;

        $parts[] = implode(', ', array_filter([$sleep, $social, $guest]));

        // Move-in date
        $parts[] = "Looking to move in on {$item->move_in_date->format('F j, Y')}";

        $about = implode('. ', array_filter($parts)) . '.';
    }
@endphp

<div x-data="{ expanded: false }">
    <!-- Bio text -->
    <p :class="expanded ? '' : 'line-clamp-2'"
       class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
        {{ $about ?? '' }}
    </p>

    <!-- Toggle button -->
    <button
        @click="expanded = !expanded"
        class="text-xs font-semibold text-blue-500 mt-1">
        <span x-show="!expanded">...more</span>
        <span x-show="expanded">show less</span>
    </button>
</div>


<form  method="POST" action="{{ route('startChat',$item->user_id) }}">
    @csrf
<button class="mt-2 w-full h-11 flex items-center justify-center gap-2 bg-primary hover:bg-primary-hover active:scale-[0.98] text-slate-900 font-bold rounded-lg text-sm transition-all shadow-sm shadow-primary/20">
                Connect
                <span class="material-symbols-outlined text-[18px]">send</span>
</button>
</form>
</div>
</div>
{{-- hell --}}
 @elseif($item instanceof \App\Models\Listing)
<div class="group relative flex flex-col overflow-hidden rounded-2xl bg-surface-light dark:bg-surface-dark shadow-[0_2px_8px_rgba(0,0,0,0.08)] dark:shadow-none dark:border dark:border-gray-800 transition-transform active:scale-[0.99]">
<div class="relative h-48 w-full overflow-hidden bg-gray-200">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern student hostel building exterior with balconies" style="background-image: url('{{ $item->media ? asset('storage/' . $item->media[0]['path']) : asset('images/default-avatar.png') }}')">
</div>
<div class="absolute top-3 left-3 flex gap-2">
<span class="rounded-md bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 text-xs font-bold text-text-main-light dark:text-white shadow-sm">
                        {{$item->room_type}}
                    </span>
<span class="rounded-md bg-green-500/90 backdrop-blur-sm px-2 py-1 text-xs font-bold text-white shadow-sm">
                        Available
                    </span>
</div>
<button class="absolute top-3 right-3 flex size-8 items-center justify-center rounded-full bg-white/90 dark:bg-black/50 backdrop-blur-sm text-gray-400 hover:text-primary transition-colors shadow-sm">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
</div>
<div class="flex flex-col p-4 gap-3">
<div class="flex justify-between items-start">
<div>
<h3 class="text-lg font-bold text-text-main-light dark:text-text-main-dark leading-tight">{{$item->hostel_name}}</h3>
<div class="flex items-center gap-1 mt-1 text-text-sub-light dark:text-text-sub-dark">
<span class="material-symbols-outlined text-[16px] text-primary">location_on</span>
<span class="text-sm font-medium">{{$item->hostel_address}}</span>
</div>
</div>
<div class="text-right">
<p class="text-lg font-bold text-primary">₦{{$item->hostel_price}}k</p>
<p class="text-xs text-text-sub-light dark:text-text-sub-dark">/ year</p>
</div>
</div>
<div class="flex items-center gap-4 py-1 border-t border-b border-gray-100 dark:border-gray-800">
    @foreach($item->hostel_amenities ?? [] as $items)
        <div class="flex items-center gap-1.5 text-text-sub-light dark:text-text-sub-dark" title="{{ $items }}">
            <span class="text-xs">{{ $items }}</span>
        </div>
    @endforeach
</div>

<a href="{{route('listingDetails',['listingId' => $item->id])}}">
<button class="mt-1 flex w-full items-center justify-center rounded-lg bg-primary hover:bg-primary-dark text-white font-semibold py-2.5 text-sm transition-colors shadow-sm shadow-primary/30">
                    View Details
                </button>
</a>                
</div>
</div>
@endif


@endforeach
</div>
<div class="py-6 flex flex-col items-center justify-center text-slate-400 gap-2">
<span class="material-symbols-outlined animate-spin">refresh</span>
<span class="text-xs font-medium">Finding more matches...</span>
</div>
</main>


<x-discoverDownNav />

</x-generalLayout>
