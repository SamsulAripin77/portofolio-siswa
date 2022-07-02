<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Browsershot\Browsershot;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function profile () {
       return $this->hasOne(Profile::class,'user_id');
    }

    public function skills () {
       return $this->hasMany(Skill::class,'user_id');
    }
    
    public function hobies () {
       return $this->hasMany(Hoby::class,'user_id');
    }

    public function organizations () {
       return $this->hasMany(Organization::class);
    }

    public function isValidOrganization(){
      return $this->organizations()->where('validation', true);
    }

    public function experiences () {
       return $this->hasMany(Experience::class);
    }

    public function isValidExperiences(){
      return $this->experiences()->where('validation', true);
    }

    public function works () {
       return $this->hasMany(Work::class);
    }

    public function isValidWorks(){
      return $this->works()->where('validation', true);
    }

    public function achivements () {
       return $this->hasMany(Achievement::class);
    }

    public function isValidAchivements(){
      return $this->achivements()->where('validation', true);
    }
    
    public function creations () {
       return $this->hasMany(Creation::class);
    }

    public function isValidCreations(){
      return $this->creations()->where('validation', true);
    }

    public function sertifications () {
       return $this->hasMany(Sertification::class);
    }

    public function isValidSertifications(){
      return $this->sertifications()->where('validation', true);
    }

    public function isAdmin () {
       return $this->role === 'admin';
    }

    public function pdf () {
      $content =  view('folio', ['user' => $this])->render();
      return Browsershot::html($content)
      ->format('A5')
      ->pdf();
    }
}
