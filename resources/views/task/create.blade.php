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
            <form enctype="multipart/form-data">
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-2">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <h5>Task Information</h5>
                                    </div><br>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Assign Person</label><select class="form-control">
                                            <option disabled="" value="">Select Assign Person</option>
                                            <option value="1">Riazul Islam</option>
                                            <option value="2">Tanvir Nawaz</option>
                                            <option value="3">Naveen</option>
                                        </select>
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Task Name</label><input type="text" class="form-control" name="institute_name">
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlTextarea1">Task Details</label>
                                        <textarea id="exampleFormControlTextarea1" class="form-control" rows="3" spellcheck="false"
                                            name="scholarship_policy"></textarea>
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlTextarea1"> Tasks Notes</label>
                                        <textarea id="exampleFormControlTextarea1" class="form-control" rows="3" spellcheck="false"
                                            name="institute_important_notes"></textarea>
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">

                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Task Start Date</label>
                                        <input type="date" class="form-control" name="campus_name">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Task Deadline</label>
                                        <input type="date" class="form-control" name="campus_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-5"><button type="button" class="btn btn-warning btn-lg me-2">
                                Cancel </button><button type="submit" class="btn btn-primary btn-lg mr-2"
                                > Submit </button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
