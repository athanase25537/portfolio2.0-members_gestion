<?php
$title = 'Login';
ob_start(); 
?>

<?php if(!empty($_GET)): ?>
    <?php if($_GET['action'] == 'login' && !empty($_GET['status'])): ?>


        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Username or password incorrect :(
        </div>
        </div>

    <?php endif ?>
<?php endif ?>

<div class="container d-flex justify-content-center" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%)">
    <div class="row">
        <div class="card w-100 border-0 bg-light text-dark" style="width: 18rem;box-shadow:0 0 .3rem .04rem #000">
            <div class="card-body">
                <form action="index.php?action=login" class="form-group" method="post">
                    <h5 class="card-title text-center">Welcome</h5>
                    <h6 class="card-subtitle mb-5 text-muted text-center">Login Here</h6>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary float-end">S'identifier</button>
                    <a href="index.php?action=register" class="btn btn-light float-left">Don't have an account</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>