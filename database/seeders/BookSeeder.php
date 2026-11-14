<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $a = Genre::create(['name' => 'Fiction']);
        $b = Genre::create(['name' => 'Fantasy']);
        $c = Genre::create(['name' => 'Historical Fiction']);

       $books = [
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year' => 1937,
                'is_available' => true,
                'genre_id' => $b->id,
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'year' => 1813,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'Noli Me Tangere',
                'author' => 'Jose Rizal',
                'year' => 1887,
                'is_available' => true,
                'genre_id' => $c->id,
            ],
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'year' => 1925,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'Alice in Wonderland',
                'author' => 'Lewis Carroll',
                'year' => 1865,
                'is_available' => true,
                'genre_id' => $b->id,
            ],
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'author' => 'J.K. Rowling',
                'year' => 1997,
                'is_available' => true,
                'genre_id' => $b->id,
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'year' => 1960,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'El Filibusterismo',
                'author' => 'Jose Rizal',
                'year' => 1891,
                'is_available' => true,
                'genre_id' => $c->id,
            ],
            [
                'title' => 'The Little Prince',
                'author' => 'Antoine de Saint-Exupery',
                'year' => 1943,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'The Chronicles of Narnia',
                'author' => 'C.S. Lewis',
                'year' => 1950,
                'is_available' => true,
                'genre_id' => $b->id,
            ],
            [
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'year' => 1954,
                'is_available' => true,
                'genre_id' => $b->id,
            ],
            [
                'title' => 'Jane Eyre',
                'author' => 'Charlotte Bronte',
                'year' => 1847,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'Wuthering Heights',
                'author' => 'Emily Bronte',
                'year' => 1847,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'The Book Thief',
                'author' => 'Markus Zusak',
                'year' => 2005,
                'is_available' => true,
                'genre_id' => $c->id,
            ],
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'year' => 1988,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'A Tale of Two Cities',
                'author' => 'Charles Dickens',
                'year' => 1859,
                'is_available' => true,
                'genre_id' => $c->id,
            ],
            [
                'title' => 'The Hunger Games',
                'author' => 'Suzanne Collins',
                'year' => 2008,
                'is_available' => true,
                'genre_id' => $b->id,
            ],
            [
                'title' => 'Frankenstein',
                'author' => 'Mary Shelley',
                'year' => 1818,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
            [
                'title' => 'Les Miserables',
                'author' => 'Victor Hugo',
                'year' => 1862,
                'is_available' => true,
                'genre_id' => $c->id,
            ],
            [
                'title' => 'The Adventures of Tom Sawyer',
                'author' => 'Mark Twain',
                'year' => 1876,
                'is_available' => true,
                'genre_id' => $a->id,
            ],
        ];
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}

    