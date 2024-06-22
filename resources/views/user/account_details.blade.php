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
            {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}



        </header>
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Input Information</h3>
                    <p class="text-subtitle text-muted">form information / Account Details</p>
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
                <div class="card-header text-center">
                    <h4 class="card-title">Account Information</h4>
                </div>
                <div class="card-content">


                    <div class="card-group">
                        <div class="card">
                            <div class="card-body" style="text-align: center;">
                              <h5 class="card-title">Account Details</h5>
                              <p class="card-text" style="font-size: 24px;">LKR 100000</p>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-body" style="text-align: center;">
                              <h5 class="card-title">Account Balance</h5>
                              <p class="card-text" style="font-size: 24px;">LKR 100000</p>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-body" style="text-align: center;">
                              <h5 class="card-title">Account Holds</h5>
                              <p class="card-text" style="font-size: 24px;">LKR 100000</p>
                            </div>
                          </div>

                      </div>
<br><br>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Reason</th>
        <th scope="col" style="width: 10%;">Withdrawal</th>
        <th scope="col" style="width: 10%;">Deposit</th>
        <th scope="col" style="width: 10%;">Balance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark <br><span style="font-size: small;">2024-06-16 11:53:00</span></td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob <br><span style="font-size: small;">2024-06-16 11:53:00</span></td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird <br><span style="font-size: small;">2024-06-16 11:53:00</span></td>
        <td>@twitter</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>



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
