@extends('layout.index')
@section('type','open')
@section('typeAdd','active')
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
    <div class="col-lg-4">
        <!-- Bootstrap Login -->
        <div class="block block-themed">
            <div class="block-header bg-primary">
                <ul class="block-options">
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">Bootstrap</h3>
            </div>
            <div class="block-content">
                <form class="form-horizontal push-5-t" action="/Admin/Type/insert" method="post" onsubmit="return true;">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-xs-12" for="login1-username">分类名称</label>
                        <div class="col-xs-12">
                            <input class="form-control" type="text" id="login1-username" name="name" placeholder="请输入分类名称..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12" for="login1-password">隶属关系</label>
                        <div class="col-xs-12">
                            <select class="form-control" id="val-skill" name="pid">
                                <option value="0">默认添加一级分类</option>
                                @foreach($res as $v)
                                <option value="{{$v['id']}}" {{$v['id']==$id ? 'selected':''}} >{{$v['tags']}}{{$v['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-12" for="login1-password">权限</label>
                        <div class="col-xs-6">
                            <label class="css-input css-radio css-radio-primary push-10-r">
                                <input type="radio" name="status" checked><span></span> 开启
                            </label>
                            <label class="css-input css-radio css-radio-primary">
                                <input type="radio" name="status" ><span></span> 关闭
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-arrow-right push-5-r"></i> 添加</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Bootstrap Login -->
    </div>
@endsection