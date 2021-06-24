<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primaryKey = 'id';

    protected $guarded  = ['id'];

    /**
     * Get the products for the blog post.
     */
    public function products()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
