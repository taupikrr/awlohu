
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
           <div class="panel ">
                <div class="panel-heading bg-yellow">Data Rumah
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                   <div class="panel-body">
              <form action="{{route('rumah.update',$rumah->id)}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 
                  <div class="form-group">
                  <label class="control_label">Tipe Rumah</label>
                  <input type="number" name="a" class="form-control" required="" value="{{$rumah->tipe_rumah}}">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Harga Rumah</label>
                  <input type="text" name="b" class="form-control" required="" value="{{$rumah->harga_rumah}}">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Luas Tanah</label>
                  <input type="text" name="c" class="form-control" required="" value="{{$rumah->luas_tanah}}">
                  </div>

                  
                  <div class="form-group">
                  <label class="control_label">Jumlah Lantai</label>
                  <input type="number" name="e" class="form-control" required="" value="{{$rumah->jumlah_lantai}}">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Kamar Tidur</label>
                  <input type="number" name="f" class="form-control" required="" value="{{$rumah->kamar_tidur}}">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Kamar Mandi</label>
                  <input type="number" name="g" class="form-control" required="" value="{{$rumah->kamar_mandi}}">
                  </div>

                  <div class="form-group">
                  <label class="control_label">Alamat</label>
                  <textarea name="h" class="form-control" required="" value="{{$rumah->alamat}}"></textarea>
                  </div>

                 <div class="form-group">
                  <label class="control_label">Agen</label>
                  <select class="form-control" name="agen_id" required="">
                    <option value="">Pilih Salah Satu</option
                    @foreach($agen as $data)
                    @if($rumah->agens->id == $data->id)
                    <option value="{{$data->id}}" selected="">{{$data->nama}}</option>
                    @endif
                    <option value="{{$data->id}}">{{$data->nama}}</option>
                    @endforeach
                  </select>
                  </div>

                  <div class="form-group">
                  <label class="control_label">Nama Perumahan</label>
                  <select class="form-control" name="jenis_id" required="">
                    <option value="">Pilih Salah Satu</option
                    @foreach($jenis as $data)
                    @if($rumah->jenis->id == $data->id)
                    <option value="{{$data->id}}" selected="">{{$data->jenis}}</option>
                    @endif
                    <option value="{{$data->id}}">{{$data->jenis}}</option>
                    @endforeach
                  </select>
                  </div>

              <div class="form-group">
                  <label class="control_label">Foto Rumah</label>
                  <input type="file" name="foto" class="form-control" required="" value="{{$rumah->foto}}">
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
