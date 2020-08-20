<?php include('_header.php'); ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formLogin"></span>
                    <div class="card card-outline-secondary" style="margin-top: 40px;">
                        <div class="card-header">
                            <h3 class="mb-0">Cadastro</h3>
                        </div>
                        <div class="card-body">
                        	<?php if(!empty($msg)): ?>
							<div class="warning">
								<?php echo $msg; ?>
							</div>
							<?php endif; ?>
                            <form method="POST">
                            	<div class="row">
                            		<div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label for="nome">Nome</label>
		                                    <input type="text" class="form-control" name="nome" id="nome" required="required">
		                                </div>
		                            </div>   
		                            <div class="col-md-6 col-xs-6"> 
		                                <div class="form-group">
		                                    <label for="email">Email</label>
		                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
		                                </div>
	                                </div>
	                            </div>    
	                            <div class="row">
                            		<div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label>Login</label>
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
	                            	<div class="col-md-4 col-xs-4"> 
		                                <div class="form-group">
		                                    <label for="cpf">CPF</label>
                                    		<input type="text" class="form-control" name="cpf" id="cpf" required="required">
		                                </div>
	                                </div>
                            		<div class="col-md-4 col-xs-4">
		                                <div class="form-group">
		                                    <label for="telefone">Telefone</label>
                                    		<input type="text" class="form-control" name="telefone" id="telefone" required="required">
		                                </div>
		                            </div>   
		                            <div class="col-md-4 col-xs-4">
		                                <div class="form-group">
		                                    <label for="celular">Celular</label>
                                    		<input type="text" class="form-control" name="celular" id="celular" required="required">
		                                </div>
		                            </div>
	                            </div>
	                            <div class="row">
                            		<div class="col-md-3 col-xs-3"> 
		                                <div class="form-group">
		                                    <label for="cep">CEP</label>
                                    		<input type="text" class="form-control" name="cep" id="cep" required="required">
		                                </div>
	                                </div>   
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label for="rua">Rua</label>
                                   			<input type="text" class="form-control" name="rua" id="rua" required="required">
		                                </div>
		                            </div>
		                            <div class="col-md-3 col-xs-3"> 
		                                <div class="form-group">
		                                    <label for="bairro">Bairro</label>
                                    		<input type="text" class="form-control" name="bairro" id="bairro" required="required">
		                                </div>
	                                </div>
	                            </div>
	                            <div class="row">
                            		  
		                            <div class="col-md-4 col-xs-4">
		                                <div class="form-group">
		                                    <label for="cidade">Cidade</label>
                                    		<input type="text" class="form-control" name="cidade" id="cidade" required="required">
		                                </div>
		                            </div>
		                            <div class="col-md-2 col-xs-2"> 
		                                <div class="form-group">
		                                    <label for="uf">UF</label>
                                   			<input type="text" class="form-control" name="uf" id="uf" required="required">
		                                </div>
	                                </div>
	                            </div>
	                             
								<div class="row">
                            		<div class="col-md-12 col-xs-12">
                            			<h5 class="mb-0">Dados de Pagamento</h5>
                            			<hr>
                            		</div>
                            	</div>
                            	<div class="row">
                            		<div class="col-md-6 col-xs-6"> 
		                                <div class="form-group">
		                                    <label for="num_cartao">Número do Cartão (CVV)</label>
                                    		<input type="text" class="form-control" name="num_cartao" id="num_cartao" required="required">
		                                </div>
	                                </div>   
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label for="dt_validade">Data de Validade</label>
                                   			<input type="text" class="form-control" name="dt_validade" id="dt_validade" required="required">
		                                </div>
		                            </div>
	                            </div>
	                            <div class="row">
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <label for="cod_seguranca">Código Segurança</label>
                                   			<input type="text" class="form-control" name="cod_seguranca" id="cod_seguranca" required="required">
		                                </div>
		                            </div>
		                            <div class="col-md-6 col-xs-6">
		                                <div class="form-group">
		                                    <button type="submit" class="btn btn-form btn-lg" style="width: 185px;margin-top: 23px;" id="btnLogin">Cadastrar</button>
		                                </div>
		                            </div>
	                            </div>
	                            
									
						
                            </form>
                        </div>
                        <!--/card-body-->
                    </div>
                    <!-- /form card login -->
			<!-- <div class="card">
			  <div class="card-body">
			    <div class="card-header">
                    <h3 class="mb-0">Login</h3>
                </div>
				    <?php if(!empty($msg)): ?>
					<div class="warning">
						<?php echo $msg; ?>
					</div>
					<?php endif; ?>
			    <form method="POST">
					<div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>

					<input type="submit" value="Cadastrar" />
				</form>
			    <a href="#" class="btn btn-primary">Button</a>
			  </div>
			</div> -->
			
		</div>
	</div>
<?php include('_footer.php'); ?>