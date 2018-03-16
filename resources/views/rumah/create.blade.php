@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <center><h1>Data Rumah</h1></center>
           <div class="panel ">
                <div class="panel-heading bg-yellow">Data Rumah
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                 <div class="panel-body">
      <form action="{{route('rumah.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Tipe Rumah</label>
                  <input type="number" name="a" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Harga Rumah</label>
                  <input type="number" name="b" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Luas Tanah</label>
                  <input type="number" name="c" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Jumlah Lantai</label>
                  <input type="number" name="e" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Kamar Tidur</label>
                  <input type="number" name="f" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Kamar Mandi</label>
                  <input type="number" name="g" class="form-control" required="">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea name="h" class="form-control" required=""></textarea>
                  </div>

                  @role('admin')
                  <div class="form-group">
                  <label class="control_label">Agen</label>
                  <select class="form-control" name="agen_id" required="">
                    <option value="">Pilih Salah Satu</option>
                    @foreach($agen as $data)
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                    @endforeach
                  </select>
                  </div>
                  @endrole      

                  <div class="form-group">
                  <label class="control_label">Nama Perumahan</label>
                  <select class="form-control" name="jenis_id" required="">
                    <option value="">Pilih Salah Satu</option>
                    @foreach($jenis as $data)
                    <option value="{{$data->id}}">{{$data->jenis}}</option>
                    @endforeach
                  </select>
                  </div>       
        

                  <div class="form-group">
                    <label >Foto Rumah</label>
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
