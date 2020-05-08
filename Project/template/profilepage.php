<?php include 'header.php';
// session_start();
// ../<?= $_SESSION['user']['profile_pic'] ../<?= $_SESSION['user']['profile_pic'] 
?>
<div class="profileInfoPage">
    <div class="banner">
    </div>
    <div class="profile_pic">
        <img src="../<?= $_SESSION['user']['profile_pic'] ?>" alt="">
    </div>
    <div class="profileInfo">
        <div class="user_info">
            <div class="info_label">
                <h3>Name:</h3>
                <a href="">edit</a>
            </div>
            <p><?= $_SESSION['user']['name'] ?></p>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>