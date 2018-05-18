@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{asset('assets/css/dropzone.min.css')}}"/>
@endpush
@section('breadcrumbs')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>

            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Dropzone File Upload</li>
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
            Dropzone.js
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Drag &amp; drop file upload with image preview
            </small>
        </h1>
    </div><!-- /.page-header -->
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-info">
                <i class="ace-icon fa fa-hand-o-right"></i>

                Please note that demo server is not configured to save uploaded files, therefore you may get an error
                message.
                <button class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
            </div>

            <div>
                <form action="./dummy.html" class="dropzone well" id="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple=""/>
                    </div>
                </form>
            </div>

            <div id="preview-template" class="hide">
                <div class="dz-preview dz-file-preview">
                    <div class="dz-image">
                        <img data-dz-thumbnail=""/>
                    </div>

                    <div class="dz-details">
                        <div class="dz-size">
                            <span data-dz-size=""></span>
                        </div>

                        <div class="dz-filename">
                            <span data-dz-name=""></span>
                        </div>
                    </div>

                    <div class="dz-progress">
                        <span class="dz-upload" data-dz-uploadprogress=""></span>
                    </div>

                    <div class="dz-error-message">
                        <span data-dz-errormessage=""></span>
                    </div>

                    <div class="dz-success-mark">
											<span class="fa-stack fa-lg bigger-150">
												<i class="fa fa-circle fa-stack-2x white"></i>

												<i class="fa fa-check fa-stack-1x fa-inverse green"></i>
											</span>
                    </div>

                    <div class="dz-error-mark">
											<span class="fa-stack fa-lg bigger-150">
												<i class="fa fa-circle fa-stack-2x white"></i>

												<i class="fa fa-remove fa-stack-1x fa-inverse red"></i>
											</span>
                    </div>
                </div>
            </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@push('scripts')
    <!-- page specific plugin scripts -->
    <script src="{{asset('assets/js/dropzone.min.js')}}"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function ($) {

            try {
                Dropzone.autoDiscover = false;

                var myDropzone = new Dropzone('#dropzone', {
                    previewTemplate: $('#preview-template').html(),

                    thumbnailHeight: 120,
                    thumbnailWidth: 120,
                    maxFilesize: 0.5,

                    //addRemoveLinks : true,
                    //dictRemoveFile: 'Remove',

                    dictDefaultMessage:
                        '<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload \
                        <span class="smaller-80 grey">(or click)</span> <br /> \
                        <i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>'
                    ,

                    thumbnail: function (file, dataUrl) {
                        if (file.previewElement) {
                            $(file.previewElement).removeClass("dz-file-preview");
                            var images = $(file.previewElement).find("[data-dz-thumbnail]").each(function () {
                                var thumbnailElement = this;
                                thumbnailElement.alt = file.name;
                                thumbnailElement.src = dataUrl;
                            });
                            setTimeout(function () {
                                $(file.previewElement).addClass("dz-image-preview");
                            }, 1);
                        }
                    }

                });


                //simulating upload progress
                var minSteps = 6,
                    maxSteps = 60,
                    timeBetweenSteps = 100,
                    bytesPerStep = 100000;

                myDropzone.uploadFiles = function (files) {
                    var self = this;

                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                        for (var step = 0; step < totalSteps; step++) {
                            var duration = timeBetweenSteps * (step + 1);
                            setTimeout(function (file, totalSteps, step) {
                                return function () {
                                    file.upload = {
                                        progress: 100 * (step + 1) / totalSteps,
                                        total: file.size,
                                        bytesSent: (step + 1) * file.size / totalSteps
                                    };

                                    self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                                    if (file.upload.progress == 100) {
                                        file.status = Dropzone.SUCCESS;
                                        self.emit("success", file, 'success', null);
                                        self.emit("complete", file);
                                        self.processQueue();
                                    }
                                };
                            }(file, totalSteps, step), duration);
                        }
                    }
                }


                //remove dropzone instance when leaving this page in ajax mode
                $(document).one('ajaxloadstart.page', function (e) {
                    try {
                        myDropzone.destroy();
                    } catch (e) {
                    }
                });

            } catch (e) {
                alert('Dropzone.js does not support older browsers!');
            }

        });
    </script>
@endpush