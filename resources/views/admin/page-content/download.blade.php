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
							            Section
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

							<form method="post" action="{{url('add/downloadsection')}}" enctype="multipart/form-data">
								@csrf	
								<input type="hidden" name="section" value="download">
								<input type="hidden" name="oldimage_1" value="@if($data){{$data->btn_text}}@endif">	
								<input type="hidden" name="oldimage_2" value="@if($data){{$data->btn_text_1}}@endif">	

							<div class="card-body">
								<div class="row">
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Heading</label>
								            <input type="text" class="form-control input-lg" required  name="heading" value="@if($data){{$data->heading}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Btn Link</label>
								            <input type="text" class="form-control input-lg" required name="btn_link" value="@if($data){{$data->btn_link}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Btn Link 1</label>
								            <input type="text" class="form-control input-lg" required  name="btn_link_1" value="@if($data){{$data->btn_link}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Btn Logo</label>
											<img src="@if($data){{asset('assets/'.$data->btn_text)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"   name="btn_logo">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Btn Logo 1</label>
											<img src="@if($data){{asset('assets/'.$data->btn_text_1)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"  name="btn_logo_1">
								        </div>
								    </div>
								 
								 
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Short Description</label>
								            <textarea class="form-control" rows="5" required name="detail">@if($data){{$data->detail}}@endif</textarea>
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