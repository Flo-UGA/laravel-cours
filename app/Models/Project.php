<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description'
    ];
    //protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function save(array $options = array())
    {
        $this->user_id = Auth::id();
        parent::save($options);
    }
}
