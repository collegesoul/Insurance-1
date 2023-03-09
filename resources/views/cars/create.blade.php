@extends("layouts.template")
@section("content")
    <div class="mt-4">
        <form method="post" action="{{ route("cars.store") }}">
            @csrf
            <div class="mb-3">
                <label for="owner" class="form-label"> Owner</label>
                <select id="owner" name="owner_id" class="form-select">
                    <option value="" hidden="">Choose Owner</option>
                    @foreach($owners as $owner)
                        <option value=" {{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" id="brand" name="brand" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" id="model" name="model" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="reg_no" class="form-label">Registration Number</label>
                <input type="text" id="reg_no" name="reg_number" class="form-control" value="">
            </div>
            <div>
                <button class="btn btn-success">Add Car</button>
            </div>
        </form>

    </div>
@endsection
