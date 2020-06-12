<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view()
    {
        // get current logged in user
        $user = User::user();

        // load post
        $message = Post::find(1);

        if ($user->can('view', $message)) {
            echo "Current logged in user is allowed to write a message: {$message->id}";
        } else {
            echo 'Not Authorized.';
        }
    }
    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create()
    {
        // get current logged in user
        $user = User::user();

        if ($user->can('create', Post::class)) {
            echo 'Current logged in user is allowed to create a message.';
        } else {
            echo 'Not Authorized';
        }

        exit;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update()
    {
        // get current logged in user
        $user = User::user();

        // load post
        $message = Post::find(1);

        if ($user->can('update', $message)) {
            echo "Current logged in user is allowed to update the message: {$message->id}";
        } else {
            echo 'Not Authorized.';
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete()
    {
        // get current logged in user
        $user = User::user();

        // load post
        $message = Post::find(1);

        if ($user->can('delete', $message)) {
            echo "Current logged in user is allowed to delete the Post: {$message->id}";
        } else {
            echo 'Not Authorized.';
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
