@extends('backend.layouts.main')
@section('backend-section')


    <div class="main-content" style="min-height: 530px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="float:right;">Contact Queries</h4>

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="table-1_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped dataTable no-footer" id="table-1"
                                                    role="grid" aria-describedby="table-1_info">

                                                    @if (count($queries) >= 1)
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="text-center sorting_asc" tabindex="0"
                                                                    aria-controls="table-1" rowspan="1" colspan="1"
                                                                    aria-sort="ascending"
                                                                    aria-label="
                                                                                                                  #
                                                                                                                : activate to sort column descending"
                                                                    style="width: 24.4375px;">
                                                                    #
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="table-1" rowspan="1" colspan="1"
                                                                    aria-label="Task Name: activate to sort column ascending"
                                                                    style="width: 147.281px;">Name</th>

                                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                    aria-label="Members" style="width: 209.547px;">Email
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="table-1" rowspan="1" colspan="1"
                                                                    aria-label="Due Date: activate to sort column ascending"
                                                                    style="width: 89.9531px;">Subject</th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="table-1" rowspan="1" colspan="1"
                                                                    aria-label="Status: activate to sort column ascending"
                                                                    style="width: 107.609px;">Message</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @else
                                                            <div class="alert alert-warning">
                                                                <strong>Sorry!</strong> No Banner Found
                                                            </div>
                                                    @endif

                                                    @if (count($queries) >= 1)
                                                        @foreach ($queries as $query)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">
                                                                    {{ $query->id }}
                                                                </td>
                                                                <td> {{ $query->name }}</td>


                                                                    <td> {{ $query->email }}</td>

                                                                <td>{{ $query->subject }}</td>
                                                                <td>
                                                                    {{ $query->msg }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="table-1_info" role="status"
                                                    aria-live="polite">

                                                    {{ $queries->links('pagination::bootstrap-4') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default" tabindex="2"
                style="overflow: hidden; outline: none;">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
                                    checked="">
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                                    checked="">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
            <div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr"
                style="width: 8px; z-index: 999; cursor: default; position: absolute; top: 0px; left: 272px; height: 388px; display: block; opacity: 0;">
                <div class="nicescroll-cursors"
                    style="position: relative; top: 0px; float: right; width: 6px; height: 245px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;">
                </div>
            </div>
            <div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr"
                style="height: 8px; z-index: 999; top: 380px; left: 0px; position: absolute; cursor: default; display: none; width: 272px; opacity: 0;">
                <div class="nicescroll-cursors"
                    style="position: absolute; top: 0px; height: 6px; width: 280px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;">
                </div>
            </div>
        </div>
    </div>
@endsection
