<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $table='tasks';

    protected $fillable = [
		
            'task',
            'description',
            'date',
            'expiration_date',
            'user_id',
            'finished'
	];

    public function tasks()
    {
        return Task::whereUserId(Auth::user()->id)->orderBy('id','desc')->count();         
    }
}
