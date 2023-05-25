<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Letter::create([
            'title' => 'Carta #01',
            'content' => ':)',
            'visibility' => 'public',
            'date_to_send' => '2099-12-12',
            'user_id' => '1'
        ]);
    }
}