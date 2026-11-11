<?php

use Illuminate\Support\Str;

if (!function_exists('blogs')) {
    function blogs()
    {
        return config('blogs');
    }
}


if (! function_exists('findBlog')) {
    function findBlog($slug)
    {
        return collect(config('blogs'))->firstWhere('slug', $slug);
    }
}