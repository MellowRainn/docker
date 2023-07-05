@extends('layouts.app')

@section('content')
    <div class="container bg-black">
        <div class="mb-3">
            <a href="{{ route('items.create') }}" class="btn btn-primary" style="color: #0060df">Create Item</a>
        </div>

        <table class="table table-dark">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($items as $item)
                <tr>
                    <td class="text-grey-light">{{ $item->name }}</td>
                    <td class="text-grey-light">{{ $item->description }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-light border border-gray-500">
                                <a href="{{ route('items.show', $item->id) }}" style="color: #0060df">Show</a>
                            </button>
                            <button type="button" class="btn btn-outline-light border border-gray-500">
                                <a href="{{ route('items.edit', $item->id) }}" style="color: #0060df">Edit</a>
                            </button>
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST"  style="display: inline-block; color: #0060df">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-light border border-gray-500" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-grey-light">No items found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
