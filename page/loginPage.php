<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrit
    y="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <nav class="navbar navbar-light fixed-top">
        <div class="container">
            <!-- Nama : nama panggilan kalian -->
            <a class="navbar-brand fw-bold" href="/UTS_PW-1"><img src="./asset/logo.png" alt="logo" style="width:35px"> E-Library</a>
    </nav>
        <div class="bg">
            <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                <div class="card text-black bg-none ma-5 shadow" style="min-width: 25rem;">
                    <div class="card-header text-center fw-bold" style="font-size: 30px;">Login</div>
                        <div class="card-body">
                            <form action="../process/loginProcess.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="formlabel">Email</label>
                                    <input class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="formlabel">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn loginBtn" name="login">Login</button>
                                </div>
                            </form>
                            <p class="mt-2 mb-0">Don’t have an account yet? <a
                                href="./registerPage.php" class="textprimary">Click here!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>