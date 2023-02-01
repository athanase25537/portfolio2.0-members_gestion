<?php
$title = 'Inscription';
ob_start();
?>
<?php if(!empty($_POST)): ?>
    <div class="alert alert-danger">
        <?= $_POST['username'] ?> deja utilise
    </div>
    <?php
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $username = $_POST['username'];
    $photo = $_POST['photo'];
    ?>
<?php endif ?>
<form action="index.php?action=register" method="post" class="form-group">
    <input type="text" class="form-control" placeholder="Your Name" name="name" value="<?= isset($name) ? $name : '' ?>" required>
    <input type="text" class="form-control" placeholder="Your Firstname" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" required>
    <input type="date" class="form-control" placeholder="Your Birthday" name="birth" value="<?= isset($birth) ? $birth : '' ?>" required>
    <input type="email" class="form-control" placeholder="exemple@gmail.com" name="email" value="<?= isset($email) ? $email : '' ?>" required>
    <input type="tel" class="form-control" placeholder="Your Phone Number" name="tel" value="<?= isset($tel) ? $tel : '' ?>" required>
    <input type="text" class="form-control" placeholder="Your Username" name="username" value="<?= isset($username) ? $username : '' ?>" required>
    <input type="password" class="form-control" placeholder="Your Password" name="password" required>
    <input type="file" class="form-control" placeholder="Put here your photo" name="photo" accept=".jpg,.jpeg,.png,.gif" value="<?= isset($photo) ? $photo : '' ?>" required>
    <select name="sexe" id="sexe" class="form-control">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <button class="btn btn-primary" type="submit">Valider</button>
    <a href="index.php?action=login">Already have an account</a>

</form>
<?php
$content = ob_get_clean();
require_once 'layout.php'
?>