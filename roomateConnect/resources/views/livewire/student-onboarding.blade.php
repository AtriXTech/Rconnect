<div> 
    @if($currentStep <= 5)
    <form wire:submit.prevent='incrementStep'>
        @csrf
    @if($currentStep===1)
    <section class='mb-[140px] md:mx-40'>
          <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 1 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 15%"></div>
                </div>
            </div>
        </header>
 
<main class="flex-1 px-6">
<div class="pb-6">
<h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white mb-2">
                    Tell us about yourself
                </h1>
<p class="text-base text-gray-500 dark:text-gray-400 font-normal leading-normal">
                    This helps us create your student profile.
                </p>
</div>
            <div>
                <input type="file" wire:model="photo" id="photoUpload" class="hidden" />
                <div class="flex flex-col items-center justify-center mb-8">
                    <div class="relative group cursor-pointer" onclick="document.getElementById('photoUpload').click()">
                        <div class="size-24 rounded-full bg-surface-light dark:bg-surface-dark border-2 border-dashed border-gray-300 dark:border-gray-600 flex items-center justify-center overflow-hidden transition-colors group-hover:border-primary">
                            @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="w-full h-full object-cover" />
                            @else
                                <span class="material-symbols-outlined text-4xl text-gray-400 dark:text-gray-500 group-hover:text-primary transition-colors">
                                    account_circle
                                </span>
                            @endif
                        </div>
                        <div class="absolute bottom-0 right-0 bg-primary text-white p-1.5 rounded-full shadow-lg border-2 border-background-light dark:border-background-dark flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm font-bold">add_a_photo</span>
                        </div>
                    </div>

                    @error('photo') 
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
                    @enderror

                    <span class="mt-3 text-sm font-semibold text-primary cursor-pointer" onclick="document.getElementById('photoUpload').click()">
                        Upload Photo (Optional)
                    </span>
                </div>
                 @error('photo')<span class="text-red-500">{{ $message }}</span> @enderror
            </div>
<div class="flex flex-col gap-5">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="fullname">Full Name</label>
<div class="relative">
<input wire:model="name" class="w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark px-4 py-3.5 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all shadow-sm" id="fullname" placeholder="Alex Johnson" type="text"/>
<span class="material-symbols-outlined absolute right-4 top-3.5 text-gray-400">person</span>
</div>
 @error('name')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="phone">Phone Number</label>
<div class="flex gap-3">
<div class="relative w-28">
<select class="w-full appearance-none rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark px-4 py-3.5 text-base text-gray-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none shadow-sm pr-8">
<option>ng +234</option>
<option>🇺🇸 +1</option>
</select>
<span class="material-symbols-outlined absolute right-2 top-3.5 text-gray-400 pointer-events-none text-sm">expand_more</span>
</div>
<input wire:model="tel"  class="flex-1 rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark px-4 py-3.5 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all shadow-sm" id="phone" placeholder="(555) 000-0000" type="tel"/>
</div>
 @error('tel')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

<div class="flex flex-col gap-2 pt-1">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Gender <span class="text-gray-400 font-normal">(Optional)</span></label>
<div class="grid grid-cols-3 gap-3">
<label class="cursor-pointer group">
<input wire:model="gender" value='male'  class="peer sr-only" name="gender" type="radio"/>
<div class="flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="material-symbols-outlined mb-1 text-gray-400 group-hover:text-primary/70 peer-checked:text-primary">male</span>
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Male</span>
</div>
</label>
<label class="cursor-pointer group">
<input wire:model="gender" value='female' class="peer sr-only" name="gender" type="radio"/>
<div class="flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="material-symbols-outlined mb-1 text-gray-400 group-hover:text-primary/70 peer-checked:text-primary">female</span>
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Female</span>
</div>
</label>
</div>
 @error('gender')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<div class="flex flex-col gap-2">
                    <label class="text-text-main dark:text-white text-sm font-semibold leading-normal ml-1">Institution
                        / University</label>
                    <div class="relative">
                        <select wire:model="institution"
                            class="w-full appearance-none rounded-2xl border-0 bg-white dark:bg-surface-dark py-4 pl-4 pr-10 text-text-main dark:text-white ring-1 ring-[#e6e6db] dark:ring-white/10 focus:ring-2 focus:ring-primary focus:outline-none shadow-sm text-base font-normal">
                            <option disabled="" selected="" value="">Select your university</option>
                            <option value="unilag">University of Lagos</option>
                            <option value="lasu">Lagos State University</option>
                            <option value="covenant">Covenant University</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-text-subtle">
                            <span class="material-symbols-outlined">expand_more</span>
                        </div>
                    </div>
                    @error('institution')<span class="text-red-500">{{ $message }}</span> @enderror
                </div>
