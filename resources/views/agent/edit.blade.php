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
                                        <li class="breadcrumb-item"><a href="{{ URL::to('agents') }}">Agents</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <form method="post" action="{{ URL::to('create-agent-post-data') }}" enctype="multipart/form-data">
                @csrf
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="d-flex align-items-start justify-content-between">
                                <h4>Agent Company Information</h4>
                            </div><br>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company
                                            Name*</label>
                                            <input name="company_name" value="{{ (!empty($company_data->company_name))?$company_data->company_name:old('company_name') }}" type="text" class="form-control">
                                            @if ($errors->has('company_name'))
                                                <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company Registration
                                            Number*</label>
                                            <input value="{{ (!empty($company_data->company_registration_number))?$company_data->company_registration_number:old('company_registration_number') }}" name="company_registration_number" type="text" class="form-control">
                                            @if ($errors->has('company_registration_number'))
                                                <span class="text-danger">{{ $errors->first('company_registration_number') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company Establish
                                            Date*</label>
                                            <input name="company_establish_date" value="{{ (!empty($company_data->company_establish_date))?$company_data->company_establish_date:old('company_establish_date') }}" type="date" class="form-control">
                                            @if ($errors->has('company_establish_date'))
                                                <span class="text-danger">{{ $errors->first('company_establish_date') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col col-md-5">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company Trade
                                            License</label><input name="company_trade_license" type="file" class="form-control-file">
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label for="exampleFormControlInput1">Company Trade License
                                            Number*</label>
                                            <input type="text" value="{{ old('company_trade_license_number') }}" name="company_trade_license_number" class="form-control">
                                            @if ($errors->has('company_trade_license_number'))
                                                <span class="text-danger">{{ $errors->first('company_trade_license_number') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company
                                            Email*</label>
                                            <input value="{{ old('company_email') }}" name="company_email" type="text" class="form-control">
                                            @if ($errors->has('company_email'))
                                                <span class="text-danger">{{ $errors->first('company_email') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company
                                            Phone*</label>
                                            <input name="company_phone" value="{{ old('company_phone') }}" type="text" class="form-control">
                                            @if ($errors->has('company_phone'))
                                                <span class="text-danger">{{ $errors->first('company_phone') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company
                                            Country*</label>
                                            <select name="country" class="form-control">
                                                <option value="">--Select Country--</option>
                                                @foreach ($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('country'))
                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company
                                            State*</label>
                                            <input name="state" value="{{ old('state') }}" type="text" class="form-control">
                                            @if ($errors->has('state'))
                                                <span class="text-danger">{{ $errors->first('state') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company
                                            City*</label>
                                            <input name="city" value="{{ old('city') }}" type="text" class="form-control">
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Company Zip
                                            Code*</label>
                                            <input name="zip_code" value="{{ old('zip_code') }}" type="text" class="form-control">
                                            @if ($errors->has('zip_code'))
                                                <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 d-flex align-items-center">
                                <div class="col col-md-6">
                                    <div class="form-group mb-4"><label for="exampleFormControlTextarea1">Company
                                            Address*</label>
                                        <textarea name="address" id="exampleFormControlTextarea1" class="form-control" rows="2" spellcheck="false">{{ old('address') }}</textarea>
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="col">
                                        <div class="form-group mb-4"><label for="exampleFormControlInput1">Company Logo</label>
                                            <input type="file" name="company_logo" class="form-control-file" accept="image/*">
                                            <!---->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Agreement Title*</label>
                                            <input name="agreement_title" value="{{ old('agreement_title') }}" type="text" class="form-control">
                                            @if ($errors->has('agreement_title'))
                                                <span class="text-danger">{{ $errors->first('agreement_title') }}</span>
                                            @endif
                                        <!---->
                                    </div>
                                </div>
                                <div class="col col-md-3">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Agreement Doc File</label>
                                        <input name="agreement_doc_file" type="file" class="form-control-file">
                                        <!---->
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-4"><label for="exampleFormControlInput1">Agreement Expire Date*</label>
                                        <input name="agreement_expire_date" type="date" class="form-control">
                                        @if ($errors->has('agreement_expire_date'))
                                            <span class="text-danger">{{ $errors->first('agreement_expire_date') }}</span>
                                        @endif
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col text-right">
                                    <div class="row">
                                        <div class="col"><a href="/agents" class=""><button type="submit"
                                                    class="btn btn-warning mr-2">Cancel</button></a><button
                                                class="btn btn-primary ms-2"><span>Submit</span></button></div>
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
