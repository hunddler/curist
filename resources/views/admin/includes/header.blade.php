


<div id="kt_header" class="header bg-white header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-2">
            <!--begin::Page Title-->
            <h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0">
                Dashboard
            </h3>
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                    <a href="{{url('admin/home')}}" class="text-muted">
                        <i class="flaticon2-shelter icon-1x"></i>&nbsp;
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="all-jobs" class="text-muted"></a>
                </li>
            </ul>
            <!--end::Page Title-->
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default"></div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Notifications-->
            <div class="dropdown">
                <!--begin::Toggle-->

                <!--begin::User-->
                <div class="topbar-item">
                    <div class="input-icon input-icon-right">
                        <input type="text" class="form-control input-sm-top" placeholder="Search anything..." />
                        <span><i class="flaticon2-search-1 icon-md text-primary"></i></span>
                    </div>
                </div>
                <!--begin::User-->

                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="false">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                        fill="#000000"
                                        opacity="0.3"
                                    />
                                    <path
                                        d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                        fill="#000000"
                                    />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="pulse-ring"></span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg" style="width: 400px;">
                    <form>
                        <!--begin::Header-->
                        <div class="d-flex flex-column pt-8 pl-9 pb-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{asset('carrier/assets/media/misc/bg-1.jpg')}});">
                            <!--begin::Title-->
                            <h4 class="d-flex rounded-top">
                            </h4>
                            <span class="">
                                See your all Dispute notifications here
                            </span>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <div class="p-6">
                            <!--begin::Scroll-->
                            <div class="scroll pr-7 mr-n7 ps ps--active-y" data-scroll="true" data-height="300" data-mobile-height="200" style="height: 300px; overflow: hidden;">
                                <!--begin::Item-->
                              
                                <!--end::Item-->
                                <!--begin::Item-->
                                 
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                  
                                    <!--end::Text-->
                                </div>
                              
                                <!--end::Item-->
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px; height: 300px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 203px;"></div>
                                </div>
                            </div>
                            <!--end::Scroll-->
                        </div>
                    </form>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->
            
            <!--begin::User-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-3">
                            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline">Hi,</span>
                            <span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline"> </span>
                        </div>
                        <!-- High Priority -->
                        <span class="symbol symbol-35 symbol-light-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span>

                        <!-- Medium -->
                        <!-- <span class="symbol symbol-35 symbol-warning">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span> -->

                        <!-- Low -->
                        <!-- <span class="symbol symbol-35 symbol-success">
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        </span> -->

                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <!--begin::Header-->
                    <div class="d-flex align-items-center p-8 rounded-top">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                            <img src="{{asset('admin/assets/media/users/300_21.jpg')}}" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Text-->
                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">
                            Hi, <br>
                            <small></small>
                        </div>
                        <!--end::Text-->
                    </div>
                    <div class="separator separator-solid"></div>
                    <!--end::Header-->

                    <div class="navi navi-spacer-x-0 pt-5">
                        <!--begin::Item-->
                        <a href="{{url('admin/personal-information')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <img src="{{asset('admin/assets/media/custom/account-drop.svg')}}">
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">
                                        My Account
                                    </div>
                                    <div class="text-muted">
                                        Personal information
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="{{url('admin/change-password')}}" class="navi-item px-8">
                            <div class="navi-link">
                                <div class="navi-icon mr-2">
                                    <img src="{{asset('admin/assets/media/custom/admin-drop.svg')}}">
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold">
                                        Change Password
                                    </div>
                                    <div class="text-muted">
                                        Update your password
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Footer-->
                        <div class="navi-separator mt-3"></div>
                        <div class="navi-footer  px-8 py-5">
                        
                            <a class="btn btn-light-primary font-weight-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::User-->
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header