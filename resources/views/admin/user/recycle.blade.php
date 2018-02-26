@extends('layout.index')
@section('user','open')
@section('userRecycle','active')
@section('main-container')
<div class="block">
        <div class="block-header">
            <h3 class="block-title">用户管理 <small>回收站</small></h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/base_tables_datatables.js -->
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped js-dataTable-simple dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width:3%;"></th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 8%;">username</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 10%;">auth</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 8%;">name</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 5%;">sex</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 14%;">address</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 5%;">code</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 8%;">phone</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 12%;">email</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 12%;">addtime</th>
                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 5%;">state</th>
                                <th class="text-center sorting_disabled" style="width: 10%;" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($res as $v)
                                <tr role="row" class="odd">
                                    <td class="text-center sorting_1">{{$v['id']}}</td>
                                    <td class="font-w600">{{$v['username']}}</td>
                                    <td class="hidden-xs">
                                        @if($v['auth']==0)
                                            <span class="label label-warning">{{  $auth[$v['auth']] }}</span>
                                        @elseif($v['auth']==1)
                                            <span class="label label-info">{{  $auth[$v['auth']] }}</span>
                                        @else
                                            <span class="label label-primary">{{  $auth[$v['auth']] }}</span>
                                        @endif
                                    </td>
                                    <td class="hidden-xs">{{$v['name']}}</td>
                                    <td class="hidden-xs">{{$v['sex']=='w'?'女':'男'}}</td>
                                    <td class="hidden-xs">{{$v['address']}}</td>
                                    <td class="hidden-xs">{{$v['code']}}</td>
                                    <td class="hidden-xs">{{$v['phone']}}</td>
                                    <td class="hidden-xs">{{$v['email']}}</td>
                                    <td class="hidden-xs">{{ date('Y-m-d H:i:s',$v['addtime'])}}</td>
                                    <td class="hidden-xs">
                                        @if($v['state']==1)
                                            <span class="label label-success">{{$v['state']==1?'开启':'禁用'}}</span>
                                        @else
                                            <span class="label label-danger">{{$v['state']==1?'开启':'禁用'}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Lock Client"><i class="fa fa-lock"></i></button>
                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach--}}

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Showing <strong>1</strong>-<strong>10</strong> of <strong>40</strong>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_previous"><a href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li class="paginate_button active" aria-controls="DataTables_Table_0" tabindex="0"><a href="#">1</a></li>
                                <li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">2</a></li>
                                <li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">3</a></li>
                                <li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0"><a href="#">4</a></li>
                                <li class="paginate_button next" aria-controls="DataTables_Table_0" tabindex="0" id="DataTables_Table_0_next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
