@extends('layouts.user')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Daftar Perumahan</h2>
                    
                </div>
                <hr>
            </div>
        </div>
    </div>
    
                       
    <div class="content">
    	<div class="row">
    		<div class="col-md-12">
    			<center><h1>Perumahan {{$nama->jenis}}</h1></center>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<center>Hasil Pencarian ({{$count}})</center>
    		</div>
    	</div>
        <div class="grid">
        	
        	@if($count == 0)
        	Tidak ada hasil
        	@endif
    @foreach ($model as $data)
            <figure class="effect-zoe">
                <img src="{{asset('/img/'.$data->foto)}}" alt="img"/>
                <figcaption>
                    <h2>Type <span> {{$data->tipe_rumah}}</span></h2>
                    <p class="icon-links">
                        <a href="{{url('/detail/'.$data->id)}}"><span class="icon-eye"></span>Detail</a>
                    </p>
                    
                </figcaption>           
            </figure>
    @endforeach

        </div>
    </div>
    
    
    
@endsection

