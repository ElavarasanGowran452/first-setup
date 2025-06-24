<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Subcategory;

class CategoryService{


    public function createCategory($data){    
        Category::create($data);
        return;
    }
    
    public function getAllCategory(){
        return Category::with('getSubCat')->get();
    }

    public function createSubCategory($data){    
        Subcategory::create($data);
        return;
    }

   }
?> 