<div class="flex flex-col gap-2 pt-1">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="academic-level">Current Academic Level</label>
<div class="flex w-full gap-2 overflow-x-auto pb-1 no-scrollbar touch-pan-x">
                        <label class="cursor-pointer group">
                            <input wire:model="level" class="peer sr-only" value='100' name="level"
                                type="radio" />
                            <div
                                class="rounded-full px-5 py-2.5 bg-white dark:bg-surface-dark ring-1 ring-[#e6e6db] dark:ring-white/10 text-text-main dark:text-white peer-checked:bg-primary peer-checked:text-black peer-checked:ring-primary peer-checked:font-bold transition-all text-sm font-medium whitespace-nowrap">
                                100
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input wire:model="level" class="peer sr-only" value='200' name="level"
                                type="radio" />
                            <div
                                class="rounded-full px-5 py-2.5 bg-white dark:bg-surface-dark ring-1 ring-[#e6e6db] dark:ring-white/10 text-text-main dark:text-white peer-checked:bg-primary peer-checked:text-black peer-checked:ring-primary peer-checked:font-bold transition-all text-sm font-medium whitespace-nowrap">
                                200
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input wire:model="level" class="peer sr-only" value='300' name="level"
                                type="radio" />
                            <div
                                class="rounded-full px-5 py-2.5 bg-white dark:bg-surface-dark ring-1 ring-[#e6e6db] dark:ring-white/10 text-text-main dark:text-white peer-checked:bg-primary peer-checked:text-black peer-checked:ring-primary peer-checked:font-bold transition-all text-sm font-medium whitespace-nowrap">
                                300
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input wire:model="level" class="peer sr-only" value='400' name="level"
                                type="radio" />
                            <div
                                class="rounded-full px-5 py-2.5 bg-white dark:bg-surface-dark ring-1 ring-[#e6e6db] dark:ring-white/10 text-text-main dark:text-white peer-checked:bg-primary peer-checked:text-black peer-checked:ring-primary peer-checked:font-bold transition-all text-sm font-medium whitespace-nowrap">
                                400
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input wire:model="level" class="peer sr-only" value='500' name="level"
                                type="radio" />
                            <div
                                class="rounded-full px-5 py-2.5 bg-white dark:bg-surface-dark ring-1 ring-[#e6e6db] dark:ring-white/10 text-text-main dark:text-white peer-checked:bg-primary peer-checked:text-black peer-checked:ring-primary peer-checked:font-bold transition-all text-sm font-medium whitespace-nowrap">
                                500
                            </div>
                        </label>
                    </div>
                     @error('level')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
</div>
  <div class="flex flex-col gap-2">
                    <label
                        class="text-text-main dark:text-white text-sm font-semibold leading-normal ml-1">Department</label>
                    <input wire:model="department"
                        class="w-full rounded-2xl border-0 bg-white dark:bg-surface-dark py-4 px-4 text-text-main dark:text-white ring-1 ring-[#e6e6db] dark:ring-white/10 focus:ring-2 focus:ring-primary focus:outline-none shadow-sm text-base font-normal placeholder:text-text-subtle/50"
                        placeholder="e.g. Computer Science" type="text" />
                    @error('department')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
</div>
</main>
    <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div>
</section>
@elseif($currentStep==2)
<section class='md:mx-40'>
  <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 2 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 30%"></div>
                </div>
            </div>
        </header>
<!-- Main Content (Scrollable) -->
<main class="flex-1 overflow-y-auto overflow-x-hidden px-6 pb-32 pt-4 no-scrollbar">
<!-- Headline -->
<div class="mb-8 space-y-2">
<h1 class="text-3xl font-bold leading-tight tracking-tight text-text-main-light dark:text-white">
                   What are you looking for?
                </h1>
<p class="text-base font-normal text-text-sub-light dark:text-text-sub-dark">
                    Select all that apply to help us find your best match.
                </p>
