<html>
<head>
    <link
        href="https://fonts.googleapis.com/css?family=Arvo:700"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:300,100"
        rel="stylesheet"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Students Table!</title>
</head>
<style>
    .main {
        display: flex;
        justify-content: center;
    }
    .cards {
        width: 510px;
        height:700px;
        margin-right: 5px;
    }
    .cards img {
        width: 400px;
        height: 600px;
    }
    @media screen and (max-width: 900px) {
        .main {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .cards{
            margin-bottom:30%;
            width: 300px;
        }
        .cards img{
            width: 300px;
        }
        .container{
            height: 500px;
            width: 300px;
        }
    }
    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: rgb(238, 238, 241);
        /* border: 1px solid black; */
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background-color: white;
        outline: none;
    }
    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #F1F1F1;
    }
    /* Set a style for the submit button */
    .registerbtn {
        background-color:black;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
    .registerbtn:hover {
        opacity: 1;
    }
    a {
        color: white;
    }
</style>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Home</a>
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
<div class="main">
    <div class="cards" style="margin-top:2%">
        <form action="/user/store" method="post" style="border:1px solid gray;width: 500px;" enctype="multipart/form-data">
            @csrf
            <div class="container" style="height: 990px; padding:10px; width: 480px;">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr />
                <label for="name"><b>full name</b></label>
                <input
                    type="text"
                    placeholder="enter your name"
                    name="fullname"
                    id="fullname"
                />
                @error('fullname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="email"><b>Email</b></label>
                <input
                    type="email"
                    placeholder="Enter Email"
                    name="email"
                    id="email"
                />
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="password"><b>Password</b></label>
                <input
                    type="password"
                    placeholder="Enter Password"
                    name="password"
                    id="password"
                />
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input
                    type="password"
                    placeholder="Repeat Password"
                    name="psw-repeat"
                    id="psw-repeat"
                />
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="phone"><b>phone</b></label>
                <input
                    type="text"
                    placeholder="enter your mobile"
                    name="phone"
                    id="phone"
                />
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="Address"><b>Address</b></label>
                <input
                    type="text"
                    placeholder="enter your Address"
                    name="Address"
                    id="Address"
                />
                @error('Address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="NID"><b>NID</b></label>
                <input
                    type="text"
                    placeholder="enter your NID"
                    name="NID"
                    id="NID"
                />
                @error('NID')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="image"><b>image</b></label>
                <input type="file" class="form-control-file"  name="image">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr />
                <button type="submit" class="registerbtn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
