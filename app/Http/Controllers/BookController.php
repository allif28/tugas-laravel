<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data buku berhasil diambil',
            'data' => $books
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'published_year' => 'required|integer|digits:4',
            'isbn' => 'required|string|unique:books,isbn',
            'summary' => 'nullable|string'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);

        }

        $book = Book::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data buku berhasil ditambahkan',
            'data' => $book
        ], 201);
    }

    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {

            return response()->json([
                'success' => false,
                'message' => 'Data buku tidak ditemukan',
                'data' => null
            ], 404);

        }

        return response()->json([
            'success' => true,
            'message' => 'Detail buku berhasil ditemukan',
            'data' => $book
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {

            return response()->json([
                'success' => false,
                'message' => 'Data buku tidak ditemukan',
                'data' => null
            ], 404);

        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'published_year' => 'required|integer|digits:4',
            'isbn' => 'required|string|unique:books,isbn,' . $id,
            'summary' => 'nullable|string'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);

        }

        $book->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data buku berhasil diupdate',
            'data' => $book
        ], 200);
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {

            return response()->json([
                'success' => false,
                'message' => 'Data buku tidak ditemukan',
                'data' => null
            ], 404);

        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data buku berhasil dihapus',
            'data' => null
        ], 200);
    }
}