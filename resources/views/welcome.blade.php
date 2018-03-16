@extends('layouts.user')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="img-responsive">
                    <ul class="bxslider">               
                        <li><img src="img/oo.jpg" alt="" height="600" width="1200"/></li>                             
                        <li><img src="img/bb.jpg" alt="" height="600" width="1200"/></li> 
                        <li><img src="img/cc.jpg" alt="" height="600" width="1200"/></li>         
                    </ul>
                </div>  
            </div>
        </div>
    </div>
        
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h2>Profile Perumahan</h2>
                    
                </div>
                <hr>
            </div>
        </div>
    </div>
    
                       
    <div class="content">
        <div class="grid">
    @foreach ($rumah as $data)
            <figure class="effect-zoe">
                <img src="img/{{$data->foto}}" alt="img"/>
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
        </div>
    </div>
    
    
    
@endsection
