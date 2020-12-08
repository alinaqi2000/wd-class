<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/my_styles.css">
</head>

<body>

    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <h4 class="card-header shadow text-center">Register</h4>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Image Url</label>
                                <input type="text" id="image_url" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="c_password">Confirm Password</label>
                                <input type="password" id="c_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button onclick="submitRegister()" class="btn btn-block btn-info">
                                    Signup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="http://localhost/we_chat/assets/js/register.js"></script>
</body>

</html>