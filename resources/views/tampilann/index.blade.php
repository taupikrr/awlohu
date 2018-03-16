@extends('layouts.user')

@section('content')
  <section class="container section" id="features">
 
  </section>
  <section class="container section" id="contact">
	<h1 class="text-center text-uppercase section-title">contact us</h1>
	<div class="row">
		<div class="col-md-6">
			
			<form action="" id="form1" name="form1" method="post">
			 {{csrf_field()}}
				<p>If you have any question or suggestions please feel free to contact us at any time </p>
				<label>Username :</label>
				<input type="text" name="a">
				<label>Email :</label>
				<input type="email" name="b">
				<label>Subject :</label>
				<input type="text" name="c">
				<label>Message :</label>
				<textarea name="d" ></textarea>
				<input type="submit" name="submit" id="submit" value="Submit">
				
			</form>
		</div>
		<div class="col-md-6 contact-info">
			<h3>Contact info</h3>
			<p><strong class="text-uppercase">email :</strong>no-reply@ayathemes.com</p>
			<p><strong class="text-uppercase">Phone :</strong>00-00000-0000</p>
			<p><strong class="text-uppercase">Address :</strong>03, Home sweet home, myLovelyCity</p>
		</div>
	</div>
  </section>
@endsection