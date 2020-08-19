<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.php'); ?>
        <title>3DPPE - Map</title>
        <meta name="description" content="Get the latest coronavirus data throughout the word with an interactive map. See the latest data in each province or county."/>

        <meta property="og:title" content="3DPPE - Map">
        <meta property="og:url" content="https://3dppe.net/map">
        <meta property="og:description" content="Get the latest coronavirus data throughout the world through an interactive map. See the latest data in each province or county.">
    </head>
    <body>
        <?php include('includes/navbar.php'); ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="data about">
                        <h1>Global Coronavirus Map</h1>
                        <hr> 
                        <iframe width="100%" style="height: 75vh;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.bing.com/covid"></iframe> 
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <?php include('includes/footer.php'); ?>
    </body>
</html>