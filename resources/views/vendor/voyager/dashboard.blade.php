@extends('voyager::master')

@section('content')
<style>
    .page-title {
        color: #ea7b23 !important;
    }
    .page-title i {
        color: #ea7b23 !important;
    }
    .control-label {
        color: #000 !important;
        font-weight: bold !important;
    }
    label {
        color: #000 !important;
        font-weight: bold !important;
    }
    .radio-container {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 20px;
    }
    .radio {
        display: flex;
        gap: 15px;
        align-items: center;
        margin: 0;
        padding: 0;
    }
    .radio li {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .radio input[type="radio"] {
        margin: 0;
    }
    .radio label {
        margin: 0;
        font-weight: normal;
    }
</style>
<form action="{{ route('voyager.dashboard.store') }}" method="POST" class="container-fluid">
@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- CLIENTE -->
<div id="customer">
 	<h1 class="page-title col-md-12">
        <i class="voyager-people"></i>
        Añadir Cliente
    </h1>
	<div class="col-md-7" style="gap: 8px; margin-bottom: 15px;">
		<div style="display: flex; gap: 10px;">
			<label for="customer_id" style="margin-top: 10px;">Seleccione el cliente</label>
			<select class="form-control" name="customer_id" id="customer_id" style="margin-top: 10px;">
				<option value="">Seleccione</option>
				@foreach ($customers as $client)
					<option value="{{ $client->id }}" {{ isset($customer) && $client->id == $customer->id ? 'selected' : '' }}>{{ $client->full_name }}</option>
				@endforeach
			</select>
			<button class="btn btn-primary" name="action" value="search_customer">Buscar cliente</button>
		</div>
	</div>

	<div style="gap: 8px;" class="col-md-12">
		<div class="row" style=" gap: 8px;" >
			<div class="col-md-4" style="display: flex; gap: 10px;">
				<label class="control-label">Nombre (s)</label>
				<input type="text" class="form-control" name="first_name" placeholder="Nombre (s)" value="{{ isset($customer) ? $customer->first_name : '' }}">
			</div>
			<div class="col-md-4" style="display: flex; gap: 10px;">
				<label class="control-label">Apellidos</label>
				<input type="text" class="form-control" type="text" name="last_name" placeholder="Apellidos" value="{{ isset($customer) ? $customer->last_name : '' }}">
			</div>
			<div class="col-md-4" style="display: flex; gap: 10px;">
				<label class="control-label">Dirección</label>
				<input type="text" class="form-control" type="text" name="address" placeholder="Dirección" value="{{ isset($customer) ? $customer->address : '' }}">
			</div>
		</div>
		<div class="row" style="">
			<div  class="col-md-4" style="display: flex; gap: 10px;">
				<label class="control-label">Num. Teléfono</label>
				<input type="text" class="form-control" name="phone" placeholder="Num. Teléfono" value="{{ isset($customer) ? $customer->phone : '' }}">
			</div>
			<div  class="col-md-4" style="display: flex; gap: 10px;">
				<label class="control-label">Código postal</label>
				<input type="number" class="form-control" name="postal_code" placeholder="Código postal" value="{{ isset($customer) ? $customer->postal_code : '' }}">
			</div>
			<div  class="col-md-4" style="display: flex;">
				<label class="control-label">Seleccione su género</label>
				<select class="form-control" name="gender" id="gender">
					<option value="">Seleccione</option>
					<option value="masculino" {{ isset($customer) && $customer->gender == 'masculino' ? 'selected' : '' }}>Masculino</option>
					<option value="femenino" {{ isset($customer) && $customer->gender == 'femenino' ? 'selected' : '' }}>Femenino</option>
				</select>
			</div>
		</div>
		<div class="row" style="display: flex; flex-direction: column; gap: 8px;">
			<div  class="col-md-6" style="display: flex;">
				<label class="control-label">Correo electrónico</label>
				<input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="{{ $customer->email ?? '' }}">
			</div>
		</div>
	</div>
 </div>


<!-- MASCOTA -->
<div>
	<h1 class="page-title col-md-12">
        <i class="voyager-paw"></i>
        Añadir mascota
    </h1>

	<div class="col-md-7" style="gap: 8px; margin-bottom: 15px;">
		<div style="display: flex; gap: 10px;">
				<label for="pet_id" style="margin-top: 10px;">Seleccione su mascota</label>
				<select class="form-control" name="pet_id" id="pet_id" style="margin-top: 10px;">
					<option value="">Seleccione</option>
					@foreach ($pets as $dog)
					<option value="{{ $dog->id }}" {{ isset($pet) && $dog->id == $pet->id ? 'selected' : '' }}>{{ $dog->name }}</option>
					@endforeach
				</select>
				<button class="btn btn-primary" name="action" value="search_pet" type="submit" >Buscar Mascota</button>
		</div>

	</div>
		<div class="col-md-12" style=" gap: 8px;">

			<div class="row" style=" gap: 8px;">

				<div class="col-md-5" style="display: flex; gap: 10px;">

					<label class="control-label">Nombre (s)</label>
					<input type="text" class="form-control" name="name" placeholder="Nombre (s)" value="{{ isset($pet) ? $pet->name : '' }}" />

				</div>

				<div  class="col-md-3" style="display: flex; gap: 10px;">
						<label class="control-label" for="name">Raza</label>
						<input type="text" class="form-control" name="race" placeholder="Raza" value="{{ isset($pet) ? $pet->race : '' }}">
				</div>

				<div  class="col-md-4"style="display: flex; gap: 8px;">
					<label for="name">Seleccione el sexo de su mascota</label>
					<select class="form-control" name="sex" id="sex">
						<option value="">Seleccione</option>
						<option value="masculino" {{ isset($pet) && $pet->sex == 'masculino' ? 'selected' : '' }}>Masculino</option>
					<option value="femenino" {{ isset($pet) && $pet->sex == 'femenino' ? 'selected' : '' }}>Femenino</option>
					</select>
				</div>
			</div>


			<div class="row">

					<div class="col-md-5" style="display: flex; gap: 20px; margin-top: 15px;">
							<label class="control-label">Dieta</label>
							<input type="text" class="form-control" type="text" name="food" placeholder="Dieta" value="{{ isset($pet) ? $pet->food : '' }}">
					</div>

					<div  class="col-md-3" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Peso</label>
						<input type="text" class="form-control" name="weight" placeholder="Peso" value="{{ isset($pet) ? $pet->weight : '' }}">
					</div>

					<div class="col-md-4" style="display: flex; gap: 20px; margin-top: 15px;">
						<label for="imagen">Subir imagen de la mascota</label>
						<input type="file" class="form-control-file col-md-12" id="imagen" name="photo" accept="image/*" value="{{ isset($pet) ? $pet->photo : '' }}">
					</div>
			</div>


			<div class="row">

				<div class="col-md-5" style="display: flex; gap: 15px; ">
						<label class="control-label">Num. De paseos por semana</label>
						<input class="form-control" type="number" name="walk" placeholder="Num. De paseos por semana" min="0" value="{{ isset($pet) ? $pet->walk : '' }}">
				</div>

				<div  class="col-md-3" style="display: flex; margin-top: 15px;">
						<label class="control-label" for="name">Cumpleaños</label>
						<input type="date" class="form-control" name="birthdate" value="{{ isset($pet) ? $pet->birthdate : '' }}">
				</div>

				<div class="col-md-4" style="display: flex; gap: 15px;">
					<label class="control-label">Horario de comida: Mañana</label>
					<input type="time" class="form-control"  name="other_morning" placeholder="Horario de comida: Mañana" min="0" value="{{ isset($pet) ? $pet->other_morning : '' }}">
				</div>

			</div>
			<div class="row">
				<div class="col-md-5" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Num. De paseos en la mañana</label>
					<input class="form-control" type="number" name="morning" placeholder="Num. De paseos en la mañana" min="0" value="{{ isset($pet) ? $pet->morning : '' }}">
				</div>

				<div  class="col-md-3" style="display: flex; margin-top: 15px;">
					<label class="control-label" for="name">Fecha de admisión</label>
					<input type="date" class="form-control" name="admission_date" value="{{ isset($pet) ? $pet->admission_date : '' }}">
				</div>

				<div class="col-md-4" style="display: flex; gap: 15px; margin-top: 15px;">
						<label class="control-label">Horario de comida: Tarde</label>
						<input type="time" class="form-control" name="other_afternoon" placeholder="Horario de comida: Tarde" min="0" value="{{ isset($pet) ? $pet->other_afternoon : '' }}">
				</div>

			</div>
			<div class="row">
				<div class="col-md-5" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Num. De paseos en la tarde</label>
					<input class="form-control" type="number" name="afternoon" placeholder="Num. De paseos en la tarde" min="0" value="{{ isset($pet) ? $pet->afternoon : '' }}">
				</div>
				<div  class="col-md-3" style="display: flex; gap: 10px; margin-top: 15px;">
					<label class="control-label" for="name">Lugar que ocupa en casa</label>
					<input type="text" class="form-control" name="house_place" placeholder="¿Donde duerme?" value="{{ isset($pet) ? $pet->house_place : '' }}">
				</div>
				<div class="col-md-4" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Horario de comida: Noche</label>
					<input type="time" class="form-control" name="night" placeholder="Horario de comida: Noche" min="0" value="{{ isset($pet) ? $pet->night : '' }}">
				</div>
			</div>

			<div class="row">
				<div class="col-md-5" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">Médico actual</label>
					<input class="form-control" type="text" name="medic" placeholder="¿Quién atiente?" min="0" value="{{ isset($pet) ? $pet->medic : '' }}">
				</div>

				<div class="col-md-3" style="display: flex; gap: 15px; margin-top: 15px;">
					<label class="control-label">¿Con cuantas personas vive?</label>
					<input type="number" class="form-control"  name="housemates" placeholder="¿Con cuantas personas vive?" min="0" value="{{ isset($pet) ? $pet->housemates : '' }}">
				</div>
			</div>

			<div class="row" style="display: flex; gap: 8px; margin-top: 15px;">
				<div class="col-md-4" style="display: flex; gap: 20px;">
				<div class="radio-container">
					<label class="control-label" for="name">¿Es agresivo?</label>
					<ul class="radio">
						<li>
							<input type="radio" id="option-aggressive-yes" name="is_aggressive" checked value="1">
							<label for="option-aggressive-yes">Si</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="option-aggressive-no" name="is_aggressive" value="0">
							<label for="option-aggressive-no">No</label>
							<div class="check"></div>
						</li>
					</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
					<label class="control-label">Especificar</label>
					<input type="text" class="form-control" type="text" name="is_aggressive_details" placeholder="Si es agresivo" value="{{ isset($pet) ? $pet->is_aggressive_details : '' }}">
				</div>
			</div>

			<div  class="row" style="display: flex; gap: 8px; margin-top: 5px;">

				<div  class="col-md-4" style="display: flex; gap: 20px;">

					<div class="radio-container">
						<label class="control-label" for="name">¿Tiene collar?</label>
						<ul class="radio">
							<li>
								<input type="radio" id="option-necklace-yes" name="necklace" value="1" {{ isset($pet) && $pet->necklace == '1' ? 'checked' : '' }}>
								<label for="option-necklace-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-necklace-no" name="necklace" value="0" {{ isset($pet) && $pet->necklace == '0' ? 'checked' : '' }}>
								<label for="option-necklace-no">No</label>
								<div class="check"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
						<label class="control-label">Especificar</label>
						<input type="text" class="form-control" type="text" name="necklace_details" placeholder="Color, tamaño, adorno..." value="{{ isset($pet) ? $pet->necklace_details : '' }}">
				</div>
			</div>
			<div  class="row" style="display: flex; gap: 8px; margin-top: 5px;">

				<div  class="col-md-4" style="display: flex; gap: 20px;">

					<div class="radio-container">
						<label class="control-label" for="name">Alergias</label>
						<ul class="radio">
							<li>
								<input type="radio" id="option-allergy-yes" name="allergy" value="1" {{ isset($pet) && $pet->allergy == '1' ? 'checked' : '' }}>
								<label for="option-allergy-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-allergy-no" name="allergy" value="0" {{ isset($pet) && $pet->allergy == '0' ? 'checked' : '' }}>
								<label for="option-allergy-no">No</label>
								<div class="check"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
						<label class="control-label">Especificar</label>
						<input type="text" class="form-control" type="text" name="allergy_details" placeholder="Si es alérgico" value="{{ isset($pet) ? $pet->allergy_details : '' }}">
				</div>
				</div>
			<div  class="row" style="display: flex; gap: 8px; margin-top: 15px;">

				<div  class="col-md-4" style="display: flex; gap: 20px;">

					<div class="radio-container">
						<label class="control-label" for="name">Fracturas</label>
						<ul class="radio">
							<li>
								<input type="radio" id="option-fracture-yes" name="fracture" value="1" {{ isset($pet) && $pet->fracture == '1' ? 'checked' : '' }}>
								<label for="option-fracture-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-fracture-no" name="fracture" value="0" {{ isset($pet) && $pet->fracture == '0' ? 'checked' : '' }}>
								<label for="option-fracture-no">No</label>
								<div class="check"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
						<label class="control-label">Especificar</label>
						<input type="text" class="form-control" type="text" name="fracture_details" placeholder="Si tiene alguna" value="{{ isset($pet) ? $pet->fracture_details : '' }}">
				</div>
			</div>
			<div  class="row" style="display: flex; gap: 8px; margin-top: 15px;">

				<div  class="col-md-4" style="display: flex; gap: 20px;">

					<div class="radio-container">
						<label class="control-label" for="name">Cicatrices</label>
						<ul class="radio">
							<li>
								<input type="radio" id="option-scar-yes" name="scar" value="1" {{ isset($pet) && $pet->scar == '1' ? 'checked' : '' }}>
								<label for="option-scar-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-scar-no" name="scar" value="0" {{ isset($pet) && $pet->scar == '0' ? 'checked' : '' }}>
								<label for="option-scar-no">No</label>
								<div class="check"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
						<label class="control-label">Especificar</label>
						<input type="text" class="form-control" type="text" name="scar_details" placeholder="Forma, tamaño, dolor..." value="{{ isset($pet) ? $pet->scar_details : '' }}">
				</div>
			</div>
			<div  class="row" style="display: flex; gap: 8px; margin-top: 15px;">

				<div  class="col-md-4" style="display: flex; gap: 20px;">

					<div class="radio-container">
						<label class="control-label" for="name">Hospitalizaciones</label>
						<ul class="radio">
							<li>
								<input type="radio" id="option-hospitalization-yes" name="hospitalization" value="1" {{ isset($pet) && $pet->hospitalization == '1' ? 'checked' : '' }}>
								<label for="option-hospitalization-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-hospitalization-no" name="hospitalization" value="0" {{ isset($pet) && $pet->hospitalization == '0' ? 'checked' : '' }}>
								<label for="option-hospitalization-no">No</label>
								<div class="check"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
						<label class="control-label">Especificar</label>
						<input type="text" class="form-control" type="text" name="hospitalization_details" placeholder="Si ha sufrido" value="{{ isset($pet) ? $pet->hospitalization_details : '' }}">
				</div>
			</div>

			<div class="row" style="display: flex; gap: 8px; margin-top: 15px;">
				<div class="col-md-4">
					<div class="radio-container">
						<label class="control-label" for="name">¿Ha estado en algún curso de entrenamiento?</label>
						<ul class="radio">
							<li>
								<input type="radio" id="option-training-yes" name="training" value="1" {{ isset($pet) && $pet->training == '1' ? 'checked' : '' }}>
								<label for="option-training-yes">Si</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="option-training-no" name="training" value="0" {{ isset($pet) && $pet->training == '0' ? 'checked' : '' }}>
								<label for="option-training-no">No</label>
								<div class="check"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8" style="display: flex; gap: 60px;">
						<label class="control-label">Especificar</label>
						<input type="text" class="form-control" type="text" name="training_details" placeholder="¿Cuál?" value="{{ isset($pet) ? $pet->training_details : '' }}">
				</div>
			</div>

			<div class="row" style="display: flex; gap: 10px; margin-top: 20px;">
				<div class="col-md-6" style="display: flex; flex-direction: column;">
					<label class="control-label">Reglas de convivencia dentro de casa</label>
					<textarea class="form-control" name="indoor" rows="3" placeholder="Reglas de convivencia dentro de casa">{{ isset($pet) ? $pet->indoor : '' }}</textarea>
				</div>

				<div class="col-md-6" style="display: flex; flex-direction: column;">
					<label class="control-label">Reglas de convivencia fuera de casa</label>
					<textarea class="form-control" name="outdoor" rows="3" placeholder="Reglas de convivencia fuera de casa">{{ isset($pet) ? $pet->outdoor : '' }}</textarea>
				</div>
			</div>

			<div class="row" style="display: flex; gap: 10px; margin-top: 20px;">
				<div  class="col-md-4" style="display: flex; gap: 8px;">
					<label for="name">¿Cómo llegó a casa?</label>
					<select class="form-control" name="arrive" id="arrive">
						<option value="">Seleccione</option>
						<option value="comprado" {{ isset($pet) && $pet->arrive == 'comprado' ? 'selected' : '' }}>Comprado</option>
						<option value="adopcion" {{ isset($pet) && $pet->arrive == 'adopcion' ? 'selected' : '' }}>Adopción</option>
						<option value="regalo" {{ isset($pet) && $pet->arrive == 'regalo' ? 'selected' : '' }}>Regalo</option>
						<option value="crianza" {{ isset($pet) && $pet->arrive == 'crianza' ? 'selected' : '' }}>Crianza</option>
					</select>
				</div>

				<div  class="col-md-4" style="display: flex; gap: 8px;">
					<label for="name">Conducta con perros</label>
					<select class="form-control" name="behavior_dogs" id="behavior_dogs">
						<option value="">Seleccione</option>
						<option value="buena" {{ isset($pet) && $pet->behavior_dogs == 'buena' ? 'selected' : '' }}>Buena</option>
						<option value="regular" {{ isset($pet) && $pet->behavior_dogs == 'regular' ? 'selected' : '' }}>Regular</option>
						<option value="mala" {{ isset($pet) && $pet->behavior_dogs == 'mala' ? 'selected' : '' }}>Malo</option>
					</select>
					</select>
				</div>

				<div  class="col-md-4" style="display: flex; gap: 8px;">
					<label for="name">Conducta con personas</label>
					<select class="form-control" name="behavior_people" id="behavior_people">
						<option value="">Seleccione</option>
						<option value="buena" {{ isset($pet) && $pet->behavior_people == 'buena' ? 'selected' : '' }}>Buena</option>
						<option value="regular" {{ isset($pet) && $pet->behavior_people == 'regular' ? 'selected' : '' }}>Regular</option>
						<option value="mala" {{ isset($pet) && $pet->behavior_people == 'mala' ? 'selected' : '' }}>Malo</option>
					</select>
				</div>
			</div>

			<div class="row" style="display: flex; gap: 10px; margin-top: 20px;">
				<div class="col-md-6" style="display: flex; flex-direction: column;">
					<label class="control-label">Observaciones</label>
					<textarea class="form-control" name="observation" rows="3" placeholder="Observaciones" >{{ isset($pet) ? $pet->observation : '' }}</textarea>
				</div>

				<div class="col-md-6" style="display: flex; flex-direction: column;">
					<label class="control-label">Recomendaciones</label>
					<textarea class="form-control" name="recommendation" rows="3" placeholder="Recomendaciones" >{{ isset($pet) ? $pet->recommendation : '' }}</textarea>
				</div>
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

				<div class="row" style=" gap: 8px; margin-top: 15px;">

					<div class="col-md-6" style="display: flex; gap: 10px; margin-top: 15px;">

					<label for="service_id">Seleccione el servicio que desea contratar</label>
						<select class="form-control" name="service_id" id="service_id">
							<option value="">Seleccione su servicio</option>
							@foreach ($services as $service)
							<option value="{{ $service->id }}">{{ $service->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="col-md-6" style="display: flex; gap: 20px; margin-bottom: 15px;">
						<label for="payment_method_id">Seleccione su método de pago</label>
						<select class="form-control" name="payment_method_id" id="payment_method_id">
							<option value="">Seleccione el método de pago</option>
							@foreach ($payment_methods as $payment_method)
							<option value="{{ $payment_method->id }}">{{ $payment_method->name }}</option>
							@endforeach
						</select>
					</div>

				</div>
				<div class="row " style="">

					<div  class="col-md-6" style="display: flex; gap: 10px; margin-top: 15px;">
						<label class="control-label" for="name">Unidad de servicio</label>
						<input type="number" class="form-control" name="service_unit" placeholder="Unidad de servicio" value="">
					</div>
				</div>
			</div>
	<button type="submit" class="btn btn-primary" name="action" value="save_data">Enviar</button>
</form>

@endsection

