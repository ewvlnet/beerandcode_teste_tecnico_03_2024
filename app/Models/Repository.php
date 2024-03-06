<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'full_name', 'html_url', 'description', 'stargazers_count', 'owner', 'owner_url', 'owner_avatar', 'owner_type'];

}
