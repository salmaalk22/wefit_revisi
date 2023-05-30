<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <?= $this->include('layouts/head') ?>
</head>

<body>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">

          <div class="col-md-6 col-lg-6 d-none d-md-block">
              <img src="/assets/admin/img/loginimg.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>

            <div class="col-lg-6">
              <div class="card-body p-4 p-lg-5">

                <div class="text-center">
                  <img src="/assets/admin/img/logo2.png"
                    style="width: 185px;" alt="logo">
                </div>

               
                <?php if(session()->getFlashData('success')) { ?>
                    <div class="alert alert-success">
                        <?= session()->get('success') ?>
                    </div>
                <?php } ?>

                <?php if(session()->getFlashdata('errors')) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('errors') ?>
                    </div>
                <?php } ?>

                        <form action="/login" method="post">

                        <form> <p>Please login to your account</p>

                            <div class="class="form-outline mb-4>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="password"> Password </label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                           <!-- <?= isset($error) ? '<div class="text-danger my-4">' . $error . '</div>' : '' ?> -->
                            <div class="text-center pt-1 mb-5 pb-1">
                            <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <form action="/layouts/register" method="post">
                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">Don't have an account?</p>
                                <a href="register" class="d-flex justify-content-center btn btn-link">Register account</a>
                            </div>
                            </form>

                        </form>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?= $this->include('layouts/scripts') ?>
</body>

</html>