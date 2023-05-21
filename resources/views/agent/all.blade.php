@extends('adminpanel')
@section('admin')
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
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
            <h5 class="p-3">Agent List</h5>
            <div class="widget-content widget-content-area">
                <form>
                    <div class="row mb-4">
                        <div class="col-4">
                            <select class="form-control">
                                <option>Select Agent Company</option>
                                <option>Oxford International</option>
                                <option>HEC UK</option>
                                <option>NWC</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col-1">
                            <input type="submit" value="Filter" name="time" class="btn btn-warning">
                        </div>
                        <div class="col">
                            <input type="submit" value="Reset" name="time" class="btn btn-danger">
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary" href="{{ URL::to('create-agent') }}">+ Add Agent</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Role</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <th class="text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="avatar me-2">
                                                    <img alt="avatar"
                                                        src="{{ asset('backend/src/assets/img/profile-7.jpeg') }}"
                                                        class="rounded-circle" />
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">Shaun Park</h6>
                                                    <span>shaun.park@mail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            4446464646456
                                        </td>
                                        <td>
                                            <p class="mb-0">CEO</p>
                                            <span class="text-success">Management</span>
                                        </td>
                                        <td class="text-center">
                                            <div
                                                class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                                <div class="input-checkbox">
                                                    <span class="switch-chk-label label-left">On</span>
                                                    <input class="switch-input" type="checkbox" role="switch"
                                                        id="form-custom-switch-inner-text" checked="">
                                                    <span class="switch-chk-label label-right">Off</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-btns">
                                                <a href="{{ URL::to('agent-details') }}" class="badge badge-pill bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye text-white">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </a>
                                                <a href="" class="badge badge-pill bg-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit-3 text-white">
                                                        <path d="M12 20h9"></path>
                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="" class="badge badge-pill bg-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2  delete-multiple text-white">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
