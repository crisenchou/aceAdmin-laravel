@extends('layouts.app')
@push('css')
<!-- page specific plugin styles -->
<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css"/>
<link rel="stylesheet" href="assets/css/jquery.gritter.min.css"/>
<!-- inline styles related to this page -->
<style>
    /* some elements used in demo only */
    .spinner-preview {
        width: 100px;
        height: 100px;
        text-align: center;
        margin-top: 60px;
    }

    .dropdown-preview {
        margin: 0 5px;
        display: inline-block;
    }

    .dropdown-preview > .dropdown-menu {
        display: block;
        position: static;
        margin-bottom: 5px;
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
                <a href="#">UI &amp; Elements</a>
            </li>
            <li class="active">Elements</li>
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
            UI Elements
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                Common UI Features &amp; Elements
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            {{--include tabs--}}
            @include('components.elements.tabs')
            <div class="row">
                @include('components.elements.accordion')
                @include('components.elements.progressbar')
                {{--Accordion --}}
                {{--Progress Bar --}}
            </div><!-- /.row -->

            <hr/>
            <div class="row">

                @include('components.elements.tooltips')
                @include('components.elements.popovers')
                {{--tool tips --}}
                {{--Popovers --}}
            </div><!-- /.row -->

            <hr/>
            <div class="row">
                @include('components.elements.alert')
                @include('components.elements.notification')
                {{--alert --}}
                {{--notification --}}
            </div><!-- /.row -->

            <hr/>
            <div class="row">
                @include('components.elements.modal')
                @include('components.elements.wells')
                {{--modal --}}
                {{--wells --}}
            </div><!-- /.row -->

            <div class="row">
                {{--dropdown --}}
                @include('components.elements.dropdown')
                {{--pills --}}
                @include('components.elements.pills')
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
    @endsection

@push('scripts')
<!--[if lte IE 8]>
    <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/bootbox.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.gritter.min.js"></script>
    <script src="assets/js/spin.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function ($) {
            /**
             $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  //console.log(e.target.getAttribute("href"));
				})

             $('#accordion').on('shown.bs.collapse', function (e) {
					//console.log($(e.target).is('#collapseTwo'))
				});
             */

            $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                //if($(e.target).attr('href') == "#home") doSomethingNow();
            })


            /**
             //go to next tab, without user clicking
             $('#myTab > .active').next().find('> a').trigger('click');
             */


            $('#accordion-style').on('click', function (ev) {
                var target = $('input', ev.target);
                var which = parseInt(target.val());
                if (which == 2) $('#accordion').addClass('accordion-style2');
                else $('#accordion').removeClass('accordion-style2');
            });

            //$('[href="#collapseTwo"]').trigger('click');


            $('.easy-pie-chart.percentage').each(function () {

                var color = $(this).data('color') || $(this).attr('data-color');
                $(this).easyPieChart({
                    barColor: color,
                    trackColor: '#EEEEEE',
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: 8,
                    animate: ace.vars['old_ie'] ? false : 1000,
                    size: 75
                }).css('color', color);
            });

            $('[data-rel=tooltip]').tooltip();
            $('[data-rel=popover]').popover({html: true});


            $('#gritter-regular').on(ace.click_event, function () {
                $.gritter.add({
                    title: 'This is a regular notice!',
                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    image: 'assets/images/avatars/avatar1.png', //in Ace demo ./dist will be replaced by correct assets path
                    sticky: false,
                    time: '',
                    class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
                });

                return false;
            });

            $('#gritter-sticky').on(ace.click_event, function () {
                var unique_id = $.gritter.add({
                    title: 'This is a sticky notice!',
                    text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    image: 'assets/images/avatars/avatar.png',
                    sticky: true,
                    time: '',
                    class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $('#gritter-without-image').on(ace.click_event, function () {
                $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'This is a notice without an image!',
                    // (string | mandatory) the text inside the notification
                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $('#gritter-max3').on(ace.click_event, function () {
                $.gritter.add({
                    title: 'This is a notice with a max of 3 on screen at one time!',
                    text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                    image: 'assets/images/avatars/avatar3.png', //in Ace demo ./dist will be replaced by correct assets path
                    sticky: false,
                    before_open: function () {
                        if ($('.gritter-item-wrapper').length >= 3) {
                            return false;
                        }
                    },
                    class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $('#gritter-center').on(ace.click_event, function () {
                $.gritter.add({
                    title: 'This is a centered notification',
                    text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                    class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });

            $('#gritter-error').on(ace.click_event, function () {
                $.gritter.add({
                    title: 'This is a warning notification',
                    text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                    class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                });

                return false;
            });


            $("#gritter-remove").on(ace.click_event, function () {
                $.gritter.removeAll();
                return false;
            });


            ///////


            $("#bootbox-regular").on(ace.click_event, function () {
                bootbox.prompt("What is your name?", function (result) {
                    if (result === null) {

                    } else {

                    }
                });
            });

            $("#bootbox-confirm").on(ace.click_event, function () {
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        //
                    }
                });
            });

            /**
             $("#bootbox-confirm").on(ace.click_event, function() {
					bootbox.confirm({
						message: "Are you sure?",
						buttons: {
						  confirm: {
							 label: "OK",
							 className: "btn-primary btn-sm",
						  },
						  cancel: {
							 label: "Cancel",
							 className: "btn-sm",
						  }
						},
						callback: function(result) {
							if(result) alert(1)
						}
					  }
					);
				});
             **/


            $("#bootbox-options").on(ace.click_event, function () {
                bootbox.dialog({
                    message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
                    buttons: {
                        "success": {
                            "label": "<i class='ace-icon fa fa-check'></i> Success!",
                            "className": "btn-sm btn-success",
                            "callback": function () {
                                //Example.show("great success");
                            }
                        },
                        "danger": {
                            "label": "Danger!",
                            "className": "btn-sm btn-danger",
                            "callback": function () {
                                //Example.show("uh oh, look out!");
                            }
                        },
                        "click": {
                            "label": "Click ME!",
                            "className": "btn-sm btn-primary",
                            "callback": function () {
                                //Example.show("Primary button");
                            }
                        },
                        "button": {
                            "label": "Just a button...",
                            "className": "btn-sm"
                        }
                    }
                });
            });


            $('#spinner-opts small').css({display: 'inline-block', width: '60px'})

            var slide_styles = ['', 'green', 'red', 'purple', 'orange', 'dark'];
            var ii = 0;
            $("#spinner-opts input[type=text]").each(function () {
                var $this = $(this);
                $this.hide().after('<span />');
                $this.next().addClass('ui-slider-small').addClass("inline ui-slider-" + slide_styles[ii++ % slide_styles.length]).css('width', '125px').slider({
                    value: parseInt($this.val()),
                    range: "min",
                    animate: true,
                    min: parseInt($this.attr('data-min')),
                    max: parseInt($this.attr('data-max')),
                    step: parseFloat($this.attr('data-step')) || 1,
                    slide: function (event, ui) {
                        $this.val(ui.value);
                        spinner_update();
                    }
                });
            });


            //CSS3 spinner
            $.fn.spin = function (opts) {
                this.each(function () {
                    var $this = $(this),
                            data = $this.data();

                    if (data.spinner) {
                        data.spinner.stop();
                        delete data.spinner;
                    }
                    if (opts !== false) {
                        data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
                    }
                });
                return this;
            };

            function spinner_update() {
                var opts = {};
                $('#spinner-opts input[type=text]').each(function () {
                    opts[this.name] = parseFloat(this.value);
                });
                opts['left'] = 'auto';
                $('#spinner-preview').spin(opts);
            }


            $('#id-pills-stacked').removeAttr('checked').on('click', function () {
                $('.nav-pills').toggleClass('nav-stacked');
            });


            ///////////
            $(document).one('ajaxloadstart.page', function (e) {
                $.gritter.removeAll();
                $('.modal').modal('hide');
            });

        });
    </script>
    @endpush
