@extends('admin.layouts.main-layout')
@section('title','Home Page Content')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->


        <div class=" container ">

			@if(session()->has('msg'))
			<div class="alert alert-success">
			   {!! session('msg') !!}
			</div>
			@endif
	
            <div class="row">
				<div class="col-md-10 mx-auto">
					<div class="row">
				        <div class="col-3">
				        	<div class="card">
				        		<div class="card-body p-7">
				        			<ul class="nav flex-column nav-pills">
						                <li class="nav-item mb-2">
						                    <a class="nav-link active" id="home-tab-5" data-toggle="tab" href="#home-5">
						                        <span class="nav-text">Footer Section</span>
						                    </a>
						                </li>
						                <li class="nav-item mb-2">
						                    <a class="nav-link" id="profile-tab-5" data-toggle="tab" href="#profile-5" aria-controls="profile">
						                        <span class="nav-text">About Us</span>
						                    </a>
						                </li>
						                <li class="nav-item">
						                    <a class="nav-link" id="contact-tab-5" data-toggle="tab" href="#contact-5" aria-controls="contact">
						                        <span class="nav-text">Contact Us</span>
						                    </a>
						                </li>
						                <li class="nav-item">
						                    <a class="nav-link" id="testimonials" data-toggle="tab" href="#testimonials-1" aria-controls="contact">
						                        <span class="nav-text">Testimonials</span>
						                    </a>
						                </li>

										<li class="nav-item">
						                    <a class="nav-link" id="home-tab-6" data-toggle="tab" href="#home-6" aria-controls="contact">
						                        <span class="nav-text">Home Section</span>
						                    </a>
						                </li>

						            </ul>
				        		</div>
				        	</div>
				        </div>
				        <div class="col-9">
				        	<div class="tab-content" id="myTabContent5">
				                <div class="tab-pane fade show active" id="home-5" role="tabpanel" aria-labelledby="home-tab-5">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Change Footer
										            <span class="text-muted pt-2 font-size-sm d-block">Update the Footer on the home page.</span>
										        </h3>
										    </div>
										    {{-- <div class="card-toolbar">
										        <!--begin::Button-->
										        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
										            <span class="svg-icon svg-icon-md">
										                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
										                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										                        <rect x="0" y="0" width="24" height="24"></rect>
										                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
										                        <path
										                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
										                            fill="#000000"
										                            opacity="0.3"
										                        ></path>
										                    </g>
										                </svg>
										                <!--end::Svg Icon-->
										            </span>
										            New Slide
										        </a>
										        <!--end::Button-->
										    </div> --}}
										</div>
				                    	<div class="card-body">
				                    		<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample2">
												<div class="card">
													<div class="card-header" id="headingOne2">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
															
														</div>
													</div>
													<div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
														<div class="card-body">
												<form method="post" action="{{url('footer/section/add')}}" enctype="multipart/form-data">
													@csrf
                                                           <input type="hidden" name="id" value="{{$Footer->id}}" >
														   <input type="hidden" name="oldimage" value="{{$Footer->image}}" >
															<div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="{{$Footer->title}}" name="title">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															    <label class="lable-control">Sub Title</label>
															<input type="text" class="form-control input-lg" value="{{$Footer->subtitle}}" name="subtitle">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="{{$Footer->btn_text}}" name="btn_text">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="{{$Footer->btn_link}}" name="btn_link">
															        </div>
															    </div>

															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text 1</label>
															            <input type="text" class="form-control input-lg" value="{{$Footer->btn_text_1}}" name="btn_text_1">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link 1</label>
															            <input type="text" class="form-control input-lg" value="{{$Footer->btn_link_1}}" name="btn_link_1">
															        </div>
															    </div>
															    <div class="col-md-12">
															    	<div class="form-group">
																		<img src="{{asset('front/assets/img/section-img/'.$Footer->image)}}" width="70" height="70" >
															            <label class="lable-control">Update  Image</label>
															            <input type="file" class="form-control input-lg" name="footer_image">
															        </div>
															    </div>
															</div>
															<button type="submit" class="btn btn-primary">Save changes</button>
												         </form>
														</div>
													</div>
												</div>
												{{-- <div class="card">
													<div class="card-header" id="headingTwo2">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2">
															Slide 2
														</div>
													</div>
													<div id="collapseTwo2" class="collapse"  data-parent="#accordionExample2">
														<div class="card-body">
															<div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Slider Title</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5"></textarea>
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>

															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Text</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-6">
															    	<div class="form-group">
															            <label class="lable-control">Button Link</label>
															            <input type="text" class="form-control input-lg" value="A Best Place to eat and spend your best at the best place." name="name">
															        </div>
															    </div>
															    <div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Update Banner Image</label>
															            <input type="file" class="form-control input-lg" name="name">
															        </div>
															    </div>
															</div>
														</div>
													</div>
												</div> --}}
												
											</div>
				                    	</div>
				                    </div>
				                </div>
				                <div class="tab-pane fade " id="profile-5" role="tabpanel" aria-labelledby="profile-tab-5">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            About Us
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the 2nd section on home page</span>
										        </h3>
										    </div>
										</div>
				                    	<div class="card-body">
				                    		<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample3">
											    <div class="card">
											        <div class="card-header" id="headingOne3">
											            <div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
											                Section 1
											            </div>
											        </div>
											        <div id="collapseOne3" class="collapse show" data-parent="#accordionExample3">
											            <div class="card-body">
															<form method="post" action="{{url('about/section/add')}}" enctype="multipart/form-data">
																@csrf
																<input type="hidden" name="section_1" value="about">
																<input type="hidden" name="oldimage" value="{{$AboutUs->image}}">

											                <div class="row">
																<div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="{{$AboutUs->title}}" name="title">
															        </div>

																	<div class="form-group">
															            <label class="lable-control">Subtitle</label>
															            <input type="text" class="form-control input-lg" value="{{$AboutUs->subtitle}}" name="subtitle">
															        </div>

																	<div class="form-group">
															            <label class="lable-control">Subtitle 1</label>
															            <input type="text" class="form-control input-lg" value="{{$AboutUs->subtitle_1}}" name="subtitle_1">
															        </div>

															        <div class="col-md-12">
															        	<div class="form-group">
																            <label class="lable-control">Description</label>
																            <textarea class="form-control" rows="5" name="description">{{$AboutUs->description}}</textarea>
																        </div>
															        </div>

																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="lable-control">Button Text</label>
																			<input type="text" class="form-control input-lg" value="{{$AboutUs->btn_text}}" name="btn_text">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="lable-control">Button Link</label>
																			<input type="text" class="form-control input-lg" value="{{$AboutUs->btn_link}}" name="btn_link">
																		</div>
																	</div>
																</div>
																	<div class="col-md-12">
																		<div class="form-group">
																			<img src="{{asset('front/assets/img/section-img/'.$AboutUs->image)}}" width="70" height="70" >
																			<label class="lable-control">Update Image</label>
																			<input type="file" class="form-control input-lg" name="image">
																		</div>
																	</div>
															    </div>

																<button type="submit" class="btn btn-primary">Save changes</button>

															</div>
															</form>
											            </div>
											        </div>
											    </div>
											    <div class="card">
											        <div class="card-header" id="headingTwo3">
											            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo3">
											                Section 2
											            </div>
											        </div>
											        <div id="collapseTwo3" class="collapse" data-parent="#accordionExample3">
											            <div class="card-body">
												<form method="post" action="{{url('help/section/add')}}" enctype="multipart/form-data">
													@csrf
												    <input type="hidden" name="section" value="help">
												    <input type="hidden" name="oldimage" value="{{$Help->image}}">

											                <div class="row">
																<div class="col-md-12">
															    	<div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="{{$Help->title}}" name="title">
															        </div>
																	
																	<div class="form-group">
															            <label class="lable-control">SubTitle</label>
															            <input type="text" class="form-control input-lg"  value="{{$Help->subtitle}}" name="subtitle">
															        </div>

															        <div class="col-md-12">
															        	<div class="form-group">
																            <label class="lable-control">Description</label>
																            <textarea class="form-control" rows="5" name="description">{{$Help->description}}</textarea>
																        </div>
															        </div>

																	<div class="col-md-12">
																		<div class="form-group">
																	<label class="lable-control">Update Image</label>
															     <img src="{{asset('front/assets/img/section-img/'.$Help->image)}}" width="70" height="70" >
																<input type="file" class="form-control input-lg" name="image">
																		</div>
																	</div>

																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="lable-control">Sub Heading 1</label>
																				<input type="text" class="form-control input-lg" value="{{$Help->sub_1}}" name="sub_1">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="lable-control">Sub Heading 1 Detail</label>
																				<textarea class="form-control" rows="3" name="detail_1">{{$Help->detail_1}}</textarea>
																			</div>
																		</div>
																	</div>

																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="lable-control">Sub Heading 2</label>
																				<input type="text" class="form-control input-lg" value="{{$Help->sub_2}}" name="sub_2">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="lable-control">Sub Heading 2 Detail</label>
																				<textarea class="form-control" rows="3" name="detail_2">{{$Help->detail_2}}</textarea>
																			</div>
																		</div>
																	</div>
																	
															    </div>
																<button type="submit" class="btn btn-primary">Save changes</button>

															</div>
												         </form>
											            </div>
											        </div>
											    </div>

											</div>
				                    	</div>
				                    </div>
				                </div>
				                <div class="tab-pane fade" id="contact-5" role="tabpanel" aria-labelledby="contact-tab-5">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Contact Us
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the "Get in Toch" section on home page</span>
										        </h3>
										    </div>
										</div>
										<div class="card-body">
											<form method="post" action="{{url('admin/add/contact')}}" >
												@csrf
                                        <input type="hidden" name="contact_id" value="{{$ContactUs->id}}">
										<div class="row">
									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Location</label>
									            <input type="text" class="form-control input-lg" value="{{$ContactUs->location}}" required name="location">
									        </div>
									    </div>

									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Email</label>
									            <input type="email" class="form-control input-lg" value="{{$ContactUs->email}}" required name="email">
									        </div>
									    </div>

									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Phone number</label>
									            <input type="tel" class="form-control input-lg" value="{{$ContactUs->phone}}" required name="phone">
									        </div>
									    </div>

										
										<button type="submit" class="btn btn-primary">Save changes</button>

									</div>
								</form>
										</div>
									</div>
				                </div>
				                <div class="tab-pane fade" id="testimonials-1" role="tabpanel" aria-labelledby="testimonials">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Testimonials
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the "Client's" section on home page</span>
										        </h3>
										    </div>
										    <div class="card-toolbar">
										        <!--begin::Button-->
												<a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#exampleModalScrollable">
										            <span class="svg-icon svg-icon-md">
										                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
										                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										                        <rect x="0" y="0" width="24" height="24"></rect>
										                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
										                        <path
										                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
										                            fill="#000000"
										                            opacity="0.3"
										                        ></path>
										                    </g>
										                </svg>
										                <!--end::Svg Icon-->
										            </span>
										            New Record
										        </a>
										        <!--end::Button-->
										    </div>
										</div>
										@foreach($Test as $data)
										<div class="card-body">
											<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample32{{$data->id}}">
											    <div class="card">
											        <div class="card-header" id="headingOne32">
											            <div class="card-title" data-toggle="collapse" data-target="#collapseOne32{{$data->id}}">
											                Testimonial 1
											            </div>
											        </div>
											        <div id="collapseOne32{{$data->id}}" class="collapse show" data-parent="#accordionExample32{{$data->id}}">
														<form method="post" action="{{url('admin/update/testimonials')}}" enctype="multipart/form-data">
															@csrf
															<input type="hidden" name="id" value="{{$data->id}}">
															<input type="hidden" name="oldimage" value="{{$data->image}}">

											            <div class="card-body">
											                <div class="row">
															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Client Name</label>
															            <input type="text" class="form-control input-lg" value="{{$data->name}}"  name="name">
															        </div>
															    </div>

															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Title</label>
															            <input type="text" class="form-control input-lg" value="{{$data->title}}" name="title">
															        </div>
															    </div>

																<div class="col-md-12">
															        <div class="form-group">
																		<img src="{{asset('front/assets/img/testimonial/'.$data->image)}}" >
															            <label class="lable-control">Image</label>
															            <input type="file" class="form-control input-lg" name="image">
															        </div>
															    </div>


															    <div class="col-md-12">
															        <div class="form-group">
															            <label class="lable-control">Short Description</label>
															            <textarea class="form-control" rows="5" value="{{$data->detail}}" name="detail">{{$data->detail}}</textarea>
															        </div>
															    </div>
																<button type="submit" class="btn btn-primary">Save changes</button>

															</div>
											            </div>
											        </div>
											    </div>
											</form>
											</div>
										</div>
										@endforeach
									</div>
				                </div>

								<div class="tab-pane fade" id="home-6" role="tabpanel" aria-labelledby="home-tab-6">
				                    <div class="card card-custom">
				                    	<div class="card-header flex-wrap border-0 pt-6 pb-0">
										    <div class="card-title">
										        <h3 class="card-label">
										            Home Section
										            <span class="text-muted pt-2 font-size-sm d-block">Update content of the "Get in Toch" section on home page</span>
										        </h3>
										    </div>
										</div>
										<div class="card-body">
											<form method="post" action="{{url('admin/home/section')}}" enctype="multipart/form-data">
												@csrf
										        <input type="hidden" name="id" value="{{$HomeSection->id}}" >
												<input type="hidden" name="oldimage" value="{{$HomeSection->image}}" >

										<div class="row">
									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Title</label>
									            <input type="text" class="form-control input-lg" value="{{$HomeSection->title}}" required name="title">
									        </div>
									    </div>

									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Heading 1</label>
									            <input type="text" class="form-control input-lg" value="{{$HomeSection->h_1}}"  name="h_1">
									        </div>
									    </div>

									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Heading 2</label>
									            <input type="text" class="form-control input-lg" value="{{$HomeSection->h_2}}" required name="h_2">
									        </div>
									    </div>

										
									    <div class="col-md-12">
									        <div class="form-group">
									            <label class="lable-control">Heading 3</label>
									            <input type="text" class="form-control input-lg" value="{{$HomeSection->h_3}}" name="h_3">
									        </div>
									    </div>
										
										<div class="col-md-12">
									        <div class="form-group">
												<img src="{{asset('front/assets/img/section-img/'.$HomeSection->image)}}" height="60" width="60">
									            <label class="lable-control">Image</label>
									            <input type="file" class="form-control input-lg" name="home_image">
									        </div>
									    </div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="lable-control">Button Text</label>
												<input type="text" class="form-control input-lg"  value="{{$HomeSection->btn_text}}" name="btn_text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="lable-control">Button Link</label>
												<input type="text" class="form-control input-lg" value="{{$HomeSection->btn_link}}" name="btn_link">
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Save changes</button>

									</div>
								</form>
										</div>
									</div>
				                </div>

				            </div>
				        </div>
				    </div>
				</div>
			</div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add New Category <br>
                    
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form method="post" action="{{url('admin/add/testimonials')}}" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="lable-control">Client Name</label>
								<input type="text" class="form-control input-lg" required  name="name">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="lable-control">Title</label>
								<input type="text" class="form-control input-lg" required name="title">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="lable-control">Image</label>
								<input type="file" class="form-control input-lg" required name="image">
							</div>
						</div>


						<div class="col-md-12">
							<div class="form-group">
								<label class="lable-control">Short Description</label>
								<textarea class="form-control" rows="5" required name="detail"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
            </div>
            
        </form>
        </div>
    </div>
</div>
@endsection