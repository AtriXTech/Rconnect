<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Agent Profile Screen - Detailed</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#4FD1C5",
              "primary-dark": "#38b2ac", // Darker shade for hover states
              "background-light": "#f7fafc",
              "background-dark": "#1a202c",
              "surface-light": "#ffffff",
              "surface-dark": "#2d3748",
              "text-main": "#2d3748",
              "text-inverse": "#f7fafc",
              "text-muted": "#718096",
              "border-light": "#e2e8f0",
              "border-dark": "#4a5568",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {
              "DEFAULT": "0.25rem", 
              "lg": "0.5rem", 
              "xl": "0.75rem", 
              "2xl": "1rem",
              "full": "9999px"
            },
          },
        },
      }
    </script>
<style>
    body {
      /* min-height: max(884px, 100dvh); */
    }.no-scrollbar::-webkit-scrollbar {
        display: none;
    }.no-scrollbar {
        -ms-overflow-style: none;scrollbar-width: none;}
</style>

  </head>
<body class="bg-background-light dark:bg-background-dark text-text-main dark:text-text-inverse font-display antialiased min-h-screen pb-12">
{{$slot}}
</body></html>