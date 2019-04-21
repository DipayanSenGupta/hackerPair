<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Socialite;
use App\User;

class SocialGithubController extends Controller
{

public function redirectToProvider()
{
	return Socialite::driver('github')->redirect();
}
public function handleProviderCallback()
{
	$user = Socialite::driver('github')->user();
	$existingUser = User::where('provider_id', $user->getId())->first();
	if ($existingUser) {
	Auth::login($existingUser);
	} else {
		$newUser = new User();
		$newUser->email = $user->getEmail();
		$newUser->provider_id = $user->getId();
		$newUser->handle_github = $user->getNickname();
		$newUser->password = bcrypt(uniqid());
		$newUser->save();
		Auth::login($newUser);
	}
	flash('Successfully authenticated using GitHub');
	return redirect('/');
}

}
