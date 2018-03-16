@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1>Daftar Perumahan</h1></center>
          <div class="panel ">
                <div class="panel-heading bg-yellow">Daftar Perumahan
                <div class="panel-title pull-right"><a href="{{ route('jenis.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                    <div class="table table-responsive">
                         <table class="table" col >
                <thead>
                    <tr>
                        <th>Nama Perumahan</th>                   
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                    <tbody>
                        @php
                        $model = App\jenis::all();
                        @endphp
                        @foreach($model as $data)
                        <tr>
                            <td>{{$data->jenis}}</td>                     
                                
                        
                                <form action="{{route('jenis.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                        
                            <td>
                                <a class="btn btn-warning" href="{{ route('jenis.edit',$data->id)}}"><i class="fa fa-edit"> Edit</i></a>
                                <input class="btn btn-danger" type="submit" value="Delete">
                                {{csrf_field()}}
                                    </td>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>
               
                	
                </div>

             
                
                </div>
            </div>
            </div>
        </div>
    
@endsection
