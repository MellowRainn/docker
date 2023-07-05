@extends('layouts.app')

@section('content')
    <h2 style="color: white;">Edit Item</h2>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name" style="color: white;">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}" required>
        </div>

        <div class="form-group">
            <label for="description" style="color: white;">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $item->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #ffffff; color: #ffffff;">Update</button>
    </form>
@endsection
