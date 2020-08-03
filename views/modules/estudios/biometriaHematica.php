<?php
$controller = new Controller();
	$respuesta = $controller -> ctlBuscarEstudio("Biometria hematica");
?>
<div class="modal fade" id="biometriahematica" tabindex="-1" role="dialog" aria-labelledby="antidoping" aria-hidden="true">
	<div class="modal-dialog modal-xl custom-modal modal-dialog-scrollable">
	    <div class="modal-content custom-modal">
		    <div class="modal-header custom-modal">
		        <h5 class="modal-title" id="modal">Biometría hemática</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		    </div>
		    <div class="modal-body">
		        <div class="row">
		        	<div class="col-md-6">
		        		<br class="bre">
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoLeucocitos">Leucocitos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoLeucocitos" name="cajaResultadoLeucocitos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4">
				        		<p>Rangos normales</p>
				        		<p>5,000 - 11,000 /mm<sup>3</sup></p>
				        	</div>
		        		</div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoHemoglobina">Hemoglobina:</label>
				        			<input class="form-control" type="text" id="cajaResultadoHemoglobina" name="cajaResultadoHemoglobina" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>12 - 16 g/dL</p>
				        	</div>
				        </div>	
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoHematocrito">Hematocrito:</label>
				        			<input class="form-control" type="text" id="cajaResultadoHematocrito" name="cajaResultadoHematocrito" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>37 - 47 %</p>
				        	</div>
				        </div>	 
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoConcentracionMediaHemoglobina">Concentracion media de hemoglobina:</label>
				        			<input class="form-control" type="text" id="cajaResultadoConcentracionMediaHemoglobina" name="cajaResultadoConcentracionMediaHemoglobina" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>33 - 37 g/dL</p>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoVolumenGlobularMedio">Volumen globular medio:</label>
				        			<input class="form-control" type="text" id="cajaResultadoVolumenGlobularMedio" name="cajaResultadoVolumenGlobularMedio" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>81 - 99 fL</p>
				        	</div>
				        </div>       		
		        	</div>
		        	<div class="col-md-6">
		        		<div class="row">
		        			<div class="col-md-8">
		        				<p class="text-center">Diferencial:</p>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoLinfocitos">Linfocitos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoLinfocitos" name="cajaResultadoLinfocitos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4">
				        		<p>Rangos normales</p>
				        		<p>20 - 52 %</p>
				        	</div>
		        		</div>
		        		<div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoMonocitos">Monocitos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoMonocitos" name="cajaResultadoMonocitos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>2 - 9 %</p>
				        	</div>
				        </div>	
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoEosinofilos">Eosinófilos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoEosinofilos" name="cajaResultadoEosinofilos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>0 - 3 %</p>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoBasofilos">Basófilos:</label>
				        			<input class="form-control" type="text" id="cajaResultadoBasofilos" name="cajaResultadoBasofilos" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>0 - 3 %</p>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoSegmentados">Segmentados:</label>
				        			<input class="form-control" type="text" id="cajaResultadoSegmentados" name="cajaResultadoSegmentados" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>42 - 75 %</p>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoBandas">Bandas:</label>
				        			<input class="form-control" type="text" id="cajaResultadoBandas" name="cajaResultadoBandas" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>0 - 2 %</p>
				        	</div>
				        </div>
				        <div class="row">
				        	<div class="col-md-8">
				        		<div class="form-group">
				        			<label for="cajaResultadoPlaquetas">Plaquetas:</label>
				        			<input class="form-control" type="text" id="cajaResultadoPlaquetas" name="cajaResultadoPlaquetas" required>
				        		</div>
				        	</div>
				        	<div class="col-md-4 align-self-center">
				        		<br>
				        		<p>130 - 400 /mm<sup>3</sup></p>
				        	</div>
				        </div>
		        	</div>
		        </div>

		    </div>
	      	<div class="modal-footer custom-modal">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        	<button type="button" class="btn btn-primary" onclick="validarBiometriaHematica()">Agregar</button>
	      	</div>
	    </div>
	</div>
</div>

<script>

	
	
	function validarBiometriaHematica() {
		if (cajaResultadoLeucocitos.value && cajaResultadoHemoglobina.value && cajaResultadoHematocrito.value && cajaResultadoConcentracionMediaHemoglobina.value && cajaResultadoVolumenGlobularMedio.value && cajaResultadoLinfocitos.value && cajaResultadoMonocitos.value && cajaResultadoEosinofilos.value && cajaResultadoBasofilos.value && cajaResultadoSegmentados.value && cajaResultadoBandas.value && cajaResultadoPlaquetas.value) {

			let estudio = {
				nombre: 'Biometria hematica',
				resultados: 
					[{
						resultado: cajaResultadoLeucocitos.value,
						limites: ['5,000 - 11,000']
					}
					,{
						resultado: cajaResultadoHemoglobina.value,
						limites: ['12 - 16']
					},
					{
						resultado: cajaResultadoHematocrito.value,
						limites: ['37 - 47']
					},
					{
						resultado: cajaResultadoConcentracionMediaHemoglobina.value,
						limites: ['33 - 37']
					},
					{
						resultado: cajaResultadoVolumenGlobularMedio.value,
						limites: ['81 - 99']
					},
					{
						resultado: cajaResultadoLinfocitos.value,
						limites: ['20 - 52']
					},
					{
						resultado: cajaResultadoMonocitos.value,
						limites: ['2 - 9']
					},
					{
						resultado: cajaResultadoEosinofilos.value,
						limites: ['0 - 3']
					},
					{
						resultado: cajaResultadoBasofilos.value,
						limites: ['0 - 3']
					},
					{
						resultado: cajaResultadoSegmentados.value,
						limites: ['42 - 75']
					},
					{
						resultado: cajaResultadoBandas.value,
						limites: ['0 - 2']
					},
					{
						resultado: cajaResultadoPlaquetas.value,
						limites: ['130 - 400']
					}],
				costo: <?php echo $respuesta["costo"]; ?>
			}

			agregarEstudio(estudio);
			cerrarModalBiometriaHematica();
			limpiarBiometriaHematica();
		} else {
			Swal.fire({
                title: "¡Rellene los campos solicitados!",
                type: "error",
                showCancelButton: false
            });
		}
	}

	function cerrarModalBiometriaHematica() {
		$(`#biometriahematica`).modal('toggle');
	}

	function limpiarBiometriaHematica() {
		cajaResultadoLeucocitos.value = "";
		cajaResultadoHemoglobina.value = "";
		cajaResultadoHematocrito.value = "";
		cajaResultadoConcentracionMediaHemoglobina.value = "";
		cajaResultadoVolumenGlobularMedio.value = "";
		cajaResultadoLinfocitos.value = "";
		cajaResultadoMonocitos.value = "";
		cajaResultadoEosinofilos.value = "";
		cajaResultadoBasofilos.value = "";
		cajaResultadoSegmentados.value = "";
		cajaResultadoBandas.value = "";
		cajaResultadoPlaquetas.value = "";

	}
</script>