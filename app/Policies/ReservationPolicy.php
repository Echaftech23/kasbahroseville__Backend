<?php

namespace App\Policies;

use App\Models\Reservation;
use App\Models\User;

class ReservationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->reservations->contains('user_id', $user->id);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Reservation $reservation)
    {
        return $user->id === $reservation->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $pendingReservations = Reservation::where('user_id', $user->id)
            ->where('statut', 'Pending')
            ->count();

        return $pendingReservations < 2;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Reservation $reservation): bool
    {
        return $user->id === $reservation->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Reservation $reservation): bool
    {
        return $user->id === $reservation->user_id;
    }
}
