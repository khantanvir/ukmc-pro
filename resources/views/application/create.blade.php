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
        <h5 class="p-3">New Applicant</h5>
        <div class="row layout-top-spacing" id="cancel-row">

            <div class="d-none" id="wizard_Default" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Default</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="bs-stepper stepper-form-one">
                            <div class="bs-stepper-header" role="tablist">
                                <div class="step" data-target="#defaultStep-one">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Step One</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#defaultStep-two">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Step Two</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#defaultStep-three">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Step Three</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <div id="defaultStep-one" class="content" role="tabpanel">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="defaultForm-name">Name</label>
                                            <input type="text" class="form-control" id="defaultForm-name">
                                        </div>
                                    </form>

                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="defaultStep-two" class="content" role="tabpanel">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="defaultEmailAddress">Email Address</label>
                                            <input type="email" class="form-control" id="defaultEmailAddress">
                                        </div>
                                    </form>

                                    <div class="button-action mt-5">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="defaultStep-three" class="content" role="tabpanel">
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="defaultInputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="defaultInputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="col-12">
                                            <label for="defaultInputAddress2" class="form-label">Address
                                                2</label>
                                            <input type="text" class="form-control" id="defaultInputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="defaultInputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="defaultInputCity">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="defaultInputState" class="form-label">State</label>
                                            <select id="defaultInputState" class="form-select">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="defaultInputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="defaultInputZip">
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="defaultGridCheck">
                                                <label class="form-check-label" for="defaultGridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-success me-3">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="wizard_Default" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    {{-- <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Applicant</h4>
                            </div>
                        </div>
                    </div> --}}
                    <div class="widget-content widget-content-area">

                        <div class="bs-stepper stepper-form-vertical vertical linear">
                            <div class="bs-stepper-header" role="tablist">
                                <div class="step" data-target="#verticalFormStep-one">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Step One</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#verticalFormStep-two">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Step Two</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#verticalFormStep-three">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Step Three</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#verticalFormStep-four">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Step Four</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#verticalFormStep-five">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">5</span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Step Five</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#verticalFormStep-Six">
                                    <button type="button" class="step-trigger" role="tab">
                                        <span class="bs-stepper-circle">6</span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Final Step</span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <div class="bs-stepper-content">
                                <div id="verticalFormStep-one" class="content" role="tabpanel">
                                    <h5 class="text-center">Applicant and Course Detail</h5>
                                    <hr>
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">Agent/ Referrel:</label>
                                            <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="Agent/ Referrel name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">Will Applicant fees be
                                                funded by the Student Loan Company / Student Finance
                                                England?</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">Select one category that
                                                best describes your current residential status:</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>UK Citizen</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Programme
                                                    Group:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Undergraduate</option>
                                                    <option>Postgraduate</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Intake:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>May 2023</option>
                                                    <option>Sep 2023</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Programme:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>BSc (Hons) Business</option>
                                                    <option>MSc in Computer Science</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Delivery
                                                    Pattern:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Evening and Weekend</option>
                                                    <option>Standard</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Course level:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Entry level:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Course fee
                                                    (GBP):</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">First year fee
                                                    (GBP):</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 form-group mb-4">
                                                <label for="verticalFormStepform-name">Title:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Miss</option>
                                                    <option>Ms</option>
                                                </select>
                                            </div>
                                            <div class="col-5 form-group mb-4">
                                                <label for="verticalFormStepform-name">First name:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="">
                                            </div>
                                            <div class="col-5 form-group mb-4">
                                                <label for="verticalFormStepform-name">Last name:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Gender:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Date of
                                                    Birth:</label>
                                                <input type="date" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Email:</label>
                                                <input type="email" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Confirm
                                                    Email:</label>
                                                <input type="email" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Are you applying for
                                                    advanced entry (APL):</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">Accreditation of prior learning
                                                        (APL) relates to learning from the past that can be
                                                        credited against your desired qualification</label>
                                                </div>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Are you applying for
                                                    advanced entry (APL):</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Website</option>
                                                    <option>Facebook</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="verticalFormStep-two" class="content" role="tabpanel">
                                    <h5 class="text-center">Personal Information</h5>
                                    <hr>
                                    <form>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepEmailAddress">Mobile No.
                                                    :</label>
                                                <input type="text" class="form-control" id="verticalFormStepEmailAddress" placeholder="">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Nationality:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Bangladeshi</option>
                                                    <option>British</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Other
                                                    Nationality:</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-text">
                                                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                                    </div>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>Bangladeshi</option>
                                                        <option>British</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepEmailAddress">Ethnic
                                                    Origin:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Black</option>
                                                    <option>White</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Country of
                                                    Birth:</label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Bangladesh</option>
                                                    <option>London</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">Highest qualification on
                                                entry:</label>
                                            <div class="div">
                                                <div class="form-check form-check-primary form-check-inline">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-primary" checked="">
                                                    <label class="form-check-label" for="form-check-radio-primary">
                                                        UK
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-info form-check-inline">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-info">
                                                    <label class="form-check-label" for="form-check-radio-info">
                                                        Overseas
                                                    </label>
                                                </div>
                                                <p class="text-white">We need to know the highest qualification you expect to have achieved before you start the course that you're applying for. To provide you with a list of options to choose from, please tell us
                                                    if the highest qualification you expect to have achieved was studied in the UK or overseas.</p>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">Please choose your
                                                highest qualification from the list:</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Choose...</option>
                                                <option value="1">Qualification below GCSE</option>
                                                <option value="2">GCSE or Level 2 qualification</option>
                                                <option value="3">Level 3 Diploma</option>
                                                <option value="4">Level 3 Certificate</option>
                                                <option value="5">Level 3 Award</option>
                                                <option value="6">A/AS Level(s)</option>
                                                <option value="7">Scottish Baccalaureate</option>
                                                <option value="8">Scottish Highers/Advanced Highers</option>
                                                <option selected="selected" value="9">International
                                                    Baccalaureate (IB) Diploma</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">When you start this
                                                course what will the last institution you attended
                                                be?</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Choose...</option>
                                                <option value="1">Any Non UK Institution</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="verticalFormStepform-name">Unique Learner Number
                                                (ULN):</label>
                                            <input type="text" class="form-control" id="verticalFormStepform-name">
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Name of
                                                    qualification:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Year
                                                    achieved/obtained:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Subject:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Grade:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Passport No:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Passport Expiry
                                                    :</label>
                                                <input type="date" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Passport Place of
                                                    Issuance:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Have you spent any
                                                    time in public care up to the age of 18? </label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Disability/special
                                                    needs</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-center">Permanent home address</h5>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">House Number/Name and
                                                    Street:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Address Line
                                                    2:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">City/Town:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">County/State/Province:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Postal Code:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Country of permanent
                                                    residence:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-center">Current address</h5>
                                            <hr>
                                        </div>
                                        <div class="col form-group mb-4">
                                            <label for="verticalFormStepform-name">Same as permanent home
                                                address ?</label><br>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-primary" checked="">
                                                <label class="form-check-label" for="form-check-radio-primary">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check form-check-info form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-info">
                                                <label class="form-check-label" for="form-check-radio-info">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">House Number/Name and
                                                    Street:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Address Line
                                                    2:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">City/Town:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">County/State/Province:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Postal Code:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Country of permanent
                                                    residence:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5 class="text-center">Next of Kin</h5>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Name:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Relation:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Email:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                            <div class="col form-group mb-4">
                                                <label for="verticalFormStepform-name">Phone No:</label>
                                                <input type="text" class="form-control" id="verticalFormStepform-name">
                                            </div>
                                        </div>
                                    </form>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>

                                </div>
                                <div id="verticalFormStep-three" class="content" role="tabpanel">
                                    <form class=" row g-3">
                                        <h5 class="text-center">Personal Statement</h5>
                                        <hr>
                                        <div class="col-12">
                                            <p class="text-white">A personal statement should be included here. It should be approximately 500 words. You should state why you want to undertake this course, any relevant experience, skills and attributes, and your
                                                long term plans. 1 Words</p>
                                            <textarea class="text-justify form-control" rows="2" cols="20" disabled="disabled" style="height: 350px; width: 100%;">  I have always believed that successful business quests are what take huma lives further and I have constantly observed this at my Managers. I have observed them manage people, make intelligent decisions and work hard to ensure that the business runs good. It has constantly motivated and intrigued me to grow and become a businesswoman myself. I also understand that the world of business management is markedly dynamic and volatile. With the conviction and willingness to toil hard to reach my career goal, I seek admission to the under graduate program in business management from the University , I have always been a hard-working student who never discounted away from carrying out my academic obligations.

                                            I was very responsible for my academic performance and as such, I have always paid attention to my classes , done my homework and never flinched away from submitting my projects, and I am passing these values to my children as well. Anglia ruskin university is a very well reputed university with experienced and highly skilled staffs, which I believe will let me grow professionally and as a person. The diverse cultural exposure and the facilities of the universities is highly talked about. I have finished my diploma de Baccalaureate from Romania, which is my highest qualification currently and now I want to step higher and learn about the business world in a global and international perspective. I was always surrounded by businesspeople, which nurtured in me the entrepreneurial spirit.

                                            The way I saw all these people making quick decisions, spoke to their partners and business associates , interacted with customers and clients and managed the business successfully always surprised me. This taught me to dream big and want to incept a business myself. This is what persuaded me to take International business management as a course so that I can leverage my honed managerial, communication, interpersonal and people skills to drive great success to my business when I incept the same. In order to understand more about the course, I have carried out a range of researches online which helped me realize that the course is carefully prepared to mold any aspiring student into an ardent management professional.

                                            The course offers the aspirants with impeccable insights to various managerial subjects such as human resource development, principles of management, organization behavior, marketing management, managerial accounting and managerial statistics and mathematics. I am convinced that the course will definitely transform me into a capable and dynamic management professional in not time, which can help me further to follow my dream or even in a better job position achievement.
                                                        </textarea>
                                            <p class="text-danger">Statements will be scrutinised for plagiarism and if found plagiarised, your application may be delayed or rejected.</p>
                                        </div>
                                        <div class="col-12">

                                        </div>
                                    </form>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="verticalFormStep-four" class="content" role="tabpanel">
                                    <form class="row g-3">
                                        <h5 class="text-center">Documents Upload</h5>
                                        <hr>
                                        <div class="col-12">
                                            <label for="verticalFormInputAddress" class="form-label">Upload Files</label><br>
                                            <button type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Upload File
                                              </button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Documents</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg> ... </svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col form-group mb-4">
                                                            <label for="verticalFormStepform-name">Browse Document:</label>
                                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                        </div>
                                                        <div class="col form-group mb-4">
                                                            <label for="verticalFormStepform-name">Document Type:</label>
                                                            <select id="inputState" class="form-select">
                                                                <option selected>Choose...</option>
                                                            <option>C.V.</option>
                                                            <option>English language certificate</option>
                                                            <option>Highest qualification certificate</option>
                                                            <option>Highest qualification transcript</option>
                                                            <option>Leave to remain</option>
                                                            <option>Passport</option>
                                                            <option>Personal statement	</option>
                                                            <option>Qualification certificate</option>
                                                            <option>Qualification certificate and Transcript</option>
                                                            <option>Qualification transcript</option>
                                                            <option>Work reference letter</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn btn-light-dark" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="verticalFormInputAddress" class="form-label">Attached Files</label>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Filename</th>
                                                            <th scope="col">Detail</th>
                                                            <th scope="col">Uploaded on</th>
                                                            <th scope="col">File</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bachelor certificate.pdf</td>
                                                            <td>Academic Certificate</td>
                                                            <td>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                                <span class="table-inner-text">25 Apr 2023</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light-success">Open</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
                                        <button class="btn btn-secondary btn-nxt">Next</button>
                                    </div>
                                </div>
                                <div id="verticalFormStep-five" class="content" role="tabpanel">
                                    <h5 class="text-center">Submit Application</h5>
                                    <div class="row">
                                        <div class="col-2 form-group mb-4">
                                            <label for="verticalFormStepform-name">Title:</label>
                                            <select id="inputState" class="form-select" disabled>
                                                <option selected>Mr.</option>
                                            </select>
                                        </div>
                                        <div class="col-5 form-group mb-4">
                                            <label for="verticalFormStepform-name">First name:</label>
                                            <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="" value="Riazul" disabled>
                                        </div>
                                        <div class="col-5 form-group mb-4">
                                            <label for="verticalFormStepform-name">Last name:</label>
                                            <input type="text" class="form-control" id="verticalFormStepform-name" placeholder="" value="Islam" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group mb-4">
                                            <label for="verticalFormStepform-name">Gender:</label>
                                            <select id="inputState" class="form-select" disabled>
                                                <option selected>Male</option>
                                            </select>
                                        </div>
                                        <div class="col form-group mb-4">
                                            <label for="verticalFormStepform-name">Date of
                                                Birth:</label>
                                            <input type="text" class="form-control" id="verticalFormStepform-name" value="05/04/2023" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group mb-4">
                                            <label for="verticalFormStepform-name">Email:</label>
                                            <input type="email" class="form-control" id="verticalFormStepform-name" value="riazul@gmail.com" disabled>
                                        </div>
                                        <div class="col form-group mb-4">
                                            <label for="verticalFormStepform-name">Confirm
                                                Email:</label>
                                            <input type="email" class="form-control" id="verticalFormStepform-name" value="riazul@gmail.com" disabled>
                                        </div>
                                    </div>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Back</button>
                                        <button class="btn btn-success btn-nxt me-3">Submit</button>
                                        <button class="btn btn-warning">Download PDF</button>
                                    </div>
                                </div>
                                <div id="verticalFormStep-Six" class="content" role="tabpanel">
                                    <h5 class="text-center">Interview / ELPT</h5>
                                    <form class="row g-3">
                                        <div class="col-6">
                                            <label for="verticalFormInputAddress" class="form-label">Inteview Date :</label>
                                            <input type="date" class="form-control" id="verticalFormInputAddress">
                                        </div>
                                        <div class="col-6">
                                            <label for="verticalFormInputAddress2" class="form-label">Interview Time :</label>
                                            <input type="time" class="form-control" id="verticalFormInputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="verticalFormStepInputCity" class="form-label">Results :</label>
                                            <input type="text" class="form-control" id="verticalFormStepInputCity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="verticalFormStepInputState" class="form-label">No Show :</label>
                                            <select id="verticalFormStepInputState" class="form-select">
                                                <option selected="">Choose...</option>
                                                <option>No</option>
                                                <option>Yes</option>
                                            </select>
                                        </div>
                                    </form>

                                    <div class="button-action mt-3">
                                        <button class="btn btn-secondary btn-prev me-3">Prev</button>
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
