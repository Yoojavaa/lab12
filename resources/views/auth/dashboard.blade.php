@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2 class="text-center mb-4">Welcome to the Dashboard</h2>

    <p class="text-center">You are logged in as {{ Auth::user()->name }}!</p>

    <!-- Add any additional content for the dashboard here -->

    <div class="text-center">
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
@endsection
