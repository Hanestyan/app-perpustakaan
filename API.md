# Dokumentasi REST API Sistem Perpustakaan

| No | Fitur | Method | URL Endpoint | Body Request (JSON) | Contoh Response (JSON) |
| :---: | :--- | :---: | :--- | :--- | :--- |
| 1 | Lihat Semua Buku | GET | `/api/books` | *(kosong)* | `[Paste JSON response GET Books di sini]` |
| 2 | Detail Buku | GET | `/api/books/{id}` | *(kosong)* | `[Paste JSON response Detail Buku di sini]` |
| 3 | Tambah Buku Baru | POST | `/api/books` | `{"judul": "Belajar REST API", "penulis": "Lugas Madya", "penerbit": "PENS Press", "tahun_terbit": 2026, "isbn": "978-123", "stok": 15, "category_id": 1}` | `[Paste JSON response sukses POST Books di sini]` |
| 4 | Update Data Buku | PUT | `/api/books/{id}` | `{"judul": "Belajar REST API", "penulis": "Lugas Madya", "penerbit": "PENS Press", "tahun_terbit": 2026, "isbn": "978-123", "stok": 50, "category_id": 1}` | `[Paste JSON response sukses PUT Books di sini]` |
| 5 | Hapus Buku | DELETE | `/api/books/{id}` | *(kosong)* | `[Paste JSON response DELETE Books di sini]` |
| 6 | Lihat Semua Anggota | GET | `/api/members` | *(kosong)* | `[Paste JSON response GET Members di sini]` |
| 7 | Detail Anggota | GET | `/api/members/{id}` | *(kosong)* | `[Paste JSON response Detail Member di sini]` |
| 8 | Lihat Data Peminjaman | GET | `/api/loans` | *(kosong)* | `[Paste JSON response GET Loans di sini]` |
| 9 | Buat Peminjaman Baru | POST | `/api/loans` | `{"member_id": 1, "user_id": 1, "tanggal_pinjam": "2026-11-08", "tanggal_kembali": "2026-11-15", "book_ids": [1, 2]}` | `[Paste JSON response sukses POST Loans di sini]` |
| 10 | Kembalikan Peminjaman | PUT | `/api/loans/{id}/kembalikan` | *(kosong)* | `[Paste JSON response sukses Pengembalian di sini]` |
| 11 | Lihat Statistik | GET | `/api/stats` | *(kosong)* | `[Paste JSON response GET Stats di sini]` |