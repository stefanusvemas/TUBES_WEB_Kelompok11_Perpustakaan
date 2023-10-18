<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #87aba1">
    <header>
        <nav class="navbar" style="background-color: #87aba1">
            <div class="container">
                <a class="navbar-brand text-light" href="{{url('')}}"><strong>Perpus</strong></a>
            </div>
        </nav>
    </header>

    <main>
        <div class=" container">
            <div class="row justify-content-center">
                <img src="{{'images/book _of_ideas.png'}}" alt="" style="width: 230px; padding-left: 50px" />
            </div>
            <div class="row justify-content-center mt-1">
                <div class="col-10 col-md-5">
                    <div class="card">
                        <div class="card-body" style="padding: 20px 30px">
                            <div class="card-title text-center">
                                <h3>LOGIN</h3>
                            </div>
                            <form action="#" id="loginForm">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control mb-2 py-2" placeholder="Masukkan username" required />

                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control mb-2 py-2" placeholder="Masukkan password" required />

                                <p for="register" class="text-center">Belum punya akun? <a href="">daftar</a></p>

                                <button type="submit" class="btn w-100" style="background-color: #dba058; color: #fff">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/098cbe1db3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>