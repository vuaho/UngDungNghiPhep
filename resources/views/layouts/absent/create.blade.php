<!DOCTYPE html>


<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Create Absent Form</title>
    <!-- Icons-->
    <!-- <link href="css/coreui-icons.min.css" rel="stylesheet"> -->
    <!-- <link href="css/flag-icon.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet"> -->
    <!-- Main styles for this application-->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-form.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
</head>


<body>
    
@extends ('layouts.admin')
@section('content')
<div class="container mb-3 mt-3" id="post-scrap-page">
    <div class="container-post">
        <div class="text-header-post">
            <h4 class="text-center title-section mb-2"><span class="font-weight-bold">Vui lòng nhập thông tin về phế liệu</span></h4>
        </div>

            <form action="" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group">
                    <label for="InputFullName">Họ và tên: <span class="required"> *</span></label>
                    <input type="text" class="form-control fullname-input" name="fullname_input" id="fullname_input" placeholder="Vui lòng nhập họ và tên">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Địa chỉ email: <span class="required"> *</span></label>
                    <input type="email" class="form-control email-input" name="email_input" id="email_input" aria-describedby="emailHelp" placeholder="Vui lòng nhập email">
                </div>
                <div class="form-group">
                    <label for="InputPosition">Vị trí làm việc: <span class="required"> *</span></label>
                    <input type="text" class="form-control position-input" name="position_input" id="position_input" placeholder="Vui lòng nhập vị trí làm việc">
                </div>
                <div class="form-group">
                    <label for="InputGroup">Trực thuộc phòng ban: <span class="required"> *</span></label>
                    <input type="text" class="form-control group-input" name="confirmgroup_input" id="confirmgroup_input" placeholder="Vui lòng nhập phòng ban">
                </div>
                <div class="form-group">
                    <label for="InputReason">Lí do nghỉ: <span class="required"> *</span></label>
                    <input type="text" class="form-control reason-input" name="reason_input" id="reason_input" placeholder="Vui lòng nhập lí do nghỉ">
                </div>
                <div class="form-group">
                    <label for="InputReason">Loại nghỉ phép: <span class="required"> *</span></label>
                    <input type="text" class="form-control reason-input" name="reason_input" id="reason_input" placeholder="Vui lòng nhập lí do nghỉ">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-9 col-lg-9">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <label class="container-kg" id="weight5" for="radio1">Nghỉ không lương
                                <input type="radio" id="radio1" name="mass" value="mass_5">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
                            <label class="container-kg" id="weight10" for="radio2">Nghỉ có lương
                                <input type="radio" id="radio2" name="mass" value="mass_10">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                    </div>
                </div>
                <button type="submit" class="form-control btn btn-primary register-button" id="register-button">Đăng kí</button>
                <input type="hidden" name="task" value="register" />
                
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2"></div>
        </div>


    </div>
   


@endsection
</body>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/pace-progress/pace.min.js"></script>
<script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
<!-- Plugins and scripts required by this view-->
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
<script src="js/main.js"></script>

</html>