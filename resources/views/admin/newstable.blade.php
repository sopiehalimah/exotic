@extends('layouts.admin')

@section('content')
<!-- start: Content -->
          <div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Table Static</h3>
                        <p class="animated fadeInDown">
                          Tables <span class="fa-angle-right fa"></span>Table Static
                        </p>
                    </div>
                  </div>
              </div>

            <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
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
            </div>  
          </div>
          </div>
          <!-- end: content -->
@endsection

