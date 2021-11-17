<!--<!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    navigation bar-->
    <!--<div id="navigation">
        <a class="navtext" href="homepage.php">Home</a>
        <a class="navtext" href="updateRoom.php">Update Room Information</a>
        <a class="navtext" href=".php">Update Layouts</a>
        <a class="navtext" href="logout.php">Logout</a>
    </div>

</html>-->

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
            <li><a href="update_room_information.php" class="nav-link">Update Room Information</a></li>
            <li><a href="update_layouts.php" class="nav-link">Update Layouts</a></li>
            <li><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
    </nav>
</div>

