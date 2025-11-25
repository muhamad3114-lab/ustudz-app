<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <div class="card shadow rounded-4">
                    <div class="card-header text-center fw-bold">
                        Login
                    </div>

                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button class="btn btn-primary w-100 rounded-3">
                                Login
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
