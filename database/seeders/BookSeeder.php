<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book')->insert([
            'book_title' => 'Peer-e-Kamil',
                'book_price' => 850.00,
                'author' => 'Umera Ahmed',
                'created_at' => now(),
                'updated_at' => now(),
            
        ]);
    }
}
