<?php


namespace App;


trait Followable {

    /* follow a user */
    public function toggleFollow(User $user)
    {
        // if ($this->following($user)) {
        //     return $this->unfollow($user);
        // }
        //
        // // have the auth'd user follow the given user
        // return $this->follow($user);

        $this->follows()->toggle($user);

    }

    /* unfollow a user */

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    /* get user all tweets */

    public function following(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    /* check is following */

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    /* toggle follow unfollow */

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
}
