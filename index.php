<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.php'); ?>
        <title>3DPPE</title>
        <meta name="description" content="3DPPE is a not-for-profit group that aims to produce 3D printed face shields to protect medical professionals in the front lines of the coronavirus pandemic."/>

        <meta property="og:title" content="3DPPE">
        <meta property="og:url" content="https://3dppe.net/">
        <meta property="og:description" content="3DPPE is a not-for-profit group that aims to produce 3D printed face shields to protect medical professionals in the front lines of the coronavirus pandemic.">
    </head>
    <body>
        <?php include('includes/navbar.php'); ?>
        
        <div class="headersplash" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('media/mainsplash.png');">
            <div class="herotext">
                <div class="quote">
                    <h1>Producing Face Shields that Save Lives</h1>
                    <br><br>
                    <h2><b id="totaldonated">0</b> Face Shields Donated</h2>
                    <script src="https://cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
                    <script>
                        function animateValue(id, start, end, duration) {
                            var obj = document.getElementById(id);
                            var range = end - start;

                            var minTimer = 50;

                            var stepTime = Math.abs(Math.floor(duration / range));
                            
                            stepTime = Math.max(stepTime, minTimer);
                            
                            var startTime = new Date().getTime();
                            var endTime = startTime + duration;
                            var timer;
                        
                            function run() {
                                var now = new Date().getTime();
                                var remaining = Math.max((endTime - now) / duration, 0);
                                var value = Math.round(end - (remaining * range));
                                obj.innerHTML = value;
                                if (value == end) {
                                    clearInterval(timer);
                                }
                            }
                            
                            timer = setInterval(run, stepTime);
                            run();
                        }

                        $.get('https://docs.google.com/spreadsheets/d/e/2PACX-1vSoRsHllbjbLLgo_ZSwS0yePbLM6YkLx1B2zukEugXiFPGv5uMD7OY6fqT1oRqm83Ud0hkAVO2q2Yko/pubhtml?gid=1183252513&single=true', function(response) {  
                            animateValue("totaldonated", 0, parseInt($(response).find("td:contains('Total Delivered')").next().text().replace(/,/g, '')), 2000);
                        });
                        setInterval(function() {
                            $.get('https://docs.google.com/spreadsheets/d/e/2PACX-1vSoRsHllbjbLLgo_ZSwS0yePbLM6YkLx1B2zukEugXiFPGv5uMD7OY6fqT1oRqm83Ud0hkAVO2q2Yko/pubhtml?gid=1183252513&single=true', function(response) {
                                animateValue("totaldonated", 0, parseInt($(response).find("td:contains('Total Delivered')").next().text().replace(/,/g, '')), 2000);
                            });
                        }, 300000);
                
                    </script>
                    <a target="_blank" href="https://www.gofundme.com/f/printing-masks-for-healthcare-professionals?utm_source=customer&utm_medium=copy_link&utm_campaign=p_cf+share-flow-1"><button style="font-weight: 900; font-size: 20px; color: black" class="btn btn-warning btn-large">Support our cause</button></a>
                </div>
            </div>
        </div>
        <div class="generalinfo container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Problem</h2>
                                <p>Medical professionals are risking their lives to save people during the coronavirus pandemic. Unfortunately, due to a shortage of N95 masks, many of them are forced to reuse their masks for weeks or until visibly soiled, which puts them at a greater risk of contracting coronavirus.</p>
                            </div>
                            <div class="col-md-4">
                                <h2>How We Can Help</h2>
                                <p>When used with 3D printed face shields, the N95 masks become safer to use for longer periods of time. 3DPPE's goal is to 3D print face masks and provide resources to others who want to help print.</p>
                            </div>
                            <div class="col-md-4">
                                <h2>How You Can Help</h2>
                                <p>Through donating to our GoFundMe, you can help us buy 3D printer filament (plastic) and 3D printers so that we can print more masks. If you have a 3D printer, you can also help us print the masks using our publically available resources found <a href="3dppe">here</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="generalinfo container-fluid galleryDiv" style="background: black; padding-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Gallery</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="gallery" class="carousel">
                                    <div>
                                        <img alt="Emory University Hospital picture" src="media/gallery/image0.jpg">
                                        <p>Emory University Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="Atlanta North Dermatology picture" src="media/gallery/image1.jpg">
                                        <p>Atlanta North Dermatology</p>
                                    </div>
                                    <div>
                                        <img alt="East Cobb Dentists picture" src="media/gallery/image2.jpg">
                                        <p>East Cobb Dentists</p>
                                    </div>
                                    <div>
                                        <img alt="Emory Johns Creek Hospital picture" src="media/gallery/image3.jpg">
                                        <p>Emory Johns Creek Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="Franklyn Dental picture" src="media/gallery/image4.jpg">
                                        <p>Franklyn Dental</p>
                                    </div>
                                    <div>
                                        <img alt="Franklyn Dental picture" src="media/gallery/image5.jpg">
                                        <p>Franklyn Dental</p>
                                    </div>
                                    <div>
                                        <img alt="University of Miami Hospital picture" src="media/gallery/image6.jpg">
                                        <p>University of Miami Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="University of Miami Hospital picture" src="media/gallery/image7.jpg">
                                        <p>University of Miami Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="University of Miami Hospital picture" src="media/gallery/image8.jpg">
                                        <p>University of Miami Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="Fundacion Stefano picture" src="media/gallery/image9.jpg">
                                        <p>Fundacion Stefano</p>
                                    </div>
                                    <div>
                                        <img alt="Fundacion Stefano picture" src="media/gallery/image10.jpg">
                                        <p>Fundacion Stefano</p>
                                    </div>
                                    <div>
                                        <img alt="Latin America Ministries Corporation picture" src="media/gallery/image11.jpg">
                                        <p>Latin America Ministries Corporation</p>
                                    </div>
                                    <div>
                                        <img alt="Northside Hospital picture" src="media/gallery/image12.jpg">
                                        <p>Northside Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="Northside Hospital picture" src="media/gallery/image13.jpg">
                                        <p>Northside Hospital</p>
                                    </div>
                                    <div>
                                        <img alt="Northside Hospital picture" src="media/gallery/image14.jpg">
                                        <p>Northside Hospital</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('#gallery').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true,
                        arrows: true,
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: false,
                                }
                            },
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: false,
                                    arrows: false,
                                }
                            }
                        ]
                    });
                });
            </script>
        </div>
        <div class="col-md-12 contactform">
            <div class="printerparallax" style="background-image: url('media/parallaxprint2.jpg');">
                <div class="printerparallaxoverlay">
                    <div class="container">
                        <div class="contactwrapper">
                            <form id="requestform" class="contactformform" method="POST" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfLrv2rvEpKlExCg4PuC6OBc4iFkhyflDoRmflOsgwDJ6oxLQ/formResponse">
                                <h3>Request Face Shields</h3>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Hospital / Company Name <span class="requiredField">*</span></label>
                                        <input name="entry.532378825" type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Representative Name <span class="requiredField">*</span></label>
                                        <input name="entry.760657742" type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>Preferred Email <span class="requiredField">*</span></label>
                                        <input name="entry.155507331" type="text" class="form-control">
                                        <div class="d-md-none">
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone Number <span class="requiredField">*</span></label>
                                        <input name="entry.1946211136" type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <label>Hospital / Company Address <span class="requiredField">*</span></label>
                                        <input name="entry.231001103" type="text" class="form-control">
                                        <div class="d-md-none">
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Preferred Date <span class="requiredField">*</span></label>
                                        <input class="form-control" type="date" id="dateneeded">
                                    </div>
                                    <div class="d-none">
                                        <input id="inputyear" type="hidden" name="entry.1957133383_year" value="">
                                        <input id="inputmonth" type="hidden" name="entry.1957133383_month" value="">
                                        <input id="inputday" type="hidden" name="entry.1957133383_day" value="">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Face Shield Quantity Required <span class="requiredField">*</span></label>
                                        <input id="quantityshields" name="entry.1382678066" type="number" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label>Mask Relief Band Quantity Required (Optional)</label>
                                        <input id="quantitybands" name="entry.697208982" type="number" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" style="background-color: black; color: #d7dadc;" class="btn btn-large btn-block"><b>Submit</b></button>
                                <br>
                                <div class="successmsg"></div>
                                <div class="errormsg"></div>
                            </form>
                            <script>
                                $("#dateneeded").on("change", function() {
                                    var date = $("#dateneeded").val().split("-");
                                    var month = date[1];
                                    var day = date[2];
                                    var year = date[0];
                                    $("#inputmonth").val(month);
                                    $("#inputday").val(day);
                                    $("#inputyear").val(year);
                                });
                                $("#requestform").submit(function(e) {
                                    e.preventDefault();
                                    
                                    if (ValidateForm() && !isNaN($("#quantityshields").val())) {
                                        var form = $(this);
                                        var url = form.attr('action');

                                        $.ajax({
                                            type: "POST",
                                            url: url,
                                            data: form.serialize()
                                        });

                                        $(".errormsg").text("");
                                        $(".successmsg").text("Your request has been successfully recorded.");
                                        $("#requestform")[0].reset();
                                    } else {
                                        $(".successmsg").text("");
                                        $(".errormsg").text("Please fill in all fields.");
                                    }
                                });
                                function ValidateForm() {
                                    var formValid = true;
                                    $('#requestform input:not("#quantitybands")').each(function() {
                                        if ($(this).val() === '') {
                                            formValid = false;
                                        }
                                    });

                                    return formValid;
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>