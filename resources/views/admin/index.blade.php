@extends('layouts/admin')
@section('content')

<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Dashboard</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-white stats-widget">
                    <div class="panel-body">
                        <div class="pull-left">
                            <h4>Total Products</h4>
                            <span class="stats-number">{{$product_count}}</span>
                            @if($product_count > 1) <p class="stats-info">Products</p>
                            @elseif($product_count > 0)
                            <p class="stats-info">Product</p>
                            @else
                            <p class="stats-info">No Record</p>
                            @endif
                        </div>
                        <div class="pull-right">
                            <i class="icon-arrow_upward stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-white stats-widget">
                    <div class="panel-body">
                        <div class="pull-left">
                            <h4>Team Members</h4>
                            <span class="stats-number">{{$members_count}}</span>
                            @if($members_count > 1) <p class="stats-info">Members</p>
                            @elseif($members_count > 0)
                            <p class="stats-info">Member</p>
                            @else
                            <p class="stats-info">No Record</p>
                            @endif
                        </div>
                        <div class="pull-right">
                            <i class="icon-arrow_upward stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-white stats-widget">
                    <div class="panel-body">
                        <div class="pull-left">
                            <h4>Services</h4>
                            <span class="stats-number">{{$services_count}}</span>
                            @if($services_count > 1) <p class="stats-info">Services</p>
                            @elseif($services_count > 0)
                            <p class="stats-info">Service</p>
                            @else
                            <p class="stats-info">No Record</p>
                            @endif
                        </div>
                        <div class="pull-right">
                            <i class="icon-arrow_upward stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-white stats-widget">
                    <div class="panel-body">
                        <div class="pull-left">
                            <h4>Projects</h4>
                            <span class="stats-number">{{$projects_count}}</span>
                            @if($projects_count > 1) <p class="stats-info">Projects</p>
                            @elseif($project_count > 0)
                            <p class="stats-info">Project</p>
                            @else
                            <p class="stats-info">No Record</p>
                            @endif
                        </div>
                        <div class="pull-right">
                            <i class="icon-arrow_upward stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-white stats-widget">
                    <div class="panel-body">
                        <div class="pull-left">
                            <span class="stats-number">58%</span>
                            <p class="stats-info">Finished Tasks</p>
                        </div>
                        <div class="pull-right">
                            <i class="icon-arrow_upward stats-icon"></i>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div><!-- Row -->

    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by skcats</p>
    </div>
</div>

@endsection
