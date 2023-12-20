<!DOCTYPE HTML>

<html>
    <head>
        <title> Home </title>
    
        <link rel="stylesheet" href="./css/homestyles.css" media="screen">
        <script src="homejs.js"></script>
    </head>

    <body class="background">

    <a name="anchor1"> </a>

    <div class="nav">
            <div class="navItem"> <img id="logo" src="./assets/logos.png"> </div>
            <div class="navItem navBtn"> <a href="#anchor1"> Home </a> </div> 
            <div class="navItem navBtn"> <a href="#anchor2"> About </a> </div> 
            <div class="navItem navBtn"> <a href="#anchor3"> Contact </a> </div> <!--code link page -->
            <div class="user navBtn"> Username </div> <!--add code for  changing username display, drop down logout when hover-->
        </div>
     <div class="welcome">
        <center>
            <div class="msgBox">
                <h1> Welcome! </h1>

                <br />

                <h2> We are FiZeraX - a group composed of three first year students from The Bachelor of Science in Computer Sciences. </h2>
            </div>
        </center>
    </div>

    <div class="disclaimer">
        <marquee>
            <p class="dis">
             Disclaimer! This website is for school purposes and is not intended to be used for any other purposes. Any information in this website is not factual and should not be treated as such. </p>
        </marquee>
    </div>
<a name="anchor2"> </a>
    <hr />
<!--pop-up biodata-->
<button onclick="document.getElementById('baxModal').style.display='block'">
    <div class="baxBox">
        <div class="leftPic">
            <img src="./assets/bax.png">
        </div>
        <p class="nameBax"> Baxster Bao-As </p>
    </div>
</button>

<div id="baxModal" class="modal">
    <div class="baxContent">
        <span class="close" onclick="document.getElementById('baxModal').style.display='none'">&times;</span>
        <img src="./assets/bax.png" alt="Image" style="width:100%">

        <hr color="teal" width="100%" size="10" />
        <center><h3>BIODATA</h3></center>
        <hr color="teal" width="100%" size="10" />
        <center><h2>PERSONAL DETAILS</h2></center>
        <hr color="teal" width="100%" size="10" />

        <center>
        <div class ="info">
        Name : Baxter Gifford B. Bao-As <br /> 
        Mobile No. : 09567421717 <br />
        Gender : Male  <br />
        Marital Status : Single <br />
        Nationality : Filipino  <br />
        Address : Doltz Hall, Laguna Road, Silliman University, Dumaguete City
        </div>
        <div class ="info">
        Mother's Name: Elmera D. Bracamonte<br /> 
        Email Address: baxterbbao-as@su.edu.ph<br />
        Date of Birth: March 17, 2004 <br />
        Religion: Roman Catholic <br />
        Language: Filipino, English, Bisaya, Korean <br />
        </div>
        <p>
         </center>   
   
        <hr color="teal" width="100%" size="10" />
        <center><h2>EDUCATION</h2></center>
        <hr color="teal" width="100%" size="10" />

        <center>
            <div class ="info">
            Elementary: St. Mary's College, Quezon City<br />
            Secondary Education: St. Mary's College, Quezon City <br />
            College: Silliman University, Dumaguete City
            </div>
            <div class ="info">
            Year Graduated: 2017 <br />
            Year Graduated:2021 (Junior High), 2023 (Senior High) <br />
            Year Graduated:
            </div>
        </center>
        
        <hr color="teal" width="100%" size="10" />
        <center><h2>OTHERS</h2></center>
        <hr color="teal" width="100%" size="10" />

        <center>
            <div class="info">
                Hobbies: Drawing, Playing, Programming, Songwriting, Poem Writing, Editing, Making Songs and Watching shows<br />
                Talents: Dancing, Puzzle Solving, Creativity<br />
                Skills: Puzzle Solving, Creativity, Editing, Songwriting, Poem Writing<br />
            </div>
        </center>
        <br />
        <br />
        <br />
        <br />
        <br />
        <div><center>&copy; Baxter Gifford Bracamonte Bao-As</center></div>
    </div>
