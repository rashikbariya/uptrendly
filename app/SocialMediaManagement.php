<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMediaManagement extends Model
{
    //
    protected $table = 'ut_social_media';
    protected $fillable =['facebook_link','twitter_link','instagram_link','google_link','youtube_link','linkedin_link'];
}
