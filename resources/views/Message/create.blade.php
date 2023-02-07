<x-layout>
    <div class="container">

        <a href="/messages" class="p-3"> Message </a>

        <h1 class="text-primary text-center">
            Store New Message!
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
                <h5 class="card-title">Store New Message</h5>

                <form action="/messages/create" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Title" class="form-control" id="title" name="title">
                        </div>
                    </div>  


                    <div class="row mb-3">
                        <label for="message" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Message" class="form-control" id="message" name="message">
                        </div>
                    </div>  

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
