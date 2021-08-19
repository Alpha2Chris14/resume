<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <section id="section1">
            <div id="name-img">
                <div class="parent">
                    <h1>Onyeka Christian</h1>
                    <p>Back End Web Developer</p>
                </div>
                <img src="icons/christian.jpg" alt="christian">
            </div>
            <div id="separator"></div>
            <section>
                <h2>Summary</h2>
                <p>Currently an undergraduate with proficient knowledge in backend web development. 
                    A Backend Web Developer with strong dedication to work.
                    Possess good problem solving skills required to propel an organization 
                    towards achieving its objectives. Always open to learning and trying out new things.
                </p>
            </section>
            
            <section>
                <h2>Experience</h2>
                <div class="list-details">
                    <div>
                        <div>
                            <p>Backend Web Developer </p>
                            <p>Intern at HNG Internship 8 (<a href="https://internship.zuri.team/">Click Here To Visit</a>)</p>
                        </div>
                        

                        <p>08-2021 - Till Date</p>
                    </div>
                    <ul>  
                        <li>Currently expanding my knowledge in backend web development</li>   
                        <li>Building different dynamic web solution and working on various tasks </li>  
                        <li>Looking forward to collaborating with a team on a project</li>                                      
                    </ul><br><br>
                    <p style="font-size: 16px; font-weight: bold;">HNG Internship is sponsored and powered by</p>
                    <p>
                    <br>
                    <a href="https://internship.zuri.team/"><img src="icons/hng.png" alt="hng" height="100"  width="100"></a>
                    <a href="https://zuri.team/"><img src="icons/xuri.png" alt="zuri" height="100"  width="150"></a>
                        <a href="https://ingressive.org/"><img src="icons/i4g.jpg" alt="ingressive" height="100"  width="200"></a>
                    </p>
                </div>
                
            </section>
            <section>
                <h2>Education</h2>
                <div>
                    <p>Federal University of Technology, Owerri, BTech in Computer 
                        Science
                    </p>
                    <p>2017 - Till Date</p>
                </div>
            </section>
            <section>
                <h2>Projects</h2>
                <div class="list-details">
                    <div>
                        <div>
                            <p>Paynobs</p>
                        </div>
                        <p>04/2021</p>
                    </div>
                    <ul>  
                        <li>Built a crud application for an airtime to cash converter application (<a href="https://www.paynobs.com">click here to view</a>)
                        </li> 
                        <li>Integrated External API's</li>                                            
                    </ul>
                </div>
                <div class="list-details">
                    <div>
                        <div>
                            <p>Marketlada</p>
                        </div>
                        <p>12/2020</p>
                    </div>
                    <ul>  
                        <li>Worked on an agro ecommerce website (<a href="https://www.marketlada.com">click here to view</a>)</li>
                        <li>Built crud application for manage site content</li>
                        <li>Integrated External API's</li>                                         
                        <li>Used Sessions To Manage User Experience</li>
                        <li>Worked On User Authentication</li>
                    </ul>
                </div>
                
            </section>

            <section>
                
                <h2>GET IN TOUCH</h2>

                <?php
                    if(isset($_SESSION["message"])){
                        echo"<h2>".$_SESSION["message"]."</h2><br>";
                        session_destroy();
                    }
                ?>

                <div>
                    <form action="process.php" method="post">
                        <label for="name">Name:</label><br>
                        <input type="text" name="name"><br><br>

                        <label for="email">Email:</label><br>
                        <input type="email" name="email" required><br><br>

                        <label for="message">Message:</label><br>
                        <textarea name="message" rows="10" required></textarea><br>

                        <input type="submit" name="submit" value="Send Message" class="btn">


                    </form>
                </div>
            </section>
        </section>
        <section id="section2">
            <section>
                <h2>Contact</h2>
                <div id="contact-contain">
                    <div>
                        <img src="icons/phone.png" alt="phone number">
                        <p class="details">+2349060688190</p>
                    </div>
                    <div>
                        <img src="icons/gmail.png" alt="gmail account">
                        <p class="details">Onyekachristian14@gmail.com</p>
                    </div>
                    <div>
                        <img src="icons/location.png" alt="address">
                        <p class="details">Alimosho, Lagos, Nigeria.</p>
                    </div>
                    
                </div>
            </section>
            <section class="space-section2">
                <h2>Soft Skills</h2>
                <div>
                    <p class="details">Collaboration</p>
                    <meter min="0" max="100" value="80"></meter>
                </div>
                <div>
                    <p class="details">Communication</p>
                    <meter min="0" max="100" value="95"></meter>
                </div>
            </section>
            <section  class="space-section2">
                <h2>Technologies</h2>
                <div id="tech-skills">
                    <div>
                        <p>Languages</p>
                        <div id="lang">
                            <div>
                                <p class="details">HTML</p>
                                <meter min="0" max="100" value="65"></meter>
                            </div>
                            <div>
                                <p class="details">CSS</p>
                                <meter min="0" max="100" value="55"></meter>
                            </div>
                            <div>
                                <p class="details">JavaScript</p>
                                <meter min="0" max="100" value="40"></meter>
                            </div>

                            <div>
                                <p class="details">PHP</p>
                                <meter min="0" max="100" value="90"></meter>
                            </div>
                        </div>
                    </div>
                    <div id="others">
                        <p>Others</p>
                        <div>
                            <p class="details">Bootstrap</p>
                            <meter min="0" max="100" value="60"></meter>
                        </div>   

                        <div>
                            <p class="details">Laravel</p>
                            <meter min="0" max="100" value="85"></meter>
                        </div>  
                    </div>
                </div>
            </section>
            <section class="space-section2">
                <h2>Interests</h2>
                <ul>
                    <li class="details">Watching anime</li>
                    <li class="details">Playing Basketball</li>
                    <li class="details">Playing Video games</li>
                    <li class="details">Drawing</li>
                </ul>
            </section>
        </section>
    
    </main>
</body>
</html>