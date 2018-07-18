@extends('site.master')
@section('adminstack')

<?php
$id = Session::get('admin_id');

if ($id == NULL || $id == 0) {
    
} else {
    ?>
    <link rel="stylesheet" href="{{asset('adminassets/nicedit/panel.css')}}"/>
    <script src="{{asset('adminassets/nicedit/nicEdit.js')}}"></script>
    <script type="text/javascript">
        //<![CDATA[

        bkLib.onDomLoaded(function () {
            if (inIframe()) {
                var myNicEditor = new nicEditor();
                myNicEditor.setPanel('myNicPanel');
                myNicEditor.addInstance('myInstance1');
            }
        });


        //]]>
    </script>
    <?php
}
?>

@endsection