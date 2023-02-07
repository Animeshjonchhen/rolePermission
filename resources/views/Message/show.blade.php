<x-layout>

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @isset($message)
                    <tr>
                        <td scope="col">{{ $message->title }}</td>
                        <td scope="col">{{ $message->message }}</td>
                        <td scope="col" class="d-flex">

                            @can('edit message')
                                <a href="/messages/update/{{ $message->id }}" class="btn btn-primary mx-3">Edit</a>
                            @endcan

                            @can('delete message')
                                <form action="/messages/delete/{{ $message->id }} " method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mx-3" type="submit">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endisset()

            </tbody>
        </table>
</x-layout>
