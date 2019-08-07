<?php

namespace App\Http\Controllers\dashboard;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::all();
        return view('dashboard.pages.brands', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // first validation
       
        // return $request;
        $request->validate(['name' => 'required',
                             'description' => 'required|max:100',
                             'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'   ]);

        
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');

        // condition to check image is exist or not -> " nulable "
        if ($request->hasfile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('Brands_Image'), $imageName);
            $brand->photo = $imageName;
        }else{

            $brand->photo = '';
        }

        $brand->save();
        
        return redirect('/dashboard/brands')->with('success','Brand added');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required',
                             'description' => 'required|max:100',
                             'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'   ]);


        $brand = Brand::find($id);
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');

        // condition to check image is exist or not -> " nulable "
        if ($request->hasfile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('Brands_Image'), $imageName);
            $brand->photo = $imageName;
        }else{

            $brand->photo = '';
        }

        $brand->save();
        
        return redirect('/dashboard/brands')->with('success','Brand Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);       
        $brand->delete();
        return redirect()->back()->with('success','Brand Deeleted');
    }
}
