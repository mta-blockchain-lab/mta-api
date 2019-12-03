@extends('layout.master')

@section('header-content')
    <link rel="stylesheet" href="/assets/css/site.min.css">
@show

@section('page')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="/degrees">Degrees</a></li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>

        </div>

        <div class="page-content">
            <!-- Panel Google Maps -->
            <div class="col-12">
                <!-- Example Simple -->
                <br>
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Chi tiết bằng số {{$degree->serial_number}} - (Vào sổ số: {{$degree->reference_number}})</h3>
                    </div>

                    <div class="panel-body">
                        <div class="transaction-detail">
                            <table class="table table-borderless">

                                <tr>
                                    <td>Họ và tên: </td>
                                    <td>{{$degree->upon}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày sinh</td>
                                    <td> {{date('d-m-Y', strtotime($degree->dob))}}</td>
                                </tr>
                                <tr>
                                    <td>Năm tốt nghiệp</td>
                                    <td>{{$degree->yog}}</td>
                                </tr>
                                <tr>
                                    <td>Chuyên ngành đào tạo</td>
                                    <td>{{$degree->major}}</td>
                                </tr>
                                <tr>
                                    <td>Xếp loại</td>
                                    <td>{{$degree->ranking}}</td>
                                </tr>
                                <tr>
                                    <td>Hình thức đào tạo</td>
                                    <td>{{$degree->mode}}</td>
                                </tr>
                                <tr>
                                    <td>Nơi ký</td>
                                    <td>{{$degree->address}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày ký</td>
                                    <td> {{date('d-m-Y', strtotime($degree->dos))}}</td>
                                </tr>
                                <tr>
                                    <td>Người ký</td>
                                    <td>{{$degree->sign_name}}</td>
                                </tr>

                                <tr>
                                    <td>Hash</td>
                                    <td>{{$hash}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Example Simple -->
            </div>

            <!-- End Panel Google Maps -->
        </div>
    </div>
@endsection
@section('scripts-content')
    <script src="/assets/examples/js/advanced/maps-google.js"></script>
    <style>
        .transaction-id{
            color: #868f9b;
            margin-bottom: 10px;
        }
        .table td, .table th{
            border-top:none;
        }
    </style>
@endsection
