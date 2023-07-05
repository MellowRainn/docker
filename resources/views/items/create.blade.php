@extends('layouts.app')

@section('content')
    <h2 style="color: white;">Create Item</h2>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name" style="color: white;">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description" style="color: white;">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #ffffff; color: #ffffff;">Create</button>
    </form>
@endsection
