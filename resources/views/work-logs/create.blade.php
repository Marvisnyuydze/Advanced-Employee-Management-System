<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Work Log Entry') }}
        </h2>
    </x-slot>
    <x-employee-new>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('work_logs.store') }}">
            @csrf
            <!-- Form Name -->
            <h2 style="text-align: center">Add Entry</h2>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Name -->
            <div>
                <x-label for="description" :value="__('Description')" />

                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
            </div>

            <div>
                <x-label for="duration" :value="__('Duration e.g 1s 1m 1h 1d')" />

                <x-input id="duration" class="block mt-1 w-full" type="text" name="duration" :value="old('duration')" required/>
            </div>
            <div class="mt-4">
                <x-label for="starts_at" :value="__('Starts At')" />

                <x-input id="starts_at" class="block mt-1 w-full" type="datetime-local" name="starts_at" :value="old('starts_at')" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-employee-new>
</x-app-layout>
