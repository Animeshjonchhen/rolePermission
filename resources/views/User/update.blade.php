<x-layout>

    <div class="container">
        <h1 class="text-primary text-center">
            Update User!
        </h1>
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <h5 class="card-title">Update Form</h5>

                <form action="/users/update/{{$user->id}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="row mb-3">
                        <label for="Name" class="col-sm-2 col-form-label">Your Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $user->name) }} ">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email', $user->email) }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
