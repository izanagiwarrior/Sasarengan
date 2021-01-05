<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $i = 0;
        $products = Products::all();
        
        return view('content.order', compact('products','i'));
    }

    public function trytowrite()
    {   
        $products = Products::all();
        
        return view('content.trytowrite', compact('products'));
    }

    public function trytoread()
    {   
        $products = Products::all();
        
        return view('content.trytoread', compact('products'));
    }
    
    public function terms()
    {   
        $products = Products::all();
        
        return view('content.terms', compact('products'));
    }

    public function about()
    {   
        $products = Products::all();
        
        return view('content.about', compact('products'));
    }

    public function product()
    {
        $products = Products::all();
        $i = 0;

        return view('content.product', compact('products','i'));
    }

    public function add()
    {
        return view('content.orderEvent');
    }

    public function orderEvent(Request $request)
    {


        if ($files = $request->file('img_path')) {
            $destinationPath = 'public/images/';
            $file = $request->file('img_path');
            // upload path         
            $profileImage = rand(1000, 20000) . "." .
                $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $profileImage);
            $files->move($destinationPath, $profileImage);
        }

        if ($files = $request->file('pdf_path')) {
            $destinationPath = 'public/pdf/';
            $file = $request->file('pdf_path');
            // upload path         
            $profilePDF = rand(21000, 40000) . "." .
                $files->getClientOriginalExtension();
            $pathPDF = $file->storeAs('pdf', $profilePDF);
            $files->move($destinationPath, $profilePDF);
        }


        $products = new Products();
        $products->name = $request->name;
        $products->author = $request->author;
        $products->price = $request->price;
        $products->sinopsis = $request->sinopsis;
        // $products->description = $request->description;
        $products->img_path = $pathImg;
        $products->pdf_path = $pathPDF;
        $products->updated_at = '2016-12-06 06:56:01';
        $products->created_at = '2016-12-06 06:56:01';
        $products->save();

        

        return redirect(route('product'));
    }

    public function update($id)
    {
        $products = Products::find($id);

        return view('content.updateEvent', compact('products'));
    }

    public function updateEvent($id, Request $request)
    {

        if ($files = $request->file('img_path')) {
            $destinationPath = 'public/images/';
            $file = $request->file('img_path');
            // upload path         
            $profileImage = rand(1000, 20000) . "." .
                $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $profileImage);
            $files->move($destinationPath, $profileImage);
        }

        if ($files = $request->file('pdf_path')) {
            $destinationPath = 'public/pdf/';
            $file = $request->file('pdf_path');
            // upload path         
            $profilePDF = rand(21000, 40000) . "." .
                $files->getClientOriginalExtension();
            $pathPDF = $file->storeAs('pdf', $profilePDF);
            $files->move($destinationPath, $profilePDF);
        }

        $products = Products::find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        // $products->description = $request->description;
        $products->stock = $request->stock;
        $products->img_path = request()->$pathImg;
        $products->pdf_path = request()->$pathPDF;
        $products->updated_at = '2016-12-06 06:56:01';
        $products->created_at = '2016-12-06 06:56:01';
        $products->save();

        return redirect(route('product'));
    }

    public function delete(Request $request)
    {
        $products = Products::find($request->id);
        $products->delete();

        return redirect(route('product'));
    }

    public function order()
    {
        $products = Products::all();

        return view('content.order', compact('products'));
    }

    public function addDetail($id)
    {
        $products = Products::find($id);

        return view('content.orderDetail', compact('products'));
    }

    public function orderDetail(Request $request)
    {
        $orders = new Orders();
        $orders->product_id = $request->prodID;
        $orders->buyer_name = $request->buyer_name;
        $orders->buyer_contact = $request->buyer_contact;
        $orders->save();

        return redirect(route('order'));
    }

    public function history()
    {
        $orders = Orders::all();
        $products = Products::all();
        $i = 0;

        return view('content.history', compact('orders','products','i'));
    }
}
