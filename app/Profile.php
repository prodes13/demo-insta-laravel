<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = $this->image ? $this->image : 'profile/EIaCQsJiDDNXM6WIA9hfW49dH6NhiapFBdHFHapk.jpeg';
        return '/storage/'.$imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
