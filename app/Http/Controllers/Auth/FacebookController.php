<?php


namespace App\Http\Controllers\Auth;


use App\User;

use App\Http\Controllers\Controller;

use Socialite;

use Exception;

use Auth;


class FacebookController extends Controller

{


    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirectToFacebook()

    {

        return Socialite::driver('facebook')->redirect();

    }


    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleFacebookCallback()

    {

         try {
            
        
            $facebookUser = Socialite::driver('facebook')->user();
            $existUser = User::where('email',$facebookUser->email)->first();
            

            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $facebookUser->name;
                $user->email = $facebookUser->email;
                $user->facebook_id = $facebookUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        } 
        catch (Exception $e) {
            return 'errosssr';
        }
    }
}