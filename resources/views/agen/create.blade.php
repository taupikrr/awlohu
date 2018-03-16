@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <center><h1>Data Agen</h1></center>
           <div class="panel ">
                <div class="panel-heading bg-yellow">Data Agen
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                 <div class="panel-body">
      <form action="{{route('agen.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Nama</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>


                  <div class="form-group">
                  <label class="control_label">Jenis Kelamin</label>
                  <select class="form-control" name="b">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                  </div>

                  <div class="form-group">
                  <label class="control_label">No Hp</label>
                  <input type="number" name="c" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Email</label>
                  <input type="text" name="d" class="form-control" required="">
                  </div>

                   <div class="form-group">
                  <input type="hidden" name="pw" class="form-control" value="agenperumahan">
                  </div>
                  <div class="form-group">
                    <label >Foto Agen</label>
                    <input type="file"  name="foto" class="form-control">
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
