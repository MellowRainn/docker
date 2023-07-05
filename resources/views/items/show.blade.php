@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-dark text-white mb-3">
            <div class="card-header">
                <h2 class="text-white">Item Details</h2>
            </div>
            <div class="card-body">
                <h4 style="color: white;">Item Name: {{ $item->name }}</h4>
                <p style="color: white;">Item Description: {{ $item->description }}</p>
            </div>
        </div>

        <button class="btn btn-secondary mt-3" style="background-color: #ffffff; border: 3px solid #999999;">
            <a href="{{ route('items.index') }}" style="text-decoration: none; color: #000000;">Back to List</a>
        </button>
    </div>
@endsection
