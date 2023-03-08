@extends('layouts.template')
@section('content')
    <div class="mt-4">
        <form method="post" action="{{ route("owners.store") }}">
            @csrf
            <div class="mb-3 col-md-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="">
            </div>
            <div class="mb-3 col-md-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" id="surname" name="surname" class="form-control" value="">
            </div>
            <button class="btn btn-success">Add Owner</button>
        </form>
    </div>
@endsection
