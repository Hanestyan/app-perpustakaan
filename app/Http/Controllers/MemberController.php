<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Data dummy anggota
    private array $members = [
        ['id' => 1, 'nama' => 'Reza', 'nim' => '3120600001', 'email' => 'reza@gmail.com', 'nomor_telepon' => '081234567890', 'alamat' => 'Jl. Kertajaya, Surabaya', 'status' => 'Aktif'],
        ['id' => 2, 'nama' => 'Ladesh', 'nim' => '3120600002', 'email' => 'ladesh@gmail.com', 'nomor_telepon' => '081987654321', 'alamat' => 'Jl. Keputih, Surabaya', 'status' => 'Aktif'],
    ];

    public function index()
    {
        $members = $this->members;
        
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(StoreMemberRequest $request)
    {
        // Validasi otomatis berjalan sebelum baris ini dieksekusi
        $validated = $request->validated();

        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" berhasil ditambahkan (data dummy).");
    }

    // Method sisanya dibiarkan dummy dulu
    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}