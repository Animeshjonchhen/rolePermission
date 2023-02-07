<x-layout>
    <a href="/roles">Roles</a>
    <h1>Create a new role</h1>
    <form action="/roles/create" method="post">
        @csrf
        <div class="row mb-3">
            <label for="Role Name" class="col-sm-2 col-form-label">Role Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rolename" name="rolename">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Permissions" class="col-sm-2 col-form-label">Permissions</label>
            <div class="col-sm-10">

                @foreach ($permissions as $permission)
                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"> {{ $permission->name }}<br>
                @endforeach
            </div>
        </div>

        <div class="row mb-3">
            <label for="user" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <select name="user_id" id="user_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>

    </form>
</x-layout>
