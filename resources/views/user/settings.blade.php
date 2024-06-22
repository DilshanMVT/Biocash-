@extends('layouts.master')
@section('menu')
    {{-- @extends('sidebar.transaction-sidebar') --}}
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
                    <h3>Form Input Information</h3>
                    <p class="text-subtitle text-muted">form information / Inter Bank Transaction</p>
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
                <div class="card-header ">

                    <h4 class="card-title">Settings</h4>
                </div>


                <div class="card-header ">

                    <p>If you need to update or modify your account settings, please visit your nearest bank branch. Our representatives will assist you in making any necessary changes to ensure your account information is up to date.</p>

                </div>


                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('interBank.data') }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">



                                    <div class="col-md-4">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('Name') is-invalid @enderror"
                                                       value="{{ old('Name') }}" placeholder=""
                                                       id="first-name-icon" name="Name" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Account Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('AccountNumber') is-invalid @enderror"
                                                       value="{{ old('AccountNumber') }}" placeholder=""
                                                       id="first-name-icon" name="AccountNumber" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>ID Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('IDNumber') is-invalid @enderror"
                                                       value="{{ old('IDNumber') }}" placeholder=""
                                                       id="first-name-icon" name="IDNumber" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control @error('IDNumber') is-invalid @enderror"
                                                       value="{{ old('IDNumber') }}" placeholder=""
                                                       id="first-name-icon" name="IDNumber" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Enroll Your Fingerprint</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cannel</button>
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
