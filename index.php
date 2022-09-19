<!DOCTYPE html>
<html>
<title>My Portfolio</title>
    <head>
 	<link rel="shortcut icon" href="https://www.w3schools.com/w3images/p5.jpg" type="image/x-icon">
	</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif;
    }

    body,
    html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('https://www.w3schools.com/w3images/p5.jpg');
        min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("https://www.w3schools.com/w3images/parallax2.jpg");
        min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("https://www.w3schools.com/w3images/parallax3.jpg");
        min-height: 400px;
    }

    .w3-wide {
        letter-spacing: 10px;
    }

    .w3-hover-opacity {
        cursor: pointer;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {

        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
    }
</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
                <i class="fa fa-search"></i>
            </a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
            <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
            <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
            <a href="#" class="w3-bar-item w3-button">SEARCH</a>
        </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span
                    class="w3-hide-small">WEBSITE</span> LOGO</span>
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center">ABOUT ME</h3>
        <p class="w3-center"><em>My Life</em></p>
        <p>I am sinior ...</p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <p><b><i class="fa fa-user w3-margin-right"></i>My Name is Kubanych</b></p><br>
                <img src="https://www.w3schools.com/w3images/parallax1.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me"
                    width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p>Welcome to my website.</p>
            </div>
     
    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">17</span><br>
            Ago
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">3</span><br>
            Courses
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">19.11</span><br>
            BD
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">0+</span><br>
            Clients
        </div>
    </div>

    <!-- Second Parallax Image with Portfolio Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64" id="portfolio">
        <h3 class="w3-center">MY WORK</h3>
        <br>

        <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="The mist over the mountains">
            </div>

            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Coffee beans">
            </div>

            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Bear closeup">
            </div>

            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Quiet ocean">
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-section">
            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
            </div>

            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="My beloved typewriter">
            </div>

            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Empty ghost train">
            </div>

            <div class="w3-col m3">
                <img src="https://www.w3schools.com/w3images/parallax3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity"
                    alt="Empty ghost train">
            </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i
                class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-opacity-min">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">WHERE I STUDY</h3>
        <p class="w3-center"><em>Ala-Too University</em></p>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
                <img src="123.png" class="w3-image w3-round" style="width:100%">
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Bishkek, KR<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +996 709 62 11 40<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email:
                    kubanych.zh.u.04@gmail.com<br>
                </div>
                <p>You can come and to drink coffee <i class="fa fa-coffee"></i></p>
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <a href="https://instagram.com/kuba_dzh?utm_medium=copy_link"><i class="fa fa-paper-plane"></i> SEND MESSAGE</a>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook w3-hover-opacity"></i></a>
            <a href="https://instagram.com/kuba_dzh?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://www.whatsapp.com/" target="_blank"><i class="fa fa-whatsapp w3-hover-opacity"></i></a>
    <a class="w3-button w3-round-xxlarge w3-small w3-light-grey w3-margin-bottom" href="https://www.w3schools.com/spaces" target="_blank">Start now</a>
    <!-- Footer end. -->
    </footer>

    <script>
        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }

        // Change style of navbar on scroll
        window.onscroll = function () { myFunction() };
        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
            } else {
                navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
            }
        }  x.className = x.className.replace(" w3-show", "");
    }
}
</script>
