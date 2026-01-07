<x-generalLayout>
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<x-agentNavLayout />
<main class="flex-1 px-4 pt-[130px] pb-6 md:mx-40">
<div class="mb-6">
<p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Welcome <b class='capitalize text-md'>{{auth()->user()->name}}</b></p>
<h2 class="text-slate-900 dark:text-white tracking-tight text-[28px] font-bold leading-tight">Dashboard</h2>
</div>
<div class="grid grid-cols-2 gap-4 mb-8">
<div class="flex flex-col gap-2 rounded-xl p-5 bg-white dark:bg-[#1A261B] shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex items-center justify-between">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg text-xl">person_add</span>
</div>
<div>
<p class="text-slate-900 dark:text-white tracking-tight text-2xl font-bold leading-tight mt-2">12</p>
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal">Active Leads</p>
</div>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-primary text-sm">trending_up</span>
<p class="text-primary text-xs font-bold leading-normal">+20%</p>
</div>
</div>
<div class="flex flex-col gap-2 rounded-xl p-5 bg-white dark:bg-[#1A261B] shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex items-center justify-between">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg text-xl">mark_chat_unread</span>
</div>
<div>
<p class="text-slate-900 dark:text-white tracking-tight text-2xl font-bold leading-tight mt-2">5</p>
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal">Unread Msgs</p>
</div>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-primary text-sm">trending_up</span>
<p class="text-primary text-xs font-bold leading-normal">+2%</p>
</div>
</div>
</div>
<div class="mb-6">
<div class="flex items-center justify-between mb-4">
<h3 class="text-slate-900 dark:text-white tracking-tight text-xl font-bold leading-tight">Recent Activity</h3>
<a class="text-primary text-sm font-semibold" href="#">View All</a>
</div>
<div class="flex flex-col gap-3">
<div class="flex items-center gap-4 rounded-lg bg-white dark:bg-[#1A261B] p-4 shadow-sm border border-gray-100 dark:border-gray-800">
<div class="h-10 w-10 overflow-hidden rounded-full flex-shrink-0">
<img alt="Student applicant photo" class="h-full w-full object-cover" data-alt="Young man with glasses smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0gNVPl0qS-ogrewNn_r0RyTQIXMw5MzdstNqHhb9FhgzkGobMHZgqg7BL3_-rWZJsbrcnwwqnnFaobLnfFZAoG7-RyCgguJtiL8fiB4du4u5xHx03Ux3OXOwCtzxcHKMXPAyg0TyfH8VIUG3g6Zn66fiQs84J3G9mJTMv8M4uNzrumpZQ9qmna-xddZeGgQXk0HCOsXUAHdLG3Ql3OimZp8zrDpDpGpP6d2KKg6_Ztj9Zqw_mxmx__9duXX6T7m69Rok84UMpEH8Q"/>
</div>
<div class="flex flex-1 flex-col justify-center">
<p class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Michael Chen</p>
<p class="text-gray-500 dark:text-gray-400 text-xs font-medium leading-normal line-clamp-1">Applied for "Downtown Loft 3B"</p>
</div>
<div class="text-gray-400 text-xs whitespace-nowrap">2m ago</div>
</div>
<div class="flex items-center gap-4 rounded-lg bg-white dark:bg-[#1A261B] p-4 shadow-sm border border-gray-100 dark:border-gray-800">
<div class="h-10 w-10 overflow-hidden rounded-full flex-shrink-0 bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">calendar_month</span>
</div>
<div class="flex flex-1 flex-col justify-center">
<p class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Tour Scheduled</p>
<p class="text-gray-500 dark:text-gray-400 text-xs font-medium leading-normal line-clamp-1">With Sarah J. at 2:00 PM</p>
</div>
<div class="text-gray-400 text-xs whitespace-nowrap">1h ago</div>
</div>
<div class="flex items-center gap-4 rounded-lg bg-white dark:bg-[#1A261B] p-4 shadow-sm border border-gray-100 dark:border-gray-800">
<div class="h-10 w-10 overflow-hidden rounded-full flex-shrink-0">
<img alt="Student applicant photo" class="h-full w-full object-cover" data-alt="Young woman smiling outdoors" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFhgf1jnXWMtJDw4MiKBzSdRf8d786_s8MX691WY5qnuQJAaQk-Kkui1-zZ8TnaRldJu1ScRbG-XpB1Fmy8v7r8r770BM5BmkziZUGINXPRvzokZw7IAsffvPozFKFWwQq1KTx1Af2Wn43JoR3LNgy_DgaClYWdaB6Lk_JpVXCpLEVI3fZ59pUGbiutHr7wODUGgGuxn6INC3o_4H7DC5UPq9TJljYH2HXQO1AHnvh7wi2TDKZlMJs3oxeG0PNGFzmXKVhKxyc10wJ"/>
</div>
<div class="flex flex-1 flex-col justify-center">
<p class="text-slate-900 dark:text-white text-sm font-bold leading-normal">Emily Watson</p>
<p class="text-gray-500 dark:text-gray-400 text-xs font-medium leading-normal line-clamp-1">Sent a message about deposit</p>
</div>
<div class="text-gray-400 text-xs whitespace-nowrap">3h ago</div>
</div>
</div>
</div>
<div class="relative overflow-hidden rounded-xl bg-primary p-6">
<div class="relative z-10 flex flex-col gap-2 text-white">
<h3 class="text-lg font-bold">Post a New Listing</h3>
<p class="text-white/90 text-sm max-w-[200px]">Reach thousands of students looking for their perfect roommate.</p>
<a href="{{route('createListing')}}">
    <button class="mt-2 w-fit rounded-lg bg-white px-4 py-2 text-sm font-bold text-primary shadow-sm hover:bg-gray-50 transition-colors">
                    Create Listing
                </button>
</a>
</div>
<div class="absolute -right-6 -bottom-6 text-white/20">
<span class="material-symbols-outlined text-[140px]">home_work</span>
</div>
</div>
@foreach ($listings as $listing)
  <div class="rounded-xl bg-card-light dark:bg-card-dark p-4 shadow-sm">
<div class="flex items-start gap-4">
    {{-- {{dd($listing->media[0])}} --}}
    @foreach (collect($listing->media)->take(1) as $item)
        <img alt="Hostel common area view" class="h-20 w-20 rounded-lg object-cover"   src="{{ asset('storage/' . $item['path']) }}"/>
    @endforeach
<div class="flex-1">
<div class="flex items-center justify-between">
<h4 class="font-bold">{{$listing->hostel_name}}</h4>
<span class="inline-flex items-center rounded-full bg-red-100 dark:bg-red-900 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:text-red-200">Inactive</span>
</div>
<p class="text-sm text-gray-500 dark:text-gray-400">{{$listing->hostel_address}}</p>
<p class="text-sm text-gray-500 dark:text-gray-400">₦{{$listing->hostel_price}}</p>
<div class="mt-2 flex items-center gap-2">
<button class="flex-1 rounded-md bg-primary/20 dark:bg-primary/30 py-1.5 text-xs font-semibold text-text-light dark:text-text-dark">Edit</button>
<button class="flex-1 rounded-md bg-gray-200 dark:bg-gray-700 py-1.5 text-xs font-semibold">View</button>
</div>
</div>
</div>
</div>  
@endforeach
</main>
<div class="h-5"></div>
</div>

</x-generalLayout>