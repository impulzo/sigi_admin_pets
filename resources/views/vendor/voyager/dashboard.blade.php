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
<form action="{{ route('voyager.dashboard.store') }}" method="POST" class="container-fluid" target="_blank">
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
                        <option value="{{ $client->id }}">{{ $client->full_name }}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-primary" id="search_customer">Buscar cliente</button>
            </div>
        </div>

        <div style="gap: 8px;" class="col-md-12">
            <div class="row" style="gap: 8px;">
                <div class="col-md-4" style="display: flex; gap: 10px;">
                    <label class="control-label">Nombre (s)</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Nombre (s)">
                </div>
                <div class="col-md-4" style="display: flex; gap: 10px;">
                    <label class="control-label">Apellidos</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Apellidos">
                </div>
                <div class="col-md-4" style="display: flex; gap: 10px;">
                    <label class="control-label">Dirección</label>
                    <input type="text" class="form-control" name="address" placeholder="Dirección">
                </div>
            </div>

            <div class="row" style="gap: 8px;">
                <div class="col-md-4" style="display: flex; gap: 10px;">
                    <label class="control-label">Num. Teléfono</label>
                    <input type="text" class="form-control" name="phone" placeholder="Num. Teléfono">
                </div>
                <div class="col-md-4" style="display: flex; gap: 10px;">
                    <label class="control-label">Código postal</label>
                    <input type="number" class="form-control" name="postal_code" placeholder="Código postal">
                </div>
                <div class="col-md-4" style="display: flex;">
                    <label class="control-label">Seleccione su género</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="">Seleccione</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
            </div>

            <div class="row" style="display: flex; flex-direction: column; gap: 8px;">
                <div class="col-md-6" style="display: flex;">
                    <label class="control-label">Correo electrónico</label>
                    <input type="text" class="form-control" name="email" placeholder="Correo electrónico">
                </div>
            </div>
        </div>
    </div>
