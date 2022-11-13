<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="p5nbe8MTmdtUEXetrLyemS95RJ8CWRsSEqRv5fjr">

    
    
    
    <title>
                AdminLTE 3            </title>

    
    
    
            <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://localhost:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        
        <link rel="stylesheet" href="http://localhost:8000/vendor/adminlte/dist/css/adminlte.min.css">

                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            
    
    
    
            
    
    
</head>

<body class="login-page" >

    
        <div class="login-box">

        
        <div class="login-logo">
            <a href="http://localhost:8000/home">

                
                                    <img src="http://localhost:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
                         alt="Admin Logo" height="50">
                
                
                <b>A</b>LTE

            </a>
        </div>

        
        <div class="card card-outline card-primary">

            
                            <div class="card-header ">
                    <h3 class="card-title float-none text-center">
                        Reset Password                    </h3>
                </div>
            
            
            <div class="card-body login-card-body ">
                
    
    <form action="http://localhost:8000/password/email" method="post">
        <input type="hidden" name="_token" value="p5nbe8MTmdtUEXetrLyemS95RJ8CWRsSEqRv5fjr">
        
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control "
                   value="" placeholder="Email" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope "></span>
                </div>
            </div>

                    </div>

        
        <button type="submit" class="btn btn-block btn-flat btn-primary">
            <span class="fas fa-share-square"></span>
            Send Password Reset Link
        </button>

    </form>

            </div>

            
            
        </div>

    </div>

    
            <script src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://localhost:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        
        <script src="http://localhost:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
    
    
    
    
            
</body>

</html>
