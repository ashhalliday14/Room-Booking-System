<!--<!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    navigation bar-->
    <!--<div id="navigation">
        <a class="navtext" href="homepage.php">Home</a>
        <a class="navtext" href="bookRoom.php">Book a Room</a>
        <a class="navtext" href="logout.php">Logout</a>
    </div>

</html>-->
<link rel="stylesheet" href="css/style.css">

<!--search bar-->
<div class="col-12 col-md-10 d-none d-xl-block">
<form action="search_rooms.php" class="search-bar">
	<input type="search" name="search" pattern=".*\S.*" required>
	<button class="search-btn" type="submit">
		<span>Search</span>
	</button>
</form>

<!--navigation bar-->
    <nav class="site-navigation position-relative text-right" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="homepage.php" class="nav-link">Home</a></li>
            <li><a href="book_room.php" class="nav-link">Book a Room</a></li>
            <li><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav>
</div>
