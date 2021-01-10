<?php
if(isset($_POST['send']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='chilukurigayatri979@gmail.com';
$message="Name:".$name."\n"."Subject:".$subject."\n". "message: "."\n\n".$message;
$headers="From:".$email;

if(empty($name) || empty($email))
{
?>
<div class='alert alert-danger'>
	<?php echo "All input fields are required!" ?>
</div>
<?php
}
else
{
if(mail($to,$subject,$message,$headers))
{
	?>
<div class="alert alert-success text-center">
	<?php echo "Sent Successfully!!" ?>
</div>
<?php
}
else
{
echo "Opps! Something went wrong!";
}
}
}
?>
