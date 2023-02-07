<x-layout>

    <div class="container">
        <h1 class="text-primary text-center">
            Update Message!
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

                <form action="/messages/update/{{ $message->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="row mb-3">
                        <label for="Title" class="col-sm-2 col-form-label">Update Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $message->title) }} ">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Message" class="col-sm-2 col-form-label">Update Message</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="message" name="message"
                                value="{{ old('message', $message->message) }}">
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
