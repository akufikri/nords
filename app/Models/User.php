<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'name',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function hasLiked(Posts $post)
    {
        return $this->likes()->where('posts_id', $post->id)->exists();
    }

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }
    public function isFollowing(User $user)
    {
        return $this->following()->where('following_id', $user->id)->exists();
    }

   public function followers()
{
    return $this->belongsToMany(User::class, 'follows', 'following_id', 'follower_id');
}

public function following()
{
    return $this->belongsToMany(User::class, 'follows', 'follower_id', 'following_id');
}

    public function unfollow(User $user)
    {
        return $this->following()->detach($user->id);
    }

}