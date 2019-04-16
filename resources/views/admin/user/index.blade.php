@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h1>
        Danh sách người dùng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
        <li class="active">List</li>
    </ol>
</section>

<section class="content">
    @if (Session::has('message'))
    <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <!-- <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" >ID</th>
                                <th class="sorting_asc col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">User Name</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Create at</th> -->
                                <th>ID </th>
                                <th> UserName </th>
                                <th>PassWord </th>
                                <th> Create_at </th>
                                <th>Email</th>
                                <th> Phone </th>
                                <th>Address</th>
                                <th> deparment_id </th>
                                <th>Status</th>

                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Action</th>

                        </thead>
                        <tbody>


                            <tr>
                                <td>1</td>
                                <td> vua</td>
                                <td>123456789 </td>
                                <td>13/04/2018</td>
                                <td>thivua98@gmail.com</td>
                                <td>01238623845</td>
                                <td> 101 Lê Hữu Trác </td>
                                <td>1</td>
                                <td>
                                    Dã giao

                                </td>

                                <td>
                                    <a href="/edit">Edit</a>
                                    <a href="/delete">Delete</a>

                                </td>

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection