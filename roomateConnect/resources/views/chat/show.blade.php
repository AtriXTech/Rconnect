<x-generalLayout>
    <header class="z-30 bg-white/95 dark:bg-card-dark/95 backdrop-blur-sm border-b border-gray-200/50 dark:border-gray-800/50 px-4 py-2 flex items-center gap-2 shadow-sm shrink-0 h-16">
<a href="{{route('list')}}">
    <button class="p-2 -ml-2 rounded-full text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20">
<span class="material-symbols-outlined">arrow_back</span>
</button>
</a>
<div class="flex items-center gap-3 flex-1 cursor-pointer group ml-1">
<div class="relative">
<div class="h-10 w-10 rounded-full bg-gray-200 dark:bg-gray-700 overflow-hidden border border-gray-100 dark:border-gray-800">
<div class="w-full h-full bg-cover bg-center" data-alt="Portrait of Sarah Jenkins smiling" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBrZbY-9NGCRUztGXx5dB2DwgfSGRINIi09t8nEtHi8iHdv3m6nqPWY9TYyCBq1YHBzIJwwTNCDiGG9Qnr5UbefexJswImfeQ0c_bqpB4J2Mu9OZtRGxw_R5DmhjZlqExvOW7dF64Lvi8QSnXBArU4paDZzhgeGF4LaOCRh5u2Qimbl_FtNIvts5Q604WutA7MeybmZSExQzceqo8SPugqagG1U87WdxfcWpeCD3sZxSOUTWHvjxPpUTv9dob2BN2YwxUbTGC8uKVZM');"></div>
</div>
<span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-500 ring-2 ring-white dark:ring-card-dark"></span>
</div>
<div class="flex flex-col justify-center">
<h1 class="text-sm font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors leading-tight">Sarah Jenkins</h1>
<span class="text-[11px] text-primary font-medium leading-tight">Active now</span>
</div>
</div>
<button class="p-2 rounded-full text-gray-400 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors focus:outline-none">
<span class="material-symbols-outlined text-[24px]">more_vert</span>
</button>
</header>
<footer class="fixed bottom-0 z-30 w-full bg-white dark:bg-card-dark border-t border-gray-200 dark:border-gray-800 pb-safe shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.02)]">
<div class="max-w-2xl mx-auto px-4 py-3 flex items-end gap-3">
<button class="mb-1 text-gray-400 hover:text-primary dark:hover:text-primary transition-colors focus:outline-none">
<span class="material-symbols-outlined text-[28px]">add_circle</span>
</button>
<div class="flex-1 bg-gray-50 dark:bg-gray-800 rounded-[24px] flex items-center min-h-[48px] px-4 py-2 border border-transparent focus-within:border-primary/30 focus-within:ring-2 focus-within:ring-primary/10 transition-all">
<input class="w-full bg-transparent border-none p-0 text-[15px] text-gray-900 dark:text-white placeholder-gray-400 focus:ring-0 focus:outline-none" placeholder="Type a message..." type="text"/>
<button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 ml-2 focus:outline-none">
<span class="material-symbols-outlined text-[24px]">sentiment_satisfied</span>
</button>
</div>
<button class="mb-0.5 h-11 w-11 rounded-full bg-primary flex items-center justify-center text-white shadow-md hover:bg-[#3ec4b8] transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary flex-shrink-0">
<span class="material-symbols-outlined text-[22px] ml-0.5">send</span>
</button>
</div>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Scroll to bottom on load
        const main = document.querySelector('main');
        if(main) {
            main.scrollTop = main.scrollHeight;
        }
    });
</script>
</x-generalLayout>