<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use HasFactory, SoftDeletes;

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    protected $table = 'like';

    protected $fillable = [
        'user_id',
    ];
}
?>
 