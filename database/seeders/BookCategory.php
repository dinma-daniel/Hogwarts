<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run(): void
    {
        $books = Book::all();

        foreach($books as $book) {
            $keyword_ids = collect([rand(1, 5), rand(1, 5)])->unique()->toArray();
            $book->categories()->attach($keyword_ids);
        }
    }
}
