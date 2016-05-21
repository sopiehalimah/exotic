@extends('layouts.app')

@section('content')


	<section>
		<div class="container">
			<div class="row">
			<div class="breadcrumbs">
            <ol class="breadcrumb">
            
              <li><a href="#">Home</a></li>
              @foreach($data4 as $key => $master)
              <li class="active">{{$master->name}}</li>
              @endforeach
            </ol>
          </div> 
      <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($data3 as $key => $master)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            {{ $master->merk }}
                                        </a>
                                    </h4>
                                </div>
                               
                            </div>
                           @endforeach
                            
                           
                        </div><!--/category-products-->
                        
                    
                    </div>
                </div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($data as $key => $data1)
						 <div class="col-sm-4" >
                        
                            <div class="product-image-wrapper" >
                            <a href="{{ url('detail/product/'.$data1->ket) }}">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ url('gambar1/'.$data1->gambar1) }}" style="max-width: 100%;height: 250px;" class="girl img-responsive" alt="" />
                                    </div>
                                    <div class="product-overlay">
                                     
                                        <div class="overlay-content">
                                            <h2>Rp.{{ $data1->harga }},-</h2>
                                            <p>{{$data1->ket}}</p>
                                            
                                            <form action="{{url('/savecart')}}" method="post" enctype="multipart/form-data" / >
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="codejenis" value="{{$data1->codejenis}}">
                                            <input type="hidden" name="jenis" value="{{$data1->jenis}}">
                                            <input type="hidden" name="ket" value="{{$data1->ket}}">
                                            <input type="hidden" name="harga" value="{{$data1->harga}}">
                                            <input type="hidden" name="gambar1" value="{{$data1->gambar1}}">

                                              <p align="center"><button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Add to Cart</button></p>
                                            <!--    <a href="{{ url('detail/chart') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                                            </form>
                                           
                                        </div>
                                    
                                    </div>
                                   <!--  <img src="css1/images/home/new.png" class="new" alt="" /> -->
                                    
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                                </a>
                            </div>
                            
                        </div>

						@endforeach
						<div class="col-sm-12" >
						<ul class="pagination">
							{!! $data->render() !!}
						</ul>
						</div>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	

@endsection
