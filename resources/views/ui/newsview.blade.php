@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <div class="row">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Detail Berita</li>
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
        <div class="col-sm-9">
          <div class="blog-post-area">
            <h2 class="title text-center">Latest From our Blog</h2>
            <div class="single-blog-post">
              <h3>{{ $data->judul }}</h3>
              <div class="post-meta">
                <ul>
                  <li><i class="fa fa-user"></i>{{ App\User::find($data->id_admin)['name'] }}</li>
                  <li><i class="fa fa-clock-o"></i> {{ date_format(date_create($data->created_at)," H:i:s") }}</li>
                  <li><i class="fa fa-calendar"></i> {{ date_format(date_create($data->created_at),"D, h M Y") }}</li>
                </ul>
                <span>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </span>
              </div>
              <a href="">
                <img src="{{ url('gambar/'.$data->gambar) }}" alt="" class="gambar" style="max-width:100%;height: 500px;">
              </a>
              <p>
                <?php echo $data->isi; ?>
              </p>
              <div class="pager-area">
                <ul class="pager pull-right"><!-- 
                  <li><a href="#">Pre</a></li>
                  <li><a href="#">Next</a></li> -->
                </ul>
              </div>
            </div>
          </div><!--/blog-post-area-->

          <div class="rating-area">
            <ul class="ratings">
              <li class="rate-this">Rate this item:</li>
              <li>
                <i class="fa fa-star color"></i>
                <i class="fa fa-star color"></i>
                <i class="fa fa-star color"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </li>
              <li class="color">(6 votes)</li>
            </ul>
            <ul class="tag">
              <li>TAG:</li>
              <li><a class="color" href="">Pink <span>/</span></a></li>
              <li><a class="color" href="">T-Shirt <span>/</span></a></li>
              <li><a class="color" href="">Girls</a></li>
            </ul>
          </div><!--/rating-area-->

          <div class="socials-share">
            <a href=""><img src="images/blog/socials.png" alt=""></a>
          </div><!--/socials-share-->

          <!--Comments-->
          <div class="response-area">
            <h2>RESPONSES</h2>
            
            <ul class="media-list">
            @foreach($data1 as $respon)
              <li class="media">
                
                <a class="pull-left" href="#">
                  <img class="media-object" src="{{url('css1/images/blog/comment-user.png')}}" style="width: 100px; height: 100px;" alt="">
                </a>
                <div class="media-body">
                  <ul class="sinlge-post-meta">
                    <li><i class="fa fa-user"></i>{{$respon->name}}</li>
                    <li><i class="fa fa-clock-o"></i>{{ date_format(date_create($respon->created_at)," H:i:s") }}</li>
                    <li><i class="fa fa-calendar"></i> {{ date_format(date_create($respon->created_at),"D, h M Y") }}</li>
                  </ul>
                  <p> <?php echo $respon->comment; ?></p>
                  <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>Replay</a>
                </div>
              </li>
               @endforeach 
            </ul>
                   
          </div><!--/Response-area-->
          <div class="replay-box">
            <div class="row">
            <form action="{{ url('/response') }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
              <div class="col-sm-4">
                <h2>Leave a replay</h2>
                
                  <div class="blank-arrow">
                    <label>Your Name</label>
                  </div>
                  <span>*</span>
                  <input type="text" name="name" placeholder="write your name...">
                  <div class="blank-arrow">
                    <label>Email Address</label>
                  </div>
                  <span>*</span>
                  <input type="email" name="email" placeholder="your email address...">
                
              </div>
              <div class="col-sm-8">
                <div class="text-area">
                  <div class="blank-arrow">
                    <label>Comments</label>
                  </div>
                  <span>*</span>
                  <textarea name="comment" rows="11" /></textarea>
                  <!-- <button type="submit" class="btn btn-primary" value="Send"/></button> -->
                  <button class="btn btn-primary" type="submit">Post Comment</button>
                </div>
              </div>
             <!--   <div class="col-sm-8">
                    <div class="pull-right">
                         
                    </div>  
              </div> -->
              
              </form>
            </div>
          </div><!--/Repaly Box-->
        </div>  
      </div>
    </div>
  </section>
  

@endsection
