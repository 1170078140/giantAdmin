@extends('layout.index')
@section('goods','open')
@section('goodsAdd','active')
@section('main-container')
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Form Elements <small>Carefully designed elements that will ensure a great experience for your users.</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Forms</li>
                <li><a class="link-effect" href="">Form Elements</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="content content-narrow">
    <!-- Floating Labels -->
    <div class="block col-sm-9">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">商品添加</h3>
        </div>
        <div class="block-content block-content-narrow">
            <form class="form-horizontal push-10-t" action="/Admin/Goods/insert" method="post" onsubmit="return true;">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="form-material floating">
                            <select class="form-control" id="material-select2" name="material-select2" size="1">
                                <option></option><!-- Empty value for demostrating material select box -->
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                            <label for="material-select2">商品分类</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="material-text2" name="material-text2">
                            <label for="material-text2">商品名称</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12" for="example-file-input">商品主图</label>
                    <div class="col-xs-12">
                        <input type="file" id="example-file-input" name="example-file-input">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-6">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="material-gridf2" name="material-gridf2">
                            <label for="material-gridf2">单价</label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="material-gridl2" name="material-gridl2">
                            <label for="material-gridl2">状态</label>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-6">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="material-gridf2" name="material-gridf2">
                            <label for="material-gridf2">库存量</label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="material-gridl2" name="material-gridl2">
                            <label for="material-gridl2">已售出</label>
                        </div>
                    </div>
                </div>
                <div class="form-group  has-success">
                    <div class="col-xs-12">
                        <div class="form-material floating">
                            <textarea class="form-control" id="material-textarea-small2" name="material-textarea-small2" rows="3"></textarea>
                            <label for="material-textarea-small2">副标题</label>
                        </div>
                    </div>
                </div>
                <div class="form-group has-error">
                    <div class="col-sm-12">
                        <div class="form-material floating">
                            <input class="form-control" type="text" id="material-error2" name="material-error2">
                            <label for="material-error2">优惠信息</label>
                        </div>
                    </div>
                </div>
                <div class="form-group  has-warning">
                    <div class="col-xs-12">
                        <div class="form-material floating">
                            <textarea class="form-control" id="material-textarea-large2" name="material-textarea-large2" rows="8"></textarea>
                            <label for="material-textarea-large2">商品详情</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Floating Labels -->
</div>
@endsection