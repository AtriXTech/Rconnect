<div>
    <x-generalLayout>
        @if($currentStep==1)
        <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden mb-[60px]">
<div class="flex flex-col flex-grow">
<div class='fixed right-0 left-0 top-0 bg-white'>
    <!-- Top App Bar -->
<header class="flex items-center  p-4 pb-2 justify-between">
<button class="text-[#111818] dark:text-white flex size-12 shrink-0 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
</button>
</header>
<!-- Progress Indicators -->
<div class="flex w-full flex-row items-center justify-center gap-3 py-1 pb-2 px-4">
<div class="flex-1 h-1 rounded-full bg-primary"></div>
<div class="flex-1 h-1 rounded-full bg-primary/20"></div>
<div class="flex-1 h-1 rounded-full bg-primary/20"></div>
</div>
</div>
<!-- Main Content -->
<main class="flex-grow px-4 mt-[90px] md:mx-40" >
<!-- Headline Text -->
<h1 class="text-[#111818] dark:text-white tracking-tight text-[32px] font-bold leading-tight text-left pb-3 pt-6">Tell us about your hostel</h1>
<!-- Body Text -->
<p class="text-[#638888] dark:text-gray-400 text-base font-normal leading-normal pb-6">Let's start with the basics. This information will be visible to students.</p>
<!-- Form Fields -->
<div class="flex flex-col space-y-4">

