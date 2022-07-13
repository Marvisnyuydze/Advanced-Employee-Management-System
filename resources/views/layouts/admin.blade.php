<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- fav -->
        <link rel="icon" type="image/x-icon" href="asset('favicon.ico')">
        <style>
        .project-table {
            border-radius: 5px;
            background-color: #fff;
            width: 100%;
        }
        .project-table td,
        .project-table th {
            padding: 5px;
            text-align: right;
            min-width: 60px;
            white-space: nowrap;
        }
        .project-table th {
            color: #33f;
            font-size: 16px;
        }
        .project-table thead td,
        .project-table tbody td
            {
                border-left: 1px solid #ccc;
                border-bottom: 1px solid #ccc;
            }
        .project-table thead td:last-of-type,
        .project-table tbody td:last-of-type {
            border-right: 1px solid #ccc;
        }
        .project-table thead th {
            background-color: #ccc;    
        }
        .project-table thead th:first-of-type {
            border-top-left-radius: 8px;
        }
        .project-table thead th:last-of-type {
            border-top-right-radius: 8px;
        }
        .project-table tbody tr:first-of-type td {
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
        }
        .project-table tbody tr:last-of-type td {
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
        }
        .project-table tfoot th {
            background-color: transparent;    
        }
        .project-table tfoot th:first-of-type {
            border-bottom-left-radius: 8px;
        }
        .project-table tfoot th:last-of-type {
            border-bottom-right-radius: 8px;
        }
    </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            @include('layouts.top-navigation')
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
