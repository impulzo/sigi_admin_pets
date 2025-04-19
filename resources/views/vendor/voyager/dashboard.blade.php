@extends('voyager::master')

@section('content')
<form action="{{ route('voyager.dashboard.store') }}" method="POST" class="container-fluid" style="display: flex; flex-direction: column;">
@csrf


<!-- CLIENTE -->

	<h1 class="page-title">
        <i class="voyager-people"></i>
        Añadir Cliente
    </h1>
	<div class="col-md-4" style=" gap: 8px; margin-bottom: 15px;">
			<label for="customer_id">Seleccione el cliente</label>
			<select class="form-control" name="customer_id" id="customer_id">
				<option value="">Seleccione</option>
				@foreach ($customers as $customer)
				<option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
				@endforeach
			</select>
	</div>

		<div style="gap: 8px;">



			<div class="col-md-4" style=" gap: 8px;" >

				<div class="col-md-12" style="display: flex; gap: 10px;">

					<label class="control-label">Nombre (s)</label>
					<input required type="text" class="form-control" name="first_name" placeholder="Nombre (s)" value=""></input>

				</div>

				<div class="col-md-12" style="display: flex; gap: 10px;">
					<label class="control-label">Apellidos</label>
					<input required type="text" class="form-control" type="text" name="last_name" placeholder="Apellidos" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">
					<label class="control-label">Dirección</label>
					<input required type="text" class="form-control" type="text" name="address" placeholder="Dirección" value=""></input>
				</div>



			</div>

			<div class="col-md-3 " style="">

					<div  class="col-md-12" style="display: flex; gap: 10px;">
						<label class="control-label" for="name">Num. Teléfono</label>
						<input required="" type="number" class="form-control" name="phone" placeholder="Num. Teléfono" value="">
					</div>
					<div  class="col-md-12" style="display: flex; gap: 10px;">
						<label class="control-label" for="name">Código postal</label>
						<input type="number" class="form-control" name="postal_code" placeholder="Código postal" value="">
					</div>
			</div>

			<div class="col-md-5 " style="display: flex; flex-direction: column; gap: 8px;">

				<div  class="col-md-12" style="display: flex;">
				<label for="name">Seleccione su género</label>
			<select class="form-control" name="gender" id="gender">
				<option value="">Seleccione</option>
				<option value="masculino">Masculino</option>
				<option value="femenino">Femenino</option>

			</select>

				</div>

				<div  class="col-md-12" style="display: flex;">

					<label class="control-label" for="name">Correo electrónico</label>
					<input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="">

				</div>
			</div>
</div>


<!-- MASCOTA -->
	<h1 class="page-title">
        <i class="voyager-paw"></i>
        Añadir mascota
    </h1>
	<div class="col-md-4" style=" gap: 8px; margin-bottom: 15px;">
			<label for="pet_id">Seleccione su mascota</label>
			<select class="form-control" name="pet_id" id="pet_id">
				<option value="">Seleccione</option>
				@foreach ($pets as $pet)
				<option value="{{ $pet->id }}">{{ $pet->name }}</option>
				@endforeach
			</select>
	</div>

