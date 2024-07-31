<?php

namespace App\Models;




use App\Models\admin\Category;
use App\Models\admin\Designer;
use App\Models\admin\ProductOccution;
use App\Models\admin\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tags()
    {
        return $this->hasMany(ProductTags::class);
    }

    public function types()
    {
        return $this->belongsToMany(ProductType::class, 'added_product_types', 'product_id', 'product_type_id');
    }
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function occasion()
    {
        return $this->belongsTo(ProductOccution::class, 'occution_id');
    }

    public function subOccasion()
    {
        return $this->belongsTo(ProductOccution::class, 'sub_occution_id');
    }

    public function designer()
    {
        return $this->belongsTo(Designer::class, 'designer_id');
    }
}
