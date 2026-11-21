@extends('layouts.app')

@section('title', 'Log in')

@section('content')
<div class="container mt-4" style="max-width: 480px;">
    <h2 class="mb-3">Log in</h2>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" value="{{ old('email') }}" class="form-control">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control">
        </div>

        <button class="btn btn-primary">Log in</button>
    </form>
</div>
@endsection