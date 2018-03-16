@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1>Data agen</h1></center>
          <div class="panel ">
                <div class="panel-heading bg-yellow">Data agen
                <div class="panel-title pull-right"><a href="{{ route('agen.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                <table class="table" col >
                <thead>
                	<tr>
                		<th>Nama</th>
                		<th>Jenis Kelamin</th>
                        <th>Hubungi</th>
                        <th>Email</th>
                        <th>Foto Agen</th>
                	
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($agen as $data)
                		<tr>
                			<td>{{$data->nama}}</td>
                			<td>{{$data->jk}}</td>
                            <td>{{$data->no_hp}}</td>
                            <td>{{$data->email}}</td>
                            <td><img class="img-rounded" src="{{asset('/img/'.$data->fotoagen)}}" height="100" width="100" ></td>
                       
                                
                		
                				<form action="{{route('agen.destroy',$data->id)}}" method="post">

                				<input name="_method" type="hidden" value="DELETE">
                				<input name="_token" type="hidden">
                				        
                            <td>
                                <a class="btn btn-warning" href="{{ route('agen.edit',$data->id)}}"><i class="fa fa-edit"> Edit</i></a>
                                <input class="btn btn-danger" type="submit" value="Delete">
                                {{csrf_field()}}
                                    </td>
                                </form>
                				
                				@endforeach
                			</td>
                		</tr>
                	</tbody>
                </table>
                	
                </div>

             
                
                </div>
            </div>
            </div>
        </div>
    
@endsection
