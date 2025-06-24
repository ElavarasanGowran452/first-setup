<?php


namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use App\Models\Subcategory;

    class CategoryRepository implements CategoryRepositoryInterface 
    {

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