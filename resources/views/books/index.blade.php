
@extends('layouts.app')

@section('title', 'Books')

@section('content')

<div class="card border-0 shadow-sm rounded-3">

    <div class="card-body p-4">


        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">+ Add Book</a>

       
        <form method="GET" action="{{ route('books.index') }}" class="row g-2 mb-4">

            <div class="col-md-3">
                <input type="text"
                       name="search"
                       class="form-control"
                       placeholder="Search book title..."
                       value="{{ request('search') }}">
            </div>

            <div class="col-md-2">
                <select name="genre_id" class="form-select">
                    <option value="">All Genres</option>

                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}"
                            @selected(request('genre_id') == $genre->id)>
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <select name="is_available" class="form-select">
                    <option value="">Any Availability</option>
                    <option value="1" @selected(request('is_available') === '1')>
                        Available
                    </option>
                    <option value="0" @selected(request('is_available') === '0')>
                        Not Available
                    </option>
                </select>
            </div>

        
            <div class="col-md-2">
                <select name="sort" class="form-select">
                    <option value="title" @selected(request('sort', 'title') === 'title')>
                        Sort by Title
                    </option>
                    <option value="year" @selected(request('sort') === 'year')>
                        Sort by Year
                    </option>
                </select>
            </div>

            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Apply</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Clear</a>
            </div>

        </form>

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th scope="col" class="py-3">#</th>
                        <th scope="col" class="py-3">Title</th>
                        <th scope="col" class="py-3">Author</th>
                        <th scope="col" class="py-3">Year</th>
                        <th scope="col" class="py-3">Genre</th>
                        <th scope="col" class="py-3">Availability</th>
                        <th scope="col" class="py-3">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($books as $book)

                        <tr>
                            <td class="fw-semibold text-muted">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <a href="{{ route('books.show', ['book' => $book->id]) }}" class="text-decoration-none fw-medium link-primary">
                                    {{ $book->title }}
                                </a>
                            </td>

                            <td class="text-secondary">
                                {{ $book->author }}
                            </td>

                            <td class="text-secondary">
                                {{ $book->year }}
                            </td>

                            <td>
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2">
                                    {{ $book->genre?->name ?? 'N/A' }}
                                </span>
                            </td>

                            <td>
                                @if ($book->is_available)
                                    <span class="badge bg-success">Available</span>
                                @else
                                    <span class="badge bg-danger">Not Available</span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex gap-1">

                                    <a href="{{ route('books.edit', $book->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                          onsubmit="return confirm('Delete this record?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center py-5 text-muted">
                                No books are currently available.
                            </td>
                        </tr>

                    @endforelse
                </tbody>

            </table>
        </div>

        {{ $books->links() }}

    </div>

</div>

@endsection
