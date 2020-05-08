<?php include "header.php" ?>
<div class="form">
    <form action="../register.php" method="post" enctype="multipart/form-data">
        <h2>Register for Free</h2>
        <div class="display_img_div">
            <img src="../assets/images/profile-icon-9.png" class="display_img">
        </div>
        <input class="file_input" type="file" name="profile_pic" onchange="display_img(this);">
        <label>Name</label>
        <input type="text" placeholder="(Required)" name="name" value="<?php if(isset($_SESSION['user']['name'])){echo $_SESSION['user']['name'];} ?>" required>
        <label>username</label>
        <input type="text" placeholder="(Required)" name="username" value="<?php if(isset($_SESSION['user']['username'])){echo $_SESSION['user']['username'];} ?>" required>
        <label>Email</label>
        <input type="email" placeholder="(Required)" name="email" value="<?php if(isset($_SESSION['user']['email'])){echo $_SESSION['user']['email'];} ?>" required>
        <label>Password</label>
        <input type="password" placeholder="(Required)" name="password" value="" required>
        <label>Contact</label>
        <input type="tel" placeholder="(Optional)" name="contact" value="<?php if(isset($_SESSION['user']['contact'])){echo $_SESSION['user']['contact'];} ?>">
        <label>Address</label>
        <input class="address_box" type="text" placeholder="(Optional)" name="address" value="<?php if(isset($_SESSION['user']['address'])){echo $_SESSION['user']['address'];} ?>">
        <button type="submit" name="submit">Submit</button>
    </form>
</div>
<?php include "footer.php" ?>