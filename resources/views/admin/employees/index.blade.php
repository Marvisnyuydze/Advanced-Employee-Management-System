<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Employees') }}
        </h2>
    </x-slot>
        <div class="container" style="margin: 15px auto;padding: 2px; overflow: auto; max-width: 80%;">
            @if(count($employees) > 0)
                <table class="project-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date of Birth</th>
                            <th>Join Date</th>
                            <th>Open Logs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $user)
                            <tr>
                                <td>{{ $user->first_name." ".$user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->date_of_birth }}</td>
                                <td>{{ $user->join_date }}</td>
                                <td>
                                    <a href="{{route('employees.open_logs', ['id' => $user->id])}}">
                                        <span style="display: inline-block; text-align: center; border-radius: 10px;min-width: 90px; width: 100%; text-decoration: underline; color: #fff; background: #ec3;">{{ count($user->openLogs) }}</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $employees->links() }}
            @endif
        </div>
        
</x-app-layout>
