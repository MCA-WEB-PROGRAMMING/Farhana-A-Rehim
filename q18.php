<?php
$conn=mysqli_connect("localhost","root","","webdatabase");
if($conn)
{
    echo "connection established";
}
else
{
    echo "connection not established";
}
if(isset($_POST['submit'])){
$ano=$_POST['ano'];
$title=$_POST['title'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$edition=$_POST['edition'];
$query="INSERT INTO book(ano,title,author,publisher,edition) values('{$ano}','{$title}','{$author}','{$publisher}','{$edition}')";
if(mysqli_query($conn,$query))
{
    echo "data inserted";
}
else
{
    echo "data not inserted";
}
}
$result=mysqli_query($conn,"select * from book where title='fiction'");
?>
<html>
    <head>
        <title>book</title>
</head>
<body>
<form method="POST" action="" name="form">
    
    <table cellspacing="20" align="center" style="background-color: lightblue;" >
    <tr>
    <td align="left">
    <label>Accession number:</label>
    </td>
    <td align="left"><input type="text" name="ano" size=18 autofocus="required"  placeholder="enter accession number"></td>
</tr>
    <tr>
        <td align="left" >
        <label >tTitle</label></td><br>
        <td>
        <input type="text" name="title" placeholder=" enter title" autofocus="required" ></td>
    </tr>
    <tr>
    <td align="left">
    <label>Author</label>
    </td>
    <td align="left"><input type="text"  name="author"  placeholder="enter author"></td>
    </tr>

    <tr>
        <td align="left">
        <label>publisher</label>
        </td>
        <td>
            <input type="text" name="publisher" placeholder="enter publisher"  autofocus="required" > 
            </td>
            </tr>
    <tr>
    <td>
    <label>edition</label>
    </td>
    <td>
    <input type="text" name="edition"  autofocus="required" placeholder="enter edition">
    </td>
    </tr>
    <tr>
    <td><input type="reset" name="clear" value="clear"></td>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </tr>
    </form>
<h1>BOOK Details</h1>

	<table width="500" cellpadding=5celspacing=5 border=1>
   
	<tr>
	<th>Accession Number</th>
	<th>title</th>
	<th>author</th>
	<th>edition</th>
	<th>publisher</th>
	</tr>
    <?php while($row=mysqli_fetch_array($result)):?>
    <tr>
	<td><?php echo $row['ano'];?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['author'];?></td>
	<td><?php echo $row['edition'];?></td>
	<td><?php echo $row['publisher'];?></td>
	</tr>
    <?php endwhile;?> 
	</table>