<div>
<!-- Hostel Name -->
<label class="flex flex-col w-full">
<p class="text-[#111818] dark:text-white text-base font-medium leading-normal pb-2">Hostel Name</p>
<input wire:model='hostel_name' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111818] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce5e5] dark:border-gray-700 bg-white dark:bg-background-dark focus:border-primary h-14 placeholder:text-[#638888] p-[15px] text-base font-normal leading-normal transition-all" placeholder="e.g., The Student Hub" value=""/>
</label>
     @error('hostel_name')<span class="text-red-500">{{ $message }}</span> @enderror
</div>


<div>
    <!-- Full Address -->
<label class="flex flex-col w-full">
<p class="text-[#111818] dark:text-white text-base font-medium leading-normal pb-2">Full Address</p>
<div class="relative flex items-center">
<input wire:model='hostel_address' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111818] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce5e5] dark:border-gray-700 bg-white dark:bg-background-dark focus:border-primary h-14 placeholder:text-[#638888] p-[15px] pr-12 text-base font-normal leading-normal transition-all" placeholder="e.g., 123 University Ave" value=""/>
<button class="absolute right-3 text-[#638888] dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors">
<span class="material-symbols-outlined">my_location</span>
</button>
</div>
</label>
     @error('hostel_address')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

<div>
<!-- Contact Phone Number -->
<label class="flex flex-col w-full">
<p class="text-[#111818] dark:text-white text-base font-medium leading-normal pb-2">Phone Number</p>
<div class="flex w-full items-center gap-0">
<div class="flex items-center justify-center h-14 rounded-l-lg border border-r-0 border-[#dce5e5] dark:border-gray-700 bg-white dark:bg-background-dark px-3 text-[#111818] dark:text-white">
<span>+234</span>
<span class="material-symbols-outlined text-sm ml-1">expand_more</span>
</div>
<input wire:model='tel' class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg text-[#111818] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dce5e5] dark:border-gray-700 bg-white dark:bg-background-dark focus:border-primary h-14 placeholder:text-[#638888] p-[15px] text-base font-normal leading-normal transition-all" placeholder="(555) 123-4567" type="tel" value=""/>
</div>
</label>
     @error('tel')<span class="text-red-500">{{ $message }}</span> @enderror
</div>
</div>
</main>
</div>
</div>
@elseif($currentStep==2)
<div class='fixed right-0 left-0 top-0 bg-white z-10'>
    <!-- Top App Bar -->
<header class="flex items-center  p-4 pb-2 justify-between">
<button class="text-[#111818] dark:text-white flex size-12 shrink-0 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
</button>
</header>
<!-- Progress Indicators -->
<div class="flex w-full flex-row items-center justify-center gap-3 py-1 pb-2 px-4">
<div class="flex-1 h-1 rounded-full bg-primary"></div>
<div class="flex-1 h-1 rounded-full bg-primary"></div>
<div class="flex-1 h-1 rounded-full bg-primary/20"></div>
</div>
</div>

<main class="flex-1 p-4 space-y-6 mt-[100px] z-0 md:mx-40">
<!-- Section 1: Room Types & Pricing -->
<section>
<h3 class="text-text-body dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] pb-3">Room Types &amp; Pricing</h3>
<!-- Room Type Card -->
<div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 space-y-4">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">bed</span>
<div class="flex-1 space-y-4">

<!-- Price & Billing Cycle -->
<div class="flex w-full flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
<div>
    <label class="flex flex-col min-w-40 flex-1">
<p class="text-text-body dark:text-gray-200 text-base font-medium leading-normal pb-2">Room Type Name</p>
<div class="relative">
<span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-helper dark:text-gray-400">$</span>
<input wire:morel='room_type' class="form-input pl-7 flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-body dark:text-white focus:outline-0 focus:ring-0 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:border-primary h-14 placeholder:text-text-helper dark:placeholder-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="e.g., Single Room with Balcony" type="text" />
</div>
</label>
 @error('room_type')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

<div>
    <div class="flex flex-col gap-2 pt-1">
<label class="text-text-body dark:text-gray-200 text-base font-medium leading-normal pb-2"><p >Billing Cycle</p></label>
<div class="grid grid-cols-3 gap-3">
<label class="cursor-pointer group">
<input wire:model="billing" value='Yearly'  class="peer sr-only" name='billing'  type="radio"/>
<div class="flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Yearly</span>
</div>
</label>
<label class="cursor-pointer group">
<input wire:model="billing" value='Per Semester' class="peer sr-only" name='billing'  type="radio"/>
<div class="flex flex-col items-center justify-center rounded-xl border border-gray-200 dark:border-gray-700 bg-surface-light dark:bg-surface-dark p-3 transition-all peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:border-primary/50 shadow-sm">
<span class="text-sm font-medium text-gray-600 dark:text-gray-300 peer-checked:text-primary">Per Semester</span>
</div>
</label>
</div>
</div>
 @error('billing')<span class="text-red-500">{{ $message }}</span> @enderror
</div>

</div>
<!-- Security Deposit -->
<label class="flex flex-col">
<p class="text-text-body dark:text-gray-200 text-base font-medium leading-normal pb-2">Security Deposit</p>
<div class="relative">
<span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-text-helper dark:text-gray-400">$</span>
<input class="form-input pl-7 flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-body dark:text-white focus:outline-0 focus:ring-0 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:border-primary h-14 placeholder:text-text-helper dark:placeholder-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="250" type="number" value="250"/>
</div>
<p class="text-text-helper dark:text-gray-400 text-xs pt-2">This is the refundable amount paid upfront.</p>
</label>
</div>
</div>
</div>
<!-- Add Another Room Button -->
<button class="mt-4 flex w-full items-center justify-center gap-2 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 bg-transparent px-6 py-3.5 text-base font-semibold text-primary hover:bg-primary/10 dark:text-secondary dark:hover:bg-secondary/10">
<span class="material-symbols-outlined">add</span>
                    Add another room type
                </button>
</section>
<!-- Section 2: Initial Availability -->
<section>
<h3 class="text-text-body dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] pb-3">Initial Availability</h3>
<div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 space-y-4">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary mt-1">event_available</span>
<div class="flex-1 space-y-4">
<!-- Number of Rooms -->
<label class="flex flex-col">
<p class="text-text-body dark:text-gray-200 text-base font-medium leading-normal pb-2">Number of Available Rooms/Beds</p>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-body dark:text-white focus:outline-0 focus:ring-0 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:border-primary h-14 placeholder:text-text-helper dark:placeholder-gray-400 p-[15px] text-base font-normal leading-normal" placeholder="e.g., 10" type="number" value="10"/>
</label>
<!-- Available From Date -->
<label class="flex flex-col">
<p class="text-text-body dark:text-gray-200 text-base font-medium leading-normal pb-2">Available From</p>
<div class="relative">
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-body dark:text-white focus:outline-0 focus:ring-0 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:border-primary h-14 placeholder:text-text-helper dark:placeholder-gray-400 p-[15px] text-base font-normal leading-normal" type="date" value="2024-09-01"/>
</div>
<p class="text-text-helper dark:text-gray-400 text-xs pt-2">Date must be in the future.</p>
</label>
</div>
</div>
</div>
</section>
</main>
@elseif($currentStep==3)
<div class='fixed right-0 left-0 top-0 bg-white z-10'>
    <!-- Top App Bar -->
<header class="flex items-center  p-4 pb-2 justify-between">
<button class="text-[#111818] dark:text-white flex size-12 shrink-0 items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
</button>
</header>
<!-- Progress Indicators -->
<div class="flex w-full flex-row items-center justify-center gap-3 py-1 pb-2 px-4">
<div class="flex-1 h-1 rounded-full bg-primary"></div>
<div class="flex-1 h-1 rounded-full bg-primary"></div>
<div class="flex-1 h-1 rounded-full bg-primary"></div>
</div>
</div>
<main class="flex flex-col gap-8 px-4 py-2 mt-[90px] md:mx-40">
<!-- Amenities Section -->
<section>
<h2 class="text-[22px] font-bold leading-tight tracking-[-0.015em] text-gray-900 dark:text-gray-100 pb-2 pt-4">What amenities do you offer?</h2>
<p class="text-base font-normal leading-normal text-gray-600 dark:text-gray-300 pb-4">Select all that apply. This helps students find the perfect fit.</p>
<!-- Chips -->
<div class="flex flex-wrap gap-3">
<div class="flex h-10 cursor-pointer select-none items-center justify-center gap-x-2 rounded-full bg-primary/20 pl-3 pr-4 ring-2 ring-primary">
<span class="material-symbols-outlined text-primary text-base">check</span>
<p class="text-sm font-medium text-gray-900 dark:text-gray-100">Wi-Fi</p>
</div>
<div class="flex h-10 cursor-pointer select-none items-center justify-center gap-x-2 rounded-full bg-gray-100 pl-3 pr-4 dark:bg-gray-800">
<span class="material-symbols-outlined text-gray-600 dark:text-gray-400">laundry</span>
<p class="text-sm font-medium text-gray-800 dark:text-gray-200">Laundry</p>
</div>
<div class="flex h-10 cursor-pointer select-none items-center justify-center gap-x-2 rounded-full bg-gray-100 pl-3 pr-4 dark:bg-gray-800">
<span class="material-symbols-outlined text-gray-600 dark:text-gray-400">soup_kitchen</span>
<p class="text-sm font-medium text-gray-800 dark:text-gray-200">Kitchen</p>
</div>
<div class="flex h-10 cursor-pointer select-none items-center justify-center gap-x-2 rounded-full bg-primary/20 pl-3 pr-4 ring-2 ring-primary">
<span class="material-symbols-outlined text-primary text-base">check</span>
<p class="text-sm font-medium text-gray-900 dark:text-gray-100">A/C</p>
</div>
<div class="flex h-10 cursor-pointer select-none items-center justify-center gap-x-2 rounded-full bg-gray-100 pl-3 pr-4 dark:bg-gray-800">
<span class="material-symbols-outlined text-gray-600 dark:text-gray-400">security</span>
<p class="text-sm font-medium text-gray-800 dark:text-gray-200">Security</p>
</div>
<div class="flex h-10 cursor-pointer select-none items-center justify-center gap-x-2 rounded-full bg-gray-100 pl-3 pr-4 dark:bg-gray-800">
<span class="material-symbols-outlined text-gray-600 dark:text-gray-400">weekend</span>
<p class="text-sm font-medium text-gray-800 dark:text-gray-200">Common Area</p>
</div>
</div>
<!-- Add More Input -->
<div class="relative mt-5">
<input class="w-full rounded-lg border-gray-300 bg-white py-2.5 pl-4 pr-24 text-sm text-gray-800 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200 dark:ring-gray-700 dark:focus:ring-primary" placeholder="Add other amenities..." type="text"/>
<button class="absolute inset-y-1 right-1 rounded-md bg-primary/20 px-4 text-sm font-semibold text-primary hover:bg-primary/30">Add</button>
</div>
</section>
<!-- Photo Gallery Section -->
<section>
<h2 class="text-[22px] font-bold leading-tight tracking-[-0.015em] text-gray-900 dark:text-gray-100 pb-2 pt-4">Showcase your space</h2>
<p class="text-base font-normal leading-normal text-gray-600 dark:text-gray-300 pb-4">Upload high-quality photos. The first image will be your cover photo.</p>
<!-- Image Uploader -->
<div class="flex cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-gray-300 bg-gray-100/50 py-10 dark:border-gray-600 dark:bg-gray-800/50">
<div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/20">
<span class="material-symbols-outlined text-primary">upload</span>
</div>
<p class="mt-4 text-sm font-semibold text-gray-800 dark:text-gray-200">Tap to upload or drag &amp; drop</p>
<p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, GIF up to 10MB</p>
</div>
<!-- Image Thumbnail Grid -->
<div class="mt-6 grid grid-cols-3 gap-4 sm:grid-cols-4">
<div class="relative aspect-square group">
<img class="h-full w-full rounded-lg object-cover" data-alt="Modern hotel room with a large bed and ocean view" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiSEyN_ERVo08kM_tWLTt3pjpZZX4lheq7CZ-kbGlSBi9jh8uvGLKiaj88rNF5hhq9rXfKrLD0aGgmpeV-div__QGiKnNLFuNHZohvO1SakKQLUth_pwCSKZSVqn-CFSBiKDWe_zwsvVUDStS9i_hmtSjeGn5sNFH5Mg0NRIf8Ghi6GmPxgfqrbGte4EmBPqKUCkpIixu0YqXH7pibuvf3Xm6wER1SOSh73T5d-Fa34R0VTqxO9tJyB35jbj2RNnjYZxGtPWm3b-g0"/>
<div class="absolute inset-0 rounded-lg bg-black/20"></div>
<button class="absolute top-1.5 right-1.5 flex h-6 w-6 items-center justify-center rounded-full bg-white/80 text-gray-800 opacity-0 transition-opacity group-hover:opacity-100 dark:bg-black/70 dark:text-white">
<span class="material-symbols-outlined text-base">close</span>
</button>
</div>
<div class="relative aspect-square group">
<img class="h-full w-full rounded-lg object-cover" data-alt="Clean and bright hostel room with multiple bunk beds" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyr-H4-Ee0poedqscuhrrmZ4n_ZDyXkFVggDsLc6xw_tOCwjJAHHGTg7ejI6SnU-Ie45p1nm8otapY4JMF6UjOR-80AmqQ929u47pKaFASB0-UCSl1iJisT7OD7JdvuauGxYbRiVpbYy7jS8dam0wlDzN36b5VTA5rRDWaCpfXiXLM1RgcR4Fs2QTlA-1uokgkWsPMPE5mnUa_20yv57S13tyAiN_OxkS3He_cPiNRUnXW3U8MjVidX-13ZoLy-JlVfp7CzEQENfGQ"/>
<button class="absolute top-1.5 right-1.5 flex h-6 w-6 items-center justify-center rounded-full bg-white/80 text-gray-800 opacity-0 transition-opacity group-hover:opacity-100 dark:bg-black/70 dark:text-white">
<span class="material-symbols-outlined text-base">close</span>
</button>
</div>
<div class="relative aspect-square group">
<img class="h-full w-full rounded-lg object-cover" data-alt="Spacious common area in a hostel with comfortable seating" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-n9hmvD9SOF1yN_VJWRt2pLYzjWvLFbgHCKxlDaRLjwmM-Yzyaiqxg_s9bgW-Lnptnp828-WEDkFR4tZNvVTz1drpismlsF68E6zPo4C2E2OdMmaX6WCOgKg9-j5cWd3GasVC7ZS54YaNkhbchXzBBoCmHJTAwo0fx9JZnoP3Bke3qCLA5B7sntx4l2paMkhfv30-CJVeSdHcHwyw7V3WuJF0BuM-DFjITtI2BiAJPb24svzvA7PFYWfajYs8-wmZcnAHWWzlYK8u"/>
<button class="absolute top-1.5 right-1.5 flex h-6 w-6 items-center justify-center rounded-full bg-white/80 text-gray-800 opacity-0 transition-opacity group-hover:opacity-100 dark:bg-black/70 dark:text-white">
<span class="material-symbols-outlined text-base">close</span>
</button>
</div>
</div>
</section>
</main>
        @endif
        <footer class="fixed bottom-0 w-full bg-background-light dark:bg-background-dark p-4 pt-6">
<div class='flex gap-10'>
    @if($currentStep>1)
    <button wire:click='decrementStep' class="w-full h-14 rounded-xl bg-primary text-[#112121] text-lg font-bold flex items-center justify-center hover:bg-opacity-90 transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark">Previous</button>
    @endif
    @if($currentStep<$totalStep)
    <button wire:click='incrementStep' class="w-full h-14 rounded-xl bg-primary text-[#112121] text-lg font-bold flex items-center justify-center hover:bg-opacity-90 transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark">Continue</button>
    @endif
    @if($currentStep==$totalStep)
    <button class="w-full h-14 rounded-xl bg-primary text-[#112121] text-lg font-bold flex items-center justify-center hover:bg-opacity-90 transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark">Submit & List Hostel</button>
    @endif
</div>
        </footer>
    </x-generalLayout>
</div>
