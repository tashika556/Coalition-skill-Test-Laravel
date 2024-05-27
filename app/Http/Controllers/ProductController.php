<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        $total_sum = $products->sum('total_value_number');

        return view('index', compact('products', 'total_sum'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price_per_item' => 'required|numeric|min:0'
        ]);

        $total_value_number = $request->quantity * $request->price_per_item;
        $sum = $total_value_number;  

        $product=new Product;
        $product->product_name=$request->input('product_name');
        $product->quantity=$request->input('quantity');
        $product->price_per_item=$request->input('price_per_item');
        $product->total_value_number=$total_value_number;
        $product->sum=$sum;


 
        $product->save();
        
        $xml_data = new \SimpleXMLElement('<product/>');
        $xml_data->addChild('product_name', $product->product_name);
        $xml_data->addChild('quantity', $product->quantity);
        $xml_data->addChild('price_per_item', $product->price_per_item);
        $xml_data->addChild('total_value_number', $total_value_number);

        $xml_file_path = storage_path('app/products.xml');
        $xml_data->asXML($xml_file_path);

        $json_data = json_encode($product->toArray(), JSON_PRETTY_PRINT);
        $json_file_path = storage_path('app/products.json');
        File::put($json_file_path, $json_data);
        $product->xml_data = $xml_data->asXML();
        $product->save();
        

        return redirect()->back()->with('success', 'Product saved successfully.');
        
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
  
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price_per_item' => 'required|numeric|min:0'
        ]);


        $product = Product::findOrFail($id);

        $product->product_name = $request->input('product_name');
        $product->quantity = $request->input('quantity');
        $product->price_per_item = $request->input('price_per_item');
        $product->total_value_number = $request->quantity * $request->price_per_item;


        $xml_data = new \SimpleXMLElement('<product/>');
        $xml_data->addChild('product_name', $product->product_name);
        $xml_data->addChild('quantity', $product->quantity);
        $xml_data->addChild('price_per_item', $product->price_per_item);
        $xml_data->addChild('total_value_number', $product->total_value_number);

     
        $xml_file_path = storage_path('app/products.xml');
        $xml_data->asXML($xml_file_path);

  
        $product->xml_data = $xml_data->asXML();

        $product->save();

        return redirect()->route('index')->with('success', 'Product updated successfully.');
    }
   

}
