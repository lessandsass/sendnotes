<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NotePolicy
{
    public function viewAny(User $user): bool
    {
        return false;
    }

    public function view(User $user, Note $note): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Note $note): bool
    {
        return false;
    }

    public function delete(User $user, Note $note): bool
    {
        return $user->id === $note->user_id;
    }

    public function restore(User $user, Note $note): bool
    {
        return false;
    }

    public function forceDelete(User $user, Note $note): bool
    {
        return false;
    }
}
