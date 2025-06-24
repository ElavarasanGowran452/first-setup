<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;

class CategoryController extends Controller
{
    use ApiResponses;
    private CategoryService $categoryService;
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryService $categoryService,CategoryRepository $categoryRepository) 
    {
        $this->categoryService = $categoryService;
        $this->categoryRepository = $categoryRepository;
    }
    
    public function index(){
        
        return $this->getSuccessData($this->categoryService->getAllCategory());
    }

    public function createCategory(Request $request){

        $this->categoryService->createCategory($request->all());
        return $this->createSuccessMessage();
    }

    public function createSubCategory(Request $request){

        $this->categoryService->createSubCategory($request->all());
        return $this->createSuccessMessage(); 
    }




    
    public function getCatRep(){
        
        return $this->getSuccessData($this->categoryRepository->getAllCategory());
    }
}
