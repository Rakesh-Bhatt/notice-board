<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/bootstrap.min.css')}}">

    <script type="text/javascript" src="{{asset('resources/assets/js/jquery-3.3.1.slim.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('resources/assets/js/popper.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('resources/assets/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="{{route('studentdashboard')}}" class="navbar-brand">Student Notice Board System</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{route('student.user')}}" class="nav-item nav-link active">View Notice</a>
                <a href="#" class="nav-item nav-link">Profile</a>
            </div>
            <form class="form-inline">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
</div>