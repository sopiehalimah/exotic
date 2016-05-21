@extends('layouts.app')

@section('content')

<section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            @foreach($data as $key => $news)
                            @if($key == 0)
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-XOTIC</h1>
                                    <h2>{{ $news->judul }}</h2>
                                    <p><?php echo substr("$news->isi", 0,100);?>... </p>
                                    <a href="{{ url('detail/newsview/'.$news->slug) }}"><button type="button" class="btn btn-default get">Read More</button></a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ url('gambar/'.$news->gambar) }}" style="max-width: 300px;height: 300px;" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                              
                            @else
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-XOTIC</h1>
                                    <h2>{{ $news->judul }}</h2>
                                    <p><?php echo substr("$news->isi", 0,100);?>... </p>
                                    <a href="{{ url('detail/newsview/'.$news->slug) }}"><button type="button" class="btn btn-default get">Read More</button></a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ url('gambar/'.$news->gambar) }}" style="max-width: 500px;height: 300px;" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                                

                            @endif
                                
                            @endforeach
                           
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    <section>
        <div class="container">
            <div class="row">
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
                    <div class="left-sidebar">
                        <h2>ORDER NOW</h2>
                        @foreach($data4 as $key => $news)
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ url('gambar/'.$news->gambar) }}" style="max-width: 100%;height: 250px;" class="girl img-responsive" alt="" />
                        </div>  
                        @endforeach                      
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items" ><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($data1 as $key => $master)
                        <div class="col-sm-4" >
                        
                            <div class="product-image-wrapper" >
                            <a href="{{ url('detail/product/'.$master->ket) }}">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ url('gambar1/'.$master->gambar1) }}" style="max-width: 100%;height: 250px;" class="girl img-responsive" alt="" />
                                    </div>
                                    <div class="product-overlay">
                                     
                                        <div class="overlay-content">
                                            <h2>Rp.{{ $master->harga }},-</h2>
                                            <p>{{$master->ket}}</p>
                                            
                                            <form action="{{url('/savecart')}}" method="post" enctype="multipart/form-data" / >
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="codejenis" value="{{$master->codejenis}}">
                                            <input type="hidden" name="jenis" value="{{$master->jenis}}">
                                            <input type="hidden" name="code" value="{{$master->code}}">
                                            <input type="hidden" name="ket" value="{{$master->ket}}">
                                            <input type="hidden" name="harga" value="{{$master->harga}}">
                                            <input type="hidden" name="gambar1" value="{{$master->gambar1}}">

                                              <p align="center"><button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Add to Cart</button></p>
                                            <!--    <a href="{{ url('detail/chart') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                                            </form>
                                           
                                        </div>
                                    
                                    </div>
                                    <img src="css1/images/home/new.png" class="new" alt="" />
                                    
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
                       
                    </div><!--features_items-->
                    
                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">Kopling</h2>
                        <div class="features_items"><!--category-tab-->
                                            
                        
                            <div class="tab-pane fade active in " id="tshirt" >
                                @foreach($data5 as $key => $kopling)
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ url('gambar1/'.$kopling->gambar1) }}" style="max-width: 100%;height: 150px;" class="girl img-responsive" alt="" />
                                                <h2>Rp.{{ $kopling->harga }},-</h2>
                                                <p>{{ $kopling->ket }}</p>
                                                  
                                                <form action="{{url('/savecart')}}" method="post" enctype="multipart/form-data" / >
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="codejenis" value="{{$kopling->codejenis}}">
                                                <input type="hidden" name="jenis" value="{{$kopling->jenis}}">
                                                <input type="hidden" name="code" value="{{$kopling->code}}">
                                                <input type="hidden" name="ket" value="{{$kopling->ket}}">
                                                <input type="hidden" name="harga" value="{{$kopling->harga}}">
                                                <input type="hidden" name="gambar1" value="{{$kopling->gambar1}}">

                                                  <p align="center"><button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Add to Cart</button></p>
                                                <!--    <a href="{{ url('detail/chart') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        
                        <div class="col-sm-8">
                            <ul class="pagination">
                               {!! $data5->render() !!}                     
                            </ul>
                        </div>
                       
                    </div><!--/recommended_items-->
                    
                </div>
                <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">Gear</h2>
                        <div class="features_items"><!--category-tab-->
                                            
                        
                            <div class="tab-pane fade active in " id="tshirt" >
                                @foreach($data6 as $key => $gear)
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                               <img src="{{ url('gambar1/'.$gear->gambar1) }}" style="max-width: 100%;height: 150px;" class="girl img-responsive" alt="" />
                                                <h2>Rp.{{ $gear->harga }},-</h2>
                                                <p>{{ $gear->ket }}</p>
                                                 <form action="{{url('/savecart')}}" method="post" enctype="multipart/form-data" / >
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="codejenis" value="{{$gear->codejenis}}">
                                                <input type="hidden" name="jenis" value="{{$gear->jenis}}">
                                                <input type="hidden" name="code" value="{{$gear->code}}">
                                                <input type="hidden" name="ket" value="{{$gear->ket}}">
                                                <input type="hidden" name="harga" value="{{$gear->harga}}">
                                                <input type="hidden" name="gambar1" value="{{$gear->gambar1}}">

                                                  <p align="center"><button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Add to Cart</button></p>
                                                <!--    <a href="{{ url('detail/chart') }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        
                        <div class="col-sm-8">
                            <ul class="pagination">
                               {!! $data6->render() !!}                     
                            </ul>
                        </div>
                       
                    </div><!--/recommended_items-->
                    
                </div>

            </div>
        </div>
    </section>
  
@endsection


