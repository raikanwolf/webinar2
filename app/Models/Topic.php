<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'user_id', // Assuming a foreign key for the user
    ];

    /**
     * Get the user that owns the topic.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