</div>
<!-- Selection Grid -->
<div class="flex flex-col gap-4">
<!-- Option 1: Roommate matching -->
<label class="group relative cursor-pointer">
<input wire:model='intent' value='Roommate Matching' class="peer sr-only" type="checkbox"/>
<div class="relative flex items-center justify-between rounded-2xl border-2 border-transparent bg-surface-light dark:bg-surface-dark p-4 shadow-soft transition-all duration-200 hover:scale-[1.01] peer-checked:border-primary peer-checked:bg-primary/5 dark:peer-checked:bg-primary/10">
<div class="flex items-center gap-4">
<div class="flex size-12 items-center justify-center rounded-xl bg-background-light dark:bg-background-dark text-text-sub-light dark:text-text-sub-dark transition-colors group-hover:text-primary peer-checked:bg-primary peer-checked:text-black">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<div class="flex flex-col">
<span class="text-base font-semibold text-text-main-light dark:text-white">Roommate matching</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Find students like you</span>
</div>
</div>
<div class="flex size-6 items-center justify-center rounded-full border-2 border-gray-200 dark:border-gray-600 bg-transparent transition-colors peer-checked:border-primary peer-checked:bg-primary text-black">
<span class="material-symbols-outlined check-icon scale-0 opacity-0 transition-all duration-200" style="font-size: 16px; font-weight: 700;">check</span>
</div>
</div>
</label>
<!-- Option 2: Hostel listings -->
<label class="group relative cursor-pointer">
<input wire:model='intent' value='Budget-friendly shared spaces' class="peer sr-only" type="checkbox"/>
<div class="relative flex items-center justify-between rounded-2xl border-2 border-transparent bg-surface-light dark:bg-surface-dark p-4 shadow-soft transition-all duration-200 hover:scale-[1.01] peer-checked:border-primary peer-checked:bg-primary/5 dark:peer-checked:bg-primary/10">
<div class="flex items-center gap-4">
<div class="flex size-12 items-center justify-center rounded-xl bg-background-light dark:bg-background-dark text-text-sub-light dark:text-text-sub-dark transition-colors group-hover:text-primary peer-checked:bg-primary peer-checked:text-black">
<span class="material-symbols-outlined">bed</span>
</div>
<div class="flex flex-col">
<span class="text-base font-semibold text-text-main-light dark:text-white">Hostel listings</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Budget-friendly shared spaces</span>
</div>
</div>
<div class="flex size-6 items-center justify-center rounded-full border-2 border-gray-200 dark:border-gray-600 bg-transparent transition-colors peer-checked:border-primary peer-checked:bg-primary text-black">
<span class="material-symbols-outlined check-icon scale-0 opacity-0 transition-all duration-200" style="font-size: 16px; font-weight: 700;">check</span>
</div>
</div>
</label>
<!-- Option 3: Off-campus housing -->
<label class="group relative cursor-pointer">
<input wire:model='intent' value='off campus housing' class="peer sr-only" type="checkbox"/>
<div class="relative flex items-center justify-between rounded-2xl border-2 border-transparent bg-surface-light dark:bg-surface-dark p-4 shadow-soft transition-all duration-200 hover:scale-[1.01] peer-checked:border-primary peer-checked:bg-primary/5 dark:peer-checked:bg-primary/10">
<div class="flex items-center gap-4">
<div class="flex size-12 items-center justify-center rounded-xl bg-background-light dark:bg-background-dark text-text-sub-light dark:text-text-sub-dark transition-colors group-hover:text-primary peer-checked:bg-primary peer-checked:text-black">
<span class="material-symbols-outlined">cottage</span>
</div>
<div class="flex flex-col">
<span class="text-base font-semibold text-text-main-light dark:text-white">Off-campus housing</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Houses near university</span>
</div>
</div>
<div class="flex size-6 items-center justify-center rounded-full border-2 border-gray-200 dark:border-gray-600 bg-transparent transition-colors peer-checked:border-primary peer-checked:bg-primary text-black">
<span class="material-symbols-outlined check-icon scale-0 opacity-0 transition-all duration-200" style="font-size: 16px; font-weight: 700;">check</span>
</div>
</div>
</label>
<!-- Option 4: Short-term rent -->
<label class="group relative cursor-pointer">
<input wire:model='intent' value='short term rent' class="peer sr-only" type="checkbox"/>
<div class="relative flex items-center justify-between rounded-2xl border-2 border-transparent bg-surface-light dark:bg-surface-dark p-4 shadow-soft transition-all duration-200 hover:scale-[1.01] peer-checked:border-primary peer-checked:bg-primary/5 dark:peer-checked:bg-primary/10">
<div class="flex items-center gap-4">
<div class="flex size-12 items-center justify-center rounded-xl bg-background-light dark:bg-background-dark text-text-sub-light dark:text-text-sub-dark transition-colors group-hover:text-primary peer-checked:bg-primary peer-checked:text-black">
<span class="material-symbols-outlined">event_repeat</span>
</div>
<div class="flex flex-col">
<span class="text-base font-semibold text-text-main-light dark:text-white">Short-term rent</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Flexible monthly stays</span>
</div>
</div>
<div class="flex size-6 items-center justify-center rounded-full border-2 border-gray-200 dark:border-gray-600 bg-transparent transition-colors peer-checked:border-primary peer-checked:bg-primary text-black">
<span class="material-symbols-outlined check-icon scale-0 opacity-0 transition-all duration-200" style="font-size: 16px; font-weight: 700;">check</span>
</div>
</div>
</label>
<!-- Option 5: Private apartment -->
<label class="group relative cursor-pointer">
<input wire:model='intent' value="entire space for myself" class="peer sr-only" type="checkbox"/>
<div class="relative flex items-center justify-between rounded-2xl border-2 border-transparent bg-surface-light dark:bg-surface-dark p-4 shadow-soft transition-all duration-200 hover:scale-[1.01] peer-checked:border-primary peer-checked:bg-primary/5 dark:peer-checked:bg-primary/10">
<div class="flex items-center gap-4">
<div class="flex size-12 items-center justify-center rounded-xl bg-background-light dark:bg-background-dark text-text-sub-light dark:text-text-sub-dark transition-colors group-hover:text-primary peer-checked:bg-primary peer-checked:text-black">
<span class="material-symbols-outlined">apartment</span>
</div>
<div class="flex flex-col">
<span class="text-base font-semibold text-text-main-light dark:text-white">Private apartment</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Entire place for yourself</span>
</div>
</div>
<div class="flex size-6 items-center justify-center rounded-full border-2 border-gray-200 dark:border-gray-600 bg-transparent transition-colors peer-checked:border-primary peer-checked:bg-primary text-black">
<span class="material-symbols-outlined check-icon scale-0 opacity-0 transition-all duration-200" style="font-size: 16px; font-weight: 700;">check</span>
</div>
</div>
</label>
 @error('intent')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</main>
  <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div>
</section>

@elseif($currentStep==3)
<section class='md:mx-40'>
    <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 3 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 45%"></div>
                </div>
            </div>
        </header>

<!-- Main Content Scroll Area -->
<main class="flex-1 flex flex-col px-6 pt-6 pb-24 overflow-y-auto scrollbar-hide">
<!-- Headline Text -->
<div class="flex flex-col gap-2 mb-8 animate-[fadeIn_0.5s_ease-out]">
<h1 class="text-3xl font-bold leading-tight tracking-tight text-text-main-light dark:text-text-main-dark">
                    Where are you looking to stay?
                </h1>
<p class="text-base font-medium text-text-sub-light dark:text-text-sub-dark leading-relaxed">
                    Add one or more locations you're interested in. We'll prioritize properties near these areas.
                </p>
</div>

