<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register New Employee') }}
        </h2>
    </x-slot>
    <x-employee-new>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('employees.register') }}">
            @csrf
            <!-- Form Name -->
            <h2 style="text-align: center">Add New Employee</h2>
            <!-- Name -->
            <div>
                <x-label for="first_name" :value="__('First Name')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>
            <!-- Name -->
            <div>
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            </div>

            <div>
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required/>
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- Date of Birth -->
            <div>
                <x-label for="Date of Birth" :value="__('Date of Birth')" />

                <x-input id="Date of Birth" class="block mt-1 w-full" type="text" name="Date of Birth" :value="old('Date of Birth')" required/>
            </div>
            <!-- Gender -->
            <div>
                <x-label for="Gender" :value="__('Gender')" />

                <x-input id="Gender" class="block mt-1 w-full" type="text" name="Gender" :value="old('Gender')" required/>
            </div>
            <!-- Join Date -->
            <div>
                <x-label for="Join Date" :value="__('Join Date')" />

                <x-input id="Join Date" class="block mt-1 w-full" type="text" name="Join Date" :value="old('Join Date')" required/>
            </div>
            
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-employee-new>
</x-app-layout>
