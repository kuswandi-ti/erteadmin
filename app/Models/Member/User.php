<?php

namespace App\Models\Member;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Tenant\Tenant;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'area_id',
    //     'house_id',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'register_token',
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

    public function scopeActive($query)
    {
        return $query->where('status_aktif', 1);
    }

    public function scopeNonActive($query)
    {
        return $query->where('status_aktif', 0);
    }

    // public static function booted()
    // {
    //     static::created(function ($user) {
    //         $userTenant = Tenant::create([
    //             'id' => $user->domain,
    //             'id_perumahan' => $user->id_perumahan,
    //             'rt' => $user->rt,
    //             'rw' => $user->rw,
    //             'cluster' => $user->cluster,
    //         ]);
    //         $userTenant->domains()->create([
    //             'domain' => $user->domain . '.' . config('common.central_domain')
    //         ]);
    //     });
    // }
}
