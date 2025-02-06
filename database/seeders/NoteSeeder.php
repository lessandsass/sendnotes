<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        User::all()->each(function (User $user) {
            Note::factory()->count(10)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
