<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function before(User $user, string $ability): ?bool
    {
        if ($user->role === 'admin') {
            return true;
        }

        return null;
    }

    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['staff', 'viewer']);
    }

    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, ['staff', 'viewer']);
    }

    public function create(User $user): bool
    {
        return $user->role === 'staff';
    }

    public function update(User $user, Book $book): bool
    {
        return $user->role === 'staff';
    }

    public function delete(User $user, Book $book): bool
    {
        return false;
    }

    public function deleteAny(User $user): bool
    {
        return false;
    }

    public function restore(User $user, Book $book): bool
    {
        return false;
    }

    public function restoreAny(User $user): bool
    {
        return false;
    }

    public function forceDelete(User $user, Book $book): bool
    {
        return false;
    }

    public function forceDeleteAny(User $user): bool
    {
        return false;
    }
}
