<!DOCTYPE html>

<html>
    <head>
        <title>OP4Z Gaming | Gaming Portfolio</title>
        <meta name="author" content="Beau Goldberg">
        <meta name="description" content="Homepage for OP4Z Gaming Website">
        <meta name="keywords" content="Gaming">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/homepage.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body>
        <?php 
            session_start();
            if (!isset($_SESSION['LOGGEDIN'])) { $_SESSION['LOGGEDIN'] = false; }
        ?>
        <header>
            <div class="menu-item"><a href="homepage.php">Home</a></div>
            <div class="menu-item"><a href="#">Games</a></div>
            <div class="menu-item"><a href="#">About</a></div>
            <?php 
                if ($_SESSION['LOGGEDIN']) {
                    echo("<div class='display-name'>"); echo($_SESSION['Username']); echo("</div>");
                    echo("<div class='dropdown'><div class='drop-item'><i class='fa fa-bars'></i></div><div class='dropdown-content'><a href='account.php'>Account</a><a href='logout.php'>Log Out</a></div></div>");
                }
                else {
                    echo("<div class='menu-item'><a href='login-form.php'>Sign In</a></div><i style='color: darkgray;'>|</i>");
                    echo("<div class='menu-item'><a href='registration-form.php'>Register</a></div>");
                }
            ?>
            <div class="logo">
                <img src="./images/SkullLogo-[Converted].png" height="50px" width="50px">
            </div>
            <div class="site-name">
                OP4Z Gaming
            </div>
            <div class="site-name" style="color:darkgrey;">
                By Unfound5oldier
            </div>
            <hr class="hr-top"/>
        </header>
        <main class="main-container">
            <div class="main-intro">
                <img class="main-image" src="./images/SkullLogo-[Converted].png" height="380px" width="380px">
                <h1>OP4Z GAMING</h1>
                <h5>est. 2010</h5>
            </div>
            <p><span>What is Op4z Gaming?</span></p>
            <p>
                OP4Z is as a group that I started early in my gaming career to begin competing competitively. I created this group initially in <i>'Call of Duty: Black Ops 1'</i>
                back in 2010. I would use <i>OP4Z</i> in my clan tags every COD and recruit people to join my clan. OP4Z really flourished with the introduction of clan wars
                into <i>'Call of Duty: Ghosts'</i> in 2013. I lead recruitment for my clan and built up a roster of nearly 30 highly-skilled players. We would participate in clan 
                tournaments several times a week and won the majority of the tournaments we entered. We climbed rather high in the clan ranks but once the next game was released
                the clan wars ended and the group moved on. I continue to represent OP4Z in every game that I play to keep its spirit alive. Fortunately, I have been able to rebrand
                OP4Z into OP4Z Gaming with my recent endeavors in the world of gaming and creation. I aspire to turn OP4Z Gaming into a space for gamers to come together
                and experience an accepting, competitive and exciting  gaming environment. OP4Z Gaming will also act as a platform for me to share the creative content that I create
                in the future. Thank you for taking the time to learn about my passions and I hope you enjoy!
            </p>
            <br/>
            <p><span>How was the logo created?</span></p>
            <p>
                The OP4Z logo has had many iterations since the groups creation. Since the group was created in <i>'Call of Duty: Black Ops 1'</i>, its logo was heavily influenced
                by the set of icons available in the games emblem editor. In nearly every iteration of the Call of Duty games there has been a similar skull icon in the emblem editor that 
                conveyed a sense of fear in a unique way. I thought this was very intruiging and built my OP4Z emblems every year with the skull as the focal point. The current logo isn't the
                skull that was used to create the orignal logo but it conveys the same feeling that attracted me in the first place. The overall idea with the logo is to envoke
                fear in the opponents while using the skulls simplicity to show class. I've had a lot of fun over the years working with the logo for this group and am happy with
                where it has come.
            </p>
            <br/>
            <p><span>What does OP4Z Gaming represent?</span></p>
            <p>
                OP4Z Gaming has two main parts: Gaming and Creation. In terms of gaming, OP4Z Gaming represents inclusion, competitiveness and passion. I think a competitive environment
                in gaming can be very beneficial for people to be part of but many people avoid competitive gaming due to the toxicity associated with it. I want to encourage a 
                competitve and supportive environment to focus on individual growth inside and outside of the game. Similarly, I want the group to be tied together with a passion 
                for gaming. The impact games can have is endless, and appreciating the love and dedication that goes into creating the games we love can create a deep bond between 
                individuals. In terms of creation, OP4Z Gaming represents innovation, thought and spirit of work. I push myself to explore abstract topics  to try and
                create new experiences for my audience that will provoke thought and emotion. I want my works to have an impact on others.
            </p>
        </main>
        <div class="footer">
            <hr class="hr-bottom"/>
            <div class="menu-item">
                <a href="contact.php">Contact Us</a>
            </div>
            <div class="footer-item"><a href="https://github.com/Unity-References" target="_blank" title="My Unity Reference Repository"><i class="fab fa-unity"></i></a></div>
            <div class="footer-item"><a href="https://github.com/beaugoldberg" target="_blank" title="My Github"><i class="fab fa-github"></i></a></div>
            <div class="footer-item"><a href="https://discord.com/invite/y5HYWXP" target="_blank" title="OP4Z Gaming Discord"><i class="fab fa-discord"></i></a></div>
            <div class="footer-item"><a href="https://www.twitch.tv/unfound5oldier" target="_blank" title="Unfound5oldier Twitch"><i class="fab fa-twitch"></i></a></div>
        </div>
        <div class="signature">Unfound5oldier</div>
    </body>
</html>