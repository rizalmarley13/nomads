<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // menambahkan softdelete

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language', 'foods', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [


    ];

    /**
     * Get all of the comments for the TravelPackage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
