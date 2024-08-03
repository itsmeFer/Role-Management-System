<!-- resources/views/admin/index.blade.php -->
@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <a href="{{ route('admin.create') }}">Create New Item</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
