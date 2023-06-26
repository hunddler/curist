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
							            Section Benefit Top
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

							<form method="post" action="{{url('add/benefit')}}" enctype="multipart/form-data">
								@csrf	
								<input type="hidden" name="section" value="benefit">
								<input type="hidden" name="oldimage_1" value="@if($data){{$data->benefit_logo}}@endif">	
								<input type="hidden" name="oldimage_2" value="@if($data){{$data->benefit_logo_1}}@endif">	

							<div class="card-body">
								<div class="row">
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Heading</label>
								            <input type="text" class="form-control input-lg"   name="heading" value="@if($data){{$data->heading}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Sub Heading</label>
								            <input type="text" class="form-control input-lg"   name="sub_heading" value="@if($data){{$data->sub_heading}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Benefit Logo</label>
                                            <img src="@if($data){{asset('assets/'.$data->benefit_logo)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"  name="benefit_logo" value="@if($data){{$data->benefit_logo}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Benefit Logo 1</label>
                                            <img src="@if($data){{asset('assets/'.$data->benefit_logo_1)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"   name="benefit_logo_1" value="@if($data){{$data->benefit_logo_1}}@endif">
								        </div>
								    </div>
									
                                    <div class="col-md-12">
                                    <label class="lable-control"><strong>BENEFITS Feilds</strong></label>
                                    </div>
                                    
                                    <div class="col-md-6">
								        <div class="form-group">
								           
								            <input type="text" class="form-control input-lg" name="benefit_feild" value="@if($data){{$data->benefit_feild}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-6">
								        <div class="form-group">
								            
								            <input type="text" class="form-control input-lg"   name="benefit_feild_1" value="@if($data){{$data->benefit_feild_1}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-6">
								        <div class="form-group">
								          
								            <input type="text" class="form-control input-lg"   name="benefit_feild_2" value="@if($data){{$data->benefit_feild_2}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-6">
								        <div class="form-group">
								       
								            <input type="text" class="form-control input-lg"   name="benefit_feild_3" value="@if($data){{$data->benefit_feild_3}}@endif">
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

                <div class="row mt-2">
	            	<div class="col-md-10">
	            		<div class="card card-custom">
	            			<div class="card-header flex-wrap border-0 pt-6 pb-0">
							    <div class="card-title">
							        <h3 class="card-label">
                                        Section Benefit Bottom
							        </h3>
							    </div>
							</div>

                       

							<form method="post" action="{{url('add/benefitbottom')}}" enctype="multipart/form-data">
								@csrf	
								<input type="hidden" name="section" value="benefitbottom">
								<input type="hidden" name="oldimage_1" value="@if($Benefitbottom){{$Benefitbottom->benefit_logo}}@endif">	
								<input type="hidden" name="oldimage_2" value="@if($Benefitbottom){{$Benefitbottom->benefit_logo_1}}@endif">	

							<div class="card-body">
								<div class="row">
								    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Heading</label>
								            <input type="text" class="form-control input-lg"   name="heading" value="@if($Benefitbottom){{$Benefitbottom->heading}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-12">
								        <div class="form-group">
								            <label class="lable-control">Sub Heading</label>
								            <input type="text" class="form-control input-lg"   name="sub_heading" value="@if($Benefitbottom){{$Benefitbottom->sub_heading}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Benefit Logo</label>
                                            <img src="@if($Benefitbottom){{asset('assets/'.$Benefitbottom->benefit_logo)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"  name="benefit_logo" value="@if($Benefitbottom){{$Benefitbottom->benefit_logo}}@endif">
								        </div>
								    </div>
									<div class="col-md-6">
								        <div class="form-group">
								            <label class="lable-control">Benefit Logo 1</label>
                                            <img src="@if($Benefitbottom){{asset('assets/'.$Benefitbottom->benefit_logo_1)}}@endif" height="50" width="50">
								            <input type="file" class="form-control input-lg"   name="benefit_logo_1" value="@if($Benefitbottom){{$Benefitbottom->benefit_logo_1}}@endif">
								        </div>
								    </div>
									
                                    <div class="col-md-12">
                                    <label class="lable-control"><strong>BENEFITS Feilds</strong></label>
                                    </div>
                                    
                                    <div class="col-md-6">
								        <div class="form-group">
								           
								            <input type="text" class="form-control input-lg" name="benefit_feild" value="@if($Benefitbottom){{$Benefitbottom->benefit_feild}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-6">
								        <div class="form-group">
								            
								            <input type="text" class="form-control input-lg"   name="benefit_feild_1" value="@if($Benefitbottom){{$Benefitbottom->benefit_feild_1}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-6">
								        <div class="form-group">
								          
								            <input type="text" class="form-control input-lg"   name="benefit_feild_2" value="@if($Benefitbottom){{$Benefitbottom->benefit_feild_2}}@endif">
								        </div>
								    </div>
                                    <div class="col-md-6">
								        <div class="form-group">
								       
								            <input type="text" class="form-control input-lg"   name="benefit_feild_3" value="@if($Benefitbottom){{$Benefitbottom->benefit_feild_3}}@endif">
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