<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;

    protected $table = 'page_contents';

    protected $fillable = [
        'image_owner',
        'name_owner',
        'email',
        'phone',
        'address',
        'description_owner',
        'customers',
        'years_experience',
        'best_customers',
        'project_successfully',
        'image_description',
        'description_about',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'tiktok',
    ];

    protected $casts = [
        'name_owner' => 'json',
        'description_owner' => 'json',
        'description_about' => 'json',
    ];
}
