<div class="container">
	<section>
		<div class="container">
			<div class="row">
				<div class="card card-outline-secondary" style="margin-top: 40px;width: 100%; height: 400px;">
                    <div class="card-body">
                    	<div class="userinfo">
							Logado como: <strong><?php echo $name; ?></strong> <br>
							Número Cartão: <strong><?php echo $num_cartao; ?></strong> <br>
							Data Validade: <strong><?php echo $dt_validade; ?></strong> <br>
							Cód. Segurança: <strong><?php echo $cod_seguranca; ?></strong> <br>
							<a href="<?php echo BASE_URL; ?>login/logout">Sair</a>
						</div>
                    	<h1 class="text-center">Usuário Logado<h1>
                    </div>
                </div>
			</div>
		</div>
	</section>
	
</div>