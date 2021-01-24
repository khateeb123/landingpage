@extends('layouts.app')

@section('content')
          

<div class="landing-page">
		<div class="background">
		
<div class="main-img" style="background:url('images/Dog.png')"></div>
<section class="">
		<div class="container-fluid">
			<div class="row">
				<div class="pl-4 text-light col-sm-8 mt-10">
					<h2>For Pet People, By Pet People</h2>
					<p class="h4">Explore from 200’s of pet care professionals around your areas, learn from pet care videos and look for best pet products  </p>
					<div class="mt-5 pt-5">
						<h1>I would like to </h1>
					</div>

					<div class="row">
						<div class=" pic-box1 mr-3">
							<div class="mt-3 ml-3">
								<a href=""><p class="">Find a Pet Professional</p></a>
							</div>
							<div class="img1" style="background: url('images/Layer11.png') no-repeat;">
								
							</div>
							
						</div>
						<div class="pic-box2  mr-3">
							<div class="mt-3 ml-3">
								<a  href=""><p>Discover New  Pet Products</p></a>
							</div>
							<div class="img2" style="background: url('images/Layer13.png') no-repeat;">
								
							</div>
							
						</div>
						<div class="pic-box3 mr-3 ">
							<div class="mt-3 ml-3">
								<a  href=""><p>Explore Pet Care Advice</p></a>
							</div>
							<div class="img3" style="background: url('images/Layer12.png') no-repeat;">
								
							</div>
						</div>
					</div>	
				</div>
			</div>	
		</div>	
</section>
</div>

<section class="section-2 px-5">
	<div class="d-flex justify-content-center text-center">
		<div class="col-sm-4">
		<div><h1>Pet Pro’s around you</h1></div>
		<p>Search our database of wag-tastic, top-ranked, local pet care professionals for all of your pets.</p>
		</div>
	</div>

	<div class="search-form">
		<form method="POST" class="needs-validation mx-5">
    
		  <div class="form-row ">
    		<div class="col">
      		<input type="text" class="form-control" id="name" name="name" placeholder="full name"  required>
    		</div>
    		<div class="col ">
      		<input type="email" class="form-control" id="email" name="email" placeholder=" your abc@email.com"  required>
    		</div>   
   			 <div class="col">
      		<input type="email" class="form-control" id="email" name="email" placeholder=" your abc@email.com"  required>
    		</div> 
    				<button class="form-button col" type="submit">Search</button>
     
  		</div>
  
	   </form>
	</div>

	<div class="row">
		<div class="mycard col">
			<div class="card " >
			  <img
			    src="{{asset('images/dog1.png')}}"
			    class="card-img-top"
			    alt="..."
			  />
			  <div class="card-body">
			    	<h2>Paws On Chicon</h2>
			    <p class="card-text">
			      Homemade Treats and Food, Pet Store, Self Serve Dog...
			    </p>
   			    <button class="btn btn-card">Deal Offered</button>

			  </div>
			</div>
		</div>
		<div class="mycard col">
			<div class="card " >
			  <img
              src="{{asset('images/dog2.png')}}"
			    class="card-img-top"
			    alt="..."
			  />
			  <div class="card-body">
			  	<h2>Liz’s Pet Care</h2>
			    <p class="card-text">
			     Pet Sitter, Dog Training, Pet Behaviour...
			    </p>
 			    <button class="btn btn-card">Deal Offered</button>

			  </div>
			</div>
		</div>
		<div class="mycard col">
			<div class="card " >
			  <img
              src="{{asset('images/dog3.png')}}"
			    class="card-img-top"
			    alt="..."
			  />
			  <div class="card-body">
			  	<h2>Pet Behaviorist</h2>
			    <p class="card-text">
			     Pet Sitter, Dog Training, Pet Behaviour...
			    </p>
			    <button class="btn btn-card">Deal Offered</button>
			  </div>
			</div>
		</div>
	</div>
</section>

<section class="section-3 mt-5">
	<div class="container-fluid food-area" >
		<div class="row">
			<div class="col-sm-6" >
				<img  src="{{asset('images/food.png')}}"  width="500">
			</div>

			<div class="col-sm-6" >
				<div class=" mt-10 mb-5">
					<img   src="{{asset('images/bone.png')}}">
					<h1>ZIWI Premium Pet Food</h1>
					<p>Finding a healthy balance between a dog food that is healthy for your dog and one that tastes delicious can be difficult. While an all-natural raw diet is a new phase in the canine world, that doesn’t work for every household</p>
			      <button class="btn btn-card">See Product Review</button>

				</div>		

			</div>
		</div>
		
	</div>

</section>

<section class="section-4 px-5" id="test">

	<div class="main-4">
		<div class="main-img4" style="background:url('images/blackdog.png') no-repeat"></div>
		
		<div class="container-fluid">
			<div class="row text-light">
				<div class="col-sm-6"></div>
			@guest	
				<div class="col-sm-5">
					<div class="mt-10 ">
						<h1>Are You Wag Enabled?</h1>
						<p>Sign up for our newsletter to get exclusive deals and expert advice for you and your pet.</p>
					<div>
						<!-- kfgfkgjf -->
					 <form  method="POST" action="{{ route('register') }}">
                        @csrf

						<div class="form-group form-row " >
					  		 <div class="col-md-6">
                                <input id="name" type="text" class="inputs @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-md-6">
                                <input id="email" type="email" class="inputs @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
					  	</div>

					  	<div class="form-group form-row">
					 		<div class="col-md-6">
                                <input id="password" type="password" class="inputs @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="new password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-md-6">
                                <input id="password-confirm" type="password" class="inputs" name="password_confirmation" required autocomplete="new-password" placeholder="confirm new password">
                            </div>
					  	</div>
					  	
					  		<button class="btn btn-wag float-right">submit</button>

					</form>

						<!-- Route -->
					</div>

					</div>
				</div>
				@else
			
				<div class="col-sm-6" >
				<div class=" mt-10 mb-5">
					<img   src="{{asset('images/bone.png')}}">
					<h1>ZIWI Premium Pet Food</h1>
					<p>Finding a healthy balance between a dog food that is healthy for your dog and one that tastes delicious can be difficult. While an all-natural raw diet is a new phase in the canine world, that doesn’t work for every household</p>
			      <button class="btn  btn-warning">See Product Review</button>


				</div>		

			</div>
			@endguest
			
			</div>
			
		</div>
    	</div>

</section>

@endsection