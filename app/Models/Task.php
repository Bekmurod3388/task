<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','status','user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query,$search){
        if($search){
            return $query->where('title','like','%'.$search.'%')
                ->orWhere('description','like','%'.$search.'%');
        }
        return $query;
    }
}
