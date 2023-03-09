@extends("layouts.template")
@section("content")
    <div class="mt-4">
        <form method="post" action="{{ route("cars.update", $car->id)}}">
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="owner" class="form-label"> Owner</label>
                <input type="text" id="owner" name="owner_id" class="form-control"
                       value="{{$car->owner->name}} {{$car->owner->surname}}" disabled>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" id="brand" name="brand" class="form-control" value="{{$car->brand}}">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" id="model" name="model" class="form-control" value="{{$car->model}}">
            </div>
            <div class="mb-3">
                <label for="reg_no" class="form-label">Registration Number</label>
                <input type="text" id="reg_no" name="reg_number" class="form-control" value="{{$car->reg_number }}">
            </div>
            <div>
                <button class="btn btn-success">Update Car</button>
            </div>
        </form>

    </div>
@endsection
