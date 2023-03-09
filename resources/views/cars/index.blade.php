@extends("layouts.template1")
@section("content")
    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Reg. Number</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->owner->name }} {{ $car->owner->surname }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->reg_number }}</td>
                    <td>
                        <a href="{{ route("cars.edit", $car->id) }}" class="btn btn-dark">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('cars.destroy', $car->id) }}">
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
            <a href="{{ route("cars.create") }}" class="btn btn-primary">Add new Car</a>
        </div>
    </div>
@endsection
