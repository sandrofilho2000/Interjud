<?php 
	@session_start();
	if(isset($_SESSION['gotoVendedor'])){
		
		header("Location: meus_creditos.php");

	}

	
	require_once('system/header.php');
	require_once('system/menu_lateral.php');

	

?>

<?php 

	$current_file_name = basename($_SERVER['PHP_SELF']); 

	
?>

	
	
	<div class="creditos_container">

		<div class="creditos-text">
			
			<h2 class="first_h2 h2_before">
				Portal de créditos
			</h2>
			
		</div>

		

		<div class="creditos-wrapper">
			
		<?php
			$sql2 = "Select *, count(*) as count FROM creditos WHERE  idcreditos != 1 and status_mercado !=1  limit 0, 60";
			//NO FILTERS

			
			$sql = $pdo->prepare($sql2);
			$sql -> execute();

			

            $fetchCreditos = $sql->fetchAll();

            foreach ($fetchCreditos as $key => $value){
				
                if($value['count'] > 0){
					echo "<p none class='total_creditos'>$value[count]</p>";
					if(!isset($_SESSION['gotoCREDITOS'])){
						$sql2 = "Select *, creditos.nome as c_nome FROM creditos WHERE idcreditos >= 1 and honorarios_contratuais <= 100  and idcreditos != 1 and status_mercado !=1  ";
					}else{
						$sql2 = "Select *, creditos.nome as c_nome FROM creditos WHERE idcreditos = $_SESSION[gotoCREDITOSid] and idcreditos != 1 and status_mercado !=1  ";
					}

					

					if(!empty($_POST['pesquisar'])){
						
						$nome = trim ($_POST['pesquisar']);
						$sql2 .=" and nome like '%$nome%' ";
					}

					if(!empty($_POST['classe'])){
						$sql2 .=" and classe like '%$_POST[classe]%' ";
					}

					if (isset($_POST['range_contratuais'])) {
						$sql2 .=" and honorarios_contratuais <= $_POST[range_contratuais]";
					}

					if(!empty($_POST['min'])){
						$min = str_replace(',', '.', $_POST['min']);
						$sql2 .=" and valor_negociar >= $min";
					}

					if(!empty($_POST['max'])){
						$max = str_replace(',', '', $_POST['max']);
						$sql2 .=" and valor_negociar <= $max";
					}

					
					if(!empty($_POST['rating_range'])){
						$sql2 .=" and rating >= $_POST[rating_range]";
					}

					$dayweek = date('w');
					
					
					
					if ($dayweek == 7){
						$sql2 .= "order by idcreditos desc";
					}
					else if ($dayweek == 6 || $dayweek == 3 || $dayweek == 2){
						$sql2 .= " order by idcreditos desc";
					}
					else if ($dayweek == 5 || $dayweek == 1){
						$sql2 .= " order by idcreditos";
					}
					else if ($dayweek == 4){
						$sql2 .= " order by random_order2";
					}
					
					$sql2 .= " limit 0, 60";
					$sql = $pdo->prepare($sql2);

                    $sql -> execute();


                    $fetchCreditos = $sql->fetchAll();
					
                    foreach ($fetchCreditos as $key => $value){
                        $name = $value['c_nome'];
						$valor = $value['valor'];
						$idcreditos = $value['idcreditos'];
						$id_user = $value['id_user'];
						$num_processo = $value['num_processo'];
						$classe = $value['classe'];
						$materia = $value['materia'];
						$honorarios_contratuais = $value['honorarios_contratuais'];
						$honorarios_sucubenciais = $value['honorarios_sucubenciais'];
						$fase_processual = $value['fase_processual'];
						$tempo_recebimento = $value['tempo_recebimento'];
						$background = $value['background'];
						$rating = $value['rating'];
						$observacoes = $value['observacoes'];
						$valor_com_honorario = $value['valor_com_honorario'];
						$valor_negociar = $value['valor_negociar'];


						

						echo "		
							<div style='border: 1px solid rgb(0, 74, 159); border-radius: 15px ";
							
							if(isset($_SESSION['gotoCREDITOS'])){
								echo "";
							}
							
						echo"' class=credito_wrapper wrapper1>
							<img loading='lazy' class='credito_wrapperIMG' style='height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 2' src='assets/imagens/$background' onerror='this.src='assets/imagens/default.png';>


							<div class=stars>
							";
							if($rating != ''){
								echo "<img loading='lazy' style='height: 68%; width: 90%' src='assets/imagens/system/rating_$rating.jpg'>
								";
							};
							echo "</div>

							<h1 class='name'>". utf8_encode($name) ."</h1>
							<h2 style='color: #fdff46; font-size: 27px' class='valor'>
								R$$valor_negociar
							</h2>
		
							<h2 class='classe'>
								Classe: " . utf8_encode($classe) ."
							</h2>
							<h2 class='contratuais'>
								Honorários Contratuais: $honorarios_contratuais%
							</h2>
							
							<h2 none class='idusers'>$id_user</h2>
				
							<h2 none class='h2_rating'>$rating</h2>

							<h2 none class='idcreditos'>$idcreditos</h2>

							
							<h2 none class='background'>$background</h2>


							"?>

							
							
							
							<?php 

								if(!isset($_SESSION['gotoCREDITOS'] ) && $id_user != $_SESSION['id']){
									echo "<div class='offer'><a href='#' class='a_stop_default'>Fazer Oferta</a></div>
									";
								}
								echo "<a href='#' class='saiba_mais'>Saiba Mais</a>";
			
								$s2 = 'select count(*) as count from favoritos where favoritou = ? and favoritado = ?';
								$sql2 = $pdo->prepare($s2);
								$sucess = $sql2->execute(array($_SESSION['id'], $idcreditos));
							
								$fetchFav = $sql2->fetchAll();
								foreach($fetchFav as $key => $value){
									
									if($value['count'] > 0){
										$_SESSION['fav'] = true;
									}else{
										$_SESSION['fav'] = false;
									}
								}
								if(!isset($_SESSION['gotoCREDITOS']) && $id_user != $_SESSION['id']){
									if($_SESSION['fav']){
										echo " <div class='heart_fav fav'></div> ";
									}else{
										echo " <div class='heart_fav'></div> ";
									}
								}

							?>
							

							
							<?php
                            if($rating != ''){
							
                                echo "
                                <div style='height: 100%;' class='saiba_mais_overlay'>
                                    <div class='close_pop_up'>
                                        <i class='fas fa-times'></i>
                                    </div>
                                    <p>
                                        <span>Número de processo: <b>$num_processo</b> </span>
                                    </p>
                                    <p>
                                        <span>Tempo estimado de recebimento: <b>$tempo_recebimento</b></span>
                                    </p>
                                    <p>
                                        <span>Honorários sucubenciais: <b>$honorarios_sucubenciais%</b> </span>
                                    </p>
                                    <p>
                                        <span>Matéria: <b>". utf8_encode($materia) ."</b> </span>
                                    </p>
                                    <p>
                                        <span>Fase processual: <b>". utf8_encode($fase_processual) ."</b></span>
                                    </p>
                                    <p>
                                        <p>Observações:</p>
                                        <p>". utf8_encode($observacoes) ."</p>
                                    </p></div>
                                ";

                            }else if(!$rating){
                                echo "
                                    <div style='height: 100px !important;' class='saiba_mais_overlay'>
                                        <div class='close_pop_up'>
                                            <i class='fas fa-times'></i>
                                        </div>
                                        <p style='height: 100%'>
                                            <span>Número de processo: <b>$num_processo</b> </span>
                                        </p>
                                    </div>
                                ";
                            }
                                            
                                            
                                        
                            echo "
                                </div>
                            ";	
                    }
                    

                }else{
                    echo "Sem créditos por aqui!";
                }
            }
            
    	?>
		
		</div>
		<div class="offer_overlay overlay">
			<p none class="offer_id_credito">

			</p>
			<p none class="offer_id_user">
			
			</p>
			<div class="offer_container">
				<div class="offer_close">
					<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg> 
				</div>
				<div class="offer_stars">
				<p style="display: none" class="offer_creid"></p>
				</div>
				<div class="offer_text">
					<h2></h2>
					<h1></h1>
				</div>

				<form id="offer_value">
					<span>R$</span><input type="text" name="offer_number" id="">
					<input  id="offer_submit"  style="display: none" type="submit" value="">
				</form>

				<div class="offer_btn">
					<div class="offer_label btn">
						<label for="offer_submit">
							Enviar Proposta
						</label>
					</div>
					<div class="offer_autor btn">
						<span>Falar com Autor</span>
					</div>
				</div>
				
				<div class="falar_com_autor_container">
					<form action=""></form>
					<div class='autor_down autor2'>
						<div class='down'></div>
					</div>
					<div class='autor_top'>
						<img src='assets/imagens/profile_pics/$value[profile_pic]' alt=''>
						<h3></h3>
					</div>
					<div class='autor_bottom'>
						<p class='celular'></p>
						<p class='email'></p>
						<p class='desde'></p>
					</div>
				</div>
			</div>
	    
		</div>
		<script src="assets/js/jquery.js"></script>
		<script type="module" src="assets/js/new_oferta.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/menu.js"></script>
		<script type="module" src="assets/js/fav.js"></script>
		<script>
			$(function(){

				$('.saiba_mais').click(function(){
					var saiba_mais_overlay = $(this).siblings('.saiba_mais_overlay')
					saiba_mais_overlay = saiba_mais_overlay[0]
					saiba_mais_overlay.classList.add('saiba_mais_active')
				})

				$('.close_pop_up i').click(function(){
					
					var saiba_mais_overlay = $(this).parent('.close_pop_up').parent('.saiba_mais_overlay')
					saiba_mais_overlay = saiba_mais_overlay[0]
					saiba_mais_overlay.classList.remove('saiba_mais_active')
				})

			})
		</script>

		<?php 
			require_once('system/system_message.php');
			unset($_SESSION['gotoCREDITOS']);
		?>
		<div class="loading_creditos">
			<div class="loading">

			</div>
		</div>
		<script src="assets/js/menu-lateral.js"></script>
		<script src="assets/js/propostas.js"></script>
		<script type="module" src="assets/js/reset_icon.js"></script>
		<script type="module" src="assets/js/scrollPage.js"></script>



		
</body>
</html>