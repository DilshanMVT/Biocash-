@extends('layouts.master')
@section('menu')
    @extends('sidebar.transaction-sidebar')
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
            {{-- \dfxbfrthrt --}}
        </header>
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Input Information </h3>
                    <p class="text-subtitle text-muted">form information / Bill Payments</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Information</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('form/save') }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">


                                    <div class="col-md-4">
                                        <label>Bill Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('BillNumber') is-invalid @enderror"
                                                    value="{{ old('BillNumber') }}" placeholder="Enter Bill Number"
                                                    id="first-name-icon" name="BillNumber">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Bill Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        {{-- <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="BillType" value="Internet"
                                                id="billTypeInternet">
                                            <label class="form-check-label" for="billTypeInternet">Internet</label>
                                        </div> --}}
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="BillType" value="Water"
                                                id="billTypeWater">
                                            <label class="form-check-label" for="billTypeWater">Water</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="BillType" value="Electricity"
                                                id="billTypeElectricity">
                                            <label class="form-check-label" for="billTypeElectricity">Electricity</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="BillType" value="Other"
                                                id="billTypeOther">
                                            <label class="form-check-label" for="billTypeOther">Other</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Company Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('CompanyName') is-invalid @enderror"
                                                    value="{{ old('CompanyName') }}" placeholder="Enter Company Name"
                                                    name="CompanyName" id="companyName">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-shop-window"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Bill Amount</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('Bill Amount') is-invalid @enderror"
                                                    value="{{ old('Bill Amount') }}" placeholder="Enter Bill Amount"
                                                    name="Bill Amount">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-4">
                                        <label>Mobile Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    value="{{ old('phone_number') }}" placeholder="Enter phone number"
                                                    name="phone_number">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cancel</button>
                                    </div>
                                </div>
                            </div>

                            {{-- <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const companyNameInput = document.getElementById('companyName');
                                const billTypeWater = document.getElementById('billTypeWater');
                                const billTypeOther = document.getElementById('billTypeOther');

                                document.querySelectorAll('input[name="BillType"]').forEach((elem) => {
                                    elem.addEventListener('change', function () {
                                        if (billTypeWater.checked) {
                                            companyNameInput.value = 'Water Board';
                                            companyNameInput.readOnly = true;
                                        } else if (billTypeOther.checked) {
                                            companyNameInput.value = '';
                                            companyNameInput.readOnly = false;
                                        } else {
                                            companyNameInput.readOnly = false;
                                        }
                                    });
                                });
                            });
                            </script> --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const companyNameInput = document.getElementById('companyName');
                const billTypeWater = document.getElementById('billTypeWater');
                const billTypeOther = document.getElementById('billTypeOther');

                document.querySelectorAll('input[name="BillType"]').forEach((elem) => {
                    elem.addEventListener('change', function () {
                        if (billTypeWater.checked) {
                            companyNameInput.value = 'Water Board';
                            companyNameInput.readOnly = true;
                        }else if (billTypeElectricity.checked) {
                            companyNameInput.value = 'Electricity Board';
                            companyNameInput.readOnly = true;
                        }else if (billTypeOther.checked) {
                            companyNameInput.value = '';
                            companyNameInput.readOnly = false;
                        } else {
                            companyNameInput.readOnly = false;
                        }
                    });
                });
            });
            </script>


        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2024 &copy; Biocash</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://soengsouy.com">Dilshan</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
