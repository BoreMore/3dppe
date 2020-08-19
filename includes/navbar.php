<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="home">
        <img alt="3DPPE logo" src="media/transparentlogo.png" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : '' ?>">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'recaps.php') ? 'active' : '' ?>">
                <a class="nav-link" href="recaps">Recaps</a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'map.php') ? 'active' : '' ?>">
                <a class="nav-link" href="map">Map</a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'sponsors.php') ? 'active' : '' ?>">
                <a class="nav-link" href="sponsors">Sponsors</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <a target="_blank" href="https://www.gofundme.com/f/printing-masks-for-healthcare-professionals?utm_source=customer&utm_medium=copy_link&utm_campaign=p_cf+share-flow-1"><button style="font-weight:900; color:black;" class="btn btn-warning">Donate</button></a>
        </ul>
    </div> 
</nav>