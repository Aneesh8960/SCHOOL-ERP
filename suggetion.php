
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>KBVM</title>


</head>
<script>
function SubmitForm()
{
document.FeedbackForm.submit();
document.FeedbackForm.reset();

}
</script>


<body>
<!-- including navbar -->
<?php 
include "basic/navbar.html";
?>
<!-- making form -->

<section class="container mt-4">
	<section class="row" >
		<section class="col-12 col-md-6 mt-5 mx-auto">
			<h5 style=" text-align:center; color:#00f"><u>Suggetion Here</u> </h5> <br>
            
            <form name="FeedbackForm" action="SuggInsert.php" method="POST">
                        <div class="form-row">
                        <div class="col">
                        <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="enter your  name" required/>
                        </div>
                        
                        </div>
 
						   <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required/>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="example-tel-input">Mobile Number</label>
                    <input type="tel" name="mobile" class="form-control" id="phone" placeholder="Mobile" required/>
                  </div>
                </div>
				
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Decribe  your suggetion here </label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="suggetion"  ></textarea>
							</div>
							

						  <div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div>
						  <button type="button" class="btn btn-primary"  id="btnsubmit" onclick="SubmitForm()">send</button>
						  
						
				</form>
		
		</section>
	</section>
</section>



<!-- including footer -->
<?php
include "basic/footer.html";
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</center>
</html>