<?php require_once "painel_cliente/assets/php/controllerUserData.php"; ?>
<script>
    function mask(o, f) {
	    setTimeout(function() {
	      var v = mphone(o.value);
	      if (v != o.value) {
	        o.value = v;
	      }
	    }, 1);
	}
	function mphone(v) {
	    var r = v.replace(/\D/g, "");
	    r = r.replace(/^0/, "");
	    if (r.length > 10) {
	        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
	    } else if (r.length > 5) {
	        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
	    } else if (r.length > 2) {
	        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
	    } else {
	        r = r.replace(/^(\d*)/, "($1");
	    }
	    return r;
	}
</script>
<section class="comece-ja" style="height:100%;">
	<div class="container">
		<div class="bg-comece-ja fixed"></div>
		<div class="titulo-comece-ja">
				<h2>Preencha o formulário para acessar o painel do cliente</h2>
			</div><!--titulo-comece-ja-->
		<div class="wraper-form-comece-ja">

			<div class="form-input input-click" style="text-align:center;">
				<div style="" class="btn-vendedor">Vendedor</div>
				<div style="" class="btn-investidor">Investidor</div>
			</div>

			<div class="form-investidor">
				<form method="POST" action="" autocomplete>
					<?php
	                    if(count($errors) == 1){
	                        ?>
	                        <div class="alert alert-danger text-center">
	                            <?php
	                            
	                            foreach($errors as $showerror){
	                                echo $showerror;
	                            }
	                            ?>
	                        </div>
	                        <?php
	                    }elseif(count($errors) > 1){
	                        ?>
	                        <div class="alert alert-danger">
	                            <?php
	                            foreach($errors as $showerror){
	                                ?>
	                                <li><?php echo $showerror; ?></li>
	                                <?php
	                            }
	                            ?>
	                        </div>
	                        <?php
	                    }
                    ?>
					<div class="form-input input-click">
						<input type="text" name="nome" placeholder="Nome Completo">
					</div><!--form-input-->
					<div class="form-input input-click">
						<input type="text" name="email" placeholder="E-mail">
					</div><!--form-input-->
					<div class="form-input">
						<input type="text" name="senha" placeholder="Senha">
					</div><!--form-input-->
					<div class="form-input input-click">
						<input type="text" name="cpassword" placeholder="Confirmar Senha">
					</div><!--form-input-->
					<div class="form-input">
						<input type="checkbox" name="termos-condicoes"><p>Termos e condições <a href="#">Ver termos</a></p>
					</div><!--form-input-->
					<div class="form-input input-cadastrar">
						<input type="submit" name="signup" value="CADASTRAR-SE">
					</div><!--form-input-->
				</form>
			</div><!--form-investidor-->

			<div class="form-vendedor">
				<form method="POST" action="">
					
					<div class="form-input input-click">
						<input type="text" name="nome" placeholder="Nome Completo">
					</div><!--form-input-->
					<div class="form-input input-click">
						<input type="text" name="email" placeholder="E-mail">
					</div><!--form-input-->
					<div class="form-input">
						<input type="text" name="senha" placeholder="Senha">
					</div><!--form-input-->
					<div class="form-input input-click">
						<input type="text" name="cpassword" placeholder="Confirmar Senha">
					</div><!--form-input-->
					<div class="form-input">
						<input type="checkbox" name="termos-condicoes"><p>Termos e condições <a href="#">Ver termos</a></p>
					</div><!--form-input-->
					<div class="form-input input-cadastrar">
						<input type="submit" name="signup" value="CADASTRAR-SE">
					</div><!--form-input-->
				</form>
			</div><!--form-investidor-->

		</div><!--wraper-form-comece-ja-->
	</div><!--container-->
</section><!--comece-ja-->
<script src="painel_cliente/assets/js/jquery.js"></script>