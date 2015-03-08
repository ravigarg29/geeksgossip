<?php include_once("scripts/global.php");
if($logged==0){
	header("Location:index.php");
	exit();	
}

 ?>










<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>geeks-gossip</title>
<link rel="icon" type="image/png" href="images/favcon.png"/>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/geekcss.css" rel="stylesheet" type="text/css">
<script src="scripts/jquery-1.11.2.min.js"></script>
<script src="scripts/geekjs.js"></script>
</head>

<body> 
<div id="outer">
    <div id="wrapper">
        <div id="top">
            <div id="logo"><img src="images/logo.png">
            </div>
            <div id="social">
                <ul>
                    <li><img src="images/facebook2.png">
                    </li>
                    <li><img src="images/twitter.png">
                    </li>
                    <li><img src="images/linkedin.png">
                    </li>
                    <li><img src="images/google2.png"
                    </li>
                </ul>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <div id="topnav">
            <ul>
                <li><a href="#" class="btn">HOME</li>
                <li ><a href="#" class="btn">ABOUT</li>
                <li><a href="#" class="btn">PRODUCTS</li>
                <li><a href="#" class="btn">SERVICES</li>
                <li><a href="#" class="btn">CONTACT</li>
            </ul>
        </div>
        <div id="banner">
            <div id="slider"> 
                <img id="1" src="images/banner1.jpg">
                <img id="2"  src="images/banner2.jpg">
                <img id="3" src="images/banner3.jpg">
                <img id="4" src="images/banner4.jpg">
            </div>
            <div id="">
            <a href="#" class="" onClick="prev(); return false;" class="btn">Previous</a>
            <a href="#" class="" onclick="next(); return false;" class="btn">Next</a>
         	</div>
        </div>
        <div id="content">
            <h1>Welcome to Geeks Gossip</h1>
            <p>Before you can begin to determine what the composition of a particular paragraph will be, you must first decide on an argument and a working thesis statement for your paper. What is the most important idea that you are trying to convey to your reader? The information in each paragraph must be related to that idea. In other words, your paragraphs should remind your reader that there is a recurrent relationship between your thesis and the information in each paragraph. A working thesis functions like a seed from which your paper, and your ideas, will grow. The whole process is an organic one—a natural progression from a seed to a full-blown paper where there are direct, familial relationships between all of the ideas in the paper.
    
    The decision about what to put into your paragraphs begins with the germination of a seed of ideas; this “germination process” is better known as brainstorming. There are many techniques for brainstorming; whichever one you choose, this stage of paragraph development cannot be skipped. Building paragraphs can be like building a skyscraper: there must be a well-planned foundation that supports what you are building. Any cracks, inconsistencies, or other corruptions of the foundation can cause your whole paper to crumble.</p>
    
        </div>
        <div id="member">
        	
            
            
            
        </div>
        <div id="rightside">
            <h2>Latest news</h2>
            <p class="date">March 22 2015</p>
            <h3>Sample headline</h3>
            <p>Paragraph development continues with an expression of the rationale or the explanation that the writer gives for how the reader should interpret the information presented in the idea statement or topic se.</p>
    		<p class="date">March 22 2015</p>
            <h3>Sample headline</h3>
            <p>Paragraph development continues with an expression of the rationale or the explanation that the writer gives for how the reader should interpret the inf</p>
    		<p class="date">March 22 2015</p>
            <h3>Sample headline</h3>
            <p>Paragraph development continues with an expression of the rationale or the explanation that the .</p>
        </div>
        <div id="footer">
            <p class="footer-text">Copyright - Geeks gossip</p>
        </div>  
    </div>
</div>
</body>
</html>
