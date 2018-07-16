
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('adminassets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('adminassets/css/signin.css')}}" rel="stylesheet">
    </head>

    <body class="text-center">
        {!! Form::open(['class'=>'form-signin', 'url' => '/admin/authenticate','method' => 'post']) !!}
        
            <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <?php
            $msg = Session::get('message');
            if (isset($msg) && $msg != "") {
                ?>    
                <div class="alert alert-{{$msg['type']}} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> {{$msg['title']}}</h4>
                    {{$msg['body']}}
                </div>
                <?php
                Session::put('message', '');
            }
            ?>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        {!! Form::close() !!}
    </body>
</html>
