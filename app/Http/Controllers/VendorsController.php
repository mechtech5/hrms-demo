<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreVendor;
use Auth;
use App\CompMast;
use App\Vendor;

class VendorsController extends Controller
{
    public function index(){
    	$companies = CompMast::all();
    	$vendors = Vendor::where('user_id',Auth::user()->id)->get();
    	return view('expenses.vendors.show',compact('vendors','companies'));
    }

    public function create(){
    	$companies = CompMast::all();
    	return view('expenses.vendors.create',compact('companies'));
    }

    public function store(StoreVendor $request){
    	$data = $request->validated();	
    	Vendor::create($data);
    	return redirect()->route('vendors.index')->with('success','Vendor Inserted Successfully');
    }

    public function edit($id){
        $vendor = Vendor::find($id);
        $companies = CompMast::all();
    	return view('expenses.vendors.edit',compact('vendor','companies'));
    } 

    public function update(StoreVendor $request, $id){
        $data = $request->validated();  
        Vendor::where('id',$id)->update($data);
        return redirect()->route('vendors.index')->with('success','Vendor Updated Successfully');
    } 
    
    public function destroy($id){
        Vendor::where('id',$id)->delete();
        return redirect()->back()->with('success','Vendor Deleted Successfully');
    }

}
