
<div class="col-sm-6">
    <div>
        <h3 class="header smaller lighter purple">
            Bootstrap Modals
            <small>(Bootbox.js)</small>
        </h3>

        <p>
            <button class="btn" id="bootbox-regular">Regular Dialog</button>
            <button class="btn btn-info" id="bootbox-confirm">Confirm</button>
            <button class="btn btn-success" id="bootbox-options">More Options</button>
        </p>
    </div><!-- /.row -->

    <div class="space-24"></div>

    <div class="row">
        <div class="col-xs-12">
            <h3 class="header smaller lighter grey">
                <i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>
                Imageless Spinner
                <small>(spin.js)</small>
            </h3>
        </div>

        <div class="col-xs-12">
            <i>Change a value to begin</i>

            <div class="pull-right center spinner-preview" id="spinner-preview"></div>

            <form class="form-horizontal" id="spinner-opts">
                <label class="inline">
                    <small class="lighter">Lines:</small>

                    <input class="hidden" type="text" name="lines" data-min="5" data-max="16"
                           data-step="2" value="12"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Length:</small>

                    <input class="hidden" type="text" name="length" data-min="0" data-max="30"
                           value="7"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Width:</small>

                    <input class="hidden" type="text" name="width" data-min="2" data-max="20"
                           value="4"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Radius:</small>

                    <input class="hidden" type="text" name="radius" data-min="0" data-max="40"
                           value="10"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Corners:</small>

                    <input class="hidden" type="text" name="corners" data-min="0" data-max="1"
                           data-step="0.1" value="1"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Rotate:</small>

                    <input class="hidden" type="text" name="rotate" data-min="0" data-max="90"
                           value="0"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Trail:</small>

                    <input class="hidden" type="text" name="trail" data-min="10" data-max="100"
                           value="60"/>
                </label>

                <div class="space-0"></div>

                <label class="inline">
                    <small class="lighter">Speed:</small>

                    <input class="hidden" type="text" name="speed" data-min="0.5" data-max="2.2"
                           data-step="0.1" value="1"/>
                </label>
            </form>
        </div><!-- /.row -->
    </div><!-- /.row -->
</div><!-- /.col -->
