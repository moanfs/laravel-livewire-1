<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr wire:key='{{ $user->id }}'>
                    <th>{{ $loop->index + $users->firstItem() }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>Mark</td>
                </tr>
            @empty
                <tr>
                    <h1>No Data</h1>
                </tr>
            @endforelse
        </tbody>
    </table>
    <x-pagination :items="$users" />

</div>
