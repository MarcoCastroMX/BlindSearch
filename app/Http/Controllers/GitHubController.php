<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{

    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }


    public function gitCallback()
    {
        try {

            $githubUser = Socialite::driver('github')->user();

            $User =  User::create([
                'name' => $githubUser->nickname,
                'email' => $githubUser->email,
                'github_id'=> $githubUser->id,
                'password' => encrypt('gitpwd059'),
            ]);

            Auth::login($User,true);

            return redirect('/dashboard');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
