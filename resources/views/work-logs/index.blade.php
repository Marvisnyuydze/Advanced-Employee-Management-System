<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Your work logs') }}
        </h2>
    </x-slot>
        <div class="container" style="margin: 15px auto;padding: 2px; overflow: auto; max-width: 80%;">
            @if(count($logs) > 0)
                <table class="project-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Starts At</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Comments</th>
                            <th>Supervised by</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->name }}</td>
                                <td>{{ $log->description }}</td>
                                <td>{{ $log->starts_at }}</td>
                                <td>{{ \number_format($log->duration_in_seconds / 3600, 2) }} h</td>
                                <td>{{ $log->status }}</td>
                                <td>{{ $log->comments }}</td>
                                <td>{{ $log->supervisor !== null ? $log->supervisor->first_name." ".$log->supervisor->last_name : 'Not reviewed' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $logs->links() }}
            @endif
        </div>
        
</x-app-layout>
