@extends('layouts.admin')

@section('content')
          <!-- end: Content -->
           <div id="content">
            <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
            <div class="col-md-12 tab-content">

              <div role="tabpanel" class="tab-pane fade active in" id="tabs-area-demo" aria-labelledby="tabs1">
                    <div class="col-md-12 tabs-area">
                      <div class="liner"></div>
                      <ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                       

                     <li class="active">
                      <a href="#tabs-demo6-area3" data-toggle="tab" title="Add News">
                       <span class="round-tabs three">
                        <i class="fa fa-plus"></i>
                      </span> </a>
                    </li>

                    <li>
                      <a href="#tabs-demo6-area4" data-toggle="tab" title="Table News">
                       <span class="round-tabs four">
                         <i class="fa fa-table"></i>
                       </span> 
                     </a>
                   </li>

                   
                </ul>
                <div class="tab-content tab-content-v5">
                  
                  
                  <div class="tab-pane fade in active" id="tabs-demo6-area3">
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        
                        <form action="{{ url('admin/newssave') }}" class="cmxform" method="POST" enctype="multipart/form-data">
                          {!! csrf_field() !!}

                          <div class="col-md-12 mail-right-tool">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="judul" required>
                                  <span class="bar"></span>
                                  <label>Title</label>
                                </div>
                               <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="file" name="gambar" class="form-text fileupload-v1-file hidden"/>
                                <input type="text" class="form-text fileupload-v1-path" placeholder="File Path..." name="gambar">
                                <span class="input-group-btn">
                                  <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                </span>
                              </div>
                          </div>
                          <div class="col-md-12 mail-right-content" style="padding-left:10px;margin-bottom: 50px;">
                              <div class="col-md-12 padding-0">
                                <textarea name="isi" id="editor1"></textarea>
                              </div>
                          </div>
                            <div class="col-md-12">
                                <div class="pull-right">
                                  <input type="submit" class="btn btn-danger" value="Send"/>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area4">
                    <div class="panel-body">
                  
                  <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th colspan="2">Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php $i=1; ?>
                        @foreach($data as $news)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $news->judul }}</td>
                          <td><img src="{{ url('gambar/'.$news->gambar) }}" alt="" style="width:50px;height: 50px;"></td>
                          <td><?php echo substr("$news->isi", 0,200);?>...</td>
                          <td><a href="{{ url('admin/edit/'.$news->id) }}">Edit</a></td>
                          <td><a href="{{ url('admin/delete/'.$news->id) }}" onclick="return confirm('Delete?')">Delete</a></td>
                        </tr>
                        @endforeach
                      </tr>
                      
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-6" style="padding-top:20px;">
                    <span>showing 0-10 of 30 items</span>
                  </div>
                  <div class="col-md-6">
                        <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                  </div>
                </div>
                  </div>
                  
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>      
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>


  

@endsection