<form style="gap: 8px;">
		<div style=" gap: 8px;">

			<div class="col-md-4" style=" gap: 8px;">

				<div class="col-md-12" style="display: flex; gap: 10px;">

					<label class="control-label">Nombre (s)</label>
					<input required = "" type="text" class="form-control" name="name" placeholder="Nombre (s)" value=""></input>

				</div>

				<div class="col-md-12" style="display: flex; gap: 20px; margin-top: 15px;">
					<label class="control-label">Dieta</label>
					<input type="text" class="form-control" type="text" name="food" placeholder="Dieta" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
						<label class="control-label">Num. De paseos por semana</label>
						<input class="form-control" type="number" name="walk" placeholder="Num. De paseos por semana" min="0" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
						<label class="control-label">Num. De paseos en la mañana</label>
						<input class="form-control" type="number" name="morning" placeholder="Num. De paseos en la mañana" min="0" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
						<label class="control-label">Num. De paseos en la tarde</label>
						<input class="form-control" type="number" name="afternoon" placeholder="Num. De paseos en la tarde" min="0" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
						<label class="control-label">Médico actual</label>
						<input class="form-control" type="text" name="medic" placeholder="¿Quién atiente?" min="0" value=""></input>
				</div>

			</div>


			<div class="col-md-3 " style="">

					<div  class="col-md-12" style="display: flex; gap: 10px;">
						<label class="control-label" for="name">Raza</label>
						<input required="" type="text" class="form-control" name="race" placeholder="Raza" value="">
					</div>
					<div  class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Peso</label>
						<input required="" type="text" class="form-control" name="weight" placeholder="Peso" value="">
					</div>
					<div  class="col-md-12" style="display: flex; margin-top: 15px;">
						<label class="control-label" for="name">Cumpleaños</label>
						<input type="date" class="form-control" name="birthdate">
					</div>
					<div  class="col-md-12" style="display: flex; margin-top: 15px;">
						<label class="control-label" for="name">Fecha de admisión</label>
						<input type="date" class="form-control" name="admission_date">
					</div>
					<div  class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Lugar que ocupa en casa</label>
						<input required="" type="text" class="form-control" name="house_place" placeholder="¿Donde duerme?" value="">
					</div>
					<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
						<label class="control-label">¿Con cuantas personas vive?</label>
						<input type="number" class="form-control"  name="housemates" placeholder="¿Con cuantas personas vive?" min="0" value=""></input>
					</div>
			</div>


			<div class="col-md-5 " style="display: flex; flex-direction: column; gap: 8px;">

				<div  style="display: flex; gap: 8px;">
					<label for="name">Seleccione el sexo de su mascota</label>
					<select class="form-control" name="sex" id="sex">
						<option value="">Seleccione</option>
						<option value="masculino">Masculino</option>
						<option value="femenino">Femenino</option>
					</select>
				</div>

				<div class="ol-md-12">
						<label for="imagen">Subir imagen de la mascota</label>
						<input type="file" class="form-control-file col-md-12" id="imagen" name="photo" accept="image/*">
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Horario de comida: Mañana</label>
					<input type="time" class="form-control"  name="other_morning" placeholder="Horario de comida: Mañana" min="0" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Horario de comida: Tarde</label>
					<input type="time" class="form-control" name="other_afternoon" placeholder="Horario de comida: Tarde" min="0" value=""></input>
				</div>

				<div class="col-md-12" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Horario de comida: Noche</label>
					<input type="time" class="form-control" name="night" placeholder="Horario de comida: Noche" min="0" value=""></input>
				</div>
		</div>

			<div class="col-md-12 " style="display: flex; gap: 8px; margin-top: 15px;">

				<div class="col-md-4" style="display: flex; gap: 20px;">
				<label class="control-label" for="name">¿Es agresivo?</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-aggressive-yes" name="is_aggressive" checked="">
								<label for="option-aggressive-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-aggressive-no" name="is_aggressive">
								<label for="option-aggressive-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
				</div>

				<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="is_aggressive_details" placeholder="Si es agresivo" value=""></input>
				</div>

			</div>

		<div  class="col-md-12 " style="display: flex; gap: 8px; margin-top: 5px;">

			<div  class="col-md-4" style="display: flex; gap: 20px;">

				<label class="control-label" for="name">¿Tiene collar?</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-necklace-yes" name="necklace" checked="">
								<label for="option-necklace-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-necklace-no" name="necklace">
								<label for="option-necklace-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
			</div>
			<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="necklace_details" placeholder="Color, tamaño, adorno..." value=""></input>
			</div>
		</div>
		<div  class="col-md-12 " style="display: flex; gap: 8px; margin-top: 5px;">

			<div  class="col-md-4" style="display: flex; gap: 20px;">

				<label class="control-label" for="name">Alergias</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-allergy-yes" name="allergy" checked="">
								<label for="option-allergy-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-allergy-no" name="allergy">
								<label for="option-allergy-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
			</div>
			<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="allergy_details" placeholder="Si es alérgico" value=""></input>
			</div>
			</div>
		<div  class="col-md-12 " style="display: flex; gap: 8px; margin-top: 15px;">

			<div  class="col-md-4" style="display: flex; gap: 20px;">

				<label class="control-label" for="name">Fracturas</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-fracture-yes" name="fracture" checked="">
								<label for="option-fracture-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-fracture-no" name="fracture">
								<label for="option-fracture-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
			</div>
			<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="fracture_details" placeholder="Si tiene alguna" value=""></input>
			</div>
		</div>
		<div  class="col-md-12 " style="display: flex; gap: 8px; margin-top: 15px;">

			<div  class="col-md-4" style="display: flex; gap: 20px;">

				<label class="control-label" for="name">Cicatrices</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-scar-yes" name="scar" checked="">
								<label for="option-scar-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-scar-no" name="scar">
								<label for="option-scar-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
			</div>
			<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="scar_details" placeholder="Forma, tamaño, dolor..." value=""></input>
			</div>
		</div>
		<div  class="col-md-12 " style="display: flex; gap: 8px; margin-top: 15px;">

			<div  class="col-md-4" style="display: flex; gap: 20px;">

				<label class="control-label" for="name">Hospitalizaciones</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-hospitalization-yes" name="hospitalization" checked="">
								<label for="option-hospitalization-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-hospitalization-no" name="hospitalization">
								<label for="option-hospitalization-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
			</div>
			<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="hospitalization_details" placeholder="Si ha sufrido" value=""></input>
			</div>
		</div>

		<div  class="col-md-12 " style="display: flex; gap: 8px; margin-top: 15px;">

			<div  class="col-md-4" style="display: flex; gap: 20px;">

				<label class="control-label" for="name">¿Ha estado en algun curso de entrenamiento?</label>

					<ul class="radio" style="display: flex;" >
							<li>
								<input type="radio"  id="option-training-yes" name="training" checked="">
								<label for="option-training-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-training-no" name="training">
								<label for="option-training-no">No</label>
								<div class="check"></div>
							</li>
					</ul>
			</div>
			<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="training_details" placeholder="¿Cuál?" value=""></input>
			</div>
		</div>

		<div class="col-md-12" style="display: flex; gap: 10px; margin-top: 20px;">
			<div class="col-md-6" style="display: flex; flex-direction: column;">
				<label class="control-label">Reglas de convivencia dentro de casa</label>
				<textarea class="form-control" name="indoor" rows="3" placeholder="Reglas de convivencia dentro de casa"></textarea>
			</div>

			<div class="col-md-6" style="display: flex; flex-direction: column;">
				<label class="control-label">Reglas de convivencia fuera de casa</label>
				<textarea class="form-control" name="outdoor" rows="3" placeholder="Reglas de convivencia fuera de casa"></textarea>
			</div>
		</div>

		<div class="col-md-12" style="display: flex; gap: 10px; margin-top: 20px;">
			<div  class="col-md-4" style="display: flex; gap: 8px;">
				<label for="name">¿Cómo llegó a casa?</label>
				<select class="form-control" name="arrive" id="arrive">
					<option value="">Seleccione</option>
					<option value="comprado">Comprado</option>
					<option value="adopcion">Adopción</option>
					<option value="regalo">Regalo</option>
					<option value="crianza">Crianza</option>
				</select>
			</div>

			<div  class="col-md-4" style="display: flex; gap: 8px;">
				<label for="name">Conducta con perros</label>
				<select class="form-control" name="behavior_dogs" id="behavior_dogs">
					<option value="">Seleccione</option>
					<option value="buena">Buena</option>
					<option value="regular">Regular</option>
					<option value="mala">Malo</option>
				</select>
			</div>

			<div  class="col-md-4" style="display: flex; gap: 8px;">
				<label for="name">Conducta con personas</label>
				<select class="form-control" name="behavior_people" id="behavior_people">
					<option value="">Seleccione</option>
					<option value="buena">Buena</option>
					<option value="regular">Regular</option>
					<option value="mala">Malo</option>
				</select>
			</div>
		</div>

		<div class="col-md-12" style="display: flex; gap: 10px; margin-top: 20px;">
			<div class="col-md-6" style="display: flex; flex-direction: column;">
				<label class="control-label">Observaciones</label>
				<textarea class="form-control" name="observation" rows="3" placeholder="Observaciones"></textarea>
			</div>

			<div class="col-md-6" style="display: flex; flex-direction: column;">
				<label class="control-label">Recomendaciones</label>
				<textarea class="form-control" name="recommendation" rows="3" placeholder="Recomendaciones"></textarea>
			</div>
		</div>
