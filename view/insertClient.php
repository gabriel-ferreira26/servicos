<?php
include __DIR__ . '\header.html';
require_once('../controller/Inserts.php');
$obInsert = new Insert();

if ($_POST) {
	$idInserted = $obInsert->resClient();
	if($idInserted){
		$obInsert->reqAdress($idInserted);
		$obInsert->reqContacts($idInserted);
	}
}

?>
<div class="container form-group">
	<h2>Cadastro de cliente</h2>
	<hr style="border-top: 1px solid #fff">

	<form method="POST" action="#">
		<h4>Dados pessoais</h4>
		<div class="row">
			<div class="col">
				<label for="name">Nome:*</label>
				<input type="text" id="name" class="form-control" name="name" placeholder="Nome do cliente" required />
			</div>
			<div class="col">
				<label for="lastName">Sobrenome:*</label>
				<input type="text" id="lastName" class="form-control" name="lastName" placeholder="Sobrenome do cliente" r equired />
			</div>
		</div>

		<div class="row mt-3">
			<div class="col">
				<label for="birth">Data de nascimento:*</label>
				<input type="date" class="form-control" id="birth" name="birth" required>
			</div>
			<div class="col">
				<label for="gender">Genero:*</label>
				<select class="form-control" name="gender">
					<option>Selecione uma opção</option>
					<option value="Masculino">Masculino</option>
					<option value="Feminino">Feminino</option>
					<option value="">Não especificado</option>
				</select>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col">
				<label for="cpf">CPF:*</label>
				<input type="text" id="cpf" class="form-control cpf-mask" name="cpf" placeholder="CPF do cliente" onkeypress="$(this).mask('000.000.000-00');" required />
			</div>
		</div>

		<hr style="border-top: 1px solid #fff">

		<h4>Formas de contato e endereço</h4>
		<div class="row">

			<div class="col">
				<label for="email">E-mail</label>
				<input type="email" id="email" class="form-control" name="email" placeholder="email@example.com" />
			</div>
			<div class="col">
				<label for="phone">Telefone</label>
				<input type="text" id="phone" class="form-control" name="phone" placeholder="Telefone do cliente" />
			</div>
		</div>

		<div class="row mt-3">
			<div class="col col-md-7">
				<label for="street">Rua:</label>
				<input type="text" id="street" class="form-control" name="street" placeholder="Rua do cliente" />
			</div>

			<div class="col col-md-1">
				<label for="number">Numero:</label>
				<input type="number" id="number" class="form-control" name="number" />
			</div>

			<div class="col col-md-4">
				<label for="district">Bairro:</label>
				<input type="text" id="district" class="form-control" name="district" />
			</div>
		</div>

		<div class="row mt-3">
			<div class="col col-md-3">
				<label for="number">CEP:</label>
				<input type="text" id="cep" class="form-control" name="cep" />
			</div>

			<div class="col col-md-6">
				<label for="city">Cidade:</label>
				<input type="text" id="city" class="form-control" name="city" required />
			</div>

			<div class="col col-md-3">
				<label for="state">Estado:</label>
				<input type="text" id="state" class="form-control" name="state" required />
			</div>
		</div>

		<button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
		<a>
			<button class="btn btn-danger ml-1 mt-3">Voltar</button>
		</a>
	</form>

</div>
<?php
include __DIR__ . '\footer.html';

?>