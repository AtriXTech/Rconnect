<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#4FD1C5",
              "secondary": "#3B82F6",
              "background-light": "#FFFFFF",
              "background-dark": "#1A202C",
              "text-light": "#1A202C",
              "text-dark": "#FFFFFF",
              "border-light": "#E2E8F0",
              "border-dark": "#4A5568",
              "placeholder-light": "#A0AEC0",
              "placeholder-dark": "#718096"
            },
            fontFamily: {
              "display": ["Lexend", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px"},
          },
        },
      }
    </script>


</head>

    <!-- Your content / Livewire components -->
    {{ $slot ?? '' }}

    @livewireScripts

</html>
