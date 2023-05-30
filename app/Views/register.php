<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <?= $this->include('layouts/head') ?>
    <style>
        .image-container {
            position: relative;
            width: 100%;
            height: 100%;
            margin-left: -15px;
            margin-right: -15px;
            margin-bottom: -15px;
        }
       
        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 50%;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 0 10px 10px 0;
        }

        .form-container {
            position: relative;
            z-index: 1;
            padding: 15px;
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="form-container">
                        <div class="card-header d-flex justify-content-center">
                            <img src=<?= base_url('logo.png') ?> style="width:150px">
                        </div>
                        <div class="card-body">
                            <form action="/register" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="image-container">
                        <img src="/assets/admin/img/registimg3.jpeg" alt="login form" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('layouts/scripts') ?>
</body>

</html>
