<?php include "header.php" ?>
<div class="login_div form">
	<h2>Login</h2>
	<form action="../login.php" method="post" enctype="multipart/form-data">
        <label>USERNAME</label>
        <input type="text" placeholder="(Required)" name="username" required>
        <label>Password</label>
        <input type="password" placeholder="(Required)" name="password" required>
        <button type="submit" name="submit">Submit</button>
	</form>
</div>

<?php include "footer.php" ?>