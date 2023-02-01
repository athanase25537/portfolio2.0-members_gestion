<?php
$title = 'Login';
ob_start();
?>
<form action="index.php?action=login" method="post" class="form-control">
    <input type="text" class="form-control" name="username" placeholder="Your Username">
    <input type="password" class="form-control" name="password">
    <button type="submit" class="btn btn-primary">S'identifier</button>
</form>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>