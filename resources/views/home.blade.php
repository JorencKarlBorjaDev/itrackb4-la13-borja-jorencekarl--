
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <h2 class="fw-bold">Book Records System</h2>
        <p class="text-muted mb-4">A small system for books collection.</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Browse Books</a>
    </div>


    <div class="row g-3 mb-4">
        <div class="row g-3 mb-4">
        <div class="col-sm-6">
            <div class="card text-center shadow-sm"><div class="card-body">
                <div class="display-6 fw-bold">{{ $bookCount }}</div>
                <div class="text-muted">Books in the collection</div>
            </div></div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center shadow-sm"><div class="card-body">
                <div class="display-6 fw-bold">{{ $genreCount }}</div>
                <div class="text-muted">Genres</div>
            </div></div>
        </div>
    </div>

    <div class="card shadow-sm">
    <div class="card-body d-flex align-items-center gap-4">

        <img src="{{ asset('img/Profile.jpg') }}"
             alt="Profile Picture"
             width="96"
             height="96"
             class="rounded-circle object-fit-cover">

        <div>
            <h5 class="mb-1">Jorence Karl S. Borja</h5>
            <div class="text-muted small">BSIT - 4th Year - Block 4C</div>
        </div>

       </div>
    </div>

    
@endsection
