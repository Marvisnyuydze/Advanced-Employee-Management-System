<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   You're logged in! <!-- Welcome to HIPE University Institute AEMS<br>
                    This is an Advanced Employee Management System Application<br>
                    used for handling the statistics, visualisations and other tabular work<br>
                    <hr><br>
                    Hope you Like it? -->

                </div>
            </div>
        </div>
    </div>
<!-- footer -->
<!-- <div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/danielgarax">
Marvis Nyuydze
</a> - <b>Defense Project 2022</b>
</small>
</div>
</div> -->
<!-- footer -->
</x-app-layout>
