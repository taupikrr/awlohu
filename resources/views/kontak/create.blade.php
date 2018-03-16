 @extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <center><h1>Data Kontak</h1></center>
           <div class="panel ">
                <div class="panel-heading bg-yellow">Data Kontak
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                 <div class="panel-body">
      <form action="{{route('kontak.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}


                  <div class="form-group">
                  <label class="control_label">Nama</label>
                  <input type="text" name="c" class="form-control" required="">
                  </div>  

                  <div class="form-group">
                  <label class="control_label">Email</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Seluler</label>
                  <input type="number" name="b" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Pesan</label>
                  <input type="number" name="d" class="form-control" required="">
                  </div>

                  <div>
                      <button type="submit" class="btn btn-success">
                          Simpan
                      </button>
                       <button type="reset" class="btn btn-danger">
                          Reset
                      </button>
                  </div>
                                    
              </form>
                  
                </div>

             
                </div>
                </div>
            </div>
        </div>
    
@endsection
