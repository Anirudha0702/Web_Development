<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Info</title>
    <link type="text/css" rel="stylesheet" href="Course.css">`
</head>
<body>
    <?php
        include "Connect.php";
        global$data;
    ?>
        <header id="head">
            <h1 > <?php echo $data[$_GET["index"]]['title'] ?></h1> </h1>
            <nav id="nav1">
                <a href="page-1.html" class="tag">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="page-3.html" class="tag">Admission</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="page-4.html" class="tag">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </nav>
        </header>
        <img src= <?php echo $data[$_GET["index"]]['img']; ?>  id="img1">
        <nav id="nav2">
            <center><a href="#bottom">Course Details 👇</a></center>
        </nav>
        <section id="bottom">
            <h2>Welcome to the <?php echo $data[$_GET["index"]]['title']?> Department!</h2>
            <p>Our <?php echo $data[$_GET["index"]]['title']?> Department is dedicated to providing a comprehensive and enriching educational experience in the fascinating field of <?php echo $data[0]['title']?>. With a team of highly accomplished faculty members, state-of-the-art facilities, and a vibrant academic community, we strive to nurture intellectual curiosity and develop critical thinking skills among our students.</p>
            <p><h3>Department Overview:</h3>
                Our department is committed to excellence in both teaching and research. We offer a wide range of programs and courses designed to equip students with a strong foundation in fundamental physics principles, problem-solving abilities, and hands-on laboratory skills. Whether you are pursuing an undergraduate or graduate degree, our programs will empower you to explore the intricacies of the universe and prepare you for various career paths.
            </p>
            <p><h3>Faculty and Staff:</h3>
                Our distinguished faculty members are passionate educators and accomplished researchers in various fields of physics. They bring a wealth of knowledge and expertise to the classroom, ensuring an engaging and dynamic learning environment. Our supporting staff members are dedicated to providing administrative support and assisting students with their academic journey.
                <ul id ="tl"><h4>Teachers will be teaching you:</h4>
                        <center>
                            <li><?php echo $data[$_GET["index"]]['teachers'][0]?></li>
                            <li><?php echo $data[$_GET["index"]]['teachers'][1]?></li>
                            <li><?php echo $data[$_GET["index"]]['teachers'][2]?></li>
                        </center>
                </ul>
            </p>
            <p><h3>Academic Programs:</h3>
                We offer a diverse range of academic programs tailored to meet the needs and interests of students at different levels. Our undergraduate program provides a comprehensive understanding of physics principles and applications, while our graduate program offers opportunities for advanced study and research. Additionally, we offer interdisciplinary programs that combine physics with other disciplines, allowing students to explore new frontiers.</p>
            <p><h3>Research and Facilities:</h3>
                The Physics Department boasts cutting-edge research facilities that enable groundbreaking discoveries and innovations. Our faculty and students are actively engaged in research across various fields, including quantum mechanics, astrophysics, condensed matter physics, and particle physics. Our state-of-the-art laboratories provide hands-on experience and opportunities to collaborate on groundbreaking projects.</p>
            <p><h3>Student Resources:</h3>
                We are committed to supporting our students' academic success and personal growth. Our department offers comprehensive resources such as academic advising, mentorship programs, research opportunities, and scholarships. We also provide career guidance and networking opportunities to help students explore diverse career paths in academia, industry, and beyond.</p>
            <p><h3>Events and Seminars:</h3>
                Throughout the academic year, we organize a series of events, seminars, and guest lectures featuring renowned scientists, scholars, and industry professionals. These events provide opportunities to delve into exciting research topics, broaden knowledge, and connect with experts in the field.</p>
            <p><h3>News and Achievements:</h3>
                Our department takes pride in the accomplishments of our faculty and students. We regularly share news about research breakthroughs, publications, awards, and accolades. These achievements highlight our commitment to excellence and showcase the impact our community has on the field of physics.</p>
            <p><h3>Alumni:</h3>
                Our alumni have achieved remarkable success in diverse fields, including academia, research institutions, technology companies, and more. We take pride in their accomplishments and provide a platform for networking, mentorship, and professional development, benefiting both current students and recent graduates.

                We invite you to explore our website to learn more about the Physics Department at [College Name]. Should you have any questions or require further information, please do not hesitate to contact us. We look forward to welcoming you to our vibrant academic community.</p>
        </section>

</body>
</html>