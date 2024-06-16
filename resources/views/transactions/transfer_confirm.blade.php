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
                    <p class="text-subtitle text-muted">form information /Transfer Confirm</p>
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
                                        <label>Sender's Account Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('SenderAccountNumber') is-invalid @enderror"
                                                    value="{{ Auth::user()->account_no }}" placeholder=" "
                                                    id="first-name-icon" name="SenderAccountNumber" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Sender's Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('SenderName') is-invalid @enderror"
                                                    value="{{ Auth::user()->name }}" placeholder=" " id="first-name-icon"
                                                    name="SenderName" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Beneficiary Account Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('BenificiaryAccountNumber') is-invalid @enderror"
                                                    value="{{ $data['accountNo'] }}" placeholder=" " id="first-name-icon"
                                                    name="BenificiaryAccountNumber" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Beneficiary Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('BenificiaryName') is-invalid @enderror"
                                                    value="{{ $data['BenificiaryName'] }}" placeholder=" "
                                                    id="first-name-icon" name="BenificiaryName" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Transaction Amount</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('TransactionAmount') is-invalid @enderror"
                                                    value="{{ $data['ammount'] }}" placeholder=" " name="BillAmount"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Purpose</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('purpose') is-invalid @enderror"
                                                    value="{{ $data['purpose'] }}" placeholder=" " name="purpose" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('Date') is-invalid @enderror"
                                                    value="{{ date('jS l Y') }}" placeholder=" " name="Date" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>OTP</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="form-control @error('OTP') is-invalid @enderror"
                                                    value="{{ old('OTP') }}" placeholder=" " name="OTP">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
