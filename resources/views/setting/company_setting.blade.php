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
                                        <h5>Software Information</h5>
                                    </div><br>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Country</label><select class="form-control">
                                            <option disabled="" value="">Select Represent Country</option>
                                            <option value="1">United Kingdom</option>
                                            <option value="2">Australia</option>
                                            <option value="3">United States</option>
                                            <option value="4">Canada</option>
                                            <option value="cc62d0833e6545c79e32089c78bf41bc">New Zealand</option>
                                            <option value="ce9d34b2590d4c2886a15126b9e61c2b">Ireland</option>
                                            <option value="e0fd049e09d84782a14558530ae2c317">Germany</option>
                                        </select>
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">City</label><input type="text" class="form-control" name="institute_name">
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label
                                            for="exampleFormControlInput1">Currency</label><input type="text"
                                            class="form-control" name="currency">
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">

                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Address</label><input type="text" class="form-control" name="campus_name">
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlInput1">Website</label><input
                                            type="text" class="form-control" name="website">
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlTextarea1">Scholarship
                                            Policy</label>
                                        <textarea id="exampleFormControlTextarea1" class="form-control" rows="3" spellcheck="false"
                                            name="scholarship_policy"></textarea>
                                        <ul>
                                            <!---->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2"><label for="exampleFormControlTextarea1"> Institute
                                            Important Notes</label>
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
                                    <div class="row d-flex align-items-center">
                                        <div class="col col-md-8">
                                            <div class="form-group mb-2"><label>Upload Logo</label><label
                                                    class="custom-file-container__custom-file"><input type="file"
                                                        class="form-control-file" accept="image/*"
                                                        name="institute_logo"></label>
                                                <ul>
                                                    <!---->
                                                </ul>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                        <div class="col col-md-4">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row d-flex align-items-center">
                                        <div class="col col-md-8">
                                            <div class="form-group mb-2"><label>Prospectus</label><label
                                                    class="custom-file-container__custom-file"><input type="file"
                                                        class="form-control-file"></label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-2">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Contact Person</h4><br>
                                </div>
                                <div class="col col-md-12">
                                    <div class="row">
                                        <div class="col col-md-3">
                                            <div class="form-group mb-2"><label for="personName">Contact Person
                                                    Name</label><input id="personName" type="text"
                                                    class="form-control" name="contacts.0.name">
                                            </div>
                                        </div>
                                        <div class="col col-md-3">
                                            <div class="form-group mb-2"><label for="email">Email</label><input
                                                    type="email" class="form-control" name="contacts.0.email">
                                            </div>
                                        </div>
                                        <div class="col col-md-3">
                                            <div class="form-group mb-2"><label for="phone">Phone</label><input
                                                    type="text" class="form-control" name="contacts.0.phone">
                                            </div>
                                        </div>
                                        <div class="col col-md-3">
                                            <div class="form-group mb-2"><label for="alternate_phone">Alternate
                                                    Phone</label><input type="text" class="form-control"
                                                    name="contacts.0.alternate_phone">
                                                <ul>
                                                    <!---->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col"><button type="button" class="btn btn-warning btn-lg me-2">
                                                Cancel </button><button type="submit" class="btn btn-primary btn-lg mr-2"
                                                > Submit </button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
