<div class="page-header">
	<h1>Atendimento</h1>
</div>

<form class="form-horizontal">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="documento">Nome e/ou Documento</label>
			<div class="controls">
				<input id="documento" name="documento" type="text" placeholder="" class="input-xlarge" required="">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="btnEnviar"></label>
			<div class="controls">
				<button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">Buscar</button>
				<button type="reset" id="btnLimpar" name="btnLimpar" class="btn btn-danger">Limpar</button>
			</div>
		</div>
	</fieldset>
</form>

<div class="page-header" style="margin-top: 80px;">
	<h3>Ultimas visitas cadastradas em <?php echo date('d/m/Y'); ?></h3>
</div>

<div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Hora</th>
                                        <th>Visitante</th>
                                        <th>Secretaria</th>
                                        <th>Setor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12:00</td>
                                        <td>LEANDRO MARCHON</td>
                                        <td>SEC. MUNICIPAL DE ADMINISTRACAO</td>
                                        <td>GABINETE DO SEC DE ADMINISTRACAO</td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>