<!-- MASCOTA -->
 <div id="pet">
        <h1 class="page-title col-md-12">
            <i class="voyager-paw"></i>
            Añadir mascota
        </h1>

        <div class="col-md-7" style="gap: 8px; margin-bottom: 15px;">
            <div style="display: flex; gap: 10px;">
                <label for="pet_id" style="margin-top: 10px;">Seleccione su mascota</label>
                <select class="form-control" name="pet_id" id="pet_id" style="margin-top: 10px;">
                    <option value="">Seleccione</option>
                </select>
                <button type="button" class="btn btn-primary" id="search_pet">Buscar Mascota</button>
            </div>
        </div>
        <div class="col-md-12" id="pet_inputs">
            <div class="row" style="gap: 8px;">
        <div class="col-md-5" style="display: flex; gap: 10px;">
            <label class="control-label">Nombre (s)</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre (s)">
        </div>
        <div class="col-md-3" style="display: flex; gap: 10px;">
            <label class="control-label">Raza</label>
            <input type="text" class="form-control" name="race" placeholder="Raza">
        </div>
        <div class="col-md-4" style="display: flex; gap: 10px;">
            <label class="control-label">Sexo</label>
            <select class="form-control" name="sex">
                <option value="">Seleccione</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-5" style="display: flex; gap: 10px;">
            <label class="control-label">Dieta</label>
            <input type="text" class="form-control" name="food" placeholder="Dieta">
        </div>
        <div class="col-md-3" style="display: flex; gap: 10px;">
            <label class="control-label">Peso</label>
            <input type="text" class="form-control" name="weight" placeholder="Peso">
        </div>
        <div class="col-md-4" style="display: flex; gap: 10px;">
            <label class="control-label">Imagen</label>
            <input type="file" class="form-control-file" name="photo" accept="image/*">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-4">
            <label class="control-label">Num. de paseos por semana</label>
            <input type="number" class="form-control" name="walk" min="0">
        </div>
        <div class="col-md-3">
            <label class="control-label">Cumpleaños</label>
            <input type="date" class="form-control" name="birthdate">
        </div>
        <div class="col-md-5">
            <label class="control-label">Horario de comida: Mañana</label>
            <input type="time" class="form-control" name="other_morning">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-5">
            <label class="control-label">Num. de paseos en la mañana</label>
            <input type="number" class="form-control" name="morning" min="0">
        </div>
        <div class="col-md-3">
            <label class="control-label">Fecha de admisión</label>
            <input type="date" class="form-control" name="admission_date">
        </div>
        <div class="col-md-4">
            <label class="control-label">Horario de comida: Tarde</label>
            <input type="time" class="form-control" name="other_afternoon">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-5">
            <label class="control-label">Num. de paseos en la tarde</label>
            <input type="number" class="form-control" name="afternoon" min="0">
        </div>
        <div class="col-md-3">
            <label class="control-label">Lugar que ocupa en casa</label>
            <input type="text" class="form-control" name="house_place" placeholder="¿Dónde duerme?">
        </div>
        <div class="col-md-4">
            <label class="control-label">Horario de comida: Noche</label>
            <input type="time" class="form-control" name="night">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-4">
            <label class="control-label">Médico actual</label>
            <input type="text" class="form-control" name="medic" placeholder="¿Quién atiende?">
        </div>
        <div class="col-md-3">
            <label class="control-label">Personas con las que vive</label>
            <input type="number" class="form-control" name="housemates" min="0">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-4">
            <label>¿Es agresivo?</label>
            <div>
                <input type="radio" name="is_aggressive" value="1"> Sí
                <input type="radio" name="is_aggressive" value="0"> No
            </div>
            <input type="text" class="form-control" name="is_aggressive_details" placeholder="Si es agresivo">
        </div>

        <div class="col-md-4">
            <label>¿Tiene collar?</label>
            <div>
                <input type="radio" name="necklace" value="1"> Sí
                <input type="radio" name="necklace" value="0"> No
            </div>
            <input type="text" class="form-control" name="necklace_details" placeholder="Color, tamaño, adorno...">
        </div>

        <div class="col-md-4">
            <label>Alergias</label>
            <div>
                <input type="radio" name="allergy" value="1"> Sí
                <input type="radio" name="allergy" value="0"> No
            </div>
            <input type="text" class="form-control" name="allergy_details" placeholder="Si es alérgico">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-4">
            <label>Fracturas</label>
            <div>
                <input type="radio" name="fracture" value="1"> Sí
                <input type="radio" name="fracture" value="0"> No
            </div>
            <input type="text" class="form-control" name="fracture_details" placeholder="Si tiene alguna">
        </div>

        <div class="col-md-4">
            <label>Cicatrices</label>
            <div>
                <input type="radio" name="scar" value="1"> Sí
                <input type="radio" name="scar" value="0"> No
            </div>
            <input type="text" class="form-control" name="scar_details" placeholder="Forma, tamaño, dolor...">
        </div>

        <div class="col-md-4">
            <label>Hospitalizaciones</label>
            <div>
                <input type="radio" name="hospitalization" value="1"> Sí
                <input type="radio" name="hospitalization" value="0"> No
            </div>
            <input type="text" class="form-control" name="hospitalization_details" placeholder="Si ha sufrido">
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-4">
            <label>Curso de entrenamiento</label>
            <div>
                <input type="radio" name="training" value="1"> Sí
                <input type="radio" name="training" value="0"> No
            </div>
            <input type="text" class="form-control" name="training_details" placeholder="¿Cuál?">
        </div>

        <div class="col-md-8">
            <label>Reglas de convivencia dentro de casa</label>
            <textarea class="form-control" name="indoor" rows="3"></textarea>

            <label>Reglas de convivencia fuera de casa</label>
            <textarea class="form-control" name="outdoor" rows="3"></textarea>
        </div>
    </div>

    <div class="row" style="gap: 8px; margin-top: 15px;">
        <div class="col-md-4">
            <label>¿Cómo llegó a casa?</label>
            <select class="form-control" name="arrive">
                <option value="">Seleccione</option>
                <option value="comprado">Comprado</option>
                <option value="adopcion">Adopción</option>
                <option value="regalo">Regalo</option>
                <option value="crianza">Crianza</option>
            </select>
        </div>

        <div class="col-md-4">
            <label>Conducta con perros</label>
            <select class="form-control" name="behavior_dogs">
                <option value="">Seleccione</option>
                <option value="buena">Buena</option>
                <option value="regular">Regular</option>
                <option value="mala">Mala</option>
            </select>
        </div>

        <div class="col-md-4">
            <label>Conducta con personas</label>
            <select class="form-control" name="behavior_people">
                <option value="">Seleccione</option>
                <option value="buena">Buena</option>
                <option value="regular">Regular</option>
                <option value="mala">Mala</option>
            </select>
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
				<div class="row" style=" gap: 8px; margin-top: 15px;">

					<div class="col-md-6" style="display: flex; gap: 10px; margin-top: 15px;">

					<label for="service_id">Seleccione el servicio que desea contratar</label>
						<select class="form-control" name="service_id" id="service_id">
							<optºion value="">Seleccione su servicio</option>
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
			<!-- Sección de Conceptos -->
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-12">
							<label for="concept">Conceptos</label>
							<div class="input-group">
								<input type="text" class="form-control" id="concept" placeholder="Ingrese un concepto">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button" id="addConcept">
										<i class="voyager-plus"></i> Añadir
									</button>
								</span>
							</div>

							<div id="conceptsList" style="margin-top: 15px;">
							</div>
							<input type="hidden" name="concepts" id="conceptsInput">
						</div>
					</div>

					<script>
						document.addEventListener('DOMContentLoaded', function() {
						const customerSelect = document.getElementById('customer_id');
						const searchCustomerBtn = document.getElementById('search_customer');
						const petSelect = document.getElementById('pet_id');
						const searchPetBtn = document.getElementById('search_pet');

						searchCustomerBtn.addEventListener('click', function() {
							const customerId = customerSelect.value;
							if(!customerId) return;

							fetch(`/customers/${customerId}`)
								.then(res => res.json())
								.then(customer => {
									document.querySelector('input[name="first_name"]').value = customer.first_name ?? '';
									document.querySelector('input[name="last_name"]').value = customer.last_name ?? '';
									document.querySelector('input[name="address"]').value = customer.address ?? '';
									document.querySelector('input[name="phone"]').value = customer.phone ?? '';
									document.querySelector('input[name="postal_code"]').value = customer.postal_code ?? '';
									document.querySelector('select[name="gender"]').value = customer.gender ?? '';
									document.querySelector('input[name="email"]').value = customer.email ?? '';
									petSelect.innerHTML = '<option value="">Seleccione</option>';
									customer.pets.forEach(p => {
										const opt = document.createElement('option');
										opt.value = p.id;
										opt.textContent = p.name;
										petSelect.appendChild(opt);
									});
								});
						});
						searchPetBtn.addEventListener('click', function() {
    const petId = petSelect.value;
    if(!petId) return;

    fetch(`/pets/${petId}`)
        .then(res => res.json())
        .then(pet => {
            const inputs = document.querySelectorAll('#pet_inputs [name]');
            inputs.forEach(input => {
                const fieldName = input.name;
                if (pet[fieldName] !== undefined && pet[fieldName] !== null) {
                    if (input.type === 'radio') {
                        const radio = document.querySelector(`#pet_inputs input[name="${fieldName}"][value="${pet[fieldName]}"]`);
                        if (radio) radio.checked = true;
                    } else if (input.tagName === 'SELECT') {
                        input.value = pet[fieldName];
                    } else if (input.tagName === 'TEXTAREA') {
                        input.value = pet[fieldName];
                    } else if (input.type === 'file') {
                    } else {
                        input.value = pet[fieldName];
                    }
                }
            });
        });
});
					});
						document.addEventListener('DOMContentLoaded', function() {
							const conceptInput = document.getElementById('concept');
							const addButton = document.getElementById('addConcept');
							const conceptsList = document.getElementById('conceptsList');
							const conceptsInput = document.getElementById('conceptsInput');
							let concepts = [];

							// Cargar conceptos existentes si los hay
							@if(isset($concepts) && is_array($concepts))
								concepts = @json($concepts);
								updateConceptsList();
							@endif

							addButton.addEventListener('click', function() {
								const concept = conceptInput.value.trim();
								if (concept !== '') {
									concepts.push(concept);
									conceptInput.value = '';
									updateConceptsList();
								}
							});

							// Agregar concepto al presionar Enter
							conceptInput.addEventListener('keypress', function(e) {
								if (e.key === 'Enter') {
									e.preventDefault();
									addButton.click();
								}
							});

							function updateConceptsList() {
								conceptsList.innerHTML = '';
								concepts.forEach((concept, index) => {
									const conceptElement = document.createElement('div');
									conceptElement.className = 'alert alert-info alert-dismissible';
									conceptElement.style.marginTop = '10px';
									conceptElement.innerHTML = `
										${concept}
										<button type="button" class="close" data-dismiss="alert" onclick="removeConcept(${index})">
											<span aria-hidden="true">&times;</span>
										</button>
									`;
									conceptsList.appendChild(conceptElement);
								});

								// Actualizar el input oculto con los conceptos como JSON
								conceptsInput.value = JSON.stringify(concepts);
							}

							// Función global para eliminar conceptos
							window.removeConcept = function(index) {
								concepts.splice(index, 1);
								updateConceptsList();
							};
						});

					</script>
					<button type="submit" class="btn btn-primary" name="action" value="save_data" style="margin-top: 20px;">Enviar</button>
				</div>
</form>
@endsection
