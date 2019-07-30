<?php

namespace App\Http\Controllers\api;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderItemResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId){

        try{

            return (new OrderCollection(Order::where('user_id',$userId)->paginate(5)))->response()->setStatusCode(200);

        }catch(\Exception $e){

            $response = [
    
                'data'=>"Not found Data",
                'error'=>$e->getMessage(),
             
            ];
    
        return response($response,404);
    }

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
    
        try{

            return (new OrderItemResource(Order::find($id)))->response()->setStatusCode(200);
            
        }
        catch(\Exception $e){

            $response = [

                'data' => "Not Found Data",
                'error' => $e->getMessage()
            ];

            return response($response, 404);
        }
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

/************************************ */
        // Change the quantity of items
/************************************ */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

/************************************************************ */
        // Delete one of the product from the order list items
/************************************************************ */

    }
}
