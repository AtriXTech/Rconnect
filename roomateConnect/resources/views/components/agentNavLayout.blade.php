<header class="fixed top-0 left-0 right-0 z-50 bg-white dark:bg-[#1A261B] shadow-sm border-b border-gray-100 dark:border-gray-800">
<div class="flex items-center justify-between px-4 py-3">
<div class="flex items-center gap-2">
<div class="flex items-center justify-center w-8 h-8 rounded bg-primary/20 text-primary">
<span class="material-symbols-outlined text-[20px]">real_estate_agent</span>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Roommate Connect</h2>
</div>
<div class="flex items-center justify-end gap-3">
<button class="relative flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 text-gray-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">notifications</span>
<span class="absolute top-0 right-0 h-2.5 w-2.5 rounded-full bg-red-500 border-2 border-white dark:border-[#1A261B]"></span>
</button>
<div class="h-8 w-8 overflow-hidden rounded-full border border-gray-200 dark:border-gray-700 bg-gray-200">
<img alt="User profile avatar" class="h-full w-full object-cover" data-alt="Young professional woman smiling headshot" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAusyM98PstWotZwPiil9968Dzck-CL7976GJFRdS852xOgotNQdXZBV7tJEahsbDbJngLc1exYfkdrKXZypi6Kn0m8UricDM5jOEkQ_kHrCbfeft7fLbAKUm0rTdgaGjgvQaqSy4C1K8x8nX_mms4A6PP4FbCs47_7b-8CDe0imHoD0JuWqwnAYzJsuKY4gAYozQfIHgCe3GMu1xEra4macC50i6Z4fYqZy6EVjdZ9NabPNQRxKf4MFIHbRrM3s_skeBndSC2gOdmf"/>
</div>
</div>
</div>
<nav class="px-4">
<div class="flex justify-between gap-2 overflow-x-auto no-scrollbar">

<a href="{{ route('agentDashboard') }}"
           class="flex flex-1 min-w-[70px] flex-col items-center justify-center pb-3 pt-2
           {{ request()->routeIs('agentDashboard')
                ? 'border-b-[3px] border-primary text-primary'
                : 'border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'
           }}">
            <span class="material-symbols-outlined mb-1 text-[22px]">dashboard</span>
            <p class="text-xs font-bold leading-normal tracking-[0.015em]">Dashboard</p>
        </a>

        <a href="{{ route('agentLeads') }}"
           class="flex flex-1 min-w-[70px] flex-col items-center justify-center pb-3 pt-2
           {{ request()->routeIs('agentLeads')
                ? 'border-b-[3px] border-primary text-primary'
                : 'border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'
           }}">
            <span class="material-symbols-outlined mb-1 text-[22px]">group</span>
            <p class="text-xs font-bold leading-normal tracking-[0.015em]">Leads</p>
        </a>

<a class="flex flex-1 min-w-[70px] flex-col items-center justify-center border-b-[3px] border-b-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 pb-3 pt-2 transition-colors" href="{{route('show')}}">
<span class="material-symbols-outlined mb-1 text-[22px]">chat_bubble</span>
<p class="text-xs font-bold leading-normal tracking-[0.015em]">Chats</p>
</a>
{{-- Profile --}}
        <a href="{{ route('agentProfile') }}"
           class="flex flex-1 min-w-[70px] flex-col items-center justify-center pb-3 pt-2
           {{ request()->routeIs('agentProfile')
                ? 'border-b-[3px] border-primary text-primary'
                : 'border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'
           }}">
            <span class="material-symbols-outlined mb-1 text-[22px]">person</span>
            <p class="text-xs font-bold leading-normal tracking-[0.015em]">Profile</p>
        </a>
</div>
</nav>
</header>