<?php include('_header.php'); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formLogin"></span>
                    <div class="card card-outline-secondary" style="margin-top: 120px;">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                        	<?php if(!empty($msg)): ?>
							<div class="<?php echo $alertTipo; ?>" style="padding: 10px;margin-bottom: 12px;">
								<?php echo $msg; ?>
							</div>
							<?php endif; ?>
                            <form method="POST" action="<?php echo BASE_URL; ?>login/logar">
	                            <div class="row">
                            		<div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label>Usuário</label>
                                    		<input type="text" class="form-control" name="username" id="username" required="required">
		                                </div>
		                            </div>   
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label>Senha</label>
                                    		<input type="password" class="form-control" name="pass" id="senha" required="required">
		                                </div>
		                            </div>
	                            </div>
	                            <div class="row">
	                            	<div class="col-md-6 col-xs-6">
	                            		<a href="<?php echo BASE_URL; ?>login/cadastrar">Cadastre-se</a>
	                            	</div>
	                            	<div class="col-md-6 col-xs-6">
	                            		<div class="mx-auto" style="width: 195px;">
											<button type="submit" class="btn btn-form btn-lg mx-auto" style="width: 185px;" id="btnLogin">Logar</button>
										</div>
	                            	</div>
	                            </div>
	                            
                            </form>
                        </div>
                        <!--/card-body-->
                    </div>
			
		</div>
	</div>
<?php include('_footer.php'); ?>
