<center>
  	<span id="msn">
		<?php
		// die('se murio');
		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message'])
			?>

			<script type="text/javascript">
				var mensaje = document.getElementById('msn');
				mensaje.style.border = "1px solid orange";
				mensaje.style.color = "orange";

				// mensaje.style.background-color: "rgba(254, 162, 10, 0.73)";
			</script>

		<?php } ?>
  	</span>
</center>

<script>
	// Temporiza la desaparación del MSN (Notificaciones)
	setTimeout(function(){
	  	$("#msn").remove();
	},3000);
</script>