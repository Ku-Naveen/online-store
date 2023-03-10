@extends('layouts.login')
@section('content')
<style>
    .content {
        text-align: center;
    }    
    .title {
        font-size: 24px;
        padding-top: 10px;
    }
</style>
<div class="content">
        <div class="title m-b-md">
            Product Detail
        </div>
    </div>
    <hr />
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-12 justify-content-center">
                
               <div class="col-xs-4 item-photo">
                <img style="max-width:100%;" src="{{ asset('images/apple.png') }}" width="304" height="236" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{ $product->product_name }} - {{ $product->product_code }}</h3>    
                    <h5 style="color:#337ab7"><a href="#">{{ $product->product_name }}</a> · <small style="color:#337ab7">({{ array_rand(range(1000, 15000)) }} reviews)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>Offer Price</small></h6>
                    <h3 style="margin-top:0px;">₹ {{ $product->product_price }}</h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>White</small></h6>                    
                        <div>
                            <div class="attr2">16 GB</div>
                            <div class="attr2">32 GB</div>
                        </div>

                        <p class="card-text">
                            <!-- Product Description-->
                            {{  $product->product_description }}
                       
                        </p>
                    </div>                    
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><a href="/purchase/{{ $product->id }}"> Buy Now</a></button>
                    </div>                                        
                </div>
            
        </div>        
    </div>
</section>
@stop