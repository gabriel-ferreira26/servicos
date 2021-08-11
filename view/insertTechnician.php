<?php
include __DIR__.'\header.html';
require_once('../controller/Inserts.php');
$obInsert = new Insert;

if($_POST){
	$obInsert->reqTechnician();
}
?>

<div class="container form-group">
	<h2>Cadastro de Tecnico</h2>
	<form method="POST" action="#">

			<div class="row">
				<div class="col">
					<label for="name">Nome:</label>
					<input type="text" id="name" class="form-control" name="name" placeholder="Nome do Tecnico" required/>
				</div>
				<div class="col">
					<label for="lastName">Sobrenome:</label>
					<input type="text" id="lastName" class="form-control" name="lastName" placeholder="Sobrenome do tecnico" required/>
				</div>
                <div class="col">
					<label for="lastName">NickName:</label>
					<input type="text" id="nickName" class="form-control" name="nickName" placeholder="NickName do Tecnico" required/>
				</div>
			</div>

            <div class="row mt-3">
				<div class="col">
					<label for="cpf">CPF:</label>
					<input type="text" id="cpf" class="form-control" name="cpf" placeholder="CPF do cliente" required/>
				</div>				
			</div>

			<div class="row mt-3">
				<div class="col">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
			</div>

            <div class="row mt-3">
				<div class="col">
					<label for="email">Senha:</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
			</div>

			<button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
			<a>
				<button class="btn btn-danger ml-1 mt-3">Voltar</button>
			</a>
	</form>
			
</div>

<?php
include __DIR__.'\footer.html';
?>