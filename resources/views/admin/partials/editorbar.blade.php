@extends('admin.master')
@section('adminContent')

<link rel="stylesheet" href="{{asset('adminassets/nicedit/panel.css')}}"/>
<script src="{{asset('adminassets/nicedit/nicEdit.js')}}"></script>
<script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function () {
        var myNicEditor = new nicEditor();
        myNicEditor.setPanel('myNicPanel');
        myNicEditor.addInstance('myInstance1');
        myNicEditor.addInstance('myInstance2');
        myNicEditor.addInstance('myInstance3');
    });
    //]]>
</script>   

@endsection