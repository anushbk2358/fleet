@extends('layouts.main.app')

@section('title', 'Maintenance Requisitions')

@section('breadcrumb-content')
<li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
<li class="breadcrumb-item active" id="moduleName">Maintenance</li>
@endsection

@section('header-title-media-body')
<h1 class="font-weight-bold" id="moduleName1">Maintenance</h1>
<small id="controllerName">Maintenance Requisitions</small>
@endsection

@section('content')

<div id="edit" class="modal fade bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <strong>Details</strong>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body editinfo">

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card mb-3">
            <div class="card-header p-2">
                <h4 class="pl-3">Search Here <small class="float-right">

                        <a href="{{route('add-maintenance-list')}}" class="btn btn-primary btn-md"><i class="ti-plus" aria-hidden="true"></i>
                            Add Maintenance</a>
                    </small></h4>
            </div>
            <div class="card-body row">
                <div class="col-sm-12 col-xl-4">
                    <div class="form-group row mb-1">
                        <label for="mainte_type" class="col-sm-5 col-form-label justify-content-start text-left">Maintenance Type </label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="mainte_type" id="mainte_type">
                                <option value="" selected="selected">Please Select One</option>
                                <option value="Repair">
                                    Repair</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="vehicle" class="col-sm-5 col-form-label justify-content-start text-left">Vehicles </label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="vehicle" id="vehicle">
                                <option value="" selected="selected">Please Select One</option>
                                <option value="Shah Latif Express UP">Test Express </option>
                                <option value="Sukkur Express UP">Test2 Express UP </option>
                                <option value="d">d </option>
                                <option value="AS">AS </option>
                                <option value="Kia Soul">Kia Soul </option>
                                <option value="red">red </option>
                                <option value="Kia">Kia </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4">
                    <div class="form-group row mb-1">
                        <label for="status" class="col-sm-5 col-form-label justify-content-start text-left">Status <i class="text-danger">*</i></label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="status" id="status">
                                <option value="" selected="selected">Please Select One</option>
                                <option value="Approved">Approved</option>
                                <option value="Pending">Pending</option>
                                <option value="Rejected">Reject</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="service_fr" class="col-sm-5 col-form-label justify-content-start text-left">Service From <i class="text-danger">*</i></label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="service_fr" id="service_fr">
                                <option value="" selected="selected">Please Select One</option>
                                <option value="Maintenance">
                                    Maintenance</option>
                                <option value="repair">
                                    repair</option>
                                <option value="test asdff">
                                    test asdff</option>
                                <option value="Test">
                                    Test</option>
                                <option value="mjhkjk">
                                    mjhkjk</option>
                                <option value="repain ">
                                    repain </option>
                                <option value="asd">
                                    asd</option>
                                <option value="BAV">
                                    BAV</option>
                                <option value="entretien">
                                    entretien</option>
                                <option value="change bat">
                                    change bat</option>
                                <option value="645132">
                                    645132</option>
                                <option value="motor change">
                                    motor change</option>
                                <option value="Christine Bowman">
                                    Christine Bowman</option>
                                <option value="Zelenia Morrow">
                                    Zelenia Morrow</option>
                                <option value="hhh">
                                    hhh</option>
                                <option value="hh">
                                    hh</option>
                                <option value="Aceite">
                                    Aceite</option>
                                <option value="´90YUT">
                                    ´90YUT</option>
                                <option value="Llantas Cazzu">
                                    Llantas Cazzu</option>
                                <option value="Oil Change">
                                    Oil Change</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4">
                    <div class="form-group row mb-1">
                        <label for="from" class="col-sm-5 col-form-label justify-content-start text-left">From </label>
                        <div class="col-sm-7">
                            <input name="from" autocomplete="off" class="form-control newdatetimepicker" type="text" placeholder="From" id="from" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="to" class="col-sm-5 col-form-label justify-content-start text-left">To </label>
                        <div class="col-sm-7">
                            <input name="to" autocomplete="off" class="form-control newdatetimepicker" type="text" placeholder="To" id="to" value="">
                        </div>
                    </div>
                    <div class="form-group row  mb-1">
                        <label for="joining_d_to" class="col-sm-5 col-form-label justify-content-start text-left">&nbsp;</label>
                        <div class="col-sm-7 text-right">
                            <button type="button" class="btn btn-success" id="btn-filter">Search</button>&nbsp;
                            <button type="button" class="btn btn-inverse" id="btn-reset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card mb-3">
            <div class="card-header p-2">
                <h4 class="pl-3">Maintenance Requisition List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="mainreq" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Requisition Date</th>
                                <th>Vehicle Name</th>
                                <th>Maintenance Type</th>
                                <th>Requested By </th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">1</td>
                                <td>2019-09-03</td>
                                <td>Fareed Express</td>
                                <td>Repair</td>
                                <td>Kamal</td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_1" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/1" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(1)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/1" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',1,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',1,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">2</td>
                                <td>2019-09-01</td>
                                <td>Khyber Express</td>
                                <td>Repair</td>
                                <td>Kobir</td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_2" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/2" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(2)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/2" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',2,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',2,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">3</td>
                                <td>2019-11-16</td>
                                <td>Toyata</td>
                                <td>Preventive Maintenance</td>
                                <td>Maruf</td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_3" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/3" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(3)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/3" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',3,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',3,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">4</td>
                                <td>2021-01-26</td>
                                <td>MT</td>
                                <td>Preventive Maintenance</td>
                                <td>test data</td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_4" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/4" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(4)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/4" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',4,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',4,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">5</td>
                                <td>2021-02-25</td>
                                <td>BMW</td>
                                <td>Repair</td>
                                <td></td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_7" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/7" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(7)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/7" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',7,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',7,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">6</td>
                                <td>2021-02-25</td>
                                <td>test from bd</td>
                                <td>Preventive Maintenance</td>
                                <td></td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_8" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/8" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(8)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/8" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',8,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',8,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">7</td>
                                <td>2021-02-25</td>
                                <td>BMW</td>
                                <td>Repair</td>
                                <td></td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_9" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/9" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(9)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/9" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',9,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',9,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">8</td>
                                <td>2020-05-05</td>
                                <td>DEMO3</td>
                                <td>Repair</td>
                                <td>owner</td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_10" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/10" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(10)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/10" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',10,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',10,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">9</td>
                                <td>2023-01-18</td>
                                <td>Hyundai</td>
                                <td>Preventive Maintenance</td>
                                <td></td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_12" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/12" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(12)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/12" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',12,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',12,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">10</td>
                                <td>2023-02-18</td>
                                <td>16 AJR 367</td>
                                <td>Repair</td>
                                <td></td>
                                <td>Denied</td>
                                <td><input name="url" type="hidden" id="url_13" value="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/updatemaintfrm"><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/editmaintfrm/13" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(13)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="https://vmsdemo.bdtask-demo.com/maintenance/maintenance/delete_mainten/13" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
                                    <div class="text-right" style="display:inline-block;">
                                        <div class="actions" style="display:inline-block;">
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a onclick="changestatus2(0,'tbl_maintenance',13,'maintenanceid')" class="dropdown-item">Accept</a>
                                                    <a onclick="changestatus2(1,'tbl_maintenance',13,'maintenanceid')" class="dropdown-item">Denied</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://vmsdemo.bdtask-demo.com/assets/dist/js/maintainrequisition_list.js"></script> -->
<script>
    $(document).ready(function() {
        $("#mainreq").DataTable();
    });
</script>
@endsection