<x-generalLayout>
<x-agentNavLayout /> 

@foreach($agency as $agent)
<main class="md:mx-40 flex flex-col gap-6 p-4 mt-[100px]">
<section class="flex flex-col items-center gap-4 py-4">
<div class="relative group">
<div
    class="bg-center bg-no-repeat bg-cover rounded-full h-32 w-32 shadow-sm border-4 border-surface-light dark:border-surface-dark ring-2 ring-primary/30"
    style="background-image: url('{{ $agent->photo ? asset('storage/' . $agent->photo) : asset('images/default-avatar.png') }}')"
>
</div>

<button class="absolute bottom-0 right-0 bg-primary text-primary-content p-2 rounded-full shadow-lg hover:bg-primary/90 transition flex items-center justify-center border-2 border-surface-light dark:border-surface-dark">
<span class="material-symbols-outlined" style="font-size: 20px;">photo_camera</span>
</button>
</div>
<div class="flex flex-col items-center text-center px-4">
<h2 class="text-2xl font-bold leading-tight tracking-[-0.015em] mb-1 uppercase">{{$agent->full_name}}</h2>
<p class="text-text-muted text-sm font-medium leading-relaxed max-w-xs">
               <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
    {{ $agent->full_name }} is a trusted housing agent specializing in premium hostel and off-campus housing solutions.
    Active across {{ implode(', ', $agent->locations ?? []) }}, serving clients with budgets from ₦{{ number_format($agent->min_budget) }} to ₦{{ number_format($agent->max_budget) }}.
    Professional service with a {{ $agent->commission_value }}% commission and a strong focus on client satisfaction.
</p>

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
<p class="text-sm font-semibold text-text-main dark:text-white truncate">(+234){{$agent->phone_number}}</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" style="font-size: 20px;">mail</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Email</p>
<p class="text-sm font-semibold text-text-main dark:text-white truncate">{{$agent->email}}</p>
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
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-0.5">Operating Areas</p>

@foreach ($agent->locations ?? [] as $item)
    <p class="text-sm font-semibold text-text-main dark:text-white truncate">
        {{ $item }}
    </p>
@endforeach
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
@foreach ($agent->services as $item)
    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary/10 text-primary-dark dark:text-primary">
                        {{$item}}
                    </span>
@endforeach
</div>
</div>
<div class="h-px bg-border-light dark:bg-border-dark w-full"></div>
<div>
<p class="text-xs font-medium text-text-muted uppercase tracking-wider mb-3">Fees &amp; Policies</p>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
<span class="text-sm text-text-main dark:text-white">Commission Type => {{$agent->commission_type}}</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
<span class="text-sm text-text-main dark:text-white">Commission Amount => %{{$agent->commission_value}} </span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-size: 18px;">check_circle</span>
<span class="text-sm text-text-main dark:text-white">Minimum budget of hostel i lease out is => {{$agent->min_budget}}</span>
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
                           #{{$agent->agent_reference}}
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
@endforeach
</x-generalLayout>
