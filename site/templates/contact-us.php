<?php snippet('header') ?>

<main>
	<div id="maintext">
		<span><h2><?= $page->name() ?></h2></span>
		<span><u><b>Toll Free</b></u>: <?= $page->phone() ?></span>
		<br>
		<span><u><b>Email</b></u>: <?= $page->email() ?></span>
 	</div>
	<form action="" method="post" enctype="multipart/form-data" >
		 <div class="formcontainer">
		 	<div>
			<label>Name: *</label>
			</div>
			<input class="forminput" type="text" value="" name="name" id="namedata">
			<div>
			<label>Email Address: *</label>
			</div>
			<input class="forminput" type="text" value="" name="email" id="emaildata">
			<div>
			<label>How can we help you? *</label>
			</div>
			<textarea class="forminput" name="message" id="messagedata" rows="8" cols="38"></textarea>
			<div>
			<input class="formbutton" type="reset" name="resetButton" value="Reset">
			<input class="formbutton" type="submit" name="submitButton" value="Submit">
			</div>
		</div>
	</form>
	<script>
	</script>
	<span><?= $page->text()->kt() ?></span>
</main>
<?php snippet('footer') ?>