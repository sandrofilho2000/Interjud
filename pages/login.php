<?php 

	include ("painel_creditos/assets/php/controllerUserData.php")

?>

<section class="bg-login" style="background-image: url('painel/uploads/<?php echo $infoSiteImg['fundo_login']?>');">
	<div class="fundo-login"></div>
		<div class="container">
			<div class="wraper-login">
				<?php
                    if(count($errors) > 0){
                        ?>
                        <div style="text-align: center !important;color:#721c24;background-color: #f8d7da;border-color:#f5c6cb;position: relative;
						    padding: .75rem 1.25rem;
						    margin-bottom: 1rem;
						    border: 1px solid transparent;
						    border-radius: .25rem;">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                   ?>
				<div class="img-wraper">
					<img src="<?php echo INCLUDE_PATH?>img/login/cadeado.png">
				</div><!--img-wraper-->
				<form action="" method="post" autocomplete>
				
					<div class="input-wraper">
						<img src="<?php echo INCLUDE_PATH?>img/login/user.png">
						<input type="text" name="email" placeholder="E-mail">
					</div><!--input-wraper-->
					<div class="input-wraper">
						<img src="<?php echo INCLUDE_PATH?>img/login/password.png">
						<input type="password" name="password" placeholder="Senha">
					</div><!--input-wraper-->
					<div class="form-checkbox-a">
						<input type="checkbox" name="lembrar_senha"><span>Lembrar senha</span>
						<a href="painel_creditos/forgot_password.php">Esqueceu sua senha?</a>
					</div><!--form-checkbox-a-->
					<div class="input-submit">
						<input type="submit" name="login" value="LOGIN">
					</div><!--input-submit-->
					<div class="input-submit">
						<a href="<?php echo INCLUDE_PATH?>cadastrar-se-investidor">CADASTRAR-SE</a>
					</div><!--input-submit-->
				</form>
			</div><!--wraper-login-->
		</div><!--container-->
</section><!--bg-login-->