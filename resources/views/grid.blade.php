@extends('layouts.app')

@push('css')
<!-- inline styles related to this page -->
<style>
    /* styling the grid page's grid elements */
    .center {
        text-align: center;
    }
    .center [class*="col-"] {
        margin-top: 2px;
        margin-bottom: 2px;

        position: relative;
        text-overflow: ellipsis;
    }
    .center [class*="col-"]  div{
        position: relative;
        z-index: 2;

        padding-top: 4px;
        padding-bottom: 4px;

        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;

        width: 100%;
    }
    .center [class*="col-"]  div span{
        position: relative;
        z-index: 2;
    }
    .center [class*="col-"] div:before {
        display: block;
        content: "";

        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;

        border: 1px solid #DDD;
    }

    .center [class*="col-"] div:hover:before {
        background-color: #FCE6A6;
        border-color: #EFD27A;
    }
</style>
@endpush
@section('breadcrumbs')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>

            <li>
                <a href="#">Other Pages</a>
            </li>
            <li class="active">Grid</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
            </form>
        </div><!-- /.nav-search -->
    </div>
@endsection
@section('page-content')
    <div class="page-header">
        <h1>
            Grid
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                bootstrap grid sizing
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="center">
                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <span>.col-xs-12</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-1">
                        <div>
                            <span>.col-xs-1</span>
                        </div>
                    </div>

                    <div class="col-xs-11">
                        <div>
                            <span>.col-xs-11</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-2">
                        <div>
                            <span>.col-xs-6.col-sm-2</span>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-10">
                        <div>
                            <span>.col-xs-6.col-sm-10</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div>
                            <span>.col-xs-12.col-lg-6</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                        <div>
                            <span>.col-xs-12.col-lg-6</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4">
                        <div>
                            <span>.col-xs-4</span>
                        </div>
                    </div>

                    <div class="col-xs-8">
                        <div>
                            <span>.col-xs-8</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-5">
                        <div>
                            <span>.col-xs-5</span>
                        </div>
                    </div>

                    <div class="col-xs-7">
                        <div>
                            <span>.col-xs-7</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div>
                            <span>.col-xs-6</span>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div>
                            <span>.col-xs-6</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-7">
                        <div>
                            <span>.col-xs-7</span>
                        </div>
                    </div>

                    <div class="col-xs-5">
                        <div>
                            <span>.col-xs-5</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div>
                            <span>.col-xs-8</span>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div>
                            <span>.col-xs-4</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-9">
                        <div>
                            <span>.col-xs-9</span>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div>
                            <span>.col-xs-3</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-10">
                        <div>
                            <span>.col-xs-10</span>
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <div>
                            <span>.col-xs-2</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-11">
                        <div>
                            <span>.col-xs-11</span>
                        </div>
                    </div>

                    <div class="col-xs-1">
                        <div>
                            <span>.col-xs-1</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <span>.col-xs-12</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection