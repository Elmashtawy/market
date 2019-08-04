<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\CategoriesResource;
use App\Http\Resources\ProductsResource;
use App\Category;
use App\Product;



class IndexController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        try{
          

          $latest_Category = Category::orderBy('id', 'desc')->limit(5)->get();
          $best_offers  = Product::orderBy('offer', 'desc')->limit(5)->get();
          $Best_Selling    = Product::orderBy('selling', 'desc')->limit(5)->get();

          
          $cat  = CategoriesResource::collection($latest_Category);
          $pro  = ProductsResource::collection($best_offers);
          $best = ProductsResource::collection($Best_Selling);


           $response['data'] = [ 'latest_Category'=>$cat,
                                 'best_offers'=>$pro,
                                 'Best_Selling'=>$best ] ; 
           $response['See_All_Category']= url('api/categories');                        
           $response['See_All_Products']= url('api/products');                                  
           $response['See_All_BestSelling']= url('api/BestSelling');                               
           $response['error']= "Not Found Error";                                  
           $response['Status']= "Success";                                  
    return response()->json($response, 200, [],JSON_UNESCAPED_SLASHES);
             // return response($response,200);

        }catch(\Exception $e){

               $response = [

                  'data'=>"Not found Data",
                  'error'=>$e->getMessage(),
                  
               ];
         
             return response($response,404);
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
