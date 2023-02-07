<x-layout>
    Display all Messages.
    @auth
        <div class="mt-3">
            <a href="/messages/create" class="container">Create new Message</a>
        </div>

        <div class="container-fluid">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Message Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Message Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <th scope="row"> {{ $message->id }} </th>
                            <td> {{ $message->user->name }} </td>
                            <td> {{ $message->title }} </td>
                            <td><a href="/message/{{$message->id}}"> Show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endauth

</x-layout>
