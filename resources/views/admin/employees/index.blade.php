<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Employees') }}
        </h2>
    </x-slot>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $employees->links() }}
            @endif
        </div>
        
</x-app-layout>
