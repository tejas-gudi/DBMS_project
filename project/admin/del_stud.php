<html>
    <head>
    <link rel="stylesheet" type="text/css" href="delete.css">
    </head>
    <body>

<?php
$con=mysqli_connect("localhost","root","tmg07/11/2002");
if(!$con)
{
die('error in connection'.mysqli_error());
}
mysqli_select_db($con,"test");
$name=$_GET['nm'];
$query="delete from student_login where name='$name' ";
$delete=mysqli_query($con,$query);
if($delete){
    echo "<h2>Delete Successful!</h2>";
    echo "<img src='block.gif'>";
    echo "<h2>Redirecting to Dashboard...</h2>";
    header("refresh:2; url = /DIPDOX/project/admin/delete_student_form.php");
}

else{
    echo "<h2>Delete Unsuccessful!</h2>";
    echo "<img src='block.gif'>";
    echo "<h2>Redirecting to Dashboard...</h2>";
    header("refresh:2; url = /DIPDOX/project/admin/delete_student_form.php");
}

?>
    <section class="footer">
    <div class="box-container">
        <p1>"<b>Diploma documents</b>" provides you all the essential learning resources.<br>
            This website is to provide syllabus copies, notes, question papers, link to
            educational videos, media, text-books for all semesters in a PDF format.</p1>
        </br>
    </div>
</section>
</body>
</html>