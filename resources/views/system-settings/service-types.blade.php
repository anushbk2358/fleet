@extends('layouts.main.app')

@section('title', 'Service Types')

@section('breadcrumb-content')
<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
<li class="breadcrumb-item active" id="moduleName">System Settings</li>
@endsection

@section('header-title-media-body')
<h1 class="font-weight-bold" id="moduleName1">System Settings</h1>
<small id="controllerName">Service Types</small>
@endsection

@section('content')

<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <strong>Add Service Type</strong>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" id="company" class="row" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group row">
                            <label for="service_type_name" class="col-sm-5 col-form-label">Service Type Name <i class="text-danger">*</i></label>
                            <div class="col-sm-7">
                                <input name="service_type_name" required class="form-control" type="text" placeholder="Service Type Name" id="service_type_name">
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-primary w-md m-b-5">Reset</button>
                            <button type="submit" class="btn btn-success w-md m-b-5">Add</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <strong>Update Service TYpe</strong>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body editinfo">

            </div>

        </div>
        <div class="modal-footer">

        </div>

    </div>

</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card mb-3">
            <div class="card-header p-2">
                <h4 class="pl-3">Service Types<small class="float-right">

                        <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"><i class="ti-plus" aria-hidden="true"></i>
                            Add Service Type</button>
                    </small></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example_service" class="table display table-bordered table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Service Type Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Serpentine Belt</td>
                                <td>
                                    <input name="url" type="hidden" id="url_1" value="https://vmsdemo.bdtask-demo.com/setting/Setting/updatestypefrm" />
                                    <a onclick="editinfo(1)" class="btn btn-xs btn-success btn-sm mr-1 text-white" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a>
                                    <a href="https://vmsdemo.bdtask-demo.com/setting/Setting/delete_servicetype/1" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Fuel Charge</td>
                                <td>
                                    <input name="url" type="hidden" id="url_2" value="https://vmsdemo.bdtask-demo.com/setting/Setting/updatestypefrm" />
                                    <a onclick="editinfo(2)" class="btn btn-xs btn-success btn-sm mr-1 text-white" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a>
                                    <a href="" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Parking Light Charge</td>
                                <td>
                                    <input name="url" type="hidden" id="url_3" value="https://vmsdemo.bdtask-demo.com/setting/Setting/updatestypefrm" />
                                    <a onclick="editinfo(3)" class="btn btn-xs btn-success btn-sm mr-1 text-white" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a>
                                    <a href="" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table> <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="{{asset('dist/js/service_list.js')}}"></script> -->
<script>
    $(document).ready(function() {
        $("#example_service").DataTable();
    });
</script>
@endsection