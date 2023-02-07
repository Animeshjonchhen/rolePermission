<x-layout>
    Display all users.
    @can('add users')
        <div class="mt-3">
            <a href="/users/create" class="container">Create new user</a>
        </div>
    @endcan

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row"> {{ $user->id }} </th>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td scope="col" class="d-flex">

                            @can('edit users')
                                <a href="/users/update/{{ $user->id }}" class="btn btn-primary mx-3">Edit</a>
                            @endcan

                            @can('delete users')
                                <form action="/users/delete/{{ $user->id }} " method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mx-3" type="submit">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
