<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user){
        return view('profiles.show',[
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(50)
        ]);
    }
    public function edit(User $user){
        $this->authorize('edit',$user);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){
        $this->authorize('edit',$user);
        $attribute = request()->validate([
            'username'=>['required','string','max:255','alpha_dash',Rule::unique('users')->ignore($user)],
            'name'=>['required','string','max:255'],
            'avatar'=>['image'],
            'email'=>['required','string','max:255','email',Rule::unique('users')->ignore($user)],
            'password'=>['required','string','min:8','max:255','confirmed']
        ]);
        if ($attribute['password']=='') {
            $attribute['password'] = $user->password;
        }
        if (request('avatar')){
            $attribute['avatar'] = request('avatar')->store('avatars');
        }
        $user->update($attribute);
        return redirect(route('profile', $user->username));
    }
}
