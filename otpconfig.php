<?php
$otp=$_POST['otp'];
$con=mysqli_connect('localhost','root','','tms');
$sql="select * from tblusers where otp='$otp'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        $sl=$row['otp'];
        if($sl==$otp){
            echo "<script>
            alert('You are Scuccessfully registered. Now you can login')
            location.href='thankyou.php'</script>";
        }

    }}
else{
    echo "<script>
    alert('otp not match')
    location.href='otp.php'</script>";
}

?>