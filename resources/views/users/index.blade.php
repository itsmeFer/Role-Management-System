<!-- resources/views/user/index.blade.php -->
@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <h1>User Dashboard</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
