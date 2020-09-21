
<?php
//session 
session_start();
if(isset($_SESSION['mensagem'])): ?>
  <script>
    //toast de resultado do cadastro 
  	window.onload = function (){
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
	};
</script>

<?php 
endif;	
session_unset();
?>