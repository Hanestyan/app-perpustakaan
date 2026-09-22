<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Mengambil data dari database dengan pagination (10 data per halaman)
        $categories = Category::paginate(10);

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();

        // Simpan data ke database
        Category::create($validated);

        return redirect()->route('categories.index')
            ->with('success', "Kategori \"{$validated['nama_kategori']}\" berhasil ditambahkan.");
    }

    public function edit(string $id)
    {
        // Cari data berdasarkan ID, jika tidak ada langsung tampilkan halaman 404
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
        ]);

        // Update data di database
        $category->update($validated);

        return redirect()->route('categories.index')
            ->with('success', "Kategori \"{$validated['nama_kategori']}\" berhasil diperbarui.");
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        
        // Hapus data dari database
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}