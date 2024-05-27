@extends('layout')
@section('page_title','Coalition Skill Test Form')

@section('container')

<section>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="section-title bg-blue">
                    <h3 class="text-center">
                        Product Details Form
                    </h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="form-box mt-4 ">
                    <form class="well">

              <label>Product name</label>
                                <input type="text" name="product_name" class="span9 mb-4 p-10" placeholder="Product name">
                        
                
                                <label>Quantity in Stock</label>
                                <input type="number" name="quantity" class="span9 mb-4 p-10" placeholder="Quantity in Stock">
           
                      
                                <label>Price Per Item</label>
                                <input type="number" name="price_per_item" class="span9 mb-4 p-10" placeholder="Price Per Item">
<br>
                                <button type="submit" class="btn btn-primary text-center mt-10 mb-4">Submit</button>
         
                    </form>
                    


                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="section-title bg-blue">
                    <h3 class="text-center">
                        Product List
                    </h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="form-box mt-4 ">
                <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity in Stock</th>
                    <th>Price Per Item</th>
                    <th>Date and time Submitted</th>
                    <th>Total Value Number</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="4"><strong></strong></td>
                    <td><strong></strong></td>
                </tr>
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

