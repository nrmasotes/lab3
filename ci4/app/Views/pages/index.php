<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" type="image/png" href="nm.png">
	<script src="https://kit.fontawesome.com/9f49c4b2c4.js" crossorigin="anonymous"></script>
    <title>nrmasotes</title>

</head>
<body>
	<main>
		<div class="topnav">
		<li style="float:right"><a  href="#row"></a>
		<a class="active" href="#Aboutme">About Me</a>
		<a href="#myportfolio">My Portfolio</a>
		<a href="#getintouch">Contact</a>
		<a href="resource.html">Resources</a>
		
		<a href="https://www.facebook.com/nathaniel.masotes11/"><i class="fa-brands fa-facebook"></a></i>
		<a href="https://github.com/nrmasotes"><i class="fa-brands fa-github"></i></a>
		<a href="https://www.linkedin.com/in/nathaniel-hope-masotes-92971321b/"><i class="fa-brands fa-linkedin"></i></a>
		
		<li style="float:left"><a  href="#row">
			<img src="img/nm.png" width="25px" height="25px" overflow="hidden" margin-top="-6px" margin-right="10px"></a></li>
	</main>

	
	</style>
	</head>
    <div class="row">
      <div class="column1">   
      <h1>Hi there, <br>I'm Nathaniel Masotes</h1>
	  <p>I am currently studying &#128304 at 
	  Asia Pacific College &#127970, 2nd year BSIT student &#128187.
	  I have different hobbies from playing instruments like piano &#127929 and guitar &#127928, 
	  sports&#127936&#127955, reading novels &#128218, and competitive video games &#127918 depending on my mood&#128528 on 
	  which I feel I want to do. Ohhh... in case you are wondering about my height, I stand only at 6 feet flat. </p>

	  
	  <p>Currently, I am focusing in further developing &#128200 this website. If you wish to give suggestion(s), 
	  you can contact &#128241 me through my given social media accounts. Though you can email me at nrmasotes@student.apc.edu.ph, please 
	  be reminded that I cannot answer it on time, please consider checking my local time. 
	</p>

	<p id="demo"></p>
		</div>
		<div class="pfp">
			<img src="img/pfp.gif" 
			alt="profile pic" width="400" height="350"  style="width: 250px; 
			margin-left: 50px; position: relative; border-radius: 5%;" >
		</div> 

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

<div class="row">
	<div id="myportfolio">   
		<h1>My Portfolio</h1>
			<p>Here are the past projects that I worked together with my groupmates from my previous subjects. 
				I did enjoy (including hard times) designing wireframes and a Python application</p>
	</div>
			  <div class="project1">
				  <img src="img/RAMS Portal mobile ver.  INMEDIA (1).gif" 
				  alt="profile pic" width="400" height="300"  style="width: 200px; 
				  margin-left: 200px; position: relative; border-radius: 2%;">
				  			<p>We we're tasked to revamp the APC RAMS portal in our subject INMEDIA last term. With a help from my groupmate
							, we produced this high fidelity wireframe. We did not expect that our professor liked our work. But our hard work really
							dit pay off </p>
			  </div>
			  <div class="project2">
				  <img src="img/proj2.png" 
				  alt="pnr demo" width="1000px" height="250px"  style="width: 500px; 
				  margin-left: 200px; position: relative; border-radius: 2%; margin-top: 1px;">
				  			<p>The PNR Computing system is a ticket machine app created for commuters to utilize the transaction 
								of their train tickets with the use of data structure; array list and queue. </p>
			  </div>
			  <br>
			  <br>
			  <br>
<div class="row">
		<div id="getintouch">  
			<h1>Contact Me! please...</h1>
			<p><i class="fa-regular fa-envelope"></i> nrmasotes@student.apc.edu.ph</p>
			<p><i class="fa-solid fa-phone"></i> 09496723641</p>
		</div>
</div>

	            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <input type="text" placeholder="Name" id="fullName" name="fullName">
			<br>
			<br>
            <input type="email" placeholder="Email" id="emailUsed" name="emailUsed">
			<br>
			<br>
            <textarea rows="6" placeholder="Comment/Suggestion" id="commentInput" name="commentInput"></textarea>
			<br>
			<br>
            <button type="submit" class="btn btn2">Submit</button>
            </form>
		<br>
		<br>
		<br>
		<br>

		</div>
</div>
		<div class="footer">
				<h3>&copy; Nathaniel Masotes  2023</h3>
		</div>

		<br>
		<br>
		<br>
		<br>

		

<script src="myscript.js"></script>
</body>
</html>