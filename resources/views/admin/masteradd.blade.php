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
                         <a href="#tabs-demo6-area1" data-toggle="tab" title="welcome">
                          <span class="round-tabs one">
                            <i class="icons icon-notebook"></i>
                          </span> 
                        </a>
                      </li>

                      <li>
                        <a href="#tabs-demo6-area2" data-toggle="tab" title="profile">
                         <span class="round-tabs two">
                           <i class="fa fa-database"></i>
                         </span> 
                       </a>
                     </li>

                     <li>
                      <a href="#tabs-demo6-area3" data-toggle="tab" title="bootsnipp goodies">
                       <span class="round-tabs three">
                        <i class="fa fa-database"></i>
                      </span> </a>
                    </li>

                    <li>
                      <a href="#tabs-demo6-area4" data-toggle="tab" title="blah blah">
                       <span class="round-tabs four">
                         <i class="fa fa-database"></i>
                       </span> 
                     </a>
                   </li>

                   <li><a href="#tabs-demo6-area5" data-toggle="tab" title="completed">
                     <span class="round-tabs five">
                      <i class="fa fa-database"></i>
                    </span> </a>
                  </li>
                </ul>
              <div class="tab-content tab-content-v5">
                  <div class="tab-pane fade in active" id="tabs-demo6-area1">

                    <h3 class="head text-center">SEMANGAT</h3>
                                      <div class="panel-body">
                  
                  <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>Gambar</th>
                        <th>Ket</th>
                        <th>Harga</th>
                        <th colspan="2">Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php $i=1; ?>
                        @foreach($data as $produk)
                        <tr>
                          
                          <td>{{ $produk->code }}</td>
                          <td><img src="{{ url('gambar1/'.$produk->gambar1) }}" alt="" style="width:50px;height: 50px;"></td>
                          <td>{{ $produk->ket }}</td>
                          <td>{{ $produk->harga }}</td>
                          <td><a href="{{ url('admin/edit/'.$produk->id) }}">Edit</a></td>
                          <td><a href="{{ url('admin/delete/'.$produk->id) }}" onclick="return confirm('Delete?')">Delete</a></td>
                        </tr>
                        @endforeach
                      </tr>
                      
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-6">
                        <ul class="pagination pull-right">
                          {!! $data->render() !!}
                        </ul>
                  </div>
                </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area2">
                     <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        
                        <form action="{{ url('admin/master_merk_save') }}" class="cmxform" method="POST" enctype="multipart/form-data">
                          {!! csrf_field() !!}

                          <div class="col-md-12 mail-right-tool">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="code" required>
                                  <span class="bar"></span>
                                  <label>Code</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="merk" required>
                                  <span class="bar"></span>
                                  <label>Merk</label>
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
                  <div class="tab-pane fade" id="tabs-demo6-area3">
                     <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        
                        <form action="{{ url('admin/master_jenis_save') }}" class="cmxform" method="POST" enctype="multipart/form-data">
                          {!! csrf_field() !!}

                          <div class="col-md-12 mail-right-tool">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="code" required>
                                  <span class="bar"></span>
                                  <label>Code</label>
                                </div>
                               <!--  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  
                                    <select class="form-control" name="codemerk">
                                    @foreach($master_merks as $key => $master_merk)
                                      <option value="{{ $master_merk->code }}">{{ $master_merk->merk }}</option>
                                      @endforeach
                                    </select>

                                </div> -->
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="jenis" required>
                                  <span class="bar"></span>
                                  <label>Jenis</label>
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
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        
                        <form action="{{ url('admin/jenis_save') }}" class="cmxform" method="POST" enctype="multipart/form-data">
                          {!! csrf_field() !!}

                          <div class="col-md-12 mail-right-tool">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="code" required>
                                  <span class="bar"></span>
                                  <label>Code</label>
                                </div>
                               <!--  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  
                                    <select class="form-control" name="codemerk">
                                    @foreach($master_merks as $key => $master_merk)
                                      <option value="{{ $master_merk->code }}">{{ $master_merk->merk }}</option>
                                      @endforeach
                                    </select>

                                </div> -->
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  
                                    <select class="form-control" name="codejenis">
                                    @foreach($master_jeniss as $key => $master_jenis)
                                      <option value="{{ $master_jenis->code }}">{{ $master_jenis->jenis }}</option>
                                      @endforeach
                                    </select>

                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="name" required>
                                  <span class="bar"></span>
                                  <label>Name</label>
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
                  <div class="tab-pane fade" id="tabs-demo6-area5">
                     <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        
                        <form action="{{ url('admin/jenis_kecil_save') }}" class="cmxform" method="POST" enctype="multipart/form-data">
                          {!! csrf_field() !!}

                          <div class="col-md-12 mail-right-tool">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="code" required>
                                  <span class="bar"></span>
                                  <label>Code Barang</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  
                                    <select class="form-control" name="codemerk">
                                    @foreach($master_merks as $key => $master_merk)
                                      <option value="{{ $master_merk->code }}">{{ $master_merk->merk }}</option>
                                      @endforeach
                                    </select>

                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  
                                    <select class="form-control" name="codejenis">
                                    @foreach($master_jeniss as $key => $master_jenis)
                                      <option value="{{ $master_jenis->code }}">{{ $master_jenis->jenis }}</option>
                                      @endforeach
                                    </select>

                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  
                                    <select class="form-control" name="jenis">
                                    @foreach($jeniss as $key => $jenis)
                                      <option value="{{ $jenis->code }}">{{ $jenis->name }}</option>
                                      @endforeach
                                    </select>

                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="file" name="gambar1" class="form-text fileupload-v1-file hidden"/>
                                  <input type="text" class="form-text fileupload-v1-path" placeholder="File Path..." name="gambar1">
                                  <span class="input-group-btn">
                                    <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                  </span>
                              </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="ket" required>
                                  <span class="bar"></span>
                                  <label>Ket</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                  <input type="text" class="form-text" id="validate_firstname" name="harga" required>
                                  <span class="bar"></span>
                                  <label>Harga</label>
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
                  <div class="clearfix"></div>
                </div>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>




  

@endsection
