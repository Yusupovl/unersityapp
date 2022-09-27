{{-- @extends('layouts.admin')

@section('name')

    {{$n}}

@endsection

@section('content')


<h1 class="h3 mb-4 text-gray-800">Admin paneli</h1>



@endsection --}}

@extends('layouts.admin')

@section('main_title')

@endsection

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" type="text/css">

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>

    @if (session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif

    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Arizalar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>F.I.O</th>
                            <th>Manzili</th>
                            <th>Tel raqam</th>
                            <th>Fakultet</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>F.I.O</th>
                            <th>Manzili</th>
                            <th>Tel raqam</th>
                            <th>Fakultet</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($foy as $f)
                            <tr>
                                <td>{{$f->ism}} {{$f->familya}} {{$f->sharif}} {{$f->id}}</td>
                                <td>{{$f->manzil}}</td>
                                <td>{{$f->tel_raqam}}</td>
                                <td>{{$f->fakultet}}</td>
                                <td>{{$f->status}}</td>
                                
                                <td>
                                    <a href="{{route('guest.show', [$f->id])}}">Ko'rish</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>






    @endsection

    @section('myjs')

    <!-- Page level plugins -->
    <script src="/sb_admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/sb_admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/sb_admin/js/demo/datatables-demo.js"></script>

    @endsection