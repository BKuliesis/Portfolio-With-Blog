<?php
    include 'loggedIn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Inter:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <span>BK</span>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php" class="current-page">Portfolio</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <?php 
            if ($loggedIn) {
                echo '<a href="logout.php" class="button">LOGOUT</a>';
            } else {
                echo '<a href="login.php" class="button">LOGIN</a>';
            }
        ?>
    </header>

    <div class="portfolio-grid">
        <aside>
            <div class="nav-design">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="circle" id="bottom"></div>
            </div>
            <nav>
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#education"">Education</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#projects">Projects</a></li>
                </ul>
            </nav>
        </aside>

        <div>
            <section id="aboutme">
                <h2>About Me</h2>
                <div class="aboutme-flexbox">
                    <article>
                        <h6>Undergraduate Computer Science Student studying at Queen Mary University of London.</h6>
                        <p>
                            I am a BSc Computer Science student at Queen Mary University of London. I'm passionate about technology and entrepreneurship, with a keen interest in web development. I'm eagerly planning to provide web services to clients in the near future. While my focus is on developing practical and impactful web solutions, I also have a strong interest in cutting-edge technologies like AI and blockchain. My ambition is to stay at the forefront of the tech industry, leveraging my skills to create innovative and user-centric digital experiences.
                        </p>
                    </article>
                    <figure>
                        <img src="images/profile-picture.png" alt="Benas Kuliesis" title="Benas Kuliesis">
                        <figcaption>Benas Kuliesis</figcaption>
                    </figure>
                </div>
            </section>

            <section id="skills">
                <h2>Skills</h2>
                <div class="skills-flexbox">
                    <div class="skills">
                        <h3>Web Development</h3>
                        <div class="skill-and-level">
                            <p>HTML</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level five"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>CSS</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level five"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>JavaScript</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level four"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>PHP</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level three"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skills">
                        <h3>Programming</h3>
                        <div class="skill-and-level">
                            <p>Python</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level five"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>Java</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level four"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>SQL</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level three"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skills">
                        <h3>Other</h3>
                        <div class="skill-and-level">
                            <p>Mathematics</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level five"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>MS Office</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level four"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>Photoshop</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level three"></div>
                            </div>
                        </div>
                        <div class="skill-and-level">
                            <p>Adobe XD</p>
                            <div class="skill-bar">
                                <div class="skill-bar-level two"></div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </section>

            <section id="education">
                <h2>Education</h2>
                <div class="flex-column-content">
                    <div class="experience">
                        <h3>BSc Computer Science</h3>
                        <h4>Queen Mary University of London</h4>
                        <div class="location-time">
                            <p>London, United Kingdom</p>
                            <p>Sep 2023 - Present</p>
                        </div>
                    </div>
                    <div class="experience">
                        <h3>A-Levels</h3>
                        <h4>St Gregory's Catholic Science College</h4>
                        <div class="location-time">
                            <p>London, United Kingdom</p>
                            <p>Sep 2021 - Jun 2023</p>
                        </div>
                        <p>Subjects</p>
                        <h4 class="description">Mathematics (A*), Further Mathematics (A*), Computer Science (A)</h4>
                    </div>
                    <div class="experience">
                        <h3>GCSEs</h3>
                        <h4>St Gregory's Catholic Science College</h4>
                        <div class="location-time">
                            <p>London, United Kingdom</p>
                            <p>Sep 2016 - Jun 2021</p>
                        </div>
                        <p>Subjects</p>
                        <h4 class="description">Mathematics (9), Combined Science (8-7), Business (6), English Language (6), English Literature (6), French (5), Geography (5), Religious Studies (5)</h4>
                    </div>
                </div>
            </section>

            <section id="experience">
                <h2>Experience</h2>
                <div class="grid-content">
                    <div class="experience lighter-container">
                        <h3>Moreton Bay Regional Council Entrepreneurship & Innovation: Web Development Job Simulation on Forage (April 2024)</h3>
                        <h4>Moreton Bay Regional Council</h4>
                        <p>Forage (Virtual)</p>
                        <h4 class="description">
                            In this virtual job simulation, I completed a job simulation involving website planning and creation, created a sitemap and userflow using diagram creation tools, and used HTML & CSS to create a landing page. Doing this program confirmed that I really enjoy working on web development tasks and I'm excited to apply these skills on a web development team one day.
                        </h4>
                    </div>
                    <div class="experience lighter-container">
                        <h3>QHack Participant (March 2024)</h3>
                        <h4>Queen Mary University of London</h4>
                        <p>London, United Kingdom</p>
                        <h4 class="description">
                            Participating in the QHack Entrepreneur School, a three-day intensive program, was a pivotal chapter in my professional development. It was an immersive journey where I connected with a dynamic community of aspiring entrepreneurs, collaboratively worked on crafting and validating innovative business ideas, and gained invaluable experience in pitching those ideas to potential investors. This hands-on experience not only enhanced my understanding of the entrepreneurial process but also strengthened my skills in teamwork, strategic planning, and effective communication. QHack left me inspired and more equipped than ever to navigate the challenges and opportunities of the business world.
                        </h4>
                    </div>
                    <div class="experience lighter-container">
                        <h3>Export Logistics Coordinator (June 2021 - Present)</h3>
                        <h4>Sanctex Ltd</h4>
                        <p>Radlett, United Kingdom</p>
                        <h4 class="description">                    
                            In my part-time job, I am responsible for organising and loading trucks with bags of second-hand clothes for export, following company guidelines. This role has helped me improve my logistical and organisational skills, making the loading process faster and more efficient. It has also enhanced my physical stamina and accuracy in handling items.
                        </h4>
                    </div>
                    <div class="experience lighter-container">
                        <h3>Charitable Marketing and Social Media Coordinator (July 2022)</h3>
                        <h4>Sanctex Ltd</h4>
                        <p>Radlett, United Kingdom</p>
                        <h4 class="description">
                            For my one week of work experience at Sanctex Ltd, I was responsible for managing the company's social media accounts. I professionally set up the company’s social media accounts and posted content to showcase the company’s charitable work and export operations. I gained hands-on experience in social media branding and the strategic use of visual content for marketing.
                        </h4>
                    </div>
                    <div class="experience lighter-container two-columns">
                        <h3>GCSE Mathematics Mentoring (February 2022 - May 2022)</h3>
                        <h4>St Gregory's Catholic Science College</h4>
                        <p>London, United Kingdom</p>
                        <h4 class="description">
                            I mentored students in GCSE Mathematics, covering algebra, geometry, and calculus, and tailored teaching methods to their unique learning needs. My approach emphasised clear communication and adaptability, simplifying complex concepts and adjusting to different learning paces. This personalised strategy led to positive feedback from students, who appreciated the clarity of explanations and developed a better attitude towards challenging mathematical problems.
                        </h4>
                    </div>
                </div>
            </section>

            <section id="projects" class="last-section">
                <h2>Projects</h2>
                <div class="grid-content">
                    <div class="project lighter-container">
                        <h3>Portfolio Website</h3>
                        <h4 class="description">
                            My personal portfolio website with an integrated blog, crafted to showcase my projects and share industry insights. Developed using HTML, CSS, JavaScript for the front end, and PHP with MySQL for backend functionality. Features include a responsive design, real-time content management, and a platform for professional and personal expression.
                        </h4>
                        <div class="button-inside-textbox">
                            <a href="https://github.com/BKuliesis/Portfolio-With-Blog" class="button" target="_blank">VIEW ON GITHUB</a>
                        </div>
                    </div>
                    <div class="project lighter-container">
                        <h3>Dynamic Noughts and Crosses AI</h3>
                        <h4 class="description">
                            A dynamic Noughts and Crosses AI desktop game developed in Python and Pygame for my A-Level Computer Science coursework. This game elevates the classic noughts and crosses experience with three engaging game modes, with the highlight being the challenge against an AI where the grid size and win conditions evolve with each victory, intensifying the gameplay and strategy. As players progress, they aim to achieve the highest score possible. Additionally, the game supports a player vs. player mode, offering customisable grid options for a tailored experience.
                        </h4>
                        <div class="button-inside-textbox">
                            <a href="https://github.com/BKuliesis/Dynamic-Noughts-and-Crosses-AI" class="button" target="_blank">VIEW ON GITHUB</a>
                        </div>
                    </div>
                    <div class="project lighter-container two-columns">
                        <h3>Particles Colliding Simulator</h3>
                        <h4 class="description">
                            A one-dimensional particle collision simulator developed in Python and Pygame, leveraging principles of physics such as the conservation of momentum and the law of restitution. This simulator models the behavior of three balls contained between two walls, colliding with each other in a continuous loop. Each ball’s restitution coefficient, mass, and velocity are customisable in the code, allowing for detailed exploration of collision dynamics. This project highlights my ability to apply complex mathematical concepts to simulate real-world physics phenomena through code.
                        </h4>
                        <div class="button-inside-textbox">
                            <a href="https://github.com/BKuliesis/Particles-Colliding-Simulator" class="button" target="_blank">VIEW ON GITHUB</a>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
    </div>
    <footer>
        &copy; 2024 Benas Kuliesis. All rights reserved.
    </footer>

</body>

</html>