<!-- Search Input -->
    <div class="relative mb-4">
        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <span class="material-symbols-outlined text-gray-400 dark:text-gray-500">search</span>
        </div>
        <input
            type="text"
            class="block w-full p-4 pl-12 text-base text-text-primary-light dark:text-text-primary-dark bg-surface-light dark:bg-surface-dark border border-transparent rounded-xl shadow-sm ring-1 ring-gray-200 dark:ring-gray-700 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-primary focus:border-transparent focus:outline-none transition-shadow"
            placeholder="Search for campus, area, or city"
            {{-- wire:model.debounce.300ms="locationQuery" --}}
             wire:model.live.debounce.300ms="locationQuery"
            {{-- wire:keydown.enter.prevent --}}

        />
         @error('locationQuery')<span class="text-red-500">{{ $message }}</span> @enderror
        

        <!-- Search Results Dropdown -->
        @if(!empty($location_results))
            <div class="absolute top-full left-0 right-0 mt-2 bg-primary dark:bg-surface-dark rounded-xl shadow-lg border border-gray-100 dark:border-gray-800 overflow-hidden z-50">
                <ul>
                    @foreach($location_results as $location)
                        <li
                            wire:key="location-result-{{ $location['id'] ?? $location['name'] }}"
                            class="flex items-center px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer transition-colors border-b border-gray-100 dark:border-gray-800/50 last:border-0"
                            wire:click="addLocation('{{ $location['name'] }}')"
                        >
                            <span class="material-symbols-outlined text-gray-400 mr-3 text-sm">location_on</span>
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-text-primary-light dark:text-text-primary-dark">{{ $location['name'] }}</span>
                                <span class="text-xs text-text-secondary-light dark:text-text-secondary-dark">{{ $location['description'] ?? '' }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <!-- Selected Locations -->
    @if(!empty($selectedLocations))
        <div class="mt-4">
            <h3 class="text-xs font-semibold text-text-secondary-light dark:text-text-secondary-dark mb-3 uppercase tracking-wider">
                Selected Areas
            </h3>
            <div class="flex flex-col gap-3">
                @foreach($selectedLocations as $key => $location)
                    <div
                        wire:key="selected-location-{{ $key }}"
                        class="flex items-center justify-between p-3 bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm transition-all hover:border-primary/30"
                    >
                        <div class="flex items-center gap-3">
                            <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary/10 text-primary">
                                <span class="material-symbols-outlined text-[18px]">domain</span>
                            </div>
                            <div>
                                <p class="font-medium text-text-primary-light dark:text-text-primary-dark">{{ $location }}</p>
                            </div>
                        </div>
                        <button
                            type="button"
                            wire:click="removeLocation({{ $key }})"
                            class="text-gray-400 hover:text-red-500 transition-colors p-2 rounded-full hover:bg-red-50 dark:hover:bg-red-900/20"
                        >
                            <span class="material-symbols-outlined text-[20px]">close</span>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</main>
  <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div>
</section>
@elseif($currentStep==4)
<section class="md:mx-40">
<!-- Navigation Header -->
  <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 4 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 65%"></div>
                </div>
            </div>
        </header>
<!-- Scrollable Content -->
<main class="flex-1 flex flex-col px-6 pb-32 pt-2">
<!-- Header Section -->
<div class="mb-8">
<div class="inline-flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 mb-4">
<span class="material-symbols-outlined text-primary text-[14px]">info</span>
<span class="text-xs font-semibold text-primary uppercase tracking-wide">Optional Step</span>
</div>
<h1 class="text-text-main-light dark:text-text-main-dark text-[32px] font-bold leading-[1.2] tracking-tight mb-3">
                    What's your budget &amp; timeline?
                </h1>
<p class="text-text-sub-light dark:text-text-sub-dark text-base font-normal leading-relaxed">
                    You can skip this for now. You can edit this later in your profile settings.
                </p>
</div>
<!-- Form Section -->
<div class="flex flex-col gap-8">
<!-- Budget Input -->

<div class="flex flex-col gap-2 pt-1">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Preferred Budget</label>
<div class="flex items-center gap-3">
<div class="relative flex-1">
<input wire:model='min_budget' class="w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark pl-9 pr-4 py-3.5 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all shadow-sm" id="min-budget" placeholder="Min" type="number"/>
<span class="material-symbols-outlined absolute left-3 top-3.5 text-gray-400 text-[1.2rem]">attach_money</span>
 @error('min_budget')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<span class="text-gray-400 font-medium">-</span>
<div class="relative flex-1">
<input wire:model='max_budget' class="w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark pl-9 pr-4 py-3.5 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all shadow-sm" id="max-budget" placeholder="Max" type="number"/>
<span class="material-symbols-outlined absolute left-3 top-3.5 text-gray-400 text-[1.2rem]">attach_money</span>
 @error('max_budget')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</div>
</div>

 <div class="mb-2">
                            <label class="block text-sm font-medium leading-normal mb-2 dark:text-gray-200">Target
                             Move-in Date</label>
                            <div
                                class="relative flex w-full items-center rounded-xl bg-background-light dark:bg-background-dark border border-[#dbe6e6] dark:border-gray-700 overflow-hidden hover:border-primary transition-colors cursor-pointer">
                                <input wire:model.defer='move_in_date' type='date' class='w-full border-none'
                                    id='date'>
                                <div class="pr-4 text-text-sub-light dark:text-gray-400">
                                </div>
                            </div>
                            @error('move_in_date')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
</div>
</main>
  <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div>
</section>
@elseif($currentStep==5)


<section class='md:mx-40'>
      <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 5 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 75%"></div>
                </div>
            </div>
        </header>
    <div class='text-center'>
    <h1 class="text-text-main-light dark:text-text-main-dark text-[32px] font-bold leading-[1.2] tracking-tight mb-3">Tell us how you live</h1>
    <p class="text-text-sub-light dark:text-text-sub-dark text-base font-normal leading-relaxed">This page helps others understand who you are as a roommate.</p>
</div>
    <!-- Content Scroll Area -->
<main class="flex-1 px-4 py-6 space-y-6 pb-28">
<!-- Section 1: Budget & Financial Habits -->
<section class="bg-card-light dark:bg-card-dark rounded-[2rem] p-6 shadow-sm ring-1 ring-gray-100 dark:ring-white/5 transition-all hover:shadow-md">
<div class="flex items-center gap-3 mb-6">
<div class="p-2.5 bg-primary/10 rounded-full text-primary">
<span class="material-symbols-outlined text-xl">payments</span>
</div>
<h2 class="text-xl font-bold leading-tight">Budget &amp; Finances</h2>
</div>

<!-- Toggles -->
<div class="space-y-4">
<div class="flex items-center justify-between py-2">
<div class="flex flex-col">
<span class="font-semibold text-base">Share Utilities</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Split bills evenly?</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input   wire:model="shareUtilities" class="sr-only peer" type="checkbox"/>
<div class="w-12 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 dark:peer-focus:ring-primary/40 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('shareUtilities')<span class="text-red-500">{{ $message }}</span> @enderror
<div class="h-px bg-gray-100 dark:bg-gray-700/50 w-full"></div>
<div class="flex items-center justify-between py-2">
<div class="flex flex-col">
<span class="font-semibold text-base">Share Groceries</span>
<span class="text-xs text-text-sub-light dark:text-text-sub-dark">Cook together?</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model="cookTogether" class="sr-only peer" type="checkbox"/>
<div class="w-12 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-primary/50 dark:peer-focus:ring-primary/40 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('cookTogether')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</section>
<!-- Section 2: Lifestyle -->
<section class="bg-card-light dark:bg-card-dark rounded-[2rem] p-6 shadow-sm ring-1 ring-gray-100 dark:ring-white/5 transition-all hover:shadow-md">
<div class="flex items-center gap-3 mb-6">
<div class="p-2.5 bg-orange-100 dark:bg-orange-900/30 rounded-full text-orange-500">
<span class="material-symbols-outlined text-xl">wb_sunny</span>
</div>
<h2 class="text-xl font-bold leading-tight">Lifestyle</h2>
</div>
<!-- Sleep Schedule -->
<div class="mb-6">
<label class="block text-sm font-semibold text-text-sub-light dark:text-text-sub-dark uppercase tracking-wider mb-3">Sleeping Schedule</label>
<div class="grid grid-cols-3 gap-2">
<label class="cursor-pointer">
<input wire:model='mySleepSchedule' value='Early Bird' class="peer sr-only" name="sleep" type="radio"/>
<div class="flex flex-col items-center justify-center p-3 rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-white/5 hover:bg-gray-100 dark:hover:bg-white/10 peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary transition-all">
<span class="material-symbols-outlined mb-1">alarm</span>
<span class="text-xs font-medium">Early Bird</span>
</div>
</label>
<label class="cursor-pointer">
<input wire:model='mySleepSchedule' value='Night Owl' class="peer sr-only" name="sleep" type="radio"/>
<div class="flex flex-col items-center justify-center p-3 rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-white/5 hover:bg-gray-100 dark:hover:bg-white/10 peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary transition-all">
<span class="material-symbols-outlined mb-1">dark_mode</span>
<span class="text-xs font-medium">Night Owl</span>
</div>
</label>
<label class="cursor-pointer">
<input wire:model='mySleepSchedule' value='flexible' class="peer sr-only" name="sleep" type="radio"/>
<div class="flex flex-col items-center justify-center p-3 rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-white/5 hover:bg-gray-100 dark:hover:bg-white/10 peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary transition-all">
<span class="material-symbols-outlined mb-1">published_with_changes</span>
<span class="text-xs font-medium">Flexible</span>
</div>
</label>
</div>
 @error('mySleepSchedule')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<!-- Cleanliness Scale -->
<div class="flex flex-col gap-3">
<label class="block text-sm font-semibold text-text-sub-light dark:text-text-sub-dark uppercase tracking-wider mb-3">Cleanliness Level</label>
<div class="grid grid-cols-3 gap-2">
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model='cleanliness_level' value="Relaxed" name="cleanliness" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Relaxed</span>
</div>
</label>
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model='cleanliness_level' value='Average' name="cleanliness" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Average</span>
</div>
</label>
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model='cleanliness_level' value='Very Clean' name="cleanliness" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Very Clean</span>
</div>
</label>
</div>
 @error('cleanliness_level')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<!-- Habits List -->
<div class="space-y-3 pt-2">
<div class="flex items-center justify-between p-3 rounded-2xl bg-gray-50 dark:bg-white/5">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-gray-500">pets</span>
<span class="font-medium">Has Pets</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model='Has_Pets' class="sr-only peer" type="checkbox"/>
<div class="w-10 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('Has_Pets')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</section>
<!-- Section 3: Personality -->
<section class="bg-card-light dark:bg-card-dark rounded-[2rem] p-6 shadow-sm ring-1 ring-gray-100 dark:ring-white/5 transition-all hover:shadow-md">
<div class="flex items-center gap-3 mb-6">
<div class="p-2.5 bg-purple-100 dark:bg-purple-900/30 rounded-full text-purple-500">
<span class="material-symbols-outlined text-xl">psychology</span>
</div>
<h2 class="text-xl font-bold leading-tight">Personality</h2>
</div>
<!-- Introvert /Ambivert/ Extrovert -->
<div class="flex flex-col gap-3">
<label class="block text-sm font-semibold text-text-sub-light dark:text-text-sub-dark uppercase tracking-wider mb-3">Social Battery</label>
<div class="grid grid-cols-3 gap-2">
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model='social' value="Introvert" name="social" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Introvert</span>
</div>
</label>
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model='social' value="Ambivert" name="social" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Ambivert</span>
</div>
</label>
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model='social' value="Extrovert" name="social" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Extrovert</span>
</div>
</label>
</div>
 @error('social')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

<!-- Vibe Tags -->
<div class='mt-3'>
<label class="block text-sm font-semibold text-text-sub-light dark:text-text-sub-dark uppercase tracking-wider mb-3">Your Vibe</label>
  <div class="flex flex-wrap gap-3">
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Pet Friendly" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">pets</span>
                                    <span class="text-sm font-medium">Pet Friendly</span>
                                </div>
                            </label>
                             <!-- Quiet Hours -->
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Foodie" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">bedtime</span>
                                    <span class="text-sm font-medium">Foodie</span>
                                </div>
                            </label>
                             <!-- Quiet Hours -->
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Fitness" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">bedtime</span>
                                    <span class="text-sm font-medium">Fitness</span>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="smoker" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">smoking_rooms</span>
                                    <span class="text-sm font-medium">Smoker</span>
                                </div>
                            </label>
                             <!-- Quiet Hours -->
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Party" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">bedtime</span>
                                    <span class="text-sm font-medium">Party</span>
                                </div>
                            </label>
                             <!-- Quiet Hours -->
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Studious" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">bedtime</span>
                                    <span class="text-sm font-medium">Studious</span>
                                </div>
                            </label>
                             <!-- Quiet Hours -->
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Gamer" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">bedtime</span>
                                    <span class="text-sm font-medium">Gamer</span>
                                </div>
                            </label>
                             <!-- Quiet Hours -->
                            <label class="cursor-pointer">
                                <input type="checkbox" wire:model.defer="my_vibes" value="Chill" class="hidden peer">
                                <div
                                    class="flex items-center gap-2 px-4 py-2.5 rounded-full
               bg-white dark:bg-background-dark
               text-text-main-light dark:text-gray-300
               border border-[#dbe6e6] dark:border-gray-700
               transition-all
               peer-checked:bg-primary
               peer-checked:text-white
               peer-checked:border-primary
               peer-checked:shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">bedtime</span>
                                    <span class="text-sm font-medium">Chill</span>
                                </div>
                            </label>
</div>
 @error('my_vibes')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</section>
<!-- Section 4: Rules & Boundaries -->
<section class="bg-card-light dark:bg-card-dark rounded-[2rem] p-6 shadow-sm ring-1 ring-gray-100 dark:ring-white/5 transition-all hover:shadow-md">
<div class="flex items-center gap-3 mb-6">
<div class="p-2.5 bg-rose-100 dark:bg-rose-900/30 rounded-full text-rose-500">
<span class="material-symbols-outlined text-xl">gavel</span>
</div>
<h2 class="text-xl font-bold leading-tight">Boundaries</h2>
</div>
<!-- Overnight Guests -->
<div class="flex flex-col gap-3 mb-5">
<label class="block text-sm font-semibold text-text-sub-light dark:text-text-sub-dark uppercase tracking-wider">Overnight Guests</label>
<div class="grid grid-cols-3 gap-2">
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model="overnight_guest" value='Never' type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Never</span>
</div>
</label>
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model="overnight_guest"  value="Weekends" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Weekends</span>
</div>
</label>
<label class="cursor-pointer group">
<input class="peer sr-only" wire:model="overnight_guest" value="Anytime" name="overnight_guest" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Anytime</span>
</div>
</label>
</div>
 @error('overnight_guest')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

<!-- Sensitivities -->
<div>
<label class="block text-sm font-semibold text-text-sub-light dark:text-text-sub-dark uppercase tracking-wider mb-2">Sensitivities And Red Flags (Optional)</label>
<p class="text-xs text-text-sub-light dark:text-text-sub-dark mb-3">Any religious, cultural, or personal boundaries?</p>
<textarea wire:model='my_other_opinions' class="w-full rounded-2xl bg-gray-50 dark:bg-white/5 border-gray-200 dark:border-gray-700 text-sm p-4 focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none" placeholder="E.g. No shoes in the house, Halal kitchen only..." rows="3"></textarea>
 @error('my_other_opinions')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</section>
</main>
  <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div>
  </section>
</form>
@endif
  @elseif($currentStep==6)
   <form wire:submit.prevent='incrementStep'>
    @csrf
  <section class='md:mx-40'>
      <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 6 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 85%"></div>
                </div>
            </div>
        </header>
    <div class='text-center'>
    <h1 class="text-text-main-light dark:text-text-main-dark text-[32px] font-bold leading-[1.2] tracking-tight mb-3"> Tell us about your ideal roommate</h1>
    <p class="text-text-sub-light dark:text-text-sub-dark text-base font-normal leading-relaxed">This page helps us match you with someone you can actually live with.</p>
</div>
    <!-- Main Content -->
<div class="flex-1 px-4 pb-32 flex flex-col gap-6">
<!-- Section 1: Budget Expectations -->
<div class="rounded-xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_4px_20px_rgba(0,0,0,0.03)] dark:shadow-none border border-gray-100 dark:border-gray-800">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary">account_balance_wallet</span>
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Budget Expectations</h3>
</div>
<div class="flex flex-col gap-4">
<!-- Toggle: Utility Sharing -->
<div class="flex items-center justify-between">
<div>
<p class="text-base font-semibold text-gray-900 dark:text-white">Utility Sharing</p>
<p class="text-sm text-gray-500 dark:text-gray-400">Groceries &amp; household items</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model='utility_Sharing' class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('utility_Sharing')<span class="text-red-500">{{ $message }}</span> @enderror
<div class="h-px w-full bg-gray-100 dark:bg-gray-800"></div>
<!-- Toggle: Shared Expenses -->
<div class="flex items-center justify-between">
<div>
<p class="text-base font-semibold text-gray-900 dark:text-white">Shared Expenses</p>
<p class="text-sm text-gray-500 dark:text-gray-400">Open to splitting bills evenly? </p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model='shared_Expenses' class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('shared_Expenses')<span class="text-red-500">{{ $message }}</span> @enderror
<div class="h-px w-full bg-gray-100 dark:bg-gray-800"></div>

</div>
</div>
<!-- Section 2: Lifestyle Preferences -->
<div class="rounded-xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_4px_20px_rgba(0,0,0,0.03)] dark:shadow-none border border-gray-100 dark:border-gray-800">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary">nightlife</span>
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Expected  Lifestyle &amp; Habits</h3>
</div>
<div class="flex flex-col gap-6">

<div>
<p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2"> Expected Sleeping Schedule</p>
<div class="flex justify-between items-center gap-4">
<label class="flex-1 cursor-pointer group">
<input wire:model='expected_Sleeping_Schedule' value='Night_Owl' class="peer sr-only" name="social" type="radio"/>
<div class="p-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-center peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
<span class="material-symbols-outlined text-[20px] mb-1">bedtime</span>
<span class="text-xs font-bold">Night Owl</span></div>
</label>
<label class="flex-1 cursor-pointer group">
<input wire:model='expected_Sleeping_Schedule'  value="Early Bird" class="peer sr-only" name="social" type="radio"/>
<div class="p-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-center peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
<span class="material-symbols-outlined text-[20px] mb-1">wb_sunny</span>
<span class="text-xs font-bold">Early Bird</span></div>
</label>
</div>
 @error('expected_Sleeping_Schedule')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<!-- Cleanliness Slider -->
<div class="flex flex-col gap-3">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Expected Cleanliness Level</label>
<div class="grid grid-cols-3 gap-2">
<label class="cursor-pointer group">
<input wire:model='expected_Cleanliness_Level' value="Relaxed" class="peer sr-only" name="cleanliness" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Relaxed</span>
</div>
</label>
<label class="cursor-pointer group">
<input wire:model='expected_Cleanliness_Level' value='Average' class="peer sr-only" name="cleanliness" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Average</span>
</div>
</label>
<label class="cursor-pointer group">
<input wire:model='expected_Cleanliness_Level' value='Very Clean' class="peer sr-only" name="cleanliness" type="radio"/>
<div class="h-full flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Very Clean</span>
</div>
</label>
</div>
 @error('expected_Cleanliness_Level')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<!-- Tolerance Toggles -->
<div class="space-y-3">
<div class="flex items-center justify-between">
<span class="text-gray-900 dark:text-white font-medium">Smoking Allowed?</span>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model='smoking_allowed' class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('smoking_allowed')<span class="text-red-500">{{ $message }}</span> @enderror
<div class="flex items-center justify-between">
<span class="text-gray-900 dark:text-white font-medium">Alcohol Allowed?</span>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model='alcohol_Allowed' class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('alcohol_Allowed')<span class="text-red-500">{{ $message }}</span> @enderror
<div class="flex items-center justify-between">
<span class="text-gray-900 dark:text-white font-medium">Pets Allowed?</span>
<label class="relative inline-flex items-center cursor-pointer">
<input wire:model='Pets_allowed' class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
 @error('Pets_allowed')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</div>
</div>
<!-- Section 3: Personality -->
<div class="rounded-xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_4px_20px_rgba(0,0,0,0.03)] dark:shadow-none border border-gray-100 dark:border-gray-800">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary">diversity_3</span>
<h3 class="text-lg font-bold text-gray-900 dark:text-white">Personality</h3>
</div>
<div class="flex flex-col gap-6">
<!-- Social Battery -->
<div>
<p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Social Battery</p>
<div class="flex justify-between items-center gap-4">
<label class="flex-1 cursor-pointer group">
<input  wire:model='personality' value='Quiet' class="peer sr-only" name="social" type="radio"/>
<div class="p-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-center peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
<span class="block text-xl mb-1">🤫</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-300 group-hover:text-primary">Quiet</span>
</div>
</label>
<label class="flex-1 cursor-pointer group">
<input wire:model='personality' value='Social' class="peer sr-only" name="social" type="radio"/>
<div class="p-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-center peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
<span class="block text-xl mb-1">🎉</span>
<span class="text-sm font-bold text-gray-700 dark:text-gray-300 group-hover:text-primary">Social</span>
</div>
</label>
</div>
 @error('personality')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
<!-- Vibe Pills -->
<div>
<p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Preferred Vibe</p>
<div class="flex flex-wrap gap-2">
<label class="cursor-pointer">
<input wire:model='preferred_vibe' value='Studious' class="peer sr-only" type="checkbox"/>
<div class="px-4 py-2 rounded-full border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-400 peer-checked:border-primary peer-checked:bg-primary peer-checked:text-white transition-all">
                                    Studious 
                                </div>
</label>
<label class="cursor-pointer">
<input wire:model='preferred_vibe' value='Gamer'  class="peer sr-only" type="checkbox"/>
<div class="px-4 py-2 rounded-full border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-400 peer-checked:border-primary peer-checked:bg-primary peer-checked:text-white transition-all">
                                    Gamer 
                                </div>
</label>
<label class="cursor-pointer">
<input wire:model='preferred_vibe' value='Fitness' class="peer sr-only" type="checkbox"/>
<div class="px-4 py-2 rounded-full border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-400 peer-checked:border-primary peer-checked:bg-primary peer-checked:text-white transition-all">
                                    Fitness 
                                </div>
</label>
<label class="cursor-pointer">
<input wire:model='preferred_vibe' value='Chill' class="peer sr-only" type="checkbox"/>
<div class="px-4 py-2 rounded-full border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-400 peer-checked:border-primary peer-checked:bg-primary peer-checked:text-white transition-all">
                                    Chill 
                                </div>
</label>
<label class="cursor-pointer">
<input wire:model='preferred_vibe' value='Foodie' class="peer sr-only" type="checkbox"/>
<div class="px-4 py-2 rounded-full border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-400 peer-checked:border-primary peer-checked:bg-primary peer-checked:text-white transition-all">
                                    Foodie 
                                </div>
</label>
</div>
 @error('preferred_vibe')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</div>
</div>
<!-- Section 4: House Rules -->
<div class="rounded-xl bg-surface-light dark:bg-surface-dark p-5 shadow-[0_4px_20px_rgba(0,0,0,0.03)] dark:shadow-none border border-gray-100 dark:border-gray-800">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary">gavel</span>
<h3 class="text-lg font-bold text-gray-900 dark:text-white">House Rules</h3>
</div>
<div>
<p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Cultural/Religious Respect</p>
<textarea wire:model='other_expectation' class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:border-primary focus:ring-primary p-3 text-sm" placeholder="e.g. Halal kitchen, no shoes inside..." rows="3"></textarea>
 @error('other_expectation')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</div>
<!-- Bottom Spacer -->
<div class="h-8"></div>
</div>
    <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div>
  </section>
   </form>
@elseif($currentStep==7)
<form wire:submit.prevent='studentVerification'>
    @csrf
<section class='md:mx-40'>
      <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 7 of 7
                </h2>
                <button wire:click='skipStep' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 100%"></div>
                </div>
            </div>
        </header>
<!-- Scrollable Content -->
<main class="flex-1 flex flex-col px-6 pb-32 overflow-y-auto">
<!-- Headline & Subheader -->
<div class="mb-8 mt-2">
<h1 class="text-3xl font-bold leading-tight mb-3">Verify your student status</h1>
<p class="text-text-secondary-light dark:text-text-secondary-dark text-base font-medium leading-relaxed">
                    Verified profiles get <span class="text-primary font-bold dark:text-primary">3x more responses</span> from landlords. It only takes a minute to secure your spot.
                </p>
</div>
<!-- Upload Cards -->
<div class="flex flex-col gap-5">
<!-- Card 1: Student ID (Primary) -->
<!-- Card 1: Student ID (Primary) -->
<div class="group relative overflow-hidden rounded-xl bg-surface-light dark:bg-surface-dark p-4 shadow-[0_2px_12px_rgba(0,0,0,0.06)] border border-transparent hover:border-primary/50 transition-all cursor-pointer">
  <div class="flex items-start justify-between gap-4">
    <div class="flex flex-col gap-1 flex-1">
      <div class="flex items-center gap-2 mb-1">
        <span class="material-symbols-outlined text-primary filled text-[20px]">id_card</span>
        <p class="text-lg font-bold">Student ID Card</p>
      </div>

      <p class="text-sm text-text-secondary-light dark:text-text-secondary-dark leading-snug">
        Upload the front side of your current student ID.
      </p>

      <label for="student_id_upload" class="mt-4 flex items-center gap-2 text-primary font-bold text-sm cursor-pointer">
        <span class="material-symbols-outlined text-[18px]">add_circle</span>
        <span>Tap to upload</span>
      </label>

      <!-- Embedded file upload -->
      <input
        id="student_id_upload"
        type="file"
        class="hidden"
        wire:model='student_ID_Card'
        accept="image/*"
      />
    </div>

    <div class="w-24 h-24 bg-background-light dark:bg-background-dark rounded-lg flex items-center justify-center relative overflow-hidden shrink-0">
      <div class="absolute inset-0 bg-cover bg-center opacity-60"
        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDFD7SYuTo0Kwrgi6op41rF-nVVjB1xAuWU3yaSNJkW-0lmHPXjU2Efvb2Ol7U51iX78oFDLP0EZTzdC80-hgEUcEcFCKMteNpXBOdQrFwGcgLAMWcrwHGJfdkp6VUoj_MgUMhDpKC1xvNSsk4xiJ8jCpvO354MYhh2s_AYq0wry9egFSupGeDTldsy-bjRjjugZK5ewQtHs0dqGXPPDoutAvp9NkjpFh4Vy1U4oa1B1XsCdfEfpHwPvZbnkYFXoclp79-R2JkWTu6C");'>
      </div>
      <span class="material-symbols-outlined text-text-secondary-light dark:text-text-secondary-dark z-10 opacity-50">image</span>
    </div>
  </div>
   @if ($student_ID_Card)
<p class="text-xs mt-2 text-green-600">
    {{ $student_ID_Card->getClientOriginalName() }}
</p>
@endif
 @error('student_ID_Card')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

<!-- Card 2: Proof of Enrollment (Optional) -->
<!-- Card 2: Proof of Enrollment (Optional) -->
<div class="group relative overflow-hidden rounded-xl bg-surface-light dark:bg-surface-dark p-4 shadow-[0_2px_12px_rgba(0,0,0,0.06)] border border-transparent hover:border-primary/50 transition-all cursor-pointer">

  <div class="absolute top-0 right-0 bg-black/5 dark:bg-white/10 px-3 py-1 rounded-bl-xl">
    <span class="text-[10px] font-bold uppercase tracking-wider text-text-secondary-light dark:text-text-secondary-dark">
      Optional
    </span>
  </div>

  <div class="flex items-start justify-between gap-4 mt-1">
    <div class="flex flex-col gap-1 flex-1">
      <div class="flex items-center gap-2 mb-1">
        <span class="material-symbols-outlined text-text-secondary-light dark:text-text-secondary-dark text-[20px]">description</span>
        <p class="text-lg font-bold">Proof of Enrollment</p>
      </div>

      <p class="text-sm text-text-secondary-light dark:text-text-secondary-dark leading-snug">
        Acceptance letter, transcript, or class schedule.
      </p>

      <label for="proof_upload" class="mt-4 flex items-center gap-2 text-text-secondary-light dark:text-text-secondary-dark hover:text-primary transition-colors font-semibold text-sm cursor-pointer">
        <span class="material-symbols-outlined text-[18px]">upload_file</span>
        <span>Select document</span>
      </label>


      <!-- Embedded file upload -->
      <input
        id="proof_upload"
        type="file"
        class="hidden"
        wire:model='proof_of_Enrollment'
        accept=".pdf,image/*"
      />
    </div>
  </div>
  @if ($proof_of_Enrollment)
<p class="text-xs mt-2 text-green-600">
    {{ $proof_of_Enrollment->getClientOriginalName() }}
</p>
@endif
 @error('proof_of_Enrollment')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

</div>
<!-- Trust Badge Section -->
<div class="mt-8 flex items-center justify-center gap-3 py-4 px-4 bg-primary/5 rounded-lg border border-primary/10">
<span class="material-symbols-outlined text-primary text-[24px]">lock</span>
<p class="text-xs text-text-secondary-light dark:text-text-secondary-dark text-center leading-normal">
                    Your documents are <span class="font-bold text-text-main-light dark:text-text-main-dark">encrypted</span> and only used for manual verification purposes.
                </p>
</div>
</main>
    <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='studentVerification' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Submit
</button>
</div>
</div>
</section>
</form>
    @endif

    {{-- <div class="fixed  bottom-0 left-0 right-0 z-50 w-full bg-gradient-to-t from-background-light via-background-light to-transparent dark:from-background-dark dark:via-background-dark pt-3 pb-4 px-6  ">
<div class='flex gap-10 mb-3'>
    @if($currentStep>1)
<button wire:click='decrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Previous
</button>
@endif
<button wire:click='incrementStep' class="w-full rounded-xl bg-primary py-4 text-base font-bold text-[#0e1b19] shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-primary/40 active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                Continue
                <span class="material-symbols-outlined text-sm font-bold">arrow_forward</span>
</button>
</div>
</div> --}}
</div>