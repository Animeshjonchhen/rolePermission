<!doctype html>

<title>Password Manager</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

<body>
    <div class="container-fluid bg-light">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <ul class="d-flex justify-content-end" style="list-style-type:none">

                    @if (auth()->user())
                        <li class="nav-item">
                            <a href="" class="p-3"> {{ auth()->user()->name }} </a>
                        </li>

                        <li class="nav-item">
                            <a href="/users" class="p-3"> Show All Users </a>
                        </li>

                        @can('add message')
                            <li class="nav-item">
                                <a href="/messages/create" class="p-3"> Create New Message </a>
                            </li>
                        @endcan

                        @can('add role')
                            <li class="nav-item">
                                <a href="/roles/create" class="p-3"> Create New Role </a>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="p-3">Login</a>
                        </li>

                        <li class="nav-item">
                            <a href="/users/create" class="p-3">Register</a>
                        </li>
                    @endif

                </ul>
            </div>
        </nav>
    </div>

    {{ $slot }}

</body>
