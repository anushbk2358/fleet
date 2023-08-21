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

<div id="viewInfo" class="modal fade bd-example-modal-lg" role="dialog">
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
                <h4 class="pl-3">
                    Search Here
                    <small class="float-right">
                        <a href="{{route('add-maintenance-list')}}" class="btn btn-primary btn-md">
                            <i class="ti-plus" aria-hidden="true"></i>
                            Add Requisition
                        </a>
                    </small>
                </h4>
            </div>
            <div class="card-body row">
                <div class="col-sm-12 col-xl-4">
                    <div class="form-group row mb-1">
                        <label for="mainten_type" class="col-sm-5 col-form-label justify-content-start text-left">Maintenance Type </label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="mainten_type" id="mainten_type">
                                <option value="" selected="selected">Please Select One</option>
                                @foreach($maintenanceTypes as $maintenanceType)
                                <option value="{{$maintenanceType['MAINTENANCE_ID']}}">{{$maintenanceType['MAINTENANCE_NAME']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="vehicle" class="col-sm-5 col-form-label justify-content-start text-left">Vehicle </label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="vehicle" id="vehicle">
                                <option value="" selected="selected">Please Select One</option>
                                @foreach($vehicles as $vehicle)
                                <option value="{{$vehicle['VEHICLE_ID']}}">{{$vehicle['VEHICLE_NAME']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4">
                    <div class="form-group row mb-1">
                        <label for="status" class="col-sm-5 col-form-label justify-content-start text-left">Status </label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="status" id="status">
                                <option value="" selected="selected">Please Select One</option>
                                @foreach($statuses as $status)
                                <option value="{{$status['PHASE_ID']}}">{{$status['PHASE_NAME']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="service_fr" class="col-sm-5 col-form-label justify-content-start text-left">Maintenance Service</label>
                        <div class="col-sm-7">
                            <select class="form-control basic-single" name="mainten_service" id="service_fr">
                                <option value="" selected="selected">Please Select One</option>
                                @foreach($maintenanceServices as $maintenanceService)
                                <option value="{{$maintenanceService['MAINTENANCE_SERVICE_ID']}}">{{$maintenanceService['MAINTENANCE_SERVICE_NAME']}}</option>
                                @endforeach
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
                                <th>Sl No.</th>
                                <th>Requisition Date</th>
                                <th>Vehicle Name</th>
                                <th>Maintenance Type</th>
                                <th>Requested By </th>
                                <th>Status</th>
                                <th>Action(s)</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">1</td>
                                <td>2019-09-03</td>
                                <td>Test Express 1</td>
                                <td>Repair</td>
                                <td>Kumar</td>
                                <td>Denied</td>
                                <td><a href="#" class="btn btn-xs btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a><a onclick="editinfo(1)" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1"><i class="far fa-eye"></i></a><a href="#" onclick="return confirm('Are you sure ?') " class="btn btn-xs btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>
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
                                </td> -->
                            </tr>
                        </tbody>
                    </table> <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-content')
<!-- <script src="https://vmsdemo.bdtask-demo.com/assets/dist/js/maintainrequisition_list.js"></script> -->
@if(session('message'))
<script>
    toastr.success('{{session("message")}}', '', {
        closeButton: true
    });
</script>
@endif
<script>
    // For storing routes and other global variables
    let getRequisitionsDataURL = "{{route('maintenance-requisitions.list')}}";
    let editRequisitionPlaceholderURL = "{{route('maintenance-requisitions.edit', ['requisition'=>'0'])}}"; // 0 in URL is replaced by ID in script
    let getRequisitionDetailsURL = "{{route('maintenance-requisitions.get-details')}}";
    let csrfToken = "{{csrf_token()}}";
    let updateApprovalStatusURL = "{{route('maintenance-requisitions.change-approval-status')}}";
</script>
<script src="{{asset('public/dist/js/maintenance/mainten_req_list.js')}}">
</script>
@endsection