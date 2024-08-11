<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <style>
            .background-video {
            position: fixed; /* Position it fixed to cover the entire viewport */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the video covers the entire area */
            z-index: -1; /* Make sure the video is behind other content */
        }
            .icon {
                stroke: #696969;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <video class="background-video" autoplay muted loop>
            <source src="video/background_video_new.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-gray-100 overflow-hidden ">
                {{ $slot }}
            </div>
        </div>
        <script>
            feather.replace();
        </script>
    </body>
</html>
