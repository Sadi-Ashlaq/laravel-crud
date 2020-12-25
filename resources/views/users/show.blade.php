<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Students Table!</title>
</head>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/create">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">admin</a>
                </li>
            </ul>
            <form class="d-flex">
                <img src="{{ asset('userpicture/animatedLogo.gif') }}" alt="">
            </form>
        </div>
    </div>
</nav>
<body>
<h1 style="text-align:center;margin-bottom:20px">single page</h1>
<div class="card" style="width: 30rem;margin:auto">
    <img src='{{asset("storage/coverImages/$user->image")}}' class="card-img-top" alt="..."
         style="width: 20rem;margin:auto">
    <div class="card-body">
        <h5 class="card-title">{{$user->fullname}}</h5>
        <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">email:{{$user->email}}</li>
        <li class="list-group-item">phone: {{$user->phone}} </li>
        <li class="list-group-item">Address:{{$user->Address}} </li>
    </ul>
    <a href="/user" class="btn btn-primary">back</a>
    <div class="card-body" style="background-color:black">
    </div>
</div>
</body>
</html>
