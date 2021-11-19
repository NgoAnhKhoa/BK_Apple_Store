<?php
    include 'core/auth.php';
    if(checkLogin()) {
        include 'include/header.php';
    }
    else {
        include 'include/header_notlogin.php';
    }
?>

<div class="container">
    <h3>404 Not Found</h3>
</div>

<?php
    include 'include/footer.php';
?>