<?php require_once "painel_creditos/assets/php/controllerUserData.php"; ?>
<?php  
	$current_file_name = basename($_SERVER['PHP_SELF']);

	if($current_file_name == 'cadastrar-se-vendedor.php'){
		$_SESSION['vendedor_pre'] = true;
	}
?>
<section class="comece-ja" style="height:100%;">
	<div class="container">
		<div class="bg-comece-ja"></div>
		<div class="titulo-comece-ja">
				<h2>Preencha o formulário para acessar o painel do cliente</h2>
			</div><!--titulo-comece-ja-->
		<div class="wraper-form-comece-ja">
			<?php
                if(count($errors) == 1){
                    ?>
                    <div class="alert alert-danger text-center" style=" color: #d83a3a;">
                        <?php
                        
                        foreach($errors as $showerror){
                            echo $showerror;
                        }
                        ?>
                    </div>
                    <?php
                }elseif(count($errors) > 1){
                    ?>
                    <div class="alert alert-danger" style=" color: #d83a3a;">
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
            <?php
			if(isset($_POST['signup'])){
				$nome = $_POST['nome'];
				$email = $_POST['email'];


		// By default, this sample code is designed to get the result from your ActiveCampaign installation and print out the result
		$url = 'https://interjud22647.api-us1.com';


		$params = array(

		    // the API Key can be found on the "Your Settings" page under the "API" tab.
		    // replace this with your API Key
		    'api_key'      => '82773318832ae34d22e039df96d00e4959ae2ba03444c8c73fb9d5591812b5b87b467ea6',

		    // this is the action that adds a contact
		    'api_action'   => 'contact_sync',

		    // define the type of output you wish to get back
		    // possible values:
		    // - 'xml'  :      you have to write your own XML parser
		    // - 'json' :      data is returned in JSON format and can be decoded with
		    //                 json_decode() function (included in PHP since 5.2.0)
		    // - 'serialize' : data is returned in a serialized format and can be decoded with
		    //                 a native unserialize() function
		    'api_output'   => 'serialize',
		);

		// here we define the data we are posting in order to perform an update
		$post = array(
		    'email'                    => $email,
		    'first_name'               => $nome,
		    //'ip4'                    => '127.0.0.1',

		    // any custom fields
		    //'field[345,0]'           => 'field value', // where 345 is the field ID
		    //'field[%PERS_1%,0]'      => 'field value', // using the personalization tag instead

		    // assign to lists:
		    'p[1]'                   => 1, // example list ID (REPLACE '123' WITH ACTUAL LIST ID, IE: p[5] = 5)
		    'status[1]'              => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
		    //'form'          => 1001, // Subscription Form ID, to inherit those redirection settings
		    //'noresponders[123]'      => 1, // uncomment to set "do not send any future responders"
		    //'sdate[123]'             => '2009-12-07 06:00:00', // Subscribe date for particular list - leave out to use current date/time
		    // use the folowing only if status=1
		    'instantresponders[123]' => 0, // set to 0 to if you don't want to sent instant autoresponders
		    //'lastmessage[123]'       => 1, // uncomment to set "send the last broadcast campaign"

		    //'p[]'                    => 345, // some additional lists?
		    //'status[345]'            => 1, // some additional lists?
		);

		// This section takes the input fields and converts them to the proper format
		$query = "";
		foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
		$query = rtrim($query, '& ');

		// This section takes the input data and converts it to the proper format
		$data = "";
		foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
		$data = rtrim($data, '& ');

		// clean up the url
		$url = rtrim($url, '/ ');

		// This sample code uses the CURL library for php to establish a connection,
		// submit your request, and show (print out) the response.
		if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

		// If JSON is used, check if json_decode is present (PHP 5.2.0+)
		if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
		    die('JSON not supported. (introduced in PHP 5.2.0)');
		}

		// define a final API request - GET
		$api = $url . '/admin/api.php?' . $query;

		$request = curl_init($api); // initiate curl object
		curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
		curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
		//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
		curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

		$response = (string)curl_exec($request); // execute curl post and store results in $response

		// additional options may be required depending upon your server configuration
		// you can find documentation on curl options at http://www.php.net/curl_setopt
		curl_close($request); // close curl object

		if ( !$response ) {
		    die('Nothing was returned. Do you have a connection to Email Marketing server?');
		}

		// This line takes the response and breaks it into an array using:
		// JSON decoder
		//$result = json_decode($response);
		// unserializer
		$result = unserialize($response);
		// XML parser...
		// ...

		/*
		// Result info that is always returned
		echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
		echo 'Message: ' . $result['result_message'] . '<br />';

		// The entire result printed out
		echo 'The entire result printed out:<br />';
		echo '<pre>';
		print_r($result);
		echo '</pre>';

		// Raw response printed out
		echo 'Raw response printed out:<br />';
		echo '<pre>';
		print_r($response);
		echo '</pre>';

		// API URL that returned the result
		echo 'API URL that returned the result:<br />';
		echo $api;

		echo '<br /><br />POST params:<br />';
		echo '<pre>';
		print_r($post);
		echo '</pre>';?>
		*/

			}
			?>
			<form method="POST" id="cadastro">
				<div class="form-input input-click">
					<input type="text" name="nome" placeholder="Nome Completo" required>
				</div><!--form-input-->
				<div class="form-input input-click">
					<input type="text" name="email" placeholder="E-mail" required>
				</div><!--form-input-->

				<div class="form-input">
					<input style="border-bottom: 1px solid #6e98c7;" type="password" name="senha" placeholder="Senha" required>
				</div><!--form-input-->
				<div class="form-input input-click">
					<input style="border-bottom: 1px solid #6e98c7;" type="password" name="cpassword" placeholder="Confirmar Senha" required>
				</div><!--form-input-->

				<div class="form-input input-click regEx-container">
				    <p class="regEx">
						A sua senha deve conter:
					</p>
					<p style="color: rgb(40, 40, 40); font-weight: bold;" class="regEx0">
						Ao menos 8 caracteres
					</p>
					<p style="color: rgb(40, 40, 40); font-weight: bold;" class="regEx1">
						Uma letra maiúscula
					</p>
					<p style="color: rgb(40, 40, 40); font-weight: bold;" class="regEx2">
						Uma letra minúscula
					</p>
					<p style="color: rgb(40, 40, 40); font-weight: bold;" class="regEx3">
						Um número
					</p>
				</div>

				<div class="form-input">
					<input type="checkbox" name="termos-condicoes" required><p style="text-align:left;">Termos e condições <a href="<?php echo INCLUDE_PATH?>termos-condicoes">Ver termos</a></p>
				</div><!--form-input-->
				<div class="form-input input-cadastrar">
					<input type="submit" name="signup" value="CADASTRAR-SE">
				</div><!--form-input-->
			</form>
		</div><!--wraper-form-comece-ja-->
	</div><!--container-->
</section><!--comece-ja-->
<script src="painel_cliente/assets/js/jquery.js"></script>