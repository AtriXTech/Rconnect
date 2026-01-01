<!-- ================= FIXED BOTTOM TAB ================= -->
<div
    class="fixed bottom-0 left-0 right-0 z-50 bg-white dark:bg-background-dark/95 backdrop-blur-md border-t border-slate-200 dark:border-slate-800/50">

    <div class="flex items-center justify-center px-5 pt-3 pb-2">
        <div class="flex gap-8 overflow-x-auto no-scrollbar pt-2">

            <!-- For You -->
            <a href="{{ route('discover') }}"
               class="group flex flex-col items-center pb-3 min-w-[60px]">
                <span
                    class="text-sm font-bold transition-colors
                    {{ request()->routeIs('discover')
                        ? 'text-primary'
                        : 'text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-200' }}">
                    For You
                </span>

                <div
                    class="h-[3px] w-full rounded-t-full mt-2 transition-all
                    {{ request()->routeIs('discover')
                        ? 'bg-primary shadow-[0_0_8px_rgba(79,209,197,0.4)]'
                        : 'bg-transparent group-hover:bg-slate-200 dark:group-hover:bg-slate-800' }}">
                </div>
            </a>

            <!-- Roomies -->
            <a href="{{ route('roomies') }}"
               class="group flex flex-col items-center pb-3 min-w-[60px]">
                <span
                    class="text-sm font-bold transition-colors
                    {{ request()->routeIs('roomies')
                        ? 'text-primary'
                        : 'text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-200' }}">
                    Roomies
                </span>

                <div
                    class="h-[3px] w-full rounded-t-full mt-2 transition-all
                    {{ request()->routeIs('roomies')
                        ? 'bg-primary shadow-[0_0_8px_rgba(79,209,197,0.4)]'
                        : 'bg-transparent group-hover:bg-slate-200 dark:group-hover:bg-slate-800' }}">
                </div>
            </a>

            <!-- Hostels -->
            <a href="{{ route('hostels') }}"
               class="group flex flex-col items-center pb-3 min-w-[60px]">
                <span
                    class="text-sm font-bold transition-colors
                    {{ request()->routeIs('hostels')
                        ? 'text-primary'
                        : 'text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-200' }}">
                    Hostels
                </span>

                <div
                    class="h-[3px] w-full rounded-t-full mt-2 transition-all
                    {{ request()->routeIs('hostels')
                        ? 'bg-primary shadow-[0_0_8px_rgba(79,209,197,0.4)]'
                        : 'bg-transparent group-hover:bg-slate-200 dark:group-hover:bg-slate-800' }}">
                </div>
            </a>

        </div>
    </div>
</div>
<!-- ================= END BOTTOM TAB ================= -->
