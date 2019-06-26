<?php
// Pagina waar activatie code gecontroleerd wordt.
require 'header.php';
?>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action= 'Includes/Activatiecode.inc.php' method = 'post'>
					<span id="accountMaken" class="login100-form-title p-b-33">
						 Account maken
					</span>

      <div class="Uitlegactivitie">
            <p>Voer uw persoonlijke code in</p>
      </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid activationcode is needed">
						<input class="input100" type="text" name="activationcode" placeholder="activationcode">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

		<div class="UitlegInlog">
      <p>waar vind ik mijn code?</p>
      <h5>Uw krijgt uw persoonlijke code van uw werkgever</h5>
    </div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type='submit' name = 'activatiecode-submit'>
							Ga verder
						</button>
					</div>
					</form>

					</div>

			</div>
		</div>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
