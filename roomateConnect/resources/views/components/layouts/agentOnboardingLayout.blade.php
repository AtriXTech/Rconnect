<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Roommate Connect: Agent Profile</title>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                         "primary": "#4FD1C5",
                        "background-light": "#f8f8f5",
                        "background-dark": "#23220f",
                        "text-light": "#181811",
                        "text-dark": "#ffffff",
                        "input-bg-light": "#e6e6db",
                        "input-bg-dark": "#3a392a",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
                },
            },
        }
    </script>

  </head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark transition-colors duration-200">
{{$slot}}
</body></html>