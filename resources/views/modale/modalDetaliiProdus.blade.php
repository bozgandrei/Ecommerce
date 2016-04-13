<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Modal Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet" />
    <style>
        body {
            padding-top: 40px;
        }
    </style>
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-modal.css') }}" rel="stylesheet" />

</head>
<body>



<!-- Modal Definitions (tabbed over for <pre>) -->
<div id="responsive" class="modal hide fade" tabindex="-1" data-width="760">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Responsive</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span6">
                <h4>Some Input</h4>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
            </div>
            <div class="span6">
                <h4>Some More Input</h4>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
                <p><input type="text" class="span12" /></p>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>


<div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>
<script src="{{asset('js/bootstrap-modalmanager.js')}}"></script>
<script src="{{asset('js/bootstrap-modal.js')}}"></script>
<script type="text/javascript">

    $(function(){

        $.fn.modalmanager.defaults.resize = true;

        $('[data-source]').each(function(){
            var $this = $(this),
                    $source = $($this.data('source'));

            var text = [];
            $source.each(function(){
                var $s = $(this);
                if ($s.attr('type') == 'text/javascript'){
                    text.push($s.html().replace(/(\n)*/, ''));
                } else {
                    text.push($s.clone().wrap('<div>').parent().html());
                }
            });

            $this.text(text.join('\n\n').replace(/\t/g, '    '));
        });

        prettyPrint();
    });
</script>

<script id="ajax" type="text/javascript">

    var $modal = $('#ajax-modal');

    $('.ajax .demo').on('click', function(){
        // create the backdrop and wait for next modal to be triggered
        $('body').modalmanager('loading');

        setTimeout(function(){
            $modal.load('modal_ajax_test.html', '', function(){
                $modal.modal();
            });
        }, 1000);
    });

    $modal.on('click', '.update', function(){
        $modal.modal('loading');
        setTimeout(function(){
            $modal
                    .modal('loading')
                    .find('.modal-body')
                    .prepend('<div class="alert alert-info fade in">' +
                            'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '</div>');
        }, 1000);
    });

</script>

</body>
</html>
