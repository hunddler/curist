@extends('admin.layouts.main-layout')
@section('title','HomePage Information')
@section('content')
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	    <!--begin::Entry-->
	    <div class="d-flex flex-column-fluid">
	        <!--begin::Container-->
	        <div class="container">

                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
                    Add Team
                  </button>

                  @if(session()->has('msg'))
                  <div class="alert alert-success">
                     <strong>{!! session('msg') !!}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @endif

	            <div class="row">
	            	<div class="col-md-12">
	            		<div class="card card-custom">
	            			<div class="card-header flex-wrap border-0 pt-6 pb-0">
							    <div class="card-title">
							        <h3 class="card-label">
							            Section Team
							        </h3>
							    </div>
							</div>
                             
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Edit</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($Team as $team)
                                  <tr>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->role}}</td>
                                    <td><img src="{{asset('assets/'.$team->image)}}" width="50" height="50"></td>
                                    <td><button type="button" class="btn" data-toggle="modal" data-target="#exampleModal{{$team->id}}">
                                        <i class="fa fa-edit"></i>
                                      </button></td>
                                  </tr>

                                  <div class="modal fade" id="exampleModal{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form method="post" action="{{url('add/editteam')}}" enctype="multipart/form-data">
                                            @csrf	
                                            <input type="hidden" name="id" value="{{$team->id}}">
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="lable-control">Name</label>
                                                    <input type="text" class="form-control input-lg" value="{{$team->name}}"  name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="lable-control">Designation </label>
                                                    <input type="text" class="form-control input-lg" value="{{$team->role}}"  name="designation">
                                                </div>
                                            </div>
                                            <input type="hidden" name="image" value="{{$team->image}}">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="lable-control">Logo</label>
                                                    <img src="{{asset('assets/'.$team->image)}}" width="50" height="50">
                                                    <input type="file" class="form-control input-lg" name="logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="Submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach  
                              
                                </tbody>
                              </table>
                              
                          
							

	            		</div>
	            	</div>

	            
	            </div>
			
	        </div>
	    </div>
	</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{url('add/team')}}" enctype="multipart/form-data">
                @csrf	
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="lable-control">Name</label>
                        <input type="text" class="form-control input-lg"  name="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="lable-control">Designation </label>
                        <input type="text" class="form-control input-lg"  name="designation">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="lable-control">Logo</label>
                        <input type="file" class="form-control input-lg" required  name="logo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="Submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection