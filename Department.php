<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <div class="topDiv">
        <div class="imageLeft">
            <img src="round.png" />
        </div>
        <div id="asideCont">
            <h2>BVC Engineering College, Odalarevu</h2>
            <h3>Affiliated To  JNTUK, Kakinada</h3> Accredited By NBA New Delhi and NAAC With 'A' Grade<br> Approved By AICTE, New Delhi<br> Established in 1997<br><br>
            <?php
                echo "Today's Date : ".date("Y/m/d")." And Time ".date("h:i")."<br><br>";
            ?>
        </div>
        <div class="imageRight">
            <img src="group.png" />
        </div>
    </div>
    <div class="clear"></div>
    <ul class="menu">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="About.php">About Us</a></li>
        <li><a href="vision.php">Vision &amp; Mission</a></li>
        <li><a href="asd.php">Management</a>

            <ul class="submenu">
                <li><a href="founderchairman.php">Founder-Chairman</a></li>
                <li><a href="secretary.php">Secretary</a></li>
                <li><a href="chairman.php">Chairman</a></li>
                <li><a href="vicechairman.php">Vice-Chairman</a></li>
                                            <li><a href="dean.php">Dean</a></li>

            </ul>
        </li>
        <li><a href="principal.php">Principal</a></li>
        <li><a href="faculty.php">Faculty</a>
            <ul class="submenu1">
                <li><a href="#">CSE</a></li>
                <li><a href="#">CE</a></li>
                <li><a href="#">ME</a></li>
                <li><a href="#">EEE</a></li>
                <li><a href="#">ECE</a></li>
            </ul>
        </li>
        <li><a href="index.php">Students</a></li>
        <li><a href="#"> Departments</a>
            <ul class="submenu1">
                <li><a href="Department.php">CSE</a></li>
                <li><a href="#">CE</a></li>
                <li><a href="#">ME</a></li>
                <li><a href="#">EEE</a></li>
                <li><a href="#">ECE</a></li>
            </ul>
        </li>
        <li><a href="#">Accredition</a>
            <ul class="submenu1">
                <li><a href="naac.php">NAAC</a></li>
                <li><a href="nba.php">NBA</a></li>
                <li><a href="pio.php">PIO</a></li>
            </ul>
        </li>
        <li><a href="#">Help</a></li>

    </ul>
    <div class="bodyDiv">
        <div class="forAside" style="margin-top:-7px;">
            <aside id="buttonsAside">
                <form class="navBar">
                    <nav id="navigationBar">
                        <ul class="sideBar">
                            <li><a href="#">Academics</a></li>
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">BVC News</a></li>
                            <li><a href="#">Forthcoming Event</a></li>
                            <li><a href="#">E-mail to students</a></li>
                            <li><a href="#">SMS to Parents/Students</a></li>
                            <li><a href="#">Recruitment</a></li>
                            <li><a href="#">Professional Body</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Department Library</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Games And Sports</a></li>
                            <li><a href="#">Placement</a></li>
                            <li><a href="#">Feedback to College</a></li>
                            <li><a href="#">Alumini</a></li>
                            <li><a href="#">Notices &amp; Circulars</a></li>
                        </ul>
                    </nav>
                </form>
            </aside>
        </div>

        <center>
            <div class="container">


                <h1>Department Profile</h1>

                <h1>Computer Science and Engineering</h1>

                <br>
                <p>
                    The Department of Computer Science and Engineering was established in 1998 with an intake of 40 and subsequently, the intake was enhanced to 120 from the academic year 2007-2008. The department is headed by Dr Gunamani Jena with teaching experience of 16 years and total experience of 28 years. There are 33 faculty members in the composition of 02 Professor, 08 Associate Professor and 23 Assistant Professors. Twenty five members have M. Tech qualification. Two faculty members are pursing Ph.D</p>

                <p> The Department is offering M. Tech in CSE. The departmental faculty are actively involving in research activities. As a result of that there are 82 publications in various national and international conferences and journals. The department has excellent placement record nearly 87 out of 112 students are placed in various MNCs in the academic year 2010-11. The department has conducted workshop on MATLAB, workshop on LaTex, National conference SCTA (Soft Computing Techniques and Applications) and student symposium Resonance 2K15 during the academic year 2015-16. 14 batches of students have completed their B. Tech degree and most of them are placed in top MNCs. It has strong Alumni which meets annually.<br><br></p>

                <img src="CSEdepart.png" border=5px width=75%>








            </div>
        </center>
    </div>
    <footer id="footer">
        <h4 id="left">Copyright &copy; - <?php echo "20".date('y');?></h4>
        <h4 id="right">BVCEC</h4>
    </footer>
</body>

</html>
