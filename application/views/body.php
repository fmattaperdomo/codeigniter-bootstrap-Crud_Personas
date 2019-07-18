<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">

</head>
<body>
	<div class="container">
		<h1><?php echo $title ?></h1>
		<?php echo $view ?>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.toaster.js"></script>
	<script>
		var id, link;
		$('#deletePerson').on('show.bs.modal', function (event) {
			link = $(event.relatedTarget) // Button that triggered the modal
			id = link.data('id') // Extract info from data-* attributes
			var name = link.data('name');
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title span').text(name)
		});

		$("#b-borrar").click(function(){
			$.ajax({
				url: "<?php echo base_url() ?>personas/borrar_ajax/" + id,
				context: document.body
				}).done(function(res) {
					$("#deletePerson").modal('hide');
					$(link).parent().parent().remove();
			});

		});
	</script>
	<?php  if($this->session->flashdata('message') != null): ?>
		<script> $.toaster({ message : "<?php echo $this->session->flashdata('message') ?>", title : "Mensaje" }); </script>
	<?php endif; ?>	
</body> 
</html>
