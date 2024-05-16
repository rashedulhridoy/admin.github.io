<div class="topnav">
    <a class="active" href="https://rashedulhridoy.github.io/#home">Home</a>
    <a href="https://rashedulhridoy.github.io/#about">About</a>
    <a href="https://rashedulhridoy.github.io/#services">Services</a>
    <a href="https://rashedulhridoy.github.io/#skills">Skills</a>
    <a href="https://rashedulhridoy.github.io/#projects">Projects</a>
    <a href="https://rashedulhridoy.github.io/#contact">Contact Me</a>
    <a href="https://rashedulhridoy.github.io/blog.php">Blog</a>
  </div>
        <style>
            body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: grey;
  color: white;
}
        </style>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Rashedul Hridoy</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="header">
                <h1>Welcome to My Blog</h1>
            </div>
            
            <div class="container">
                <div class="post">
                    <h2> Unveiling the Magic of Python </h2>
                    <p class="date">April 25, 2024</p>
                    <p class="summary">Python isn't just another coding language; it's your all-purpose toolkit for the digital world. Perfect for beginners, its clear and readable syntax makes learning to code a breeze.</p>
                    <button onclick="showMore(this)">Read More</button>
                    <p class="full-content" style="display: none;">
                        Python is like the Swiss Army knife of programming languages. It's a versatile, beginner-friendly language that's powerful enough for professional developers. Here's what makes it stand out:
<br><br>
<strong>Easy to Learn:</strong> Python's syntax is clear and reads much like regular English, making it a great first language for programmers.
<br>
<br>
<strong>Fast Development:</strong> Unlike some languages that require complex compilation steps, Python lets you write and test code quickly.
<br>
<br>
<strong>Wide Range of Uses:</strong> Python is used for everything from building websites and software to data analysis and artificial intelligence.
<br>
<br>
<strong>Large Community:</strong> Python boasts a massive and active online community, providing ample resources and support for learners.
<br>
<br>
<strong>Great Libraries:</strong> A rich collection of pre-written code (libraries) simplifies common tasks, saving you time and effort.
<br>
<br>
Whether you're a beginner or a seasoned programmer, Python's ease of use, versatility, and strong community make it a valuable tool to have in your coding arsenal.
                    </p>
                </div>

                <div class="post">
                    <h2>The Art of Cyber Security</h2>
                    <p class="date">May 16, 2023</p>
                    <p class="summary">
                        Think of cyber security as your digital armor! 
                        It's all about protecting your devices (phones, 
                        laptops, tablets), personal information (passwords, bank details), 
                        and online accounts (email, social media) from malicious attacks.
                    </p>
                    <button onclick="showMore(this)">Read More</button>
                    <p class="full-content" style="display: none;">
                        Cyber security is your digital armor! 
                        It's all about protecting your devices, 
                        personal information, and online accounts from malicious attacks. 
                        Devious characters might try to steal your data, 
                        infect your devices with nasty programs, or even disrupt entire computer systems. 
                        By following cyber security best practices, you become a cyber defender, 
                        safeguarding your online world with strong passwords, smart browsing habits, 
                        and up-to-date software. Be a champion for online safety and keep your digital 
                        life secure!
                    </p>
                </div>
            </div>
        
            <script src="script.js"></script>
            <style>
                body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

.post {
    background: #fff;
    margin: 20px 0;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.post h2 {
    margin-top: 0;
}

.date {
    color: #777;
    font-size: 0.9em;
}

.summary {
    margin-bottom: 10px;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: #555;
}

.full-content {
    margin-top: 10px;
}

.footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: absolute;
    bottom: 0;
    width: 100%;
}


            </style>
            <script>
                function showMore(button) {
    var fullContent = button.nextElementSibling;
    if (fullContent.style.display === "none") {
        fullContent.style.display = "block";
        button.textContent = "Read Less";
    } else {
        fullContent.style.display = "none";
        button.textContent = "Read More";
    }
}


            </script>
        </body>
        </html>
