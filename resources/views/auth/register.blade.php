@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
				<div class="panel-heading" style="font-size:14pt;background-color: maroon;color:#fff; font-weight: bold">Register</div>
                                <div class="panel-body" style="background: #ccc">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                                       
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							
							<div class="col-md-4">
                                                            <label class="control-label">First Name</label>
                                                            <input type="text"  class="form-control" name="fname" value="{{ old('fname') }}">
							</div>
                                                        <div class="col-md-4">
                                                            <label class="control-label">Middle Name</label>
                                                            <input type="text"  class="form-control" name="mname" value="{{ old('mname') }}">
							</div>
                                                        <div class="col-md-4">
                                                                <label class="control-label">Last Name</label>
								<input type="text"  class="form-control" name="lname" value="{{ old('lname') }}">
							</div>
						</div>
                                                
                                                <div class="form-group">
         
                                                  
                                                    <div class="col-md-4">
                                                      <label class="control-label">Date of Birth</label>
                                                        <input type="text" class="form-control" data-date-format="mm/dd/yyyy" placeholder = "yyyy-mm-dd" name="birthdate" value="{{ old('birthdate') }}" id="birthdate">
                                                        
                                                         
                                                    </div>  
                                                  
                                                    <div class="col-md-4">
                                                        <label class="control-label">Gender</label>
                                                        <select name="gender" class="form form-control">
                                                            <option value="">--Select--</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>
                                                        </select>    
                                                    </div>  
                                                    
							<div class="col-md-4">
                                                            <label class="control-label">E-Mail Address</label>
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                                        </div>
                                                </div>
                                                
                           
                                                <div class="form-group">
                                                    
							<div class="col-md-6">
                                                            <label class="control-label">Address</label>
								<input type="text" class="form-control" name="addr1" value="{{ old('addr1') }}">
							</div>
                                                        <div class="col-md-3">
                                                             <label class="control-label">City</label>
								<input type="text" class="form-control" name="city" value="{{ old('city') }}">
							</div>
                                                    
							<div class="col-md-3">
                                                            <label class="control-label">Country</label>
								<input type="text" class="form-control" name="country" value="{{ old('country') }}">
							</div>
							
						</div>
                                                
                                                <div class="form-group">
                                                    
							<div class="col-md-3">
                                                            <label class="control-label">Phone Number</label>
								<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
							</div>
                                                       
							<div class="col-md-3">
                                                             <label class="control-label">Mobile Number</label>
								<input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
							</div>
                                                        <div class="col-md-6">
                                                             <label class="control-label">From where did you know AMA Online Education?</label>
                                                             <select name="source" class="form-control">
                                                                 <option value = "">-Select-</option>  
                                                                 <option value="Print Ad">Print Ad</option>
                                                                 <option value="Radio">Radio</option>
                                                                 <option value="Telivision">Television</option>
                                                                 <option value="Social Media">Social Media</option>
                                                                 <option value="Gogle">Google</option>
                                                                 <option value="Blogs">Blogs</option>
                                                                 <option value="Refer By A Friend">Refer By A Friend</option>
                                                                 <option value="Others">Others</option>
                                                             </select>    
							</div>
							
						</div>
                                                
                                           
						<div class="form-group">
							
							<div class="col-md-12">
                                                                <label class="control-label">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							
							<div class="col-md-12">
                                                            <label class="control-label">Confirm Password</label>
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

                                                <div class="form-group">
                                                    
                                                    <div class="col-md-12">
                                                        <label class="control-label">Not a robot?</label>
                                                        
                                                        {!! app('captcha')->display(); !!}
                                                    </div>    
                                                </div>    
						<div class="form-group">
                                                   
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary form form-control">
									Register
								</button>
							</div>
						</div>
					</form>
                                           
				</div>
			
		</div>
	</div>
    
@stop
