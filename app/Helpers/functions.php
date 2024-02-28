<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Str;
function create_slug($title){

    $slug = Str::slug($title,'-');

    $allSlugs =  Category::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', 0)
            ->get();

    //if not used the slug before
    if (! $allSlugs->contains('slug', $slug)){
        return $slug;
    }

    //if the slug is used before
    $i=1;
    while($i <= 10){
        $newSlug = $slug.'-'.$i;
        if (! $allSlugs->contains('slug', $newSlug)) {
            return $newSlug;
        }
        $i++;
    }
    return $slug;
}

function find_product($id){
    return Product::find($id);
}