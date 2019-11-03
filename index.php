<html>
<head>
<title>R G Search</title>
<style type="text/css">
	h1{
		padding-top: 15%;
		font-size: 50px;
		font-family: arial;
	}
	.r{
		color: blue;
	}
	.g{
		color: red;
	}
	.search1{
		color: #ffff00;
	}
	.search{
	color: grey;
	font-size:17px;
    width: 100%;
	height:38px;
	width:40%;
	padding-left:10px;
	border: medium none;	
	-moz-box-shadow:    1px 1px 1px 1px #ccc;
  	-webkit-box-shadow: 1px 1px 1px 1px #ccc;
  	box-shadow:         1px 3px 5px 2px #ccc;
	}
	.search2{
	padding:10px;
	margin:3px;
	background-color: #f2f3f4;
	font-family:arial;
	border:none;
	color: grey ;
	border-radius: 10px;
	}
	.search2:hover{
		color: white;
		background-color: grey;
	}
	@media screen and (max-width: 650px){
	.search{
	 width:75%;
  }
}
.log{
	padding:10px;
	margin:3px;
	background-color: #f2f3f4;
	font-family:arial;
	border:none;
	color: grey ;
	border-radius: 10px;
	}
	.log:hover{
		color: white;
		background-color: grey;
	}
</style>
</head>
<body>
<form action='search.php' method='GET'>
<center>
<a href="index.php" style="text-decoration: none;"><h1 class="head" ><span class="r">R</span> <span class="g">G</span> <span class="search1">Search</span></h1></a>
<input class="search" type='text' size='90' name='search' placeholder="Search here..." required></br></br>
<input class="search2" type='submit' name='submit' value='Search' ></br></br></br>
<!--<input class="log" type='submit' value='Log-in' >
<input onclick="newlogin/index.php" class="log" type='submit'  value='Sign-up' ></br></br></br>-->


</center>
</form>
</body>
</html>