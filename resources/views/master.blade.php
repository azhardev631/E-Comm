<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>E-Comm</title>
</head>
<body>
    {{ View::make('header') }}
    @yield('content');
    {{ View::make('footer') }}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }
    .slider-img{
        height:400px !important
    }
    .custom-product{
        height: 400px;
    }
    .slider-text{
        background-color: #24465454 !important
    }
    .trending-img{
        height:100px;
    }
    .trending-item{
        width:25%;
        float: left;
    }
    .trending-wrapper{
        margin: 20px;
    }
</style>
</html>
