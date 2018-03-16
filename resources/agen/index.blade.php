@extends('layouts.app')

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
                		<th>Alamat</th>
                		<th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Email</th>
                	
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($rumah as $data)
                		<tr>
                			<td>{{$data->nama}}</td>
                            <td>{{$data->alamat}}</td>
                			<td>{{$data->jk}}</td>
                            <td>{{$data->no_hp}}</td>
                            <td>{{$data->email}}</td>
                       
                                
                		
                				<form action="{{route('rumah.destroy',$data->id)}}" method="post">

                				<input name="_method" type="hidden" value="DELETE">
                				<input name="_token" type="hidden">
                				        
                            <td>
                                <a class="btn btn-warning" href="{{ route('rumah.edit',$data->id)}}"><i class="fa fa-edit"> Edit</i></a>
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
