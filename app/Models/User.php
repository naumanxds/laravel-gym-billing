<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'updated_at',
        'package',
        'cnic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Role defined for member in Database and Seeder
     */
    const ROLE_MEMBER = 'member';

    /**
     * Role defined for Admin in Database and Seeder
     */
    const ROLE_ADMIN = 'owner';

    /**
     * Relation with roles table
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    /**
     * @param string $package
     */
    public function setPackageAttribute($package)
    {
        $this->attributes['package'] = json_encode($package);
    }

    /**
     * @param string $package
     * 
     * @return string 
     */
    public function getPackageAttribute($package)
    {
        return $this->package = json_decode($package);
    }
}