</div>

<!-- Recibo -->
	<h1 class="page-title">
			<i class="voyager-double-up"></i>
			Generar recibo
	</h1>
			<div style="gap: 8px;">
			<!-- @csrf
			@method('POST') -->

				<div class="col-md-8" style=" gap: 8px; margin-top: 15px;">

					<div class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">

					<label for="service_id">Seleccione el servicio que desea contratar</label>
						<select class="form-control" name="service_id" id="service_id">
							<option value="">Seleccione su servicio</option>
							@foreach ($services as $service)
							<option value="{{ $service->id }}">{{ $service->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="col-md-12" style="display: flex; gap: 20px; margin-bottom: 15px;">
						<label for="payment_method_id">Seleccione su método de pago</label>
						<select class="form-control" name="payment_method_id" id="payment_method_id">
							<option value="">Seleccione el método de pago</option>
							@foreach ($payment_methods as $payment_method)
							<option value="{{ $payment_method->id }}">{{ $payment_method->name }}</option>
							@endforeach
						</select>
					</div>

				</div>
				<div class="col-md-4 " style="">

					<div  class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Monto</label>
						<input required="" type="number" class="form-control" name="amount" placeholder="Monto" value="">
					</div>

					<div  class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Concepto</label>
						<input required="" type="text" class="form-control" name="concept" placeholder="Concepto" value="">
					</div>

					<div  class="col-md-12" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Fecha</label>
						<input type="date" class="form-control" name="date">
					</div>
				</div>
			</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection

<!-- @section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection -->

