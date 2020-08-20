<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

<script>
$(document).ready(function(){ 
	$("#telefone").mask("(00) 0000-0000");
	$("#celular").mask("(00) 00000-0000");
	$('#cpf').mask('000.000.000-00', {reverse: true});
	$('#cep').mask('00000-000');
	$('#dt_validade').mask('00/00/0000');
});	
</script>

</body>
</html>