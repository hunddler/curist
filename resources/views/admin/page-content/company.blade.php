@extends('admin.layouts.main-layout')
@section('title','HomePage Information')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	    <!--begin::Entry-->
	    <div class="d-flex flex-column-fluid">
	        <!--begin::Container-->
	        <div class="container">

	            <div class="row">
	            	<div class="col-md-10">
	            		<div class="card card-custom">
	            			<div class="card-header flex-wrap border-0 pt-6 pb-0">
							    <div class="card-title">
							        <h3 class="card-label">
							            Section CompanyInfo
							        </h3>
							    </div>
							</div>

							@if(session()->has('msg'))
                            <div class="alert alert-success">
                               <strong>{!! session('msg') !!}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            @endif

							<form method="post" action="{{url('add/companyinfo')}}" enctype="multipart/form-data">
								@csrf	
								<input type="hidden" name="section" value="company">
								<input type="hidden" name="oldimage" value="@if($data){{$data->company_logo}}@endif">	

							<div class="card-body">
								<div class="row">
								 
                                 
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Company Logo</label>
											<img src="@if($data){{asset('assets/'.$data->company_logo)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"  name="company_logo">
								        </div>
								    </div>
								 
								   
								    <div class="col-md-12">
								    	<button type="submit" class="btn mt-3 btn-primary">Save Changes</button>
								    </div>
								</div>
							</div>
	            		</div>
	            	</div>
				</form>

	            
	            </div>
			
	        </div>
	    </div>
	</div>
@endsection