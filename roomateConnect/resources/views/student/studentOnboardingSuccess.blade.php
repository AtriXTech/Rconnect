<x-generalLayout>
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Hero Section: Illustration & Success Message -->
<div class="flex flex-col px-6 pt-12 pb-6 flex-grow-0">
<div class="flex flex-col items-center gap-8">
<!-- Illustration -->
<div class="relative w-full max-w-[320px] aspect-square flex items-center justify-center">
<div class="absolute inset-0 bg-brand-cyan/10 dark:bg-brand-cyan/20 rounded-full blur-3xl transform scale-90"></div>
<div class="bg-center bg-no-repeat bg-cover rounded-xl w-full h-full shadow-sm" data-alt="3D illustration of people high-fiving or celebrating with confetti" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKuAZkS9PCweBbX11vF8gQv33Ff0aNfhaq-ZSfN0BshlM75jM-2DyjmEV2nZzq8ClLrSgwNLUJc5odTPTMj-2tzlDoPtOYbOaH1r8RuvgZUIWm2CmeItupq4UrE_cWYIqn37oed7DltOn69Fn47wPRlX5c_EkIHs1rSEslVDyKtJ9sf_pR83hcFZ0Q4t0do642CrchBWNO-5LCx1bOipKZ_GWC6otNVmtEHByBvujpseV6OkV1wxhJSkXDsSAoFzyaUomdZGoGnsc"); background-position: center 20%;'>
</div>
</div>
<!-- Text Content -->
<div class="flex max-w-[480px] flex-col items-center gap-3">
<h1 class="text-3xl md:text-4xl font-bold leading-tight tracking-[-0.015em] text-center text-slate-900 dark:text-white">
                        You're all set 🎉
                    </h1>
<p class="text-slate-600 dark:text-slate-300 text-base md:text-lg font-normal leading-relaxed text-center">
                        Your profile has been created successfully. We're excited to help you find your perfect match!
                    </p>
</div>
</div>
</div>
<!-- Actions Container -->
<div class="flex flex-col px-6  gap-8 w-full max-w-[480px] mx-auto mt-4">
<!-- Student Actions -->
<div class="flex flex-col gap-4">
<a href="{{route('hostels')}}">
    <button class="bg-primary group flex cursor-pointer items-center justify-between overflow-hidden rounded-full h-14 px-6 bg-brand-cyan hover:brightness-105 active:scale-[0.98] transition-all duration-200 text-[#181811] w-full shadow-lg shadow-brand-cyan/20">
<span class="text-lg font-bold tracking-[0.015em]">Explore Hostels</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" style="font-size: 24px;">apartment</span>
</button>
</a>
<a href="{{route('discover')}}">
    <button class="bg-primary group flex cursor-pointer items-center justify-between overflow-hidden rounded-full h-14 px-6 bg-brand-cyan hover:brightness-105 active:scale-[0.98] transition-all duration-200 text-[#181811] w-full shadow-lg shadow-brand-cyan/20">
<span class="text-lg font-bold tracking-[0.015em]">Find Roommates</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" style="font-size: 24px;">group</span>
</button>
</a>
</div>

</div>
{{-- <div class="h-10"></div> --}}
</div>
</x-generalLayout>
