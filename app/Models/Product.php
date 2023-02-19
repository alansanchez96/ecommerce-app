<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Image;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    const INACTIVE = 1;
    const ACTIVE = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes(): HasMany
    {
        return $this->hasMany(Size::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
