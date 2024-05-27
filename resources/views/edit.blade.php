@extends('layout')
@section('page_title','Coalition Skill Test Form Update')

@section('container')

<section>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="section-title bg-blue">
                    <h3 class="text-center">
                        Product Details Form Update
                    </h3>
                    <a href="{{url('')}}" class="btn btn-warning text-center mt-10 mb-4">Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="form-box mt-4 ">
                    <form class="well" method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
            @method('PUT')
              <label>Product name</label>
                                <input type="text" name="product_name" class="span9 mb-4 p-10" placeholder="Product name" value="{{ $product->product_name }}">
                        
                
                                <label>Quantity in Stock</label>
                                <input type="number" name="quantity" class="span9 mb-4 p-10" placeholder="Quantity in Stock" value="{{ $product->quantity }}">
           
                      
                                <label>Price Per Item</label>
                                <input type="number" name="price_per_item" class="span9 mb-4 p-10" placeholder="Price Per Item" value="{{ $product->price_per_item }}">
<br>
                                <button type="submit" class="btn btn-primary text-center mt-10 mb-4">Submit</button>
         
                    </form>
                    


                </div>
            </div>
        </div>
    </div>
</section>


@endsection

