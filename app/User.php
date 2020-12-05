<?php

namespace App;

use App\Tweet;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name','avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAvatarAttribute($value){
        if($value){
            return asset('storage/'.$value);
        }else {
            return asset('/images/default-avatar.jpeg');
        }
    }
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);
        return Tweet::whereIn('user_id',$ids)->withLikes()->latest()->paginate(50);
    }
    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getRouteKeyName()
    {
        return 'username';
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
}
