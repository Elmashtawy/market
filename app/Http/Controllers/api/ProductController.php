<?php

namespace App\Http\Controllers\api;
use App\Http\requsests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Http\Resources\ProductsCollection;
use App\Http\Resources\BestProductsCollection;
use App\Http\Resources\ProductsByCategoriesCollection;
use App\Http\Resources\ProductsByProductIDResource;

use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       try{

         return (new ProductsCollection(Product::paginate(5)))->response()->setStatusCode(200);   

        }catch(\Exception $e){

               $response = [

                  'data'=>"Not found Data",
                  'error'=>$e->getMessage(),
                  
               ];
         
             return response($response,404);
        }

    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BestSelling()
    {

        
       try{

         return (new BestProductsCollection(Product::orderBy('selling', 'desc')->paginate(5)))->response()->setStatusCode(200);   
                                  
        
        }catch(\Exception $e){

               $response = [

                  'data'=>"Not found Data",
                  'error'=>$e->getMessage(),
                  
               ];
         
             return response($response,404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_pro($catId)
    {
         try{

           return (new ProductsByCategoriesCollection(Product::where('category_id',$catId)->paginate(5)))->response()->setStatusCode(200);
           
        }catch(\Exception $e){

               $response = [

                  'data'=>"Not found Data",
                  'error'=>$e->getMessage(),
                  
               ];
         
             return response($response,404);
        }



    }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {
        
         try{

          
           return (new ProductsByProductIDResource($id))->response()->setStatusCode(200);
          
          
        }catch(\Exception $e){

               $response = [

                  'data'=>"Not found Data",
                  'error'=>$e->getMessage(),
                  
               ];
         
             return response($response,404);
        }



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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

/********************************************/
        // Add this produt to the order items 
/*******************************************/
        

    }
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
