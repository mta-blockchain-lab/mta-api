@extends('layout.master')

@section('header-content')
    <link rel="stylesheet" href="/assets/css/site.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>

@show

@section('page')
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="/degrees">Degrees</a></li>
                <li class="breadcrumb-item active">Add</li>
            </ol>

        </div>

        <div class="page-content">
            <!-- Panel Google Maps -->
            <div class="col-12">
                <!-- Example Simple -->
                <br>
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm bằng Đại học</h3>
                    </div>


                    <div class="panel-body">
                        <form autocomplete="off" action="/degrees/addRequest" method="post"  role="form" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Họ và tên</label>
                                    <input type="text" class="form-control" name="upon"
                                           placeholder="Họ và tên" autocomplete="off"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-control-label">Ngày sinh</label>
                                    <input type="date" class="form-control" name="dob"
                                           placeholder="Ngày sinh" autocomplete="off"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-control-label">Giới tính</label>
                                    <div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputBasicMale" name="gender" value="Nam"/>
                                            <label for="inputBasicMale">Nam</label>
                                        </div>
                                        <div class="radio-custom radio-default radio-inline">
                                            <input type="radio" id="inputBasicFemale" name="gender" value="Nữ"/>
                                            <label for="inputBasicFemale">Nữ</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Chuyên ngành</label>
                                    <select class="degree-major form-control" name="major">
                                        <optgroup label="Công nghệ thông tin">
                                            <option value="Bảo đảm an toàn thông tin">Bảo đảm an toàn thông tin</option>
                                            <option value="An ninh mạng">An ninh mạng</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-control-label">Xếp loại</label>
                                    <select class="degree-ranking form-control" name="ranking">
                                        <option value="Xuất sắc">Xuất sắc</option>
                                        <option value="Giỏi">Giỏi</option>
                                        <option value="Khá">Khá</option>
                                        <option value="Trung bình">Trung bình</option>
                                        <option value="Trung bình khá">Trung bình khá</option>
                                    </select>
                                </div>
                                <div class="form-group col-md">
                                    <label class="form-control-label">Hình thức đào tạo</label>
                                    <select class="degree-mode-of-study form-control" name="mode-of-study">
                                        <option value="Chính quy">Chính quy</option>
                                        <option value="Vừa làm vừa học">Vừa làm vừa học</option>
                                        <option value="Học từ xa">Học từ xa</option>
                                        <option value="Tự học có hướng dẫn">Tự học có hướng dẫn</option>
                                    </select>
                                </div>


                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="form-control-label">Năm tốt nghiệp</label>
                                    <input type="number" class="form-control" name="yog"
                                           placeholder="2020" autocomplete="on"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-control-label">Số văn bằng</label>
                                    <input type="text" class="form-control" name="serial-number"
                                           placeholder="6852231" autocomplete="off"/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-control-label">Số vào sổ</label>
                                    <input type="text" class="form-control" name="reference-number"
                                           placeholder="HVKTQS/22012/1231" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label class="form-control-label">Nơi ký</label>
                                    <select class="degree-address form-control" name="address">

                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="form-control-label">Ngày ký</label>

                                    <input type="date" class="form-control" name="dos"
                                           placeholder="12/1/1997" autocomplete="off"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-control-label">Người ký</label>
                                    <input type="text" class="form-control" name="sign-name"
                                           placeholder="Trung tướng, GS.TS Nguyễn Công Định" autocomplete="on"/>
                                </div>


                            </div>
                            <div class="form-actions">

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Lưu cơ sở dữ liệu</button>
                                </div>
                            </div>

                        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        $.getJSON("/tinh_tp.json", function (result) {
            function format(item) {
                return item.name;
            };
            const data = result;
            var newdata = Object.values(data);
            console.log(newdata)
            $('.degree-address').select2({
                data: newdata,
                // formatSelection: format,
                // formatResult: format
            });

        });
        $(document).ready(function () {
            $('.degree-ranking').select2();
            $('.degree-major').select2();
            $('.degree-mode-of-study').select2();
            $('.degree-address').select2();
        });
    </script>
    <script>
        var success = '{{Session::get('success')}}';
        var issuccess = '{{Session::has('success')}}';
        if(issuccess){
            toastr.success('Văn bằng đã được thêm thành công vào cơ sở dữ liệu', 'Thành công:')
        }
        var falied = '{{Session::get('failed')}}';
        var isfailed = '{{Session::has('isfailed')}}';
        if(isfailed){
            toastr.error('Xuất hiện lỗi trong quá trình thêm', 'Lỗi:')
        }
    </script>
    <style>
        .transaction-id {
            color: #868f9b;
            margin-bottom: 10px;
        }

        .table td, .table th {
            border-top: none;
        }
    </style>
@endsection
