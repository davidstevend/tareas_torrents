<?php

namespace App\Models;

use App\Models\Task;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'phone',
        'role_id',
        'email',
        'password',
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
    ];

    public function isAdmin()
    {
        if ($this->role_id == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function isUser()
    {
        if ($this->role_id == 2) {
            return true;
        } else {
            return false;
        }
    }

    public function userNotifications()
    {
        return  Task::whereUserId(Auth::user()->id)->count();
    }
    public function userTaskPending()
    {
        return  Task::whereUserIdAndFinished(Auth::user()->id,'NO')->count();
    }

    public function userTasks()
    {
        $taskPending = Task::whereUserIdAndFinished(Auth::user()->id,'NO')->get();
        return  $taskPending;
    }
}
