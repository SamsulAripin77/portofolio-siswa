<?php

namespace App\Actions\Fortify;


use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{

  

    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();

            $userProfile = User::find($user->id);
            $profile = [
                'hp' => $input['hp'],
                'url_linkedin' => $input['url_linkedin'],
                'uname_linkedin' => $input['uname_linkedin'],
                'address' => $input['address'],
                'about_me' => $input['about_me'],
            ];
            if ($userProfile->profile == null ){
                $userProfile->profile()->save(new Profile($profile));
            }else {
                $userProfile->profile->update($profile);
            }
            
        }

        
        
        
        
        
        
        
        
        
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }

    protected function uploadCover($file) {
        $cover = null;
        if($file){
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = rand(111111, 999999) 
                        . '-' . $dt->format('Y-m-d-H-i-s')
                        . '-.' . $acak;
            $file->move('images', $fileName);
            $cover = $fileName;
        }
        return $cover;
    }
}
