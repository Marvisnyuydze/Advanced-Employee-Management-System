<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->first_name." ".$user->last_name }}
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
                            <th>Approve</th>
                            <th>Comments</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logs as $log)
                            <form method="POST" action="{{ route('employees.update_log', ['id' => $log->id]) }}">
                                @csrf
                                <tr>
                                    <td>{{ $log->name }}</td>
                                    <td>{{ $log->description }}</td>
                                    <td>{{ $log->starts_at }}</td>
                                    <td>{{ \number_format($log->duration_in_seconds / 3600, 2) }} h</td>
                                    <td>
                                        <select name="approve" class="m-0 w-full">
                                            <option value="" disabled selected>Choose an option</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </td>
                                    <td>
                                        @if($log->comments !== null)
                                        <textarea styl="color: #999" placeholder="please leave a comment" rows="1" class="m-0 w-full" name="comments">{{$log->comments ?? '' }}</textarea>
                                        @else 
                                        <textarea styl="color: #999" placeholder="please leave a comment" rows="1" class="m-0 w-full" name="comments"></textarea>
                                        @endif
                                    </td>
                                    <td>
                                        <x-button class="ml-4">
                                            {{ __('Save') }}
                                        </x-button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </tbody>
                </table>
                {{ $logs->links() }}
            @endif
        </div>
        
</x-app-layout>
