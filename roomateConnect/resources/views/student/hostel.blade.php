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
      Hostels
    </h1>

    <!-- Right: Spacer (optional, keeps balance if you add icons later) -->
    <div class="ml-auto w-10"></div>

  </div>
</nav>
<div class='md:mx-40 md:mt-10 mt-5'>
<div>
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
</div>
<div class="flex flex-col gap-5 p-4 pb-24">
<div class="flex items-center justify-between">
<h3 class="text-lg font-bold text-text-main-light dark:text-text-main-dark">All Listings</h3>
<button class="text-sm font-medium text-primary hover:text-primary-dark">Sort By</button>
</div>

@foreach ($listings as $listing)
<div class="group relative flex flex-col overflow-hidden rounded-2xl bg-surface-light dark:bg-surface-dark shadow-[0_2px_8px_rgba(0,0,0,0.08)] dark:shadow-none dark:border dark:border-gray-800 transition-transform active:scale-[0.99]">
<div class="relative h-48 w-full overflow-hidden bg-gray-200">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" data-alt="Modern student hostel building exterior with balconies" style="background-image: url('{{ $listing->media ? asset('storage/' . $listing->media[0]['path']) : asset('images/default-avatar.png') }}')">
</div>
<div class="absolute top-3 left-3 flex gap-2">
<span class="rounded-md bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 text-xs font-bold text-text-main-light dark:text-white shadow-sm">
                        {{$listing->room_type}}
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
<h3 class="text-lg font-bold text-text-main-light dark:text-text-main-dark leading-tight">{{$listing->hostel_name}}</h3>
<div class="flex items-center gap-1 mt-1 text-text-sub-light dark:text-text-sub-dark">
<span class="material-symbols-outlined text-[16px] text-primary">location_on</span>
<span class="text-sm font-medium">{{$listing->hostel_address}}</span>
</div>
</div>
<div class="text-right">
<p class="text-lg font-bold text-primary">₦{{$listing->hostel_price}}k</p>
<p class="text-xs text-text-sub-light dark:text-text-sub-dark">/ year</p>
</div>
</div>
<div class="flex items-center gap-4 py-1 border-t border-b border-gray-100 dark:border-gray-800">
    @foreach($listing->hostel_amenities ?? [] as $item)
        <div class="flex items-center gap-1.5 text-text-sub-light dark:text-text-sub-dark" title="{{ $item }}">
            <span class="text-xs">{{ $item }}</span>
        </div>
    @endforeach
</div>

<button class="mt-1 flex w-full items-center justify-center rounded-lg bg-primary hover:bg-primary-dark text-white font-semibold py-2.5 text-sm transition-colors shadow-sm shadow-primary/30">
                    View Details
                </button>
</div>
</div>
@endforeach

<div class="flex flex-col gap-3 p-4 rounded-2xl bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-800">
<div class="h-48 w-full bg-gray-100 dark:bg-gray-800 animate-pulse rounded-lg"></div>
<div class="flex justify-between mt-2">
<div class="h-5 w-1/2 bg-gray-100 dark:bg-gray-800 animate-pulse rounded"></div>
<div class="h-5 w-1/4 bg-gray-100 dark:bg-gray-800 animate-pulse rounded"></div>
</div>
<div class="h-4 w-1/3 bg-gray-100 dark:bg-gray-800 animate-pulse rounded"></div>
<div class="mt-2 h-10 w-full bg-gray-100 dark:bg-gray-800 animate-pulse rounded"></div>
</div>
</div>
</div>

<x-discoverDownNav />
</x-generalLayout>