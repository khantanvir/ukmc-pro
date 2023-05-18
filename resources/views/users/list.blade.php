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
        <h5 class="p-3">User List</h5>
        <div class="widget-content widget-content-area">
            <form method="get" action="">
                 <div class="row mb-4">
                     <div class="col-4">
                        <select name="role" class="form-control">
                            <option value="">Select Role</option>
                            @foreach ($role_list as $row)
                                <option {{ (!empty($get_role) && $get_role==$row['key'])?'selected':'' }} value="{{ $row['key'] }}">{{ $row['val'] }}</option>
                            @endforeach
                        </select>
                     </div>
                     <div class="col-4">
                         <input value="{{ (!empty($get_name))?$get_name:'' }}" name="name" type="text" class="form-control" placeholder="Enter Name">
                     </div>
                     <div class="col-1">
                        <input type="submit" value="Filter" name="time" class="btn btn-warning">
                     </div>
                     <div class="col">
                        <a href="{{ route('reset_user_list') }}" class="btn btn-danger">Reset</a>
                     </div>
                     <div class="col">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Create
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="{{ URL::to('create-admission-manager') }}">Admission Officer</a></li>
                                <li><a class="dropdown-item" href="{{ URL::to('create-teacher') }}">Teacher</a></li>
                                </ul>
                            </div>
                        </div>
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
                                @forelse ($user_list_data as $row)
                                <tr class="{{ (!empty($return_user_id) && $return_user_id==$row->id)?'tr-bg':'' }}">
                                    <td>
                                        <div class="media">
                                            <div class="avatar me-2">
                                                <img alt="avatar" src="{{ asset($row->photo) }}" class="rounded-circle" />
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h6 class="mb-0">{{ (!empty($row->name))?$row->name:'' }}</h6>
                                                <span>{{ (!empty($row->email))?$row->email:'' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ (!empty($row->phone))?$row->phone:'' }}
                                    </td>
                                    <td>
                                        @if($row->role=='admin')
                                        <span class="text-success">Super Admin</span>
                                        @elseif($row->role=='adminManager')
                                        <span class="text-success">Admission Manager</span>
                                        @elseif($row->role=='teacher')
                                        <span class="text-success">Teacher</span>
                                        @else
                                        @endif


                                    </td>
                                    <td class="text-center">
                                        <div class="switch form-switch-custom switch-inline form-switch-primary form-switch-custom inner-text-toggle">
                                            <div class="input-checkbox">
                                                <span class="switch-chk-label label-left">On</span>
                                                <input {{ ($row->active==1)?'checked':'' }} data-action="{{ URL::to('user-status-chnage') }}" data-id="{{ $row->id }}" class="user-status-chnage switch-input" type="checkbox"
                                                    role="switch" id="form-custom-switch-inner-text">
                                                <span class="switch-chk-label label-right">Off</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-btns">
                                            <a href="" class="badge badge-pill bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye text-white"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                            <a href="" class="badge badge-pill bg-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 text-white"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>No Data Found!</td>
                                </tr>
                                @endforelse

                            </tbody>

                        </table>
                        <div style="text-align: center;" class="pagination-custom_solid">
                            {{ $user_list_data->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@stop
