@extends('site.master')
@section('adminbar')

<?php
$id = Session::get('admin_id');

if ($id == NULL || $id == 0) {
    
} else {
    ?>    
    <div id="myNicPanel">
        <span class="grab"></span>
    </div>
    <script type="text/javascript">
        if (!inIframe()) {
            $('#myNicPanel').hide();
        }
    </script>
    <?php
}
?>

@endsection