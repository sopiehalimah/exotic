@extends('layouts.admin')

@section('content')
 <!-- start: Content -->
          <div id="content">

            <div class="col-md-12" style="padding:20px;">

              <div class="panel mail-wrapper">

                    <div class="batas">
                    
                  <div class="panel-body">
                      <div class="col-md-12 padding-0">
                        
                        <form action="{{ url('admin/update') }}" method="POST" enctype="multipart/form-data">
                          {!! csrf_field() !!}

                          <div class="col-md-12 mail-right-tool">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="judul" value="{{ $data->judul }}" required>
                                  <input type="hidden" name="id" value="{{ $data->id }}">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <span class="bar"></span>
                                  <label>Title</label>
                                </div>
                                
                                <div style="width: 50%; text-align: center;"><img class="img-thumbnail"src="{{ url('gambar/'.$data->gambar) }}">
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
                                <span class="bar"></span>
                                  <label>Content</label>
                              <div class="col-md-12 padding-0">
                                <textarea name="isi" id="editor1">{{ $data->isi }}</textarea>
                              
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

              </div>
            </div>
          </div>
          <!-- end: Content -->
  

@endsection
