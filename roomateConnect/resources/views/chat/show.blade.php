<x-generalLayout>
        <div 
    x-data="{ 
        mediaPreview: null,
        openMedia(src) { this.mediaPreview = src },
        closeMedia() { this.mediaPreview = null }
    }"
> 
    <header class="fixed right-0 left-0 top-0  z-30 bg-white/95 dark:bg-card-dark/95 backdrop-blur-sm border-b border-gray-200/50 dark:border-gray-800/50 px-4 py-2 flex items-center gap-2 shadow-sm shrink-0 h-16">
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
<h1 class="text-sm font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors leading-tight">
    @php
    $otherUser = $conversation->user_one_id == auth()->id()
        ? $conversation->userTwo
        : $conversation->userOne;
@endphp

{{ $otherUser->name }}
</h1>
<span class="text-[11px] text-primary font-medium leading-tight">Active now</span>
</div>
</div>
<button class="p-2 rounded-full text-gray-400 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors focus:outline-none">
<span class="material-symbols-outlined text-[24px]">more_vert</span>
</button>
</header>

<div class="flex flex-col gap-6 mt-5 md:mx-10 mx-2 mt-[100px]">
      @foreach($conversation->messages as $message)
    {{-- {{dd($conversation)}} --}}
       @if($message->sender_id == auth()->id()) 
    <!-- ================= SENT MESSAGE ================= -->
    <div class="self-end flex flex-col items-end gap-1 max-w-[85%]">

        <!-- Bubble -->
       @if($message->body)
        <div class="bg-primary/10 dark:bg-primary/20 p-3.5 rounded-2xl rounded-br-none border border-primary/20 shadow-sm">
            <p class="text-[15px] text-gray-900 dark:text-gray-50">
               {{ $message->body }}
            </p>
        </div>
       @endif

       @php
    $ext = $message->media ? strtolower(pathinfo($message->media, PATHINFO_EXTENSION)) : null;
    @endphp
       @if(in_array($ext, ['jpg','jpeg','png','webp']))
    <img
        src="{{ asset('storage/' . $message->media) }}"
        class="w-32 h-32 rounded-xl object-cover cursor-pointer"
        x-on:click="openMedia('{{ asset('storage/' . $message->media) }}')"
    >
    @endif

    {{-- VIDEO MESSAGE --}}
@if(in_array($ext, ['mp4','mov','webm']))
 {{-- {{dd( $message->media)}} --}}
    <video autoplay
        class="w-32 h-32 rounded-xl object-cover cursor-pointer"
        x-on:click="openMedia('{{ asset('storage/' . $message->media) }}')"
    >
        <source src="{{ asset('storage/' . $message->media) }}">
    </video>
@endif

        <!-- Time + Read -->
        <div class="flex items-center gap-1 pr-1">
            <span class="text-[10px] text-gray-400">10:45 AM</span>
            <span class="material-symbols-outlined text-[14px] text-primary">done_all</span>
       
        </div>
    </div>
   @else
    
    <!-- ================= RECEIVED MESSAGE ================= -->
    <div class="flex flex-col items-start gap-1 max-w-[85%]">
        <div class="flex items-end gap-2">

            <!-- Avatar -->
            <div class="h-8 w-8 rounded-full bg-gray-300 overflow-hidden flex-shrink-0 mb-1">
                <img src="https://i.pravatar.cc/40" alt="User avatar" class="w-full h-full object-cover">
            </div>

            <!-- Bubble -->
           @if($message->body)
        <div class="bg-primary/10 dark:bg-primary/20 p-3.5 rounded-2xl rounded-br-none border border-primary/20 shadow-sm">
            <p class="text-[15px] text-gray-900 dark:text-gray-50">
               {{ $message->body }}
            </p>
        </div>
       @endif

        @php
    $ext = $message->media ? strtolower(pathinfo($message->media, PATHINFO_EXTENSION)) : null;
    @endphp
       @if(in_array($ext, ['jpg','jpeg','png','webp']))
    <img
        src="{{ asset('storage/' . $message->media) }}"
        class="w-32 h-32 rounded-xl object-cover cursor-pointer"
        x-on:click="openMedia('{{ asset('storage/' . $message->media) }}')"
    >
    @endif

    {{-- VIDEO MESSAGE --}}
@if(in_array($ext, ['mp4','mov','webm']))
 {{-- {{dd( $message->media)}} --}}
    <video autoplay
        class="w-32 h-32 rounded-xl object-cover cursor-pointer"
        x-on:click="openMedia('{{ asset('storage/' . $message->media) }}')"
    >
        <source src="{{ asset('storage/' . $message->media) }}">
    </video>
@endif

        </div>

        <span class="text-[10px] text-gray-400 pl-11">10:42 AM</span>
    </div>
     @endif
     @endforeach




<form method="POST" action="{{ route('message.send',$conversation->id) }}"  enctype="multipart/form-data">
    @csrf
<footer class="fixed bottom-0 z-30 w-full bg-white dark:bg-card-dark border-t border-gray-200 dark:border-gray-800 pb-safe shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.02)]">
<div class="max-w-2xl mx-auto px-4 py-3 flex items-end gap-3">
      <input type="file" name="media" class="hidden" id="mediaInput"  onchange="this.form.submit()">
 <button
            type="button"
            onclick="document.getElementById('mediaInput').click()"
            class="mb-1 text-gray-400 hover:text-primary dark:hover:text-primary transition-colors focus:outline-none"
        >
            <span class="material-symbols-outlined text-[28px]">add_circle</span>
        </button>
<div class="flex-1 bg-gray-50 dark:bg-gray-800 rounded-[24px] flex items-center min-h-[48px] px-4 py-2 border border-transparent focus-within:border-primary/30 focus-within:ring-2 focus-within:ring-primary/10 transition-all">
<input name="body" class="w-full bg-transparent border-none p-0 text-[15px] text-gray-900 dark:text-white placeholder-gray-400 focus:ring-0 focus:outline-none" placeholder="Type a message..." type="text"/>
<button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 ml-2 focus:outline-none">
<span class="material-symbols-outlined text-[24px]">sentiment_satisfied</span>
</button>
</div>

<button class="mb-0.5 h-11 w-11 rounded-full bg-primary flex items-center justify-center text-white shadow-md hover:bg-[#3ec4b8] transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary flex-shrink-0">
<span class="material-symbols-outlined text-[22px] ml-0.5">send</span>
</button>
</div>
</footer>
</form>


<div 
    x-show="mediaPreview"
    x-transition
    class="fixed inset-0 bg-black/70 z-50 flex items-center justify-center"
    x-on:click.self="closeMedia()"
>

    <div class="relative max-w-[95vw] max-h-[95vh]">

        <button 
            class="absolute -top-4 -right-4 bg-white rounded-full p-2 shadow"
            x-on:click="closeMedia()"
        >
            ✕
        </button>
<img 
    x-show="mediaPreview.includes('.jpg') || mediaPreview.includes('.jpeg') || mediaPreview.includes('.png') || mediaPreview.includes('.webp')"
    :src="mediaPreview"
    class="rounded-xl max-w-full max-h-[95vh]"
>

<video
    x-show="mediaPreview.includes('.mp4') || mediaPreview.includes('.mov') || mediaPreview.includes('.webm')"
    controls
    autoplay
    class="rounded-xl max-w-full max-h-[95vh]"
>
    <source :src="mediaPreview">
</video>

    </div>

</div>
</div>
</div>
</x-generalLayout>