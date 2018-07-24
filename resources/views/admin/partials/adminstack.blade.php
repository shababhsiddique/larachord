@extends('site.html.index')
@section('adminstack')

<?php
$id = Session::get('admin_id');

if ($id == NULL || $id == 0) {
    
} else {
    
    ?>
    
    <link rel="stylesheet" type="text/css" href="{{asset('adminassets/content-tools/content-tools.min.css')}}">
    <script src="{{asset('adminassets/content-tools/content-tools.min.js')}}"></script>
    <link  rel="stylesheet" href="{{asset('adminassets/content-tools/editor.css')}}"/>
    <script type="text/javascript">
        var saveUrl = "{{url('api/save-data')}}";
        var token = "<?php echo Session::get('admin_accesstoken')?>";        
    </script>
    <script src="{{asset('adminassets/content-tools/editor.js')}}"></script>

    <?php
}
?>

@endsection