</div>

<!--pop-up biodata-->
<button onclick="document.getElementById('fioModal').style.display='block'">
    <div class="fionaBox">
        <center>
        <div class="centerPic">
            <p class="nameFio"> Fiona </p>
            <img src="./assets/fiona.png">
            <p class="nameAra"> Arabelli </p>
        </div>
        </center>
    </div>
</button>

<div id="fioModal" class="modal">
    <div class="fioContent">
        <span class="close" onclick="document.getElementById('fioModal').style.display='none'">&times;</span>
        <img src="./assets/fiona.png" alt="Image" style="width:100%">
    
		<center>
            <br />
			<h3> BIODATA </h3>
			<hr color="pink" width="100%" size="5"> 
				<h2> PERSONAL DETAILS </h2>	
			<hr color="pink" width="100%" size="5"> 
		
			
        <div class ="info">
        Name : Fiona Arabelli T. Cunanan <br /> 
        Mobile No. : 09050987770 <br />
        Gender : Female  <br />
        Marital Status : Single <br />
        Nationality : Filipino  <br />
        Address : Sto. Rosario Heights, Junob, Dumaguete City, Negroz Oriental 
        </div>
        
        <div class="info">
        Email Address : fionatcunanan@gmail.com<br>
        Date of Birth : January 11, 2005<br>
        Religion: Roman Catholic<br>
        Language: English, Tagalog, and Bisaya
        </div>
<br />
<br />
<br />
		
			<hr color="pink" width="100%" size="5">
				<h2> EDUCATION </h2>	
			<hr color="pink" width="100%" size="5"> 
<br />
        <div class="info">
        Elementary : Marian School of Quezon City until grade 5<br />
        Silliman University Elementary School at grade 6 <br />
        Secondary : Silliman University High School <br />
        College : Silliman University College of Computer Studies
        </div>

        <div class="info">
        Year Graduated: SY 2017 <br/>
        <br />
        Year Graduated: SY 2023<br/>
        Year Graduated: n/a
        </div>

		<br/> 
        <br/> 
        <br/> 

		&copy; Fiona Arabelli T. Cunanan 
		</center>

    </div>
</div>

<!--pop-up biodata-->
<button onclick="document.getElementById('zerModal').style.display='block'">
    <div class="joshBox">
    <p class="nameZer"> Joshua Briones </p>
        <div class="rightPic">
            <img src="./assets/josh.png">
        </div>
    </div>
</button>

<div id="zerModal" class="modal">
    <div class="zerContent">
        <span class="close" onclick="document.getElementById('zerModal').style.display='none'">&times;</span>
        <img src="./assets/josh.png" alt="Image" style="width:100%">
        <p>Some text in the Modal 3..</p>
    </div>
</div>

<a name="anchor3"> </a>

<div class="welcome">
<center>
    <div class="msgBox">
    <h3> Contact Us!</h3>
    <br />
        <div class="contact"> 
            <a href="https://su.edu.ph/">
                <img src="./assets/browser.png"> 
                <br />
                Official website
            </a>
        </div>
        <div class="contact"> 
            <a href="mailto:oip@su.edu.ph">
                <img src="./assets/email.png"> 
                <br />
                Email
            </a>
        </div>
    <br />
    <br />
        <div class="contact"> 
                <a href="https://www.facebook.com/SillimanUniversity/">
                    <img src="./assets/facebook.png"> 
                    <br />
                    Facebook page
                </a>
            </div>
            <div class="contact"> 
                <a href="https://www.instagram.com/silliman_u/">
                    <img src="./assets/instagram.png"> 
                    <br />
                    Instagram page
                </a>
            </div>
    </div>

</center>
</div>
    <div class="anchorbox">
        <a href="#anchor1"> <img src="./assets/up.png"> </a>
    </div>

    <div class="footer">
        &copy; FiZeraX 2023 
    </div>
    </body>
</html>