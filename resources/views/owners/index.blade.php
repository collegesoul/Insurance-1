@extends("layouts.template1")
@section("content")
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($owners as $owner)
            <tr>
                <td>{{$owner->name}}</td>
                <td>{{$owner->surname}}</td>
                <td><a href="{{ route("owners.edit",$owner->id) }}" class="btn btn-dark">Edit</a></td>
                <td>
                    <form method="post" action="{{ route('owners.destroy', $owner->id) }}">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route("owners.create") }}" class="btn btn-primary">Add new Owner</a>
        </div>
    </div>
@endsection
