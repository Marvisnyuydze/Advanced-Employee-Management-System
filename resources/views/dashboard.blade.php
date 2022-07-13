<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="text-center p-6">Welcome to AEMS</h3>
                    <div class="p-6 bg-white border-b border-gray-200">
                        This is an Advanced Employee Managemanet System Application used for handling the statistics, visualisation and other tabular work
                    </div>
                    <span class="text-center p-6">Hope you like it <b>Marvis Nyuydze</b><span>
                </div>
            </div>
        </div>
            <!-- footer -->
        <div class="copyright py-4 text-center">
            <div class="container">
                <small>
                    Copyright -
                    <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/danielgarax">
                        Marvis Nyuydze
                    </a> - <b>Defense Project 2022</b>
                </small>
            </div>
        </div>
    </div>
    <!-- footer -->
</x-app-layout>
