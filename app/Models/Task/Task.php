<?php

namespace App\Models\Task;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $table = 'tasks';

    public function user(){
        return $this->belongsTo(User::class, 'assign_to', 'id');
    }
}
