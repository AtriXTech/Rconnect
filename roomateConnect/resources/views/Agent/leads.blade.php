<x-generalLayout>
  <div class="relative flex h-full min-h-screen w-full flex-col overflow-x-hidden  bg-background-light dark:bg-background-dark">
    <x-agentNavLayout />
    <!-- ================= MAIN CONTENT ================= -->
    <!-- Padding-top compensates for fixed header height -->
    <div class="flex-1 flex flex-col p-4 pt-[150px] space-y-4 pb-24 md:mx-40">

      <!-- CARD -->
      <div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-4 shadow-soft border border-transparent hover:border-primary/20 transition-all group">
<div class="flex justify-between items-center mb-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-primary/10 text-primary-dark dark:text-primary text-[11px] font-bold uppercase tracking-wide">
<span class="material-symbols-outlined text-[14px]">bolt</span>
                        Direct Inquiry
                    </span>
<span class="text-[11px] font-semibold text-text-muted dark:text-gray-500">
                        Oct 24, 2:30 PM
                    </span>
</div>
<div class="flex items-start gap-4 mb-3">
<div class="relative">
<div class="h-14 w-14 rounded-full bg-cover bg-center border-2 border-white dark:border-gray-700 shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBeF4keW0LxXbAylWsBiaX6T7EqOvgvzuStSY_4J0XWGzbO5OZnbRf09Sc7wjH8hl3dp-ciqLIWIBXIbCmfiZpfijkiVdOeiBJVzwRGrjun4Neb-ntTo6XIYfM3sN4BRdyObJ6YV1hBUZkaINWQGGIr0RZOkjGxrLDlT5A8B8DTYf3kh4MeWdwOGq5DgL_oDPg7YCNnqmkh9m5WE4e4WP5y4KlILIUk3bk3DXVNrlq9RlciEQguoiwVKV_Cz_lep1TNdNa-3dui92Do");'></div>
<div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-surface-dark rounded-full"></div>
</div>
<div class="flex-1 min-w-0 pt-0.5">
<h3 class="text-base font-bold text-text-main dark:text-white truncate">Alex Johnson</h3>
<p class="text-xs text-text-muted dark:text-gray-400 font-medium mt-0.5 mb-1.5">NYU • Computer Science</p>
<div class="flex flex-wrap gap-2 text-xs text-text-main dark:text-gray-300 leading-relaxed">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">location_on</span> Lower East Side</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">calendar_month</span> Sep 1st</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">payments</span> $1.2k</span>
</div>
</div>
</div>
<div class="grid grid-cols-6 gap-2 mt-4">
<button class="col-span-3 flex items-center justify-center gap-1.5 h-10 rounded-xl bg-primary text-white text-sm font-bold shadow-sm shadow-primary/25 active:scale-95 transition-transform hover:bg-primary-dark">
<span class="material-symbols-outlined text-[18px]">chat</span>
                        Message
                    </button>
<button class="col-span-2 flex items-center justify-center gap-1.5 h-10 rounded-xl border border-primary text-primary bg-transparent text-sm font-bold active:scale-95 transition-transform hover:bg-primary/5">
                        Profile
                    </button>
<button aria-label="Mark as Contacted" class="col-span-1 flex items-center justify-center h-10 rounded-xl border border-gray-200 dark:border-gray-700 text-text-muted bg-transparent hover:bg-green-50 hover:text-green-600 hover:border-green-200 dark:hover:bg-green-900/20 dark:hover:border-green-800 transition-colors">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
</button>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-4 shadow-soft border border-transparent hover:border-primary/20 transition-all">
<div class="flex justify-between items-center mb-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-300 text-[11px] font-bold uppercase tracking-wide">
<span class="material-symbols-outlined text-[14px]">map</span>
                        Based on Location
                    </span>
<span class="text-[11px] font-semibold text-text-muted dark:text-gray-500">
                        Oct 24, 10:15 AM
                    </span>
</div>
<div class="flex items-start gap-4 mb-3">
<div class="relative flex items-center justify-center h-14 w-14 rounded-full bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 text-xl font-bold border-2 border-white dark:border-gray-700 shadow-sm">
                        JD
                    </div>
