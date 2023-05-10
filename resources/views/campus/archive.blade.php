@extends('adminpanel')
@section('admin')
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">
        <div class="secondary-nav">
            <div class="breadcrumbs-container" data-page-heading="Analytics">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </a>
                    <div class="d-flex breadcrumb-content">
                        <div class="page-header">
                            <div class="page-title">
                            </div>
                            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>

                        </div>
                    </div>
                </header>
            </div>
        </div>
        <h5 class="px-3 pt-3">Archive Campus</h5>
        <div class="row layout-top-spacing">
            <div class="layout-px-spacing" theme-mode-data="false">
                <div id="card_1" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col col-md-4 mb-4">
                                    <div class="card component-card_4">
                                        <div class="card-body custom-card-body-country">
                                            <div class="user-info">
                                                <div class="d-flex align-items-start justify-content-between pl-4">
                                                    <div class="logo-title-wrap">
                                                        <img src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcT7NdFrWA1QoMPCzuguc4xhhtpU3EMvVg-pXJYZ-BfQnI2o6o9yNjHOb5OnRjo4uoyq" alt="..." width="100px">
                                                    </div>
                                                    <div class="action-wrapd-flex align-items-center justify-content-between">
                                                        <span class="badge badge-pill badge-warning custom-btn-branch me-1">
                                                            <a href="/country-view/ireland" class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                                        </span>
                                                        <a href="/country/ireland" class="">
                                                            <span class="badge badge-pill badge-secondary custom-btn-branch me-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                            </span>
                                                        </a>
                                                        <a href="/country/ireland" class="">
                                                            <span class="badge badge-pill badge-success custom-btn-branch me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-info-lists">
                                                    <div class="title-subtitle-wrap mt-4">
                                                        <a href="" class="">
                                                            <h4 class="card-user_name">Manchester Campus</h4>
                                                        </a>
                                                        <p class="card-user_occupation">Code: MA</p>
                                                    </div>
                                                    <ul class="list-group custom-list-group-branch me-1">
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-warning">Total Courses</h6><a href="" class=""><span class="badge badge-warning">0</span></a></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-primary">All Application</h6><span class="badge badge-primary">8</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-primary">New Application</h6><span class="badge badge-info">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Sub-Agent Application</h6><span class="badge badge-secondary">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Conditional/ Unconditional</h6><span class="badge badge-success">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Enrolled Students</h6><span class="badge badge-success">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-danger">Reject Applications</h6><span class="badge badge-danger">0</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-4 mb-4">
                                    <div class="card component-card_4">
                                        <div class="card-body custom-card-body-country">
                                            <div class="user-info">
                                                <div class="d-flex align-items-start justify-content-between pl-4">
                                                    <div class="logo-title-wrap">
                                                        <img src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcSp9D91c3SJquuX7ULMJTnCM0iItK09k2WDRXPWxiHg2IJVpqcTpxSfMvrU3aINTflT" alt="..." width="80px">
                                                    </div>
                                                    <div class="action-wrapd-flex align-items-center justify-content-between">
                                                        <span class="badge badge-pill badge-warning custom-btn-branch me-1 me-2">
                                                            <a href="" class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                                        </span>
                                                        <a href="" class="">
                                                            <span class="badge badge-pill badge-secondary custom-btn-branch me-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                            </span>
                                                        </a>
                                                        <a href="/country/ireland" class="">
                                                            <span class="badge badge-pill badge-success custom-btn-branch me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-info-lists">
                                                    <div class="title-subtitle-wrap mt-4">
                                                        <a href="" class="">
                                                            <h4 class="card-user_name">Coventry Campus</h4>
                                                        </a>
                                                        <p class="card-user_occupation">Code: CO</p>
                                                    </div>
                                                    <ul class="list-group custom-list-group-branch me-1">
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-warning">Total Courses</h6><a href="" class=""><span class="badge badge-warning">0</span></a></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-primary">All Application</h6><span class="badge badge-primary">8</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-primary">New Application</h6><span class="badge badge-info">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Sub-Agent Application</h6><span class="badge badge-secondary">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Conditional/ Unconditional</h6><span class="badge badge-success">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Enrolled Students</h6><span class="badge badge-success">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-danger">Reject Applications</h6><span class="badge badge-danger">0</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-md-4 mb-4">
                                    <div class="card component-card_4">
                                        <div class="card-body custom-card-body-country">
                                            <div class="user-info">
                                                <div class="d-flex align-items-start justify-content-between pl-4">
                                                    <div class="logo-title-wrap">
                                                        <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcSvn_sOWLkYz4CQU-5N4X-TO1PnVtWDBiSKp3n8XQpEyFtMiC5LzVDLZyk_cZFhAUpa" alt="..." width="100px">
                                                    </div>
                                                    <div class="action-wrapd-flex align-items-center justify-content-between">
                                                        <span class="badge badge-pill badge-warning custom-btn-branch me-1 me-2">
                                                            <a href="" class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                                        </span>
                                                        <a href="" class="">
                                                            <span class="badge badge-pill badge-secondary custom-btn-branch me-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                            </span>
                                                        </a>
                                                        <a href="/country/ireland" class="">
                                                            <span class="badge badge-pill badge-success custom-btn-branch me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-info-lists">
                                                    <div class="title-subtitle-wrap mt-4">
                                                        <a href="" class="">
                                                            <h4 class="card-user_name">Birmingham Campus</h4>
                                                        </a>
                                                        <p class="card-user_occupation">Code: BI</p>
                                                    </div>
                                                    <ul class="list-group custom-list-group-branch me-1">
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-warning">Total Courses</h6><a href="" class=""><span class="badge badge-warning">0</span></a></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-primary">All Application</h6><span class="badge badge-primary">8</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-primary">New Application</h6><span class="badge badge-info">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Sub-Agent Application</h6><span class="badge badge-secondary">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Conditional/ Unconditional</h6><span class="badge badge-success">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-success">Enrolled Students</h6><span class="badge badge-success">0</span></li>
                                                        <li class="d-flex justify-content-between align-items-center">
                                                            <h6 class="count-danger">Reject Applications</h6><span class="badge badge-danger">0</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop
