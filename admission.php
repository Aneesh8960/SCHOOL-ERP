<html>
<head>

 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
.tab
{
height:100%;
width:50%;
background-color:yellow;
}
</style>

<script>
function SubmitForm()
{
document.FeedbackForm.submit();
document.FeedbackForm.reset();

}
</script>

</head>
<body bgcolor="#abcdh">
<?php 
include "basic/navbar.html";
?>    


<form action="AdInsert.php" method="POST" style="margin-top:60px">
<table border="0" align="center" cellspacing="10px" class="tab" >
<h4  style="text-align:center; font-style:italic; color:green;">Admission form</h4>
<tr>

<th>Name</th> 
<td><input type="text" name="name" required/><td>
</tr>
<tr><th>Fathers Name </th>    <td> <input type="text" name="fname" required/></td>    </tr>
<tr><th>Mothers Name </th>    <td> <input type="text" name="mname" required/></td>    </tr>
<tr><th>Gender </th>    <td> <input type="radio" name="g"/> Male <input type="radio" name="g"/> Female</td>    </tr>
<tr><th>Email </th>    <td> <input type="email" name="email" ></td>    </tr>
<tr><th>Mobile Number </th>    <td> <input type="number" name="mobile" required/></td>    </tr>
<tr><th>Class </th>    <td> <input type="number" name="class" required/></td>    </tr>
<tr><th>Subjects</th> <td> <textarea name="subjects"> </textarea></td></tr>
<tr><th>Hobbies </th>   
<td> <input type="checkbox" name="hobbies"/> Dancing
<input type="checkbox" name="hobbies"/> Gaming
<input type="checkbox" name="hobbies"/> Singing
<input type="checkbox" name="hobbies"/> Reading 
<input type="checkbox" name="hobbies"/> Travelling</td> </tr> <tr>
<th></th><td> <input type="text" name="hobbies"/>Describe own</td>     </tr>
<tr>
<tr><th>Select your country</th>  <td> <select name="country"> <option>select--</option>
<option>India</option>
<option>USA</option>
<option>UK</option>
<option>Austrailia</option>
<option>Newziland</option>
</select></td>     </tr>
<tr><th>Address</th> <td> <textarea name="address"> </textarea></td></tr>
<th>Password</th>
<td><input type="password" name="password"/></td>
</tr>
<tr>  <th>Upload your Image</th>    <td><input type="file" name="pic" /></td> </tr>
<tr>  <th></th>    <td><input type="submit" onclick="SubmitForm()" /></td> <td><input type="reset" /></td>    </tr>

</table>
</form>


<?php 
include "basic/footer.html";
?>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


</html>