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
<p class="text-gray-500 dark:text-gray-400 mt-2">Welcome! Let's Get Started</p>
 @if(session()->has('success'))
    <span>{{ session('success') }}</span>
@endif
</header>
<form  action="{{route('register.process')}}" method="POST">
  @csrf
  <main class="flex flex-col gap-6">
<div class="flex flex-col gap-4">

<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="name">Full Name</label>
<div class="relative mt-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" style="font-size: 20px;">Badge</span>
<input name='name' value="{{old('name')}}"  class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" id="name" placeholder="input your full name" type="text"/>
</div>
<div> @error('name') <span class="text-red-500 capitalize">{{ $message }}</span> @enderror </div>
</div>
<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="email">Email Address</label>
<div class="relative mt-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" style="font-size: 20px;">mail</span>
<input value='{{old('email')}}' name="email" class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" id="email" placeholder="you@university.edu" type="email"/>
</div>
<div> @error('email') <span class="text-red-500 capitalize">{{ $message }}</span> @enderror </div>
</div>
<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="email">How would you use Roomate connect</label>
<select name='role_id' class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" >
  <option value=''>Select</option>
  @foreach ($roles as $role)
        <option class="text-white bg-primary" value='{{$role->id}}'>{{$role->role}}</option>
    @endforeach
</select>
<div> @error('role_id') <span class="text-red-500 capitalize">{{ $message }}</span> @enderror </div>
</div>
<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="password">Password</label>
<div class="relative mt-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" style="font-size: 20px;">lock</span>
<input name='password' class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" id="password" placeholder="create a strong  password" type="password"/>
</div>
<div> @error('password') <span class="text-red-500 capitalize">{{ $message }}</span> @enderror </div>
</div>
<div>
<label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="password">confirm  Password</label>
<div class="relative mt-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" style="font-size: 20px;">lock</span>
<input name='password_confirmation' class="w-full rounded-lg border-gray-300 dark:border-gray-600 bg-white dark:bg-neutral-dark py-3 pl-10 pr-4 text-text-dark dark:text-text-light shadow-sm focus:border-primary focus:ring-primary" id="password_confirmation" placeholder="confirm your password" type="password"/>
</div>
</div>
</div>
<div class="flex justify-center">
<p class="text-xs text-center text-placeholder-light dark:text-placeholder-dark">
            By signing up, you agree to our <a class="font-medium text-secondary hover:underline" href="#">Terms of Service</a>.
        </p></div>
<button class="w-full rounded-xl bg-primary py-4 text-center text-base font-bold text-white shadow-lg shadow-primary/30 transition-transform duration-200 ease-in-out hover:scale-[1.02]">
                Sign Up
            </button>
</main></form>
<div class="relative flex items-center my-5">
<div class="flex-grow border-t border-border-light dark:border-border-dark"></div>
<span class="mx-4 flex-shrink text-sm text-placeholder-light dark:text-placeholder-dark">Or sign up with</span>
<div class="flex-grow border-t border-border-light dark:border-border-dark"></div>
</div>
<button class="w-full rounded-xl bg-white text-primary py-4 text-center text-base font-bold shadow-lg shadow-primary/30 transition-transform duration-200 ease-in-out hover:scale-[1.02]">
                Continue with Google
            </button>
</div>
<footer class="text-center pb-6 pt-12">
<p class="text-center text-sm text-neutral-950 dark:text-text-dark">
            Already have an account? <a class="font-bold text-secondary hover:underline" href="{{route('login')}}">Log In</a>
</p>
</footer>
</div>

</body></html>