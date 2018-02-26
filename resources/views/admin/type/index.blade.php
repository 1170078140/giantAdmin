@extends('layout.index')
@section('type','open')
@section('typeList','active')
@section('main-container')
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Form Validation <small>It’s never been easier to validate form values.</small>
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>Forms</li>
                    <li><a class="link-effect" href="">Validation</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <!-- Header BG Table -->
                <div class="block">
                    <div class="block-header">
                        <div class="block-options">
                            {{--<code>.table-header-bg</code>--}}
                        </div>
                        <h3 class="block-title">Header Background Table</h3>
                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-borderless table-header-bg">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 70px;"></th>
                                <th class="text-center" style="width: 70px;"></th>
                                <th>Name</th>
                                <th class="hidden-xs" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($res as $k=>$v)
                            <tr>
                                <td class="text-center">{{$v['id']}}</td>
                                @if($v['pid']==0)
                                    <td class="text-center"><i class="fa fa-folder-open"></i></td>
                                    <td style="font-weight: bolder">{{$v['name']}}</td>
                                @else
                                    <td class="text-center"><i>{{$v['tags']}}</i></td>
                                    <td>{{$v['name']}}</td>
                                @endif
                                <td class="hidden-xs">
                                    @if($v['status']==1)
                                        <span class="label label-success">开启</span>
                                    @else
                                        <span class="label label-warning">关闭</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/Admin/Type/add/{{$v['id']}}"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Add Client"><i class="fa fa-plus"></i></button></a>
                                        <a href="/Admin/Type/edit/{{$v['id']}}"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button></a>
                                        <a href="/Admin/Type/delete/{{$v['id']}}"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Header BG Table -->
            </div>
        </div>
    </div>
@endsection