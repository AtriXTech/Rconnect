<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Roommate Connect: Completion</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f9f506",
                        "brand-cyan": "#11d4d4",
                        "background-light": "#f8f8f5",
                        "background-dark": "#23220f",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>


  </head>
<body class="font-display antialiased text-[#181811] dark:text-white bg-background-light dark:bg-background-dark transition-colors duration-200">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="flex flex-col px-6 pt-12 pb-6 flex-grow-0">
<div class="flex flex-col items-center gap-8">
<div class="relative w-full max-w-[320px] aspect-square flex items-center justify-center">
<div class="absolute inset-0 bg-brand-cyan/10 dark:bg-brand-cyan/20 rounded-full blur-3xl transform scale-90"></div>
<div class="bg-center bg-no-repeat bg-cover rounded-xl w-full h-full shadow-sm" data-alt="3D illustration of people high-fiving or celebrating with confetti" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKuAZkS9PCweBbX11vF8gQv33Ff0aNfhaq-ZSfN0BshlM75jM-2DyjmEV2nZzq8ClLrSgwNLUJc5odTPTMj-2tzlDoPtOYbOaH1r8RuvgZUIWm2CmeItupq4UrE_cWYIqn37oed7DltOn69Fn47wPRlX5c_EkIHs1rSEslVDyKtJ9sf_pR83hcFZ0Q4t0do642CrchBWNO-5LCx1bOipKZ_GWC6otNVmtEHByBvujpseV6OkV1wxhJSkXDsSAoFzyaUomdZGoGnsc"); background-position: center 20%;'>
</div>
</div>
<div class="flex max-w-[480px] flex-col items-center gap-3">
<h1 class="text-3xl md:text-4xl font-bold leading-tight tracking-[-0.015em] text-center text-slate-900 dark:text-white">
                    You're all set 🎉
                </h1>
<p class="text-slate-600 dark:text-slate-300 text-base md:text-lg font-normal leading-relaxed text-center">
                    Your account is ready! Connect with students or start listing your properties today.
                </p>
</div>
</div>
</div>
<div class="flex flex-col px-6 pb-10 gap-6 w-full max-w-[480px] mx-auto mt-4">
<div class="flex flex-col gap-4">

<a href="{{route('agentDashboard')}}">
    <button class="group flex cursor-pointer items-center justify-center gap-3 overflow-hidden rounded-full h-16 px-6 bg-brand-cyan hover:brightness-105 active:scale-[0.98] transition-all duration-200 text-[#181811] w-full shadow-xl shadow-brand-cyan/25">
<span class="material-symbols-outlined" style="font-size: 28px;">Dashboard</span>
<span class="text-xl font-bold tracking-[0.015em]">Go To Dashboard</span>
</button>
</a>
<a href="#">
    <button class="group flex cursor-pointer items-center justify-center gap-3 overflow-hidden rounded-full h-16 px-6 bg-brand-cyan hover:brightness-105 active:scale-[0.98] transition-all duration-200 text-[#181811] w-full shadow-xl shadow-brand-cyan/25">
<span class="material-symbols-outlined" style="font-size: 28px;">add_circle</span>
<span class="text-xl font-bold tracking-[0.015em]">Add Hostel Listing</span>
</button>
</a>
</div>

</div>
<div class="h-10"></div>
</div>

</body></html>