@extends('layout.index')
@section('user','open')
@section('userAdd','active')
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
<div class="col-lg-6" style="margin: 0 auto;">
    <!-- Bootstrap Forms Validation -->
    <h2 class="content-heading">用户管理</h2>
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
            <h3 class="block-title">添加用户</h3>
        </div>
        <div class="block-content block-content-narrow">
            <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/base_forms_validation.js) -->
            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <form class="js-validation-bootstrap form-horizontal" action="" method="post" novalidate="novalidate">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-username">Username <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" id="val-username" name="val-username" placeholder="Choose a nice username..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-email">Email <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" id="val-email" name="val-email" placeholder="Enter your valid email..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-password">Password <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="password" id="val-password" name="val-password" placeholder="Choose a good one..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="password" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it to be safe!">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="14" placeholder="Share your ideas with us.."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <select class="form-control" id="val-skill" name="val-skill">
                            <option value="">Please select</option>
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="ruby">Ruby</option>
                            <option value="php">PHP</option>
                            <option value="asp">ASP.NET</option>
                            <option value="python">Python</option>
                            <option value="mysql">MySQL</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-website">Website <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" id="val-website" name="val-website" placeholder="http://example.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" id="val-digits" name="val-digits" placeholder="3">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-number">Number <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" id="val-number" name="val-number" placeholder="3.0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input class="form-control" type="text" id="val-range" name="val-range" placeholder="3">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms</a> <span class="text-danger">*</span></label>
                    <div class="col-md-8">
                        <label class="css-input css-checkbox css-checkbox-primary" for="val-terms">
                            <input type="checkbox" id="val-terms" name="val-terms" value="1"><span></span> I agree to the terms
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap Forms Validation -->
</div>
@endsection
