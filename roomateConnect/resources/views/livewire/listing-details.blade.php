<div>
<x-generalLayout>
    <div class="relative flex min-h-screen w-full flex-col">
<header class="sticky top-0 z-20 flex h-16 items-center justify-between bg-background-light/80 px-4 backdrop-blur-sm dark:bg-background-dark/80">
<a href="{{route('discover')}}">
    <button class="flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-gray-800 dark:text-white">
<span class="material-symbols-outlined">arrow_back</span>
</button>
</a>
<div class="flex items-center gap-2">
<button class="flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-gray-800 dark:text-white">
<span class="material-symbols-outlined">favorite_border</span>
</button>
<button class="flex h-10 w-10 items-center justify-center rounded-full bg-white dark:bg-gray-800 dark:text-white">
<span class="material-symbols-outlined">share</span>
</button>
</div>
</header>
<main class="flex-1 md:mx-40 mb-20">

     <div class="mt-16 relative">
        <div class="overflow-hidden rounded-b-2xl h-96">
            @if(collect($listing->media)->isNotEmpty())
                <img src="{{ asset('storage/' . $listing->media[$currentIndex]['path']) }}" class="w-full h-96 object-cover rounded-b-2xl">
            @else
                <img src="{{ asset('images/default-avatar.png') }}" class="w-full h-96 object-cover rounded-b-2xl">
            @endif
        </div>
        <div class="flex justify-center gap-4 mt-3">
            <button wire:click="prevImage" class="px-4 py-2 bg-primary rounded">Prev</button>
            <button wire:click="nextImage" class="px-4 py-2 bg-primary rounded">Next</button>
        </div>
    </div>

<div class="flex flex-col gap-4 p-4">
<div class="flex flex-col gap-1">
<h1 class="text-2xl font-bold leading-tight tracking-tight dark:text-white">{{$listing->hostel_name}}</h1>
<div class="flex items-center gap-1 text-sm text-gray-600 dark:text-gray-400">
<span class="material-symbols-outlined text-base">location_on</span>
<span>{{$listing->hostel_address}}</span>
</div>
</div>
{{-- <div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-primary">star</span>
<span class="font-bold">4.8</span>
<span class="text-sm text-gray-500">(120 Reviews)</span>
</div>
<div class="flex items-center gap-1 rounded-full bg-primary/20 px-3 py-1 text-sm font-medium text-primary-darker dark:text-primary">
<span class="material-symbols-outlined text-base">verified</span>
<span>Verified</span>
</div>
</div> --}}
<span class="text-sm font-medium text-primary">Availability From: {{$listing->hostel_available_from->format('F j,Y')}}</span>

</div>
<hr class="mx-4 border-gray-200 dark:border-gray-700"/>
<section class="p-4">
<h2 class="mb-2 text-lg font-bold">About this hostel</h2>
<p class="text-gray-600 dark:text-gray-300">
                    Welcome to University Park Hostel, the perfect home away from home for students! Located just a 5-minute walk from the main campus, our modern and secure facility offers everything you need for a comfortable and productive university life.
                </p>
</section>
<hr class="mx-4 border-gray-200 dark:border-gray-700"/>
<section class="p-4">
<h2 class="mb-3 text-lg font-bold">Amenities</h2>
<div class="grid grid-cols-2 gap-x-4 gap-y-3">
@foreach($listing->hostel_amenities as $amenity)
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary">done_all</span>
<span>{{$amenity}}</span>
</div>
@endforeach
</div>
</section>
<hr class="mx-4 border-gray-200 dark:border-gray-700"/>

</main>
<footer class="fixed right-0 left-0 bottom-0 z-10 mt-4 flex items-center justify-between gap-4 border-t border-gray-200 bg-white p-4 dark:border-gray-700 dark:bg-background-dark">
<div >
<span class="text-xl font-bold">${{$listing->hostel_price}} K<span class="text-base font-normal text-gray-600 dark:text-gray-400">/month</span></span>
</div>
<button class="flex grow max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary px-5 py-3 text-base font-bold leading-normal tracking-[0.015em] text-[#111818] sm:grow-0">
<span class="truncate">Book Now</span>
</button>
</footer>
</div>
</x-generalLayout>
</div>
