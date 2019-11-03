<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	h1{
		
		font-family: arial;
	}
	.r{
		color: blue;
	}
	.g{
		color: red;
	}
	.search1{
		color: #FFFF33;
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
	.org{
		width: 80%;
		margin: auto;
	}
.org a{
	text-decoration: none;
}
.org a:hover{
	text-decoration: underline;
	}
	</style>

</head>
<body>
<form action='search.php' method='GET'>
<center>
<a href="index.php" style="text-decoration: none;"><h1><span class="r">R</span> <span class="g">G</span> <span class="search1">Search</span></h1></a>
<input class="search" type='text' size='90' name='search' placeholder="Search here..." required></br></br>
<input class="search2" type='submit' name='submit' value='Search' ></br></br></br>
</center>
</form>
<div class="org" style="max-width: 1360px;margin: auto;padding-top: 40px;">
<?php
 
$button = $_GET ['submit'];
$search = $_GET ['search']; 
 
if(!$button)
echo "you didn't submit a keyword";
else
{
if(strlen($search)<=1)
echo "Search not found";
else{
echo "You searched for <b>$search</b> <hr size='1'></br>";
$db="search";
$con=mysqli_connect ("localhost", "root", "") or die ('cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,$db);

 
$search_exploded = explode (" ", $search);
 
foreach($search_exploded as $search_each)
{
$x=0;
$x++;
if($x==1)
$construct ="keywords LIKE '%$search_each%'";
else
$construct ="AND keywords LIKE '%$search_each%'";
 
}
 
$construct ="SELECT * FROM searchengine WHERE $construct";
$run = mysqli_query($con,$construct);
 
$foundnum = mysqli_num_rows($run);
 
if ($foundnum==0)
/*echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1. 
Try more general words. for example: If you want to search 'how to create a website'
then use general keyword like 'create' 'website'</br>2. Try different words with similar
 meaning</br>3. Please check your spelling";*/
 echo "Sorry, No result found for <b>$search</b>.<br /><br /><br />1. Try for any other search results.<br />2. Use simple words like \"Web\", \"Facebook\", Etc...<br />3. Check your spellings.";
else
{
echo "$foundnum results found !<p>";
 
while($runrows = mysqli_fetch_assoc($run))
{
$title = $runrows ['title'];
$desc = $runrows ['description'];
$url = $runrows ['url'];
 

echo "the ";
echo "
<a href='$url'><b>$title</b></a><br>
$desc<br>
<a href='$url'>$url</a><p>
";
 
}
}
 
}
}
 
?>
</div>
</body>
</html>