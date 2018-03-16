@extends('layouts.user')

@section('content')
<div class="container" style="padding-top: 50px">
            <div class="center"> 

        <br>
        <br>
        <br>
        <center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.235279314096!2d107.58227629675605!3d-6.943209850156203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8a226db397d%3A0xd591eca1030e966c!2sKPRKB!5e0!3m2!1sid!2sid!4v1516938437113" width="950" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>       
        </center>
                <h2>Hubungi kami</h2>
                <p>Karena dengan memberi kepastian ,membuat kami senang.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form action="{{route('kontak.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Seluler</label>
                            <input type="number" name="seluler" class="form-control">
                        </div>
                                
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea name="pesan"  required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Simpan</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div>
@endsection
