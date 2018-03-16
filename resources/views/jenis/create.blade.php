@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <center><h1>Daftar Rumah</h1></center>
           <div class="panel ">
                <div class="panel-heading bg-yellow">Daftar Rumah
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                 <div class="panel-body">
      <form action="{{route('jenis.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Nama Perumahan</label>
                  <input type="text" name="a" class="form-control" required="">
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