<div class="flex-1 min-w-0 pt-0.5">
<h3 class="text-base font-bold text-text-main dark:text-white truncate">Jamie Doe</h3>
<p class="text-xs text-text-muted dark:text-gray-400 font-medium mt-0.5 mb-1.5">Columbia • Architecture</p>
<div class="flex flex-wrap gap-2 text-xs text-text-main dark:text-gray-300 leading-relaxed">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">location_on</span> Harlem</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">calendar_month</span> ASAP</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">payments</span> $1.5k Max</span>
</div>
</div>
</div>
<div class="grid grid-cols-6 gap-2 mt-4">
<button class="col-span-3 flex items-center justify-center gap-1.5 h-10 rounded-xl bg-surface-light dark:bg-surface-dark border-2 border-primary text-primary text-sm font-bold shadow-sm active:scale-95 transition-transform hover:bg-primary hover:text-white">
<span class="material-symbols-outlined text-[18px]">chat</span>
                        Message
                    </button>
<button class="col-span-2 flex items-center justify-center gap-1.5 h-10 rounded-xl border border-gray-200 dark:border-gray-700 text-text-main dark:text-white bg-transparent text-sm font-bold active:scale-95 transition-transform hover:bg-gray-50 dark:hover:bg-gray-800">
                        Profile
                    </button>
<button aria-label="Mark as Contacted" class="col-span-1 flex items-center justify-center h-10 rounded-xl border border-gray-200 dark:border-gray-700 text-text-muted bg-transparent hover:bg-green-50 hover:text-green-600 hover:border-green-200 dark:hover:bg-green-900/20 dark:hover:border-green-800 transition-colors">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
</button>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-2xl p-4 shadow-soft border border-transparent hover:border-primary/20 transition-all opacity-90">
<div class="flex justify-between items-center mb-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md bg-primary/10 text-primary-dark dark:text-primary text-[11px] font-bold uppercase tracking-wide">
<span class="material-symbols-outlined text-[14px]">bolt</span>
                        Direct Inquiry
                    </span>
<span class="text-[11px] font-semibold text-text-muted dark:text-gray-500">
                        Yesterday
                    </span>
</div>
<div class="flex items-start gap-4 mb-3">
<div class="relative flex items-center justify-center h-14 w-14 rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-400 text-xl font-bold border-2 border-white dark:border-gray-700 shadow-sm">
                        MK
                    </div>
<div class="flex-1 min-w-0 pt-0.5">
<h3 class="text-base font-bold text-text-main dark:text-white truncate">Mia Khalifa</h3>
<p class="text-xs text-text-muted dark:text-gray-400 font-medium mt-0.5 mb-1.5">Fashion Institute • Design</p>
<div class="flex flex-wrap gap-2 text-xs text-text-main dark:text-gray-300 leading-relaxed">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">location_on</span> Downtown</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">calendar_month</span> Oct 1</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-text-muted">payments</span> $2.0k</span>
</div>
</div>
</div>
<div class="grid grid-cols-6 gap-2 mt-4">
<button class="col-span-3 flex items-center justify-center gap-1.5 h-10 rounded-xl bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-gray-700 text-text-main dark:text-white text-sm font-bold shadow-sm active:scale-95 transition-transform hover:bg-gray-50">
<span class="material-symbols-outlined text-[18px]">chat</span>
                        Message
                    </button>
<button class="col-span-2 flex items-center justify-center gap-1.5 h-10 rounded-xl border border-gray-200 dark:border-gray-700 text-text-main dark:text-white bg-transparent text-sm font-bold active:scale-95 transition-transform hover:bg-gray-50 dark:hover:bg-gray-800">
                        Profile
                    </button>
<button aria-label="Mark as Contacted" class="col-span-1 flex items-center justify-center h-10 rounded-xl border border-gray-200 dark:border-gray-700 text-text-muted bg-transparent hover:bg-green-50 hover:text-green-600 hover:border-green-200 dark:hover:bg-green-900/20 dark:hover:border-green-800 transition-colors">
<span class="material-symbols-outlined text-[20px]">check_circle</span>
</button>
</div>
</div>
<div class="text-center py-6">
<p class="text-sm text-text-muted dark:text-gray-500 font-medium">You've caught up with all recent leads!</p>
<button class="mt-2 text-primary text-sm font-bold hover:underline">View Archived Leads</button>
</div>

     

    </div>
    <!-- ================= END MAIN CONTENT ================= -->


    <!-- FLOATING ACTION BUTTON -->
    <div class="fixed bottom-6 right-6">
      <button class="flex items-center justify-center w-14 h-14 bg-primary text-white rounded-full shadow-lg hover:bg-primary-dark transition-all active:scale-95">
        <span class="material-symbols-outlined text-[28px]">add</span>
      </button>
    </div>

  </div>
</x-generalLayout>
