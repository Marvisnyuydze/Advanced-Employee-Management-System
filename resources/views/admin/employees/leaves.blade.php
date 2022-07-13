<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HIPE University Leave Form') }}
        </h2>
    </x-slot>
   
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('employees.register') }}">
            @csrf
            <!-- Form Name -->

    <form action="//submit.form" id="dashboard" method="post" onsubmit="return ValidateForm(this);">
    <script type="text/javascript">
<form action="//submit.form" id="dashboard" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
</script><form action="//submit.form" id="dashboard" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.First_Name.value == "") { alert('First name is required.'); frm.First_Name.focus(); return false; }
if (frm.Last_Name.value == "") { alert('Last name is required.'); frm.Last_Name.focus(); return false; }
if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
return true; }
</script>
<table border="0" cellpadding="5" cellspacing="0">
<label for="Relocate"><b>Type of Leave Requested (Please Tick)</b></label><br />
<input name="Relocate" type="radio" value="Yes" checked="checked" /> Annual<br>      
<input name="Relocate" type="radio" value="No" /> Medical <br>     
<input name="Relocate" type="radio" value="NotSure" /> Maternity <br>
<input name="Relocate" type="radio" value="NotSure" /> Paternity <br>
<input name="Relocate" type="radio" value="NotSure" /> Reservist <br>
<input name="Relocate" type="radio" value="NotSure" /> Unpaid<br>
<input name="Relocate" type="radio" value="NotSure" /> Compassionate <br>
<input name="Relocate" type="radio" value="NotSure" /> Others <br>
</td> </tr> <tr> <td colspan="2">
            <div class="mt-4">
                <x-label for="From_(Date)" :value="__('From (Date)')" />

                <x-input id="From_(Date)" class="block mt-1 w-full" type="date" name="From_(Date)" :value="old('join_date')" required />
            </div>
            <div class="mt-4">
                <x-label for="To_(Date)" :value="__('To (Date)')" />

                <x-input id="To_(Date)" class="block mt-1 w-full" type="date" name="To_(Date)" :value="old('join_date')" required />
            </div>
<label for="Reference"><b>Any Comments</b></label><br />
<textarea name="Reference" rows="7" cols="40" style="width:100%;max-width: 535px"></textarea>
</td> </tr> <tr> <td colspan="2" style="text-align: center;">
<div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
</td> </tr>
</table>
</form>
</table>
</form>
    
</x-app-layout>


            