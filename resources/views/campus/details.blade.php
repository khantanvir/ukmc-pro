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
                                        <li class="breadcrumb-item"><a href="#">Campus</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <h5 class="pt-3">Campus Details</h5>
            <div class="" theme-mode-data="false">
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-5">
                                <div class="col">
                                    <img class="img-thumnail rounded-circle" src="https://upload.wikimedia.org/wikipedia/en/d/de/National_American_University_seal_-_gold.png" alt="" width="200px">
                                </div>
                                <div class="col">
                                    <ul class="list-group custom-list-group-branch me-1">
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-warning">Total Courses</h6><a href="" class=""><span class="badge badge-warning">0</span></a></li>
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-primary">All Application</h6><span class="badge badge-primary">8</span></li>
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-primary">New Application</h6><span class="badge badge-info">0</span></li>
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-success">Sub-Agent Application</h6><span class="badge badge-secondary">0</span></li>
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-success">Conditional/ Unconditional</h6><span class="badge badge-success">0</span></li>
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-success">Enrolled Students</h6><span class="badge badge-success">0</span></li>
                                        <li class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="count-danger">Reject Applications</h6><span class="badge badge-danger">0</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <h4>American University - Details</h4>
                                        <div>
                                            <a href="" class="">
                                                <button class="btn btn-info btn-rounded mb-2 mr-4 inline-flex me-2"> Edit
                                                    Campus
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></button></a><a href="/Campus" class=""><button
                                                    class="btn btn-info btn-rounded mb-2 mr-4 inline-flex"> View Campuses
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </div><br>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Represent
                                            Country</label>
                                        <h6>United States</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Campus
                                            Name</label>
                                        <h6>American University</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Campus Name</label>
                                        <h6>Washington, DC</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Website</label>
                                        <h6>www.american.edu</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Monthly Living
                                            Cost</label>
                                        <h6>$1,200 – $1,400</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Funds Requirements
                                            for Visa</label>
                                        <p>N/A</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Application
                                            Fees</label>
                                        <h6>N/A</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Currency</label>
                                        <h6>USD</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Is Language
                                            Mendatory</label>
                                        <h6>Yes</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1">Language
                                            Requirements</label>
                                        <p>Official results of one of the following English Proficiency
                                            Exams are required of international students. We accept the following:

                                            *IELTS, a minimum score of 7.0
                                            *TOEFL, a minimum score of 100
                                            *TOEFL Essentials, a minimum score of 100
                                            *PTE, minimum score of 68
                                            *DUOLINGO, a minimum score of 120
                                            Note: Language requirements vary in different courses</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1">Campus
                                            Benifits</label>
                                        <p>American University is a student-centred research institution
                                            in Washington, DC, with highly-ranked schools and colleges,
                                            internationally-renowned faculty, and a reputation for creating meaningful
                                            change in the world. Our students distinguish themselves for their service,
                                            leadership, and ability to rethink global and domestic challenges and
                                            opportunities. At AU, passion becomes action;</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1"> Part Time Work
                                            Details</label>
                                        <p>20 hours per week</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1">Scholarship
                                            Policy</label>
                                        <p>N/A</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1"> Campus
                                            Important Notes</label>
                                        <p>Admission Requirement-
                                            www.american.edu/sis/admissions/international.cfm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="row d-flex align-items-center">
                                        <div class="col col-md-8">
                                            <div class="col col-md-4"><img alt="Country Flag"
                                                    src="https://nwcapi.theleadlibrary.com/backend/images/Campus/1670603662-american-university.png"
                                                    width="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row d-flex align-items-center">
                                        <div class="col col-md-8">
                                            <div class="form-group mb-4"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="64" height="64" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-file">
                                                        <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                        </path>
                                                        <polyline points="13 2 13 9 20 9"></polyline>
                                                    </svg></span><label>No Campus Prospectus</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row d-flex align-items-center">
                                        <div class="col col-md-8">
                                            <div><span><svg xmlns="http://www.w3.org/2000/svg" width="64"
                                                        height="64" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-file">
                                                        <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                        </path>
                                                        <polyline points="13 2 13 9 20 9"></polyline>
                                                    </svg></span><label>No Campus Module</label>
                                            </div>
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
                            <div class="row mb-4">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>University Contact Person</h4><br>
                                </div>
                                <div class="col col-md-12">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table-bordered table-hover table-striped mb-4 table">
                                                <thead>
                                                    <tr>
                                                        <th>Contact Person Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Alternate Phone</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Admisson Adviser</td>
                                                        <td>casgrad@american.edu</td>
                                                        <td>2028853620</td>
                                                        <td>2028853620</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
