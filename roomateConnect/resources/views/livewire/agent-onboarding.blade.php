<div class="relative md:mx-40">

    <form wire:submit.prevent="saveStep" class="flex flex-col flex-1">

        {{-- ================= STEP 1 ================= --}}
        @if($currentStep == 1)
        <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 1 of 7
                </h2>
                <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 15%"></div>
                </div>
            </div>
        </header>

        <main class="flex-1 flex flex-col px-6 pb-28 pt-2 overflow-y-auto no-scrollbar">
            <div class="mb-6 text-center">
                <h1 class="text-text-main-light dark:text-text-main-dark tracking-tight text-[28px] font-extrabold leading-tight mb-2">
                    Tell us about yourself
                </h1>
                <p class="text-text-sub-light dark:text-text-sub-dark text-sm font-medium leading-normal">
                    This helps us create your agent profile.
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
            </div>

            <div class="flex flex-col gap-5">
                {{-- Full Name --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold uppercase tracking-wider text-text-sub-light dark:text-text-sub-dark ml-1" for="fullname">Full Name</label>
                    <div class="relative">
                        <input wire:model.defer="full_name" id="fullname" type="text" placeholder="e.g. Alex Morgan"
                            class="form-input w-full rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 px-4 py-3.5 text-base font-medium text-text-main-light dark:text-text-main-dark placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm"/>
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">person</span>
                    </div>
                    @error('full_name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                {{-- Phone Number --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold uppercase tracking-wider text-text-sub-light dark:text-text-sub-dark ml-1" for="phone">Phone Number</label>
                    <div class="flex gap-3">
                        <div class="relative w-24 shrink-0">
                            <select wire:model.defer="phone_country" class="form-input w-full appearance-none rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 pl-3 pr-8 py-3.5 text-base font-medium text-text-main-light dark:text-text-main-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm">
                                <option value="US">🇺🇸 +1</option>
                                <option value="UK">🇬🇧 +44</option>
                                <option value="CA">🇨🇦 +1</option>
                                <option value="FR">🇫🇷 +33</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-2 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-sm">expand_more</span>
                            @error('phone_country')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                        </div>
                        <input wire:model.defer="phone_number" id="phone" type="tel" placeholder="555-0123"
                            class="form-input flex-1 rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 px-4 py-3.5 text-base font-medium text-text-main-light dark:text-text-main-dark placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm"/>
                    </div>
                    @error('phone_number')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                {{-- Email --}}
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold uppercase tracking-wider text-text-sub-light dark:text-text-sub-dark ml-1" for="email">Email Address</label>
                    <div class="relative">
                        <input wire:model.defer="email" id="email" type="email" placeholder="alex@example.com"
                            class="form-input w-full rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 px-4 py-3.5 text-base font-medium text-text-main-light dark:text-text-main-dark placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm"/>
                        <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">mail</span>
                    </div>
                    @error('email')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                {{-- Gender --}}
                <div class="flex flex-col gap-2 mt-2">
                    <label class="text-xs font-bold uppercase tracking-wider text-text-sub-light dark:text-text-sub-dark ml-1">
                        Gender <span class="text-gray-400 font-normal normal-case ml-1">(Optional)</span>
                    </label>
                    <div class="grid grid-cols-3 gap-3">
                        @foreach(['male'=>'Male','female'=>'Female','other'=>'N/A'] as $key => $label)
                            <label class="cursor-pointer relative group">
                                <input wire:model="gender" type="radio" name="gender" value="{{ $key }}" class="peer sr-only"/>
                                <div class="flex flex-col items-center justify-center p-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark hover:bg-gray-50 dark:hover:bg-gray-800 peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary transition-all h-full">
                                    <span class="material-symbols-outlined mb-1 text-2xl text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-300 peer-checked:text-primary transition-colors">
                                        {{ $key=='male'?'male':($key=='female'?'female':'do_not_disturb_on') }}
                                    </span>
                                    <span class="text-xs font-semibold text-gray-600 dark:text-gray-300 peer-checked:text-primary text-center">{{ $label }}</span>
                                </div>
                            </label>
                        @endforeach
                    </div>
                    @error('gender')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                </div>
            </div>
        </main>

        @elseif($currentStep == 2)
<!-- Top Navigation & Progress -->
<header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 2 of 7
                </h2>
                <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 30%"></div>
                </div>
            </div>
        </header>


<!-- Main Content -->
<main class="flex-1 flex flex-col px-5 pt-6 pb-32 "> 
    <!-- Headlines -->
    <div class="mb-8 text-center">
        <h1 class="text-[#101918] dark:text-white tracking-tight text-[28px] leading-[1.2] font-extrabold mb-3">
            What type of agent are you?
        </h1>
        <p class="text-gray-500 dark:text-gray-400 text-[15px] font-medium leading-relaxed">
            Select what best describes how you operate. We'll customize your experience based on this.
        </p>
    </div>

    <!-- Selection Cards -->
    <div class="flex flex-col gap-4">

        <!-- Hostel / Property Agent -->
        <label class="relative cursor-pointer select-none">
    <!-- FULL CARD RADIO OVERLAY -->
    <input
        type="radio"
        wire:model="agent_type"
        value="hostel_agent"
        class="peer absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
    />

    <!-- CARD -->
    <div class="relative flex items-center p-4 rounded-2xl border-2
                bg-surface-light dark:bg-surface-dark shadow-soft
                border-transparent transition-all duration-300
                hover:border-primary/20
                peer-checked:border-primary
                peer-checked:bg-primary/5
                peer-checked:shadow-none">

        <!-- Icon -->
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl
                    bg-[#F0F4F4] dark:bg-gray-800 text-gray-500
                    peer-checked:bg-primary peer-checked:text-white transition">
            <span class="material-symbols-outlined text-[26px]">apartment</span>
        </div>

        <!-- Text -->
        <div class="ml-4 flex-1">
            <h3 class="text-[17px] font-bold text-text-main dark:text-white
                       peer-checked:text-primary transition">
                Hostel / Property Agent
            </h3>
            <p class="text-[13px] text-gray-500 dark:text-gray-400 mt-0.5 font-medium">
                I manage properties for a company or hostel.
            </p>
        </div>

        <!-- Check -->
        <div class="ml-3 shrink-0">
            <div class="h-6 w-6 rounded-full border-2 border-gray-200 dark:border-gray-600
                        flex items-center justify-center transition
                        peer-checked:border-primary
                        peer-checked:bg-primary
                        peer-checked:scale-110">
                <span class="material-symbols-outlined text-white text-[16px]
                             opacity-0 peer-checked:opacity-100 transition">
                    check
                </span>
            </div>
        </div>
    </div>
</label>

        <!-- Independent Agent -->
        <label class="group relative cursor-pointer select-none">
            <input class="peer sr-only" type="radio" wire:model="agent_type" value="independent_agent" />
            <div class="relative flex items-center p-4 rounded-2xl border-2 transition-all duration-300 ease-in-out
                        bg-surface-light dark:bg-surface-dark shadow-soft border-transparent
                        hover:border-primary/20 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:shadow-none">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl
                            bg-[#F0F4F4] dark:bg-gray-800 text-gray-500 dark:text-gray-400
                            transition-colors duration-300 peer-checked:bg-primary peer-checked:text-white">
                    <span class="material-symbols-outlined" style="font-size: 26px;">person</span>
                </div>
                <div class="ml-4 flex-1">
                    <h3 class="text-[17px] font-bold text-text-main dark:text-white transition-colors peer-checked:text-primary">
                        Independent Agent
                    </h3>
                    <p class="text-[13px] text-gray-500 dark:text-gray-400 mt-0.5 font-medium leading-tight opacity-90">
                        I work for myself and find tenants directly.
                    </p>
                </div>
                <div class="shrink-0 ml-3">
                    <div class="h-6 w-6 rounded-full border-2 border-gray-200 dark:border-gray-600 transition-all duration-300 flex items-center justify-center peer-checked:border-primary peer-checked:bg-primary peer-checked:scale-110">
                        <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity duration-200 font-bold">check</span>
                    </div>
                </div>
            </div>
        </label>

        <!-- Both -->
        <label class="group relative cursor-pointer select-none">
            <input class="peer sr-only" type="radio" wire:model="agent_type" value="both" />
            <div class="relative flex items-center p-4 rounded-2xl border-2 transition-all duration-300 ease-in-out
                        bg-surface-light dark:bg-surface-dark shadow-soft border-transparent
                        hover:border-primary/20 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:shadow-none">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl
                            bg-[#F0F4F4] dark:bg-gray-800 text-gray-500 dark:text-gray-400
                            transition-colors duration-300 peer-checked:bg-primary peer-checked:text-white">
                    <span class="material-symbols-outlined" style="font-size: 26px;">real_estate_agent</span>
                </div>
                <div class="ml-4 flex-1">
                    <h3 class="text-[17px] font-bold text-text-main dark:text-white transition-colors peer-checked:text-primary">
                        Both
                    </h3>
                    <p class="text-[13px] text-gray-500 dark:text-gray-400 mt-0.5 font-medium leading-tight opacity-90">
                        I do a mix of both depending on the property.
                    </p>
                </div>
                <div class="shrink-0 ml-3">
                    <div class="h-6 w-6 rounded-full border-2 border-gray-200 dark:border-gray-600 transition-all duration-300 flex items-center justify-center peer-checked:border-primary peer-checked:bg-primary peer-checked:scale-110">
                        <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity duration-200 font-bold">check</span>
                    </div>
                </div>
            </div>
        </label>

    </div>

    <!-- Validation Error -->
    @error('agent_type')
        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
    @enderror

</main>

{{-- ================= STEP 3 ================= --}}
@elseif($currentStep == 3)
<header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 3 of 7
                </h2>
                <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 45%"></div>
                </div>
            </div>
        </header>

<main wire:key="step-3" class="flex-1 flex flex-col px-4 pt-4 pb-24 max-w-md mx-auto w-full">
    <!-- Headline -->
    <div class="mb-6 text-center">
        <h1 class="text-3xl font-bold tracking-tight text-text-primary-light dark:text-text-primary-dark mb-2">
            Where do you operate?
        </h1>
        <p class="text-base text-text-secondary-light dark:text-text-secondary-dark leading-relaxed">
            Add one or more locations you actively cover. We'll match you with leads in these areas.
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

        <!-- Search Results Dropdown -->
        @if(!empty($location_results))
            <div class="absolute top-full left-0 right-0 mt-2 bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-100 dark:border-gray-800 overflow-hidden z-50">
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


@elseif($currentStep==4)

<main wire:key="step-4" class="flex-1 flex flex-col px-6 pb-24 overflow-y-auto">
  <header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 4 of 7
                </h2>
                <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 55%"></div>
                </div>
            </div>
        </header>
    <!-- Headline -->
  <div class="mb-6 text-center">
    <h1 class="text-text-main dark:text-white tracking-tight text-[28px] leading-tight font-extrabold mb-2">
      What services do you provide?
    </h1>
    <p class="text-text-sub dark:text-gray-400 text-base font-medium">
      Select all that apply.
    </p>
  </div>

  <!-- Service Cards -->
  <div class="flex flex-col gap-4">

    <!-- Card 1 -->
    <label class="relative group cursor-pointer">
      <input type="checkbox" wire:model="services" value="roommate_matching"
             class="peer absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
      <div class="flex items-center justify-between p-4 rounded-xl border-2 border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm transition-all duration-200 hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center size-10 rounded-full bg-gray-50 dark:bg-gray-800 text-primary peer-checked:bg-primary peer-checked:text-white transition-colors">
            <span class="material-symbols-outlined">diversity_3</span>
          </div>
          <span class="text-lg font-semibold text-text-main dark:text-white">Roommate matching</span>
        </div>
        <div class="check-icon h-6 w-6 rounded-full border-2 border-gray-300 dark:border-gray-600 flex items-center justify-center transition-colors peer-checked:border-primary peer-checked:bg-primary">
          <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity">check</span>
        </div>
      </div>
    </label>

    <!-- Card 2 -->
    <label class="relative group cursor-pointer">
      <input type="checkbox" wire:model="services" value="hostel_listings"
             class="peer absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
      <div class="flex items-center justify-between p-4 rounded-xl border-2 border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm transition-all duration-200 hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center size-10 rounded-full bg-gray-50 dark:bg-gray-800 text-primary peer-checked:bg-primary peer-checked:text-white transition-colors">
            <span class="material-symbols-outlined">hotel</span>
          </div>
          <span class="text-lg font-semibold text-text-main dark:text-white">Hostel listings</span>
        </div>
        <div class="check-icon h-6 w-6 rounded-full border-2 border-gray-300 dark:border-gray-600 flex items-center justify-center transition-colors peer-checked:border-primary peer-checked:bg-primary">
          <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity">check</span>
        </div>
      </div>
    </label>

    <!-- Card 3 -->
    <label class="relative group cursor-pointer">
      <input type="checkbox" wire:model="services" value="off_campus_housing"
             class="peer absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
      <div class="flex items-center justify-between p-4 rounded-xl border-2 border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm transition-all duration-200 hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center size-10 rounded-full bg-gray-50 dark:bg-gray-800 text-primary peer-checked:bg-primary peer-checked:text-white transition-colors">
            <span class="material-symbols-outlined">apartment</span>
          </div>
          <span class="text-lg font-semibold text-text-main dark:text-white">Off-campus housing</span>
        </div>
        <div class="check-icon h-6 w-6 rounded-full border-2 border-gray-300 dark:border-gray-600 flex items-center justify-center transition-colors peer-checked:border-primary peer-checked:bg-primary">
          <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity">check</span>
        </div>
      </div>
    </label>

    <!-- Card 4 -->
    <label class="relative group cursor-pointer">
      <input type="checkbox" wire:model="services" value="short_term_rent"
             class="peer absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
      <div class="flex items-center justify-between p-4 rounded-xl border-2 border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm transition-all duration-200 hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center size-10 rounded-full bg-gray-50 dark:bg-gray-800 text-primary peer-checked:bg-primary peer-checked:text-white transition-colors">
            <span class="material-symbols-outlined">calendar_month</span>
          </div>
          <span class="text-lg font-semibold text-text-main dark:text-white">Short-term rent</span>
        </div>
        <div class="check-icon h-6 w-6 rounded-full border-2 border-gray-300 dark:border-gray-600 flex items-center justify-center transition-colors peer-checked:border-primary peer-checked:bg-primary">
          <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity">check</span>
        </div>
      </div>
    </label>

    <!-- Card 5 -->
    <label class="relative group cursor-pointer">
      <input type="checkbox" wire:model="services" value="inspection_assistance"
             class="peer absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" />
      <div class="flex items-center justify-between p-4 rounded-xl border-2 border-gray-100 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm transition-all duration-200 hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5">
        <div class="flex items-center gap-4">
          <div class="flex items-center justify-center size-10 rounded-full bg-gray-50 dark:bg-gray-800 text-primary peer-checked:bg-primary peer-checked:text-white transition-colors">
            <span class="material-symbols-outlined">search_check</span>
          </div>
          <span class="text-lg font-semibold text-text-main dark:text-white">Inspection assistance</span>
        </div>
        <div class="check-icon h-6 w-6 rounded-full border-2 border-gray-300 dark:border-gray-600 flex items-center justify-center transition-colors peer-checked:border-primary peer-checked:bg-primary">
          <span class="material-symbols-outlined text-white text-[16px] opacity-0 peer-checked:opacity-100 transition-opacity">check</span>
        </div>
      </div>
    </label>
  </div>
</main>
@elseif($currentStep ==5)
<header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 5 of 7
                </h2>
                <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 70%"></div>
                </div>
            </div>
        </header>
<main class="flex flex-col gap-6 px-4 pt-2">

<!-- Headline & Subtext -->
<div class="space-y-2">
    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white">
        How do you charge?
    </h1>
    <p class="text-slate-500 dark:text-slate-400 text-base font-medium leading-relaxed">
        Help us match you with the right clients. You can skip this for now.
    </p>
</div>

<!-- Commission Type -->
<div class="space-y-3">
    <label class="text-sm font-semibold text-slate-900 dark:text-slate-100 ml-1">
        Commission Type
    </label>

    <div class="flex h-12 w-full items-center justify-center rounded-xl bg-slate-200 dark:bg-surface-dark p-1">

        <!-- Percentage -->
        <label class="group relative flex cursor-pointer h-full flex-1 items-center justify-center overflow-hidden rounded-lg px-2 transition-all">
            <input
                type="radio"
                class="peer sr-only"
                wire:model="commission_type"
                value="percentage"
            />
            <span class="absolute inset-0 rounded-lg transition-all peer-checked:bg-white dark:peer-checked:bg-slate-600 peer-checked:shadow-sm"></span>
            <span class="relative z-10 text-sm font-semibold text-slate-500 dark:text-slate-400 peer-checked:text-slate-900 dark:peer-checked:text-white transition-colors">
                Percentage %
            </span>
        </label>

        <!-- Fixed -->
        <label class="group relative flex cursor-pointer h-full flex-1 items-center justify-center overflow-hidden rounded-lg px-2 transition-all">
            <input
                type="radio"
                class="peer sr-only"
                wire:model="commission_type"
                value="fixed"
            />
            <span class="absolute inset-0 rounded-lg transition-all peer-checked:bg-white dark:peer-checked:bg-slate-600 peer-checked:shadow-sm"></span>
            <span class="relative z-10 text-sm font-semibold text-slate-500 dark:text-slate-400 peer-checked:text-slate-900 dark:peer-checked:text-white transition-colors">
                Fixed Amount ₦
            </span>
        </label>

    </div>
</div>

<!-- Commission Value -->
<div class="space-y-3">
    <label class="text-sm font-semibold text-slate-900 dark:text-slate-100 ml-1" for="commission_val">
        Commission Value
    </label>

    <div class="relative group">
        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <span class="text-slate-400 dark:text-slate-500 material-symbols-outlined text-lg">percent</span>
        </div>

        <input
            id="commission_val"
            type="number"
            wire:model="commission_value"
            placeholder="e.g. 10"
            class="block w-full rounded-2xl border-0 bg-white dark:bg-surface-dark py-4 pl-11 pr-4 text-slate-900 dark:text-white shadow-sm ring-1 ring-inset ring-slate-200 dark:ring-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 font-semibold transition-all"
        />
    </div>
</div>

<!-- Budget Range -->
<div class="space-y-3">
    <label class="text-sm font-semibold text-slate-900 dark:text-slate-100 ml-1">
        Minimum Budget Range (₦)
    </label>

    <div class="grid grid-cols-2 gap-4">

        <!-- Min -->
        <div class="relative">
            <label class="sr-only" for="min_price">Min Price</label>
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <span class="text-slate-400 dark:text-slate-500 text-sm font-bold">₦</span>
            </div>
            <input
                id="min_price"
                type="text"
                wire:model="min_budget"
                placeholder="Min"
                class="block w-full rounded-2xl border-0 bg-white dark:bg-surface-dark py-4 pl-8 pr-4 text-slate-900 dark:text-white shadow-sm ring-1 ring-inset ring-slate-200 dark:ring-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-base sm:leading-6 font-medium transition-all"
            />
        </div>

        <!-- Max -->
        <div class="relative">
            <label class="sr-only" for="max_price">Max Price</label>
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                <span class="text-slate-400 dark:text-slate-500 text-sm font-bold">₦</span>
            </div>
            <input
                id="max_price"
                type="text"
                wire:model="max_budget"
                placeholder="Max"
                class="block w-full rounded-2xl border-0 bg-white dark:bg-surface-dark py-4 pl-8 pr-4 text-slate-900 dark:text-white shadow-sm ring-1 ring-inset ring-slate-200 dark:ring-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-base sm:leading-6 font-medium transition-all"
            />
        </div>

    </div>
</div>

<!-- Info Note -->
<div class="flex items-start gap-3 rounded-xl bg-primary/10 p-4 mt-2">
    <span class="material-symbols-outlined text-primary shrink-0" style="font-size: 20px;">info</span>
    <p class="text-sm text-slate-600 dark:text-slate-300 font-medium leading-tight pt-0.5">
        You can edit these details in your profile later anytime.
    </p>
</div>

</main>
@elseif($currentStep==6)
<header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 6 of 7
                </h2>
                <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button>
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 80%"></div>
                </div>
            </div>
        </header>
<main class="flex-1 flex flex-col px-4 pb-32 overflow-y-auto no-scrollbar">

<!-- Headline -->
<div class="pt-2 pb-4 text-center">
    <h1 class="text-text-main-light dark:text-text-main-dark tracking-tight text-[28px] md:text-[32px] font-extrabold leading-tight mb-3">
        Verify your account
    </h1>
    <p class="text-text-muted-light dark:text-text-muted-dark text-base font-normal leading-relaxed">
        Verified agents gain <span class="text-primary font-bold">3x more visibility</span>. Verified accounts receive a "Trusted" badge and rank higher in search results.
    </p>
</div>

<!-- Section: Government ID -->
<div class="mb-6">
    <h3 class="text-text-main-light dark:text-text-main-dark text-lg font-bold leading-tight tracking-[-0.015em] pb-3 pt-2">
        Government ID
    </h3>
    <p class="text-sm text-text-muted-light dark:text-text-muted-dark mb-4">
        Upload a clear photo of your ID card, Passport, or Driver's License.
    </p>

    <div class="flex flex-col gap-4">

        <!-- Front Side Upload -->
        <label class="group relative flex w-full flex-col items-center justify-center rounded-xl border-2 border-dashed border-[#d3e4e2] dark:border-white/20 bg-surface-light dark:bg-surface-dark p-6 transition-all hover:border-primary hover:bg-primary/5 cursor-pointer">
            <input
                type="file"
                wire:model="government_id_front"
                accept="image/png,image/jpeg"
                class="absolute inset-0 opacity-0 cursor-pointer"
            />
            <div class="flex size-12 items-center justify-center rounded-full bg-primary/10 text-primary mb-3 group-hover:bg-primary group-hover:text-white transition-colors">
                <span class="material-symbols-outlined">badge</span>
            </div>
            <span class="text-text-main-light dark:text-text-main-dark font-semibold text-sm">
                Upload Front Side
            </span>
            <span class="text-text-muted-light dark:text-text-muted-dark text-xs mt-1">
                Supports JPG, PNG
            </span>
        </label>

        <!-- Back Side Upload -->
        <label class="group relative flex w-full flex-col items-center justify-center rounded-xl border-2 border-dashed border-[#d3e4e2] dark:border-white/20 bg-surface-light dark:bg-surface-dark p-6 transition-all hover:border-primary hover:bg-primary/5 cursor-pointer">
            <input
                type="file"
                wire:model="government_id_back"
                accept="image/png,image/jpeg"
                class="absolute inset-0 opacity-0 cursor-pointer"
            />
            <div class="flex size-12 items-center justify-center rounded-full bg-primary/10 text-primary mb-3 group-hover:bg-primary group-hover:text-white transition-colors">
                <span class="material-symbols-outlined">branding_watermark</span>
            </div>
            <span class="text-text-main-light dark:text-text-main-dark font-semibold text-sm">
                Upload Back Side
            </span>
            <span class="text-text-muted-light dark:text-text-muted-dark text-xs mt-1">
                Supports JPG, PNG
            </span>
        </label>

    </div>
</div>

<!-- Section: Business Registration -->
<div class="mb-8">
    <div class="flex items-baseline justify-between pb-3 pt-2">
        <h3 class="text-text-main-light dark:text-text-main-dark text-lg font-bold leading-tight tracking-[-0.015em]">
            Business Registration
        </h3>
        <span class="text-xs font-medium text-text-muted-light dark:text-text-muted-dark bg-black/5 dark:bg-white/10 px-2 py-1 rounded">
            Optional
        </span>
    </div>

    <p class="text-sm text-text-muted-light dark:text-text-muted-dark mb-4">
        If you are a registered agency, upload your certification to gain the Business badge.
    </p>

    <!-- Business Document Upload -->
    <label class="group relative flex w-full items-center gap-4 rounded-xl border border-[#d3e4e2] dark:border-white/10 bg-surface-light dark:bg-surface-dark p-4 transition-all hover:border-primary cursor-pointer">
        <input
            type="file"
            wire:model="business_certificate"
            accept="application/pdf,image/png,image/jpeg"
            class="absolute inset-0 opacity-0 cursor-pointer"
        />
        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#f0fcfb] dark:bg-primary/20 text-primary">
            <span class="material-symbols-outlined">add_photo_alternate</span>
        </div>
        <div class="flex-1 text-left">
            <p class="text-text-main-light dark:text-text-main-dark font-semibold text-sm">
                Upload Document
            </p>
            <p class="text-text-muted-light dark:text-text-muted-dark text-xs">
                PDF, JPG or PNG
            </p>
        </div>
        <span class="material-symbols-outlined text-text-muted-light dark:text-text-muted-dark group-hover:text-primary">
            chevron_right
        </span>
    </label>
</div>

<!-- Trust Indicator -->
<div class="mt-auto flex items-center justify-center gap-2 py-6 opacity-70">
    <span class="material-symbols-outlined text-primary text-[18px]">lock</span>
    <p class="text-xs text-text-muted-light dark:text-text-muted-dark text-center font-medium">
        Your data is encrypted with 256-bit SSL security.
    </p>
</div>

</main>
@elseif($currentStep==7)
<header class="sticky top-0 z-10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm transition-colors">
            <div class="flex items-center p-4 pb-2 justify-between">
                <h2 class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Step 7 of 7
                </h2>
                {{-- <button wire:click='skip' class="text-text-main-light dark:text-text-main-dark text-base font-bold leading-tight tracking-[-0.015em] flex-1 text-center pr-10">
                    Skip Step 
                </button> --}}
                
            </div>
            <div class="px-4 pb-2 w-full">
                <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                    <div class="h-full bg-primary rounded-full transition-all duration-500 ease-out" style="width: 100%"></div>
                </div>
            </div>
        </header>
<!-- Scrollable Content -->
<main class="flex-1 flex flex-col gap-6 p-5 pb-32">

    <!-- HeadlineText -->
    <div>
        <h1 class="text-text-main dark:text-white text-[28px] font-extrabold leading-tight tracking-tight mb-2">
            Review your information
        </h1>
        <p class="text-gray-500 dark:text-gray-400 text-base font-medium leading-relaxed">
            Confirm everything looks correct before submitting your profile.
        </p>
    </div>

    <!-- Card 1: Personal Info -->
    <div class="group relative flex flex-col gap-4 rounded-2xl border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-5 shadow-soft transition-all hover:shadow-md">
        <div class="flex items-start justify-between">
            <div class="flex items-center gap-4">
                <div class="relative h-14 w-14 overflow-hidden rounded-full border-2 border-white shadow-sm">
                    <img
                        class="h-full w-full object-cover"
                        src="{{ $profile_photo_preview ?? '/images/avatar-placeholder.png' }}"
                        alt="Profile photo"
                    />
                </div>
                <div>
                    <p class="text-text-main dark:text-white text-lg font-bold">
                        {{ $full_name }}
                    </p>
                    <p class="text-text-muted dark:text-gray-400 text-sm">
                        ID: #{{ $agent_reference }}
                    </p>
                </div>
            </div>
            <button class="text-primary hover:text-primary/80 text-sm font-bold px-2 py-1 rounded-lg hover:bg-primary/10 transition-colors">
                Edit
            </button>
        </div>

        <div class="space-y-3 pt-2 border-t border-gray-100 dark:border-gray-700">
            <div class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-300">
                <span class="material-symbols-outlined text-gray-400 text-[20px]">mail</span>
                {{ $email }}
            </div>

            <div class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-300">
                <span class="material-symbols-outlined text-gray-400 text-[20px]">call</span>
                {{ $phone }}
            </div>
        </div>
    </div>

    <!-- Card 2: Agent Type -->
    <div class="group flex flex-col rounded-2xl border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-5 shadow-soft">
        <div class="flex items-center justify-between mb-3">
            <h3 class="text-sm uppercase tracking-wider font-bold text-gray-400 dark:text-gray-500">
                Agent Type
            </h3>
            <button class="text-primary hover:text-primary/80 text-sm font-bold px-2 py-1 rounded-lg hover:bg-primary/10 transition-colors">
                Edit
            </button>
        </div>

        <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/20 text-primary-dark">
                <span class="material-symbols-outlined text-primary text-[24px]">verified_user</span>
            </div>
            <div>
                <p class="text-text-main dark:text-white font-bold text-base">
                    {{ $agent_type }}
                </p>
                <p class="text-gray-500 dark:text-gray-400 text-sm">
                    {{ $license_type }}
                </p>
            </div>
        </div>
    </div>

    <!-- Card 3: Locations -->
    <div class="group flex flex-col rounded-2xl border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark overflow-hidden shadow-soft">
        <div class="p-5 pb-0 flex items-center justify-between">
            <h3 class="text-sm uppercase tracking-wider font-bold text-gray-400 dark:text-gray-500">
                Coverage Area
            </h3>
            <button class="text-primary hover:text-primary/80 text-sm font-bold px-2 py-1 rounded-lg hover:bg-primary/10 transition-colors">
                Edit
            </button>
        </div>

        <div class="p-5 pt-3">
            <p class="text-text-main dark:text-white font-bold text-base mb-3">
                {{ implode(', ', $locations ?? []) }}
            </p>

            <div class="relative h-24 w-full rounded-lg overflow-hidden bg-gray-100 dark:bg-gray-800">
                <img
                    class="h-full w-full object-cover opacity-80"
                    src="{{ $map_preview ?? '/images/map-placeholder.png' }}"
                    alt="Coverage map"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                <div class="absolute bottom-2 left-2 flex gap-1">
                    <span class="bg-white/90 dark:bg-black/80 backdrop-blur text-[10px] px-2 py-1 rounded-md font-bold text-gray-800 dark:text-gray-200 shadow-sm">
                        Map View
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 4: Services -->
    <div class="group flex flex-col rounded-2xl border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-5 shadow-soft">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm uppercase tracking-wider font-bold text-gray-400 dark:text-gray-500">
                Services
            </h3>
            <button class="text-primary hover:text-primary/80 text-sm font-bold px-2 py-1 rounded-lg hover:bg-primary/10 transition-colors">
                Edit
            </button>
        </div>

        <div class="flex flex-wrap gap-2">
            @foreach ($services ?? [] as $service)
                <span class="inline-flex items-center rounded-lg bg-gray-100 dark:bg-gray-800 px-3 py-1.5 text-sm font-medium text-gray-700 dark:text-gray-200">
                    {{ $service }}
                </span>
            @endforeach
        </div>
    </div>

    <!-- Card 5: Pricing -->
    <div class="group flex flex-col rounded-2xl border border-gray-100 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-5 shadow-soft">
        <div class="flex items-center justify-between mb-2">
            <h3 class="text-sm uppercase tracking-wider font-bold text-gray-400 dark:text-gray-500">
                Pricing Model
            </h3>
            <button class="text-primary hover:text-primary/80 text-sm font-bold px-2 py-1 rounded-lg hover:bg-primary/10 transition-colors">
                Edit
            </button>
        </div>

        <div class="flex items-baseline gap-1">
            <span class="text-3xl font-extrabold text-text-main dark:text-white">
                {{ $commission_rate }}%
            </span>
            <span class="text-lg font-medium text-gray-500 dark:text-gray-400">
                Commission
            </span>
        </div>

        <p class="text-sm text-gray-400 dark:text-gray-500 mt-1">
            {{ $pricing_note }}
        </p>
    </div>

    <!-- Agreement Check -->
    <div class="flex gap-3 px-2 pt-2">
        <div class="relative flex items-start">
            <div class="flex h-6 items-center">
                <input
                    id="terms"
                    type="checkbox"
                    wire:model="agreed_to_terms"
                    class="h-5 w-5 rounded border-gray-300 text-primary focus:ring-primary dark:border-gray-600 dark:bg-gray-700"
                />
            </div>
            <div class="ml-3 text-sm leading-6">
                <label for="terms" class="font-medium text-text-main dark:text-white">
                    I agree to the Terms of Service
                </label>
                <p class="text-gray-500 dark:text-gray-400">
                    By clicking complete, you agree to our agent guidelines.
                </p>
            </div>
        </div>
    </div>

</main>

        @endif

        {{-- ================= STEP 2–7 ================= --}}
        {{-- Include your Step 2–7 code here exactly like your previous code, following the same structure and wire:model bindings --}}
        
       {{-- Step navigation buttons --}}
<div class="flex justify-between items-center p-4 border-t border-gray-200 dark:border-gray-700">
    @if(intval($currentStep) > 1)
        <button type="button" wire:click="previousStep" class="px-4 py-2 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 transition">
            Back
        </button>
    @else
        <div></div> {{-- keeps layout consistent --}}
    @endif

    @if(intval($currentStep) < intval($totalSteps))
        <button type="button" wire:click="saveStep" class="px-4 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 transition">
            Next
        </button>
    @elseif(intval($currentStep) === intval($totalSteps))
        <button type="button" wire:click="saveStep" class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
            Submit
        </button>
    @endif
</div>
  

    </form>
</div>

