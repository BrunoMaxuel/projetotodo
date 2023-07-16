<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'color', 'user_id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Tasks(){
        return $this->HasMany(Task::class);
    }
}
