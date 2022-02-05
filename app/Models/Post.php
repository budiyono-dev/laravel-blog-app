<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $with = ["category", "user"];

    public function scopeFilter($query, array $filters) {
        // if (isset($filters["search"]) ? $filters["search"] : false) {
        //     return $query->where("title", "like", "%" . $filters["search"] . "%")
        //         ->orWhere("body", "like", "%" . $filters["search"] . "%");
        // }

        $query->when($filters["search"] ?? false, function ($query, $search) {
            return $query->where("title", "like", "%" . $search . "%")
                ->orWhere("body", "like", "%" . $search . "%");
        });

        $query->when($filters["category"] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
        $query->when(
            $filters['author'] && $filters["category"] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'user',
                fn ($query) =>
                $query->where('username', $author)
            )->whereHas(
                'category',
                fn ($query) =>
                $query->where('slug', $filters["category"])
            )
        );
        // dd($filters);
        // if($filters['author']){
        //     $query->with('user', function($query) use ($filters){
        //         $query->where('username','=',$filters['author']);
        //     });
        //     // ->join('user')
            
        // }
    }
}
