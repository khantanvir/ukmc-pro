<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ (!empty($page_title))?$page_title:'' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/src/assets/img/favicon.ico') }}" />
    <link href="{{ asset('backend/layouts/vertical-dark-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/layouts/vertical-dark-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/layouts/vertical-dark-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('backend/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/layouts/vertical-dark-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/layouts/vertical-dark-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('backend/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/src/assets/css/light/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/src/assets/css/dark/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/src/plugins/src/stepper/bsStepper.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/src/assets/css/light/scrollspyNav.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/src/plugins/css/light/stepper/custom-bsStepper.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/src/assets/css/dark/scrollspyNav.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/src/plugins/css/dark/stepper/custom-bsStepper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/src/assets/css/light/forms/switches.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/custom.css') }}">
    <!--  END CUSTOM STYLE FILE  -->


</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="#">
                        <img src="{{ asset('backend/src/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="#" class="nav-link"> UKMC </a>
                </li>
            </ul>
            <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">
                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                        <span class="badge badge-success"></span>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="drodpown-title message">
                            <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-primary">9 Unread</span></h6>
                        </div>
                        <div class="notification-scroll">
                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <img src="{{ asset('backend/src/assets/img/profile-16.jpeg') }}" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Farjana Khan</h6>
                                            <p><small class="">Updated application status<span class="text-danger"> hot</span> to <span class="text-success">potential</span> lead.</small></p>
                                            <p class="">1 hr ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <img src="{{ asset('backend/src/assets/img/profile-15.jpeg') }}" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="tw-bold">Sanjana Rahman</h6>
                                            <p><small class="">Updated application status<span class="text-danger"> New</span> to <span class="text-success">hot</span> lead.</small></p>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <img src="{{ asset('backend/src/assets/img/profile-21.jpeg') }}" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Ariful Islam</h6>
                                            <p><small class="">add <span class="text-danger">new</span> application lead to all lead.</small></p>
                                            <p class="">14 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <img src="https://devriazul.fastitbd.com/images/devriazul.jpg" class="img-fluid me-2" alt="avatar">
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Riazul Islam</h6>
                                            <p><small class=""><span class="text-danger">Updated</span> Profile information.</small></p>
                                            <p class="">23 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                @if(Auth::check() && !empty(Auth::user()->photo))
                                <img alt="avatar" src="{{ asset(Auth::user()->photo) }}" class="rounded-circle">
                                @else
                                <img alt="avatar" src="{{ asset('web/avatar/user.png') }}" class="rounded-circle">
                                @endif

                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                @if(Auth::check())
                                <div class="media-body">
                                    <h5>{{ Auth::user()->name }}</h5>
                                    <p>
                                        @if(Auth::user()->role=='admin')
                                            <span>Super Admin</span>
                                        @elseif(Auth::user()->role=='adminManager')
                                            <span>Admission Manager</span>
                                        @elseif(Auth::user()->role=='teacher')
                                            <span>Teacher</span>
                                        @elseif(Auth::user()->role=='agent')
                                            <span>Agent</span>
                                        @else
                                            <span>Other</span>
                                        @endif
                                    </p>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ URL::to('profile-settings') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                                <span>Profile</span>
                            </a>
                        </div>
                        @if(Auth::check())
                        <div class="dropdown-item">
                            <a href="{{ URL::to('sign-out') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span>Log Out</span>
                            </a>
                        </div>
                        @endif
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            @include('sidebar/menulist')

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('admin')
            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('backend/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('backend/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/layouts/vertical-dark-menu/app.js') }}"></script>
    <script src="{{ asset('backend/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/src/assets/js/scrollspyNav.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('backend/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/src/assets/js/dashboard/dash_1.js') }}"></script>
    <script src="{{ asset('backend/src/assets/js/dashboard/dash_2.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <!-- BEGIN PAGE LEVEL SCRIPTS -->
     <script src="{{ asset('backend/src/plugins/src/stepper/bsStepper.min.js') }}"></script>
     <script src="{{ asset('backend/src/plugins/src/stepper/custom-bsStepper.min.js') }}"></script>
     <!-- END PAGE LEVEL SCRIPTS -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <script>
		@if(Session::has('success'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.success("{{ session('success') }}");
		@endif

		@if(Session::has('error'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"positionClass": "toast-top-right",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.error("{{ session('error') }}");
		@endif

		@if(Session::has('info'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.info("{{ session('info') }}");
		@endif

		@if(Session::has('warning'))
		toastr.options =
		{
			"closeButton" : true,
			"progressBar" : true,
			"timeOut": "10000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
		}
				toastr.warning("{{ session('warning') }}");
		@endif
	  </script>
	  <script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		</script>

        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('ef4fd77f0ef3365b974c', {
            cluster: 'ap2'
            });

            var channel = pusher.subscribe('university');
            channel.bind('notice', function(data) {
                //alert(JSON.stringify(data));
                iziToast.show({
                    title: 'Hey',
                    message: data.message,
                    position: 'bottomRight',
                    timeout: 8000,
                    color: 'green',
                    balloon: true,
                    close: true,
                    progressBarColor: 'yellow',
                });
            });
        </script>
        <script>
            $(function(){
				$('.campus-change-status').change(function(){
					var active = $(this).prop('checked') == true ? 1 : 0;
					var campus_id = $(this).data('id');
						$.post('{{ URL::to('campus-change-status') }}',
						{
							campus_id: campus_id,
							active: active
						},
						function(data, status){
                            console.log(data);
                            if(data['result']['key']===101){
                                iziToast.show({
                                    title: 'Info',
                                    message: data['result']['val'],
                                    position: 'topRight',
                                    timeout: 8000,
                                    color: 'red',
                                    balloon: true,
                                    close: true,
                                    progressBarColor: 'yellow',
                                });
                            }
                            if(data['result']['key']===200){
                                iziToast.show({
                                    title: 'Info',
                                    message: data['result']['val'],
                                    position: 'topRight',
                                    timeout: 8000,
                                    color: 'green',
                                    balloon: true,
                                    close: true,
                                    progressBarColor: 'yellow',
                                });
                                setTimeout(function () {
                                    location.reload(true);
                                }, 2000);
                            }
							//alert("Data: " + data + "\nStatus: " + status);
						});

				});
			});
        </script>
        <script src="{{ asset('web/js/custom.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //e.preventDefault();
                var maxele = 15;
                var count = 1;
                let addbutton = document.getElementById("addAttributeButton");
                addbutton.addEventListener("click", function() {
                let attributes_boxes = document.getElementById("select-wrapper");
                let clone = attributes_boxes.firstElementChild.cloneNode(true);
                if(count < maxele){
                    count++;
                    attributes_boxes.appendChild(clone);
                }

                });
                $("#select-wrapper").on("click",".remove-attribute-element", function(e){
                    e.preventDefault();

                    if(count > 1){
                        $(this).parents("#element-wrapper").remove();
                        count--;
                    }

                });
            });
        </script>
        <script>
            //var count = 1;
            $(document).on("click", ".remove-attribute-element", function(e) {
                e.preventDefault();
                var $wrapper = $(this).closest(".element-wrapper");
                if ($wrapper.siblings().length > 0) {
                    $wrapper.remove();
                }

            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>
