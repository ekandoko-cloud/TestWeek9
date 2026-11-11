<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'published_year' => 1925,
                'cover_path' => 'covers/great_gatsby.jpg',
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'published_year' => 1960,
                'cover_path' => 'covers/to_kill_a_mockingbird.jpg',
            ],
            [
                'title' => 'Steven Suka Sei',
                'author' => 'Steven Sirait',
                'published_year' => 2026,
                'cover_path' => 'images/blablabla.png',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'published_year' => 1949,
                'cover_path' => 'covers/1984.jpg',
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'published_year' => 1813,
                'cover_path' => 'covers/pride_and_prejudice.jpg',
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'published_year' => 1951,
                'cover_path' => 'covers/catcher_in_the_rye.jpg',
            ],
        ];

        foreach ($books as $book) {
            Book::query()->updateOrCreate(
                ['title' => $book['title']],
                $book
            );
        }
    }
}
