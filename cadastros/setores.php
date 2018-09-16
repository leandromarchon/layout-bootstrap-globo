<div class="page-header">
	<h1>Cadastro de Setores</h1>
</div>

<form class="form-horizontal">
	<fieldset>
	<div class="control-group">
		<label class="control-label" for="secretaria">Setor</label>
		<div class="controls">
			<input id="setor" name="setor" type="text" placeholder="" class="input-xlarge" required="">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="secretaria">Secretaria</label>
		<div class="controls">
			<select id="secretaria" name="secretaria" class="input-xlarge">
				<option>Escolha uma Opção</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="btnEnviar"></label>
		<div class="controls">
			<button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Cadastrar</button>
			<button type="reset" id="btnLimpar" name="btnLimpar" class="btn btn-danger">Limpar</button>
		</div>
	</div>
	</fieldset>
</form>