<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Roommate Connect Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
               "primary": "#4FD1C5",
              "secondary": "#50E3C2",
              "neutral-light": "#F4F6F8",
              "neutral-dark": "#1A1A1A",
              "text-dark": "#333333",
              "text-light": "#E0E0E0",
            },
            fontFamily: {
              "display": ["Plus Jakarta Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "2xl": "1.5rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            font-size: 24px;
        }
    </style>
<style>
    body {
      /* min-height: max(884px, 100dvh); */
    }
  </style>
  </head>
<body class="font-display bg-neutral-light dark:bg-neutral-dark text-text-dark dark:text-text-light">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden p-6 justify-between">
<div class="w-full max-w-md mx-auto">
<header class="text-center pt-10 pb-12">
<h1 class="text-3xl font-bold tracking-tight text-primary">Roommate Connect</h1>
<p class="text-gray-500 dark:text-gray-400 mt-2">Find your perfect roommate today.</p>
</header>
<form action="{{route('login.process')}}" method="POST">
    @csrf
<main class="flex flex-col gap-6">
<div class="flex flex-col gap-4">
<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="email">Email Address</label>
<div class="relative mt-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" style="font-size: 20px;">mail</span>
<input name='email' value='{{old('name')}}' class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" id="email" placeholder="Email@example.com" type="email"/>
</div>
<div> @error('email') <span class="text-red-500 capitalize">{{ $message }}</span> @enderror </div>
</div>
<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="password">Password</label>
<div class="relative mt-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" style="font-size: 20px;">lock</span>
<input name='password'   class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" id="password" placeholder="input your password" type="password"/>
</div>
<div> @error('password') <span class="text-red-500 capitalize">{{ $message }}</span> @enderror </div>
</div>
</div>
<div class="flex justify-end">
<a class="text-sm font-semibold text-primary hover:underline" href="#">Forgot Password?</a>
</div>
<button class="w-full rounded-xl bg-primary py-4 text-center text-base font-bold text-white shadow-lg shadow-primary/30 transition-transform duration-200 ease-in-out hover:scale-[1.02]">
                Log In
            </button>
</main>
</form>
</div>
<footer class="text-center pb-6 pt-12">
<p class="text-sm text-gray-500 dark:text-gray-400">
            Don't have an account? 
            <a class="font-bold text-primary hover:underline" href="{{route('register')}}">Sign Up</a>
</p>
</footer>
</div>

</body></html>