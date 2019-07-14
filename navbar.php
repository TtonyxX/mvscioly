<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light yellow animated fadeInDown" style="z-index: 100; position: relative; text-color: black;">

    <a class="navbar-brand" style="font-size: 3vw; font-weight: bold;" href="index.php">
        <img src="images/scioly.png" height="60" class="d-inline-block align-center mr-2" alt="mdb logo">Mountain View HS SciOly</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="selection">
            <li class="nav-item active" id="home">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item" id="gallery">
                <a class="nav-link" href="gallery.php">Gallery
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item" id="mentors">
                <a class="nav-link" href="mentors.php">Mentors</a>
            </li>
            <li class="nav-item" id="alumni">
                <a class="nav-link" href="alumni.php">Alumni</a>
            </li>
            <li class="nav-item" id="achievements">
                <a class="nav-link" href="achievements.php">Achievements</a>
            </li>
            <li class="nav-item" id="contact">
                <a class="nav-link" href="contact.php" id="contact-link">Contact</a>
            </li>
            <?php echo $accessedInfo ?>
            <li class="nav-item avatar ml-2" id="avatar-container" style="display: none;">
                <a class="nav-link p-0" onclick="signOut();">
                    <img class="rounded-circle z-depth-0" id="avatar" alt="avatar image" height="35">
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto" id="google-btn">
            <li class="nav-item ml-2">
                <div class="g-signin2 animated fadeInDown" data-onsuccess="onSignIn"></div>
            </li>
        </ul>
    </div>
</nav>