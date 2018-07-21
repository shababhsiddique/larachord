@extends('site.master')
@section('adminstack')

<?php
$id = Session::get('admin_id');

if ($id == NULL || $id == 0) {
    
} else {
    ?>
    <link id="nicpanelcss" rel="stylesheet" href="{{asset('adminassets/nicedit/panel.css')}}"/>
    <script src="{{asset('adminassets/nicedit/nicEdit.js')}}"></script>
    <script type="text/javascript">
        //<![CDATA[

        bkLib.onDomLoaded(function () {
            if (inIframe()) {
                var myNicEditor = new nicEditor();
                myNicEditor.setPanel('myNicPanel');
                myNicEditor.addInstance('nic_block_1');
                myNicEditor.addInstance('nic_block_2');
                myNicEditor.addInstance('nic_block_3');
                myNicEditor.addInstance('nic_block_5');
                myNicEditor.addInstance('nic_block_6');
                myNicEditor.addInstance('nic_block_7');
            }
        });


        //]]>
    </script>
    <?php
}
?>

@endsection