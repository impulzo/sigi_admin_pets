<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
			crossorigin="anonymous"
		/>
		<title>ADIESTRAMIENTO</title>
		<style>
			.row > * {
				padding-right: 2px !important;
				padding-left: 2px !important;
			}
			.title {
				font-size: 18pt;
				font-weight: bold;
				text-align: center;
				margin-top: 30px;
			}
			.logo {
				width: 100px;
				height: auto;
			}
			.box {
				border: 2px solid black;
				border-radius: 5px;
				padding: 5px;
				height: calc(100% - 10px);
				margin: 5px 0px;
			}
			.box > div {
				display: inline-flex;
			}
			.checks {
				width: 100%;
				display: flex;
				flex-direction: row;
				justify-content: space-between;
			}
			.radio-checks {
				display: flex;
				flex-direction: row;
			}
			.radio-option {
				border: 1px solid black;
				padding: 2px;
				width: 50%;
				margin-right: 2px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row header">
				<div class="col-8 title">FORMATO DE INSCRIPCIÓN</div>
				<div class="col-4">
					<img
						src="https://app.casawuauyacan.com.mx/settings/December2024/h3pCHPiE2jZjxTbItvU6.png"
						alt="logo"
						class="logo"
					/>
				</div>
			</div>
			<div class="row">
				<div class="col-12">Datos del propietario</div>
				<div class="col-7">
					<div class="box">
						Nombre: {{ $receipt->customer->full_name }}
					</div>
				</div>
				<div class="col-5">
					<div class="box">
						Teléfono: {{ $receipt->customer->phone }}
					</div>
				</div>
				<div class="col-12">
					<div class="box">
						Direccion: {{ $receipt->customer->address }}
					</div>
				</div>
				<div class="col-5">
					<div class="box">
						Redes sociales:
						<ul>
							<li>Facebook:</li>
							<li>Instagram:</li>
						</ul>
					</div>
				</div>
				<div class="col-7">
					<div class="box">
						Observaciones generales: {{ $receipt->pet->observation
						}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">Datos del alumno</div>
				<div class="col-5">
					<div class="row box">
						<div class="col-6">Nombre: {{ $receipt->pet->name }}</div>
						<div class="col-6">Sexo: {{ $receipt->pet->sex === 'masculino' ? 'Masculino' : 'Femenino' }}</div>
					</div>
				</div>
				<div class="col-7">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Collar:</div>
							<div class="radio-checks">
								<div class="radio-option" style="width: 50px">
									SI
									{{ $receipt->pet->necklace == 1 ? 'X' : ''}}
								</div>
								<div class="radio-option" style="width: 60px">
									NO
									{{ $receipt->pet->necklace == 0 ? 'X' : ''}}
								</div>
							</div>
						</div>
						<div class="details-check">
							Especificar: {{ $receipt->pet->necklace_details }}
						</div>
					</div>
				</div>
				<div class="col-5">
					<div class="box">Carnet:</div>
				</div>
				<div class="col-7">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Alergias:</div>
							<div class="radio-checks">
								<div class="radio-option" style="width: 50px">
									SI
									{{ $receipt->pet->allergy == 1 ? 'X' : ''}}
								</div>
								<div class="radio-option" style="width: 60px">
									NO
									{{ $receipt->pet->allergy == 0 ? 'X' : ''}}
								</div>
							</div>
						</div>
						<div class="details-check">
							Especificar: {{ $receipt->pet->allergy_details }}
						</div>
					</div>
				</div>
				<div class="col-5">
					<div class="row box">
						<div class="col-6">Raza: {{ $receipt->pet->race }}</div>
						<div class="col-6">Peso: {{ $receipt->pet->weight}}</div>
					</div>
				</div>
				<div class="col-7">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Fracturas:</div>
							<div class="radio-checks">
								<div class="radio-option" style="width: 50px">
									SI
									{{ $receipt->pet->fracture == 1 ? 'X' : ''}}
								</div>
								<div class="radio-option" style="width: 60px">
									NO
									{{ $receipt->pet->fracture == 0 ? 'X' : ''}}
								</div>
							</div>
						</div>
						<div class="details-check">
							Especificar: {{$receipt->pet->fracture_details}}
						</div>
					</div>
				</div>
				<div class="col-5">
					<div class="row box">Dieta (Alimento y Porción): {{$receipt->pet->food}}</div>
				</div>
				<div class="col-7">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Cicatrices:</div>
							<div class="radio-checks">
								<div class="radio-option" style="width: 50px">
									SI
									{{ $receipt->pet->scar == 1 ? 'X' : '' }}
								</div>
								<div class="radio-option" style="width: 60px">
									NO
									{{ $receipt->pet->scar == 0 ? 'X' : '' }}
								</div>
							</div>
						</div>
						<div class="details-check">
							Especificar: {{$receipt->pet->scar_details}}
						</div>
					</div>
				</div>
				<div class="col-5">
					<div class="box">
						Médico actual: {{$receipt->pet->medic}}
					</div>
				</div>
				<div class="col-7">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Hospitaliza-</br>ciones:</div>
							<div class="radio-checks">
								<div class="radio-option" style="width: 50px">
									SI
									{{ $receipt->pet->hospitalization == 1 ?'X' : '' }}
								</div>
								<div class="radio-option" style="width: 60px">
									NO
									{{ $receipt->pet->hospitalization == 0 ?'X' : '' }}
								</div>
							</div>
						</div>
						<div class="details-check">
							Especificar:
							{{$receipt->pet->hospitalization_details}}
						</div>
					</div>
				</div>
				<div class="col-5">
					<div class="box">
						Fecha de ingreso: {{$receipt->pet->admission_date}}
					</div>
				</div>
				<div class="col-7">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Conductas Agresivas:</div>
							<div class="radio-checks">
								<div class="radio-option" style="width: 50px">
									SI
									{{ $receipt->pet->is_aggressive == 1 ? 'X': '' }}
								</div>
								<div class="radio-option" style="width: 60px">
									NO
									{{ $receipt->pet->is_aggressive == 0 ? 'X': '' }}
								</div>
							</div>
						</div>
						<div class="details-check">
							Especificar:
							{{$receipt->pet->is_aggressive_details}}
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="box">Costo: {{$receipt->amount}}</div>
				</div>
				<div class="col-6">
					<div class="box">Duración: {{$receipt->service_unit}}</div>
				</div>
				<div class="col-6">
					<div class="box">
						Firma de recepción:
						<br />
						______________________
						<br />
						{{ Auth::user()->name }}
						<br />
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						Firma del propietario:
						<br />
						______________________
						<br />
						{{ $receipt->customer->full_name }}
						<br />
					</div>
				</div>
			</div>
			<!-- PAGE TWO-->
			<div style="break-after: page;"></div>
			<div class="row">
				<div class="col-6">
					Paseos por semana: {{ $receipt->pet->walk }}
				</div>
				<div class="col-3">
					<div class="box">Mañana: {{ $receipt->pet->morning}}</div>
				</div>
				<div class="col-3">
					<div class="box">Tarde: {{ $receipt->pet->afternoon}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-3">Horarios de comidas:</div>
				<div class="col-3">
					<div class="box">Mañana: {{ $receipt->pet->other_morning}}</div>
				</div>
				<div class="col-3">
					<div class="box">Tarde: {{ $receipt->pet->other_afternoon}}</div>
				</div>
				<div class="col-3">
					<div class="box">Noche: {{ $receipt->pet->night}}</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="box">
						Lugar que ocupa en casa: {{ $receipt->pet->house_place}}
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						¿Con cuántas personas vive? : {{$receipt->pet->housemates }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="box">
						Reglas de convivencia dentro de casa: {{ $receipt->pet->indoor}}
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						Reglas de convivencia fuera de casa (paseos): {{ $receipt->pet->outdoor}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="box">
						Recomendaciones generales: {{ $receipt->pet->recommendation}}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">¿Como llego a casa? :</div>
				<div class="col-3">
					<div class="checks">
						<div class="title-checks">Comprado:</div>
						<div class="radio-checks">
							<div class="radio-option" style="width: 50px; height: 30px;">
							{{ $receipt->pet->arrive === 'comprado' ? 'X' : '' }}
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="checks">
						<div class="title-checks">Adopción:</div>
						<div class="radio-checks">
							<div class="radio-option" style="width: 50px; height: 30px;">
							{{ $receipt->pet->arrive === 'adopcion' ? 'X' : '' }}
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="checks">
						<div class="title-checks">Regalo:</div>
						<div class="radio-checks">
							<div class="radio-option" style="width: 50px; height: 30px;">
							{{ $receipt->pet->arrive === 'regalo' ? 'X' : '' }}
							</div>
						</div>
					</div>
				</div>
				<div class="col-3">
					<div class="checks">
						<div class="title-checks">Crianza:</div>
						<div class="radio-checks">
							<div class="radio-option" style="width: 50px; height: 30px;">
							{{ $receipt->pet->arrive === 'crianza' ? 'X' : '' }}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">Conductas sociales con:</div>
				<div class="col-6">
					<div class="box row">
						<div class="col-12">Perros:</div>
						<div class="radio-checks col-4">
							<div class="radio-option" style="width: 90px">
								Bueno: {{ $receipt->pet->behavior_dogs === 'buena' ? 'X' : '' }}
							</div>
						</div>
						<div class="radio-checks col-4">
							<div class="radio-option" style="width: 90px">
								Regular: {{ $receipt->pet->behavior_dogs === 'regular' ? 'X' : '' }}
							</div>
						</div>
						<div class="radio-checks col-4">
							<div class="radio-option" style="width: 90px">
								Malo: {{ $receipt->pet->behavior_dogs === 'mala' ? 'X' : '' }}
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="box row">
						<div class="col-12">Personas:</div>
						<div class="radio-checks col-4">
							<div class="radio-option" style="width: 90px">
								Bueno: {{ $receipt->pet->behavior_people === 'buena' ? 'X' : '' }}
							</div>
						</div>
						<div class="radio-checks col-4">
							<div class="radio-option" style="width: 90px">
								Regular: {{ $receipt->pet->behavior_people === 'regular' ? 'X' : '' }}
							</div>
						</div>
						<div class="radio-checks col-4">
							<div class="radio-option" style="width: 90px">
								Malo: {{ $receipt->pet->behavior_people === 'mala' ? 'X' : '' }}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="box">
						¿Ha estado en algún curso de entrenamiento? :
						<div class="radio-option" style="width: 50px">
							SI: {{ $receipt->pet->training == 1 ? 'X' : ''}}
						</div>
						<div class="radio-option" style="width: 60px">
							NO: {{ $receipt->pet->training == 0 ? 'X' : ''}}
						</div>
						<br />
						Bajo que sistema de entreno: {{ $receipt->pet->training_details }}
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
