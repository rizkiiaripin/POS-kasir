<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $table = 'units';
    protected $guarded = ['id'];

    /**
     * Get the products associated with the unit.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
