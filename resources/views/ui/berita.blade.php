@extends('layouts.app')

@section('content')

	<section>
        <div class="container">
            <div class="row">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Berita</li>
                </ol>
              </div>    
                <div class="col-sm-12">
                    <div class="features_items">
                    <h2 class="title text-center">Berita</h2>
                    <!--features_items-->
                    @foreach($data as $key => $berita)
                    
                    <div class="col-sm-4">
                    <div class="batas">
                     <div class="blog-post-area">
                        <!-- <h2 class="title text-center">Latest From our Blog</h2> -->
                        <div class="single-blog-post">
                         
                        
                          <a href="">
                            <img src="{{ url('gambar/'.$berita->gambar) }}" alt="" style="max-width:100%;height: 250px;">
                          </a>
                          <h3>{{ $berita->judul }}</h3>
                            <div class="post-meta">
                            <ul>
                              
                              <li><i class="fa fa-clock-o"></i>{{ date_format(date_create($berita->created_at)," H:i:s") }}</li>
                              <li><i class="fa fa-calendar"></i>{{ date_format(date_create($berita->created_at),"D, h M Y") }}</li>
                            </ul>
                            
                          </div>
                           <p><?php echo substr("$berita->isi", 0,100);?>... </p>

                            <a href="{{ url('detail/newsview/'.$berita->slug) }}"><button type="button" class="btn btn-default pull-right">Read More</button></a>

                          
                        </div>
                      </div>
                      </div>
                      </div>
                      @endforeach
                       
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

@endsection