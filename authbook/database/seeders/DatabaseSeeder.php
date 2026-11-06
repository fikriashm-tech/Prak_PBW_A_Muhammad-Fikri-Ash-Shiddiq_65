<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat akun dengan jabatan ADMIN
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin', // <-- Tambahan penanda role
        ]);

        // 2. Buat akun dengan jabatan STAFF
        User::factory()->create([
            'name' => 'Staff User',
            'email' => 'staff@example.com',
            'role' => 'staff', // <-- Tambahan penanda role
        ]);

        // 3. Buat akun dengan jabatan VIEWER
        User::factory()->create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'role' => 'viewer', // <-- Tambahan penanda role
        ]);

        // Buat 10 authors (TETAP SAMA SEPERTI ASLINYA)
        $authors = Author::factory(10)->create();

        // Buat 50 books dengan random authors (TETAP SAMA SEPERTI ASLINYA)
        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);
    }
}