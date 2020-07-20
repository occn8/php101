<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
		<div class="alert alert-warning alert-dismissible fade show" style="padding-top:5px;padding-bottom:5px;" role="alert">
			<p style="color:rgb(255, 230, 0);"><?php echo $error ?></p>
			<button type="button" class="close close2" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		</div>
		<?php endforeach ?>
	</div>
<?php  endif ?>
