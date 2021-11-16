<!-- <!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    navigation bar-->
    <!--<div id="navigation">
        <a class="navtext" href="homepage.php">Home</a>
        <a class="navtext" href="resetPasswords.php">Reset Passwords</a>
        <a class="navtext" href=".php">Update Layouts</a>
        <a class="navtext" href="logout.php">Logout</a>
    </div>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

</html> -->

<!--search bar-->
<div class="col-12 col-md-10 d-none d-xl-block">
<form action="search_rooms.php" class="search-bar">
	<input type="search" name="search" pattern=".*\S.*" required>
	<button class="search-btn" type="submit">
		<span>Search</span>
	</button>
</form>

<!--navigation bar-->
<div class="col-12 col-md-10 d-none d-xl-block">
    <nav class="site-navigation position-relative text-right" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="homepage.php" class="nav-link">Home</a></li>
            <li><a href="reset_passwords.php" class="nav-link">Reset Passwords</a></li>
            <li><a href="" class="nav-link">Update Layouts</a></li>
            <li><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav>
</div>
