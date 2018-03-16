@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1>Kontak</h1></center>
          <div class="panel ">
                <div class="panel-heading bg-yellow">Kontak
                <div class="panel-title pull-right"><a href="{{ route('kontak.create')}}"></a></div></div>

                <div class="panel-body">
                    <div class="table table-responsive">
                         <table class="table" col >
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Seluler</th>
                        <th>Pesan</th>
                                        
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                     <tbody>
                        @php
                        $model = App\kontak::all();
                        @endphp
                        @foreach($model as $data)   
                     <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->seluler}}</td>
                            <td>{{$data->pesan}}</td>
                            
                                <form action="{{route('kontak.destroy',$data->id)}}" method="post">

                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden">
                                        
                            <td>
                                <input class="btn btn-danger" type="submit" value="Delete">
                                {{csrf_field()}}
                                    </td>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach
                </table>
                    </div>
               
                	
                </div>

             
                
                </div>
            </div>
            </div>
        </div>
    
@endsection