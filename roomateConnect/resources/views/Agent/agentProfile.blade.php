<x-generalLayout>
<nav class="sticky top-0 z-50 w-full bg-surface-light/95 dark:bg-surface-dark/95 backdrop-blur-sm border-b border-border-light dark:border-border-dark">
  <div class="relative flex items-center p-4 h-16">

    <!-- Left: Back Button -->
    <div class="flex items-center">
      <button class="rounded-full p-2 hover:bg-primary/10 transition-colors group">
        <span
          class="material-symbols-outlined text-text-main dark:text-white group-hover:text-primary transition-colors"
          style="font-size: 24px;"
        >
          arrow_back
        </span>
      </button>
    </div>

    <!-- Center: Title -->
    <h1 class="absolute left-1/2 -translate-x-1/2 text-lg font-bold tracking-tight text-text-main dark:text-white">
      My Profile
    </h1>

    <!-- Right: Spacer (optional, keeps balance if you add icons later) -->
    <div class="ml-auto w-10"></div>

  </div>
</nav>

<main class="md:mx-40 flex flex-col gap-6 p-4">
<section class="flex flex-col items-center gap-4 py-4">
<div class="relative group">
<div class="bg-center bg-no-repeat bg-cover rounded-full h-32 w-32 shadow-sm border-4 border-surface-light dark:border-surface-dark ring-2 ring-primary/30" data-alt="Agency Logo with abstract building shapes" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD-57oDXz0gW_DWwc9eLbz1APd8sMYYnQdBuAtQblERQ4bLbs5FBSK69cNvqFU0AvNu1rHsEvyde20j0VZlMoTZPsdotptEiF_FCWFGlKu7_pydWehK_DnQiWv7Efmj73chCKU_Sn3xKJ5-mNqDlEBjXYiHCMLnK4kStuv-8U18LxUxZzOtOELoKFVJ1Iukv7EuxU14kcBzrDnxzxSjheTYt8HjwB-7TZPiBf0HvpLq7IKz8BYOqvLm20zaGavDXmogKCoNfc461BwJ");'>
</div>
<button class="absolute bottom-0 right-0 bg-primary text-primary-content p-2 rounded-full shadow-lg hover:bg-primary/90 transition flex items-center justify-center border-2 border-surface-light dark:border-surface-dark">
<span class="material-symbols-outlined" style="font-size: 20px;">photo_camera</span>
</button>
</div>
<div class="flex flex-col items-center text-center px-4">
<h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] mb-1">Urban Living Realty</h2>
<p class="text-text-muted text-sm font-medium leading-relaxed max-w-xs">
                Connecting students with safe, affordable housing since 2010.
            </p>
</div>
</section>
<section class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden shadow-sm">
<div class="flex items-center justify-between p-5 border-b border-border-light dark:border-border-dark">
<div>
<h3 class="text-base font-bold text-text-main dark:text-white">Agency Information</h3>
<p class="text-xs text-text-muted mt-0.5">Contact details &amp; hours</p>
</div>
<button class="flex items-center justify-center h-8 px-4 bg-primary/10 hover:bg-primary/20 text-primary-dark dark:text-primary text-xs font-bold rounded-lg transition-colors">
                Edit
            </button>
</div>
<div class="grid grid-cols-1 divide-y divide-border-light dark:divide-border-dark">
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" style="font-size: 20px;">call</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Phone</p>
<p class="text-sm font-semibold text-text-main dark:text-white truncate">(555) 123-4567</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" style="font-size: 20px;">mail</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Email</p>
<p class="text-sm font-semibold text-text-main dark:text-white truncate">contact@urbanliving.com</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" style="font-size: 20px;">language</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Website</p>
<p class="text-sm font-semibold text-text-main dark:text-white truncate">urbanliving.com</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" style="font-size: 20px;">location_on</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Office</p>
<p class="text-sm font-semibold text-text-main dark:text-white truncate">123 Main St, New York, NY</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" style="font-size: 20px;">schedule</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Business Hours</p>
<p class="text-sm font-semibold text-text-main dark:text-white truncate">Mon - Fri: 9 AM - 6 PM</p>
</div>
</div>
</div>
</section>
<section class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden shadow-sm">
<div class="flex items-center justify-between p-5 border-b border-border-light dark:border-border-dark">
<div>
<h3 class="text-base font-bold text-text-main dark:text-white">Services Offered</h3>
<p class="text-xs text-text-muted mt-0.5">Housing types &amp; fees</p>
</div>
<button class="flex items-center justify-center h-8 px-4 bg-primary/10 hover:bg-primary/20 text-primary-dark dark:text-primary text-xs font-bold rounded-lg transition-colors">
                Edit
            </button>
</div>
<div class="p-5 flex flex-col gap-4">
<div>
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-3">Housing Types</p>
<div class="flex flex-wrap gap-2">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary/10 text-primary-dark dark:text-primary">
                        Apartments
                    </span>
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary/10 text-primary-dark dark:text-primary">
                        Shared Houses
                    </span>
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary/10 text-primary-dark dark:text-primary">
                        Dorms
                    </span>
</div>
</div>
<div class="h-px bg-border-light dark:bg-border-dark w-full"></div>
<div>
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-3">Fees &amp; Policies</p>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
<span class="text-sm text-text-main dark:text-white">No Broker Fee for Students</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
<span class="text-sm text-text-main dark:text-white">Pet Friendly Options</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
<span class="text-sm text-text-main dark:text-white">Virtual Tours Available</span>
</div>
</div>
</div>
</div>
</section>
<section class="bg-surface-light dark:bg-surface-dark rounded-xl border border-border-light dark:border-border-dark overflow-hidden shadow-sm">
<div class="flex items-center justify-between p-5 border-b border-border-light dark:border-border-dark">
<div>
<h3 class="text-base font-bold text-text-main dark:text-white">Credentials</h3>
<p class="text-xs text-text-muted mt-0.5">License &amp; verification status</p>
</div>
<div class="flex items-center justify-center h-8 w-8 bg-primary rounded-full shadow-sm">
<span class="material-symbols-outlined text-primary-content" style="font-size: 18px;">verified_user</span>
</div>
</div>
<div class="p-5">
<div class="flex items-start gap-4">
<div class="flex-1">
<div class="mb-4">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-1">Status</p>
<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-primary/10 border border-primary/20">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="text-xs font-bold text-primary-dark dark:text-primary">Identity Verified</span>
</div>
</div>
<div>
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-1">License Number</p>
<p class="text-sm font-bold font-mono text-primary bg-background-light dark:bg-background-dark p-2 rounded border border-border-light dark:border-border-dark inline-block">
                            #RE-NY-884210
                        </p>
</div>
</div>
<div class="bg-primary/5 rounded-lg p-3 max-w-[120px] flex flex-col items-center justify-center text-center border border-primary/10">
<span class="text-2xl font-bold text-text-main dark:text-white">12</span>
<span class="text-[10px] font-medium text-text-muted leading-tight mt-1">Years Active</span>
</div>
</div>
<div class="mt-4 pt-4 border-t border-border-light dark:border-border-dark flex justify-end">
<button class="text-xs font-bold text-primary hover:text-primary-dark transition-colors flex items-center gap-1">
                    Update Credentials <span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward</span>
</button>
</div>
</div>
</section>

</main>
</x-generalLayout>
