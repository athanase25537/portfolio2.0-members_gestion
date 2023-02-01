<?php
$title = 'Login';
ob_start(); 
?>

<?php if(!empty($_GET)): ?>
    <?php if($_GET['action'] == 'login' && $_GET['status'] == 'failed'): ?>
        <div class="alert alert-danger">
            Username or password incorrect :(
        </div>
    <?php endif ?>
<?php endif ?>

<form action="index.php?action=login" method="post" class="form-control">
    <input type="text" class="form-control" name="username" placeholder="Your Username" required>
    <input type="password" class="form-control" name="password" required>
    <button type="submit" class="btn btn-primary">S'identifier</button>
    <a href="index.php?action=register">Don't have an account</a>
</form>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>