<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HIPE University Leave Form') }}
        </h2>
    </x-slot>
    <x-leave-form>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('employees.leaves') }}">
            @csrf
            <!-- Form Name -->
            <h2 style="text-align: center">Leave Application Form</h2>
    
                  <p> I <hr>       </hr>(name), under the <hr>     </hr>Department, wish to apply for <hr>  </hr>days of leave<br>
                    from <hr>  </hr>to <hr> for the following reason(s).<br>
                    <hr><br>
                    <hr><br>
                    <hr><br>
                    <hr><br>
                  </p>
                    <div class="mt-4">
                        <label for="Type of Leave Requested" :value="__('Type of Leave Requested')" >
                        <input class="mt-1" type="radio" name="Type of Leave Requested" :value="__('Annual')" /> Annual
                        <input class="mt-1" type="radio" name="Type of Leave Requested" :value="__('Medical')" /> Medical
                        <input class="mt-1" type="radio" name="Type of Leave Requested" :value="__('Maternity')" /> Maternity
                        <input class="mt-1" type="radio" name="Type of Leave Requested" :value="__('Paternity')" /> Paternity
                        <input class="mt-1" type="radio" name="Type of Leave Requested" :value="__('Unpaid')" /> Unpaid
                        <input class="mt-1" type="radio" name="Type of Leave Requested" :value="__('Others')" /> Others
                        <label>
                    <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
        </form>
    </x-employee-new>
</x-app-layout>

            