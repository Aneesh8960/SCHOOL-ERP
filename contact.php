<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>KBVM</title>
  </head>
  <body>
  
  
 <?php 
include "basic/navbar.html";
?>    

  <div class="container mt-5 ">
        <hr>
    <h3>Contact Us for any Query</h3>
    <hr>
        <form name="ConatctUs" action="contactinsert.php" method="POST">

                <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputName">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Name" required/>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Reason For Contacting</label>
                          <input type="text" name="reason" class="form-control" id="reason" placeholder="Reason For Contacting" required/>
                        </div>
                      </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile Number</label>
                    <input type="tel" name="password" class="form-control" id="phone" placeholder="Mobile" required/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required/>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="state">
                      <option selected>Choose...</option>
                      <option>Uttar Pradesh</option>
                      <option>Madhya Pradesh</option>
                      <option>New Delhi</option>
                      <option>Punjab</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip" required/>
                  </div>
                </div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Describe In details </label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details" required/ ></textarea>
							</div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <button type="button" class="btn btn-primary" id="btnsubmit"  onclick="SubmitForm()">Submit</button>
				
				<script>
function SubmitForm()
{
document.ConatctUs.submit();
document.ConatctUs.reset();

}
				</script>

              </form>
  </div>

</div>

</div>


</div>




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
