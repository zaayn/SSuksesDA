@extends('layouts.app_user')

@section('content')
<div class="col-md-8" style="padding-top:20px;">
    <div class="box-v5 panel">
        <div class="panel-heading padding-0 bg-white border-none">
            <textarea placeholder="what do you think?"></textarea>
        </div>
        <div class="panel-body">
            <div class="col-md-12 padding-0">
                <div class="col-md-6 col-sm-6 col-xs-6 tool">
                <input type="file" name="foto" id="foto">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 padding-0">
                <button class="btn btn-round pull-right">
                    <span>SEND</span>
                    <span class="icon-arrow-right icons"></span>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4" style="padding-top: 20px">
    <div class="panel">
        <div class="panel-body">
            <h3>User Online</h3>
           
        </div>
    </div>
</div>
@endsection