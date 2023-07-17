<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'duo_date', 'user_id', 'category_id'];

    public function User(){
        return $this->BelongsTo(User::class);
    }
    public function Category(){
        return $this->BelongsTo(Category::class);
    }
}
