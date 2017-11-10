<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	use Searchable;

	/**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'contacts';
    }

    protected $fillable = ['name', 'email'];

    public function hobbies()
    {
    	return $this->hasMany(Hobby::class);
    }
}
