<x-layout>
    Display all Roles with users.
    @can('add role')
        <div class="mt-3">
            <a href="/roles/create" class="container">Create new Role</a>
        </div>
    @endcan

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Role Name</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row"> {{ $user->id }} </th>
                        <td> {{ $user->name }} </td>
                        <td>

                            @foreach ($user->roles as $role)
                                {{ $role->name . ',' }}
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
