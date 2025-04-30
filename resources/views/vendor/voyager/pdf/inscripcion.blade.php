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
				font-size: 22pt;
				font-weight: bold;
				text-align: center;
				margin-top: 8%;
			}
			.logo {
				width: 20vw;
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
				width: 40%;
				display: flex;
				flex-direction: column;
			}
			.radio-checks {
				display: flex;
				flex-direction: row;
			}
			.radio-option {
				border: 1px solid black;
				padding: 5px;
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
					<div class="box">Nombre: {{ $receipt->customer->full_name }}</div>
				</div>
				<div class="col-5">
					<div class="box">Telefono: {{ $receipt->customer->phone }}</div>
				</div>
				<div class="col-12">
					<div class="box">Direccion: {{ $receipt->customer->address }}</div>
				</div>
				<div class="col-5">
					<div class="box">
						Redes sociales:
						<ul>
							<li>Facebook:</li>
							<li>Instagram: </li>
						</ul>
					</div>
				</div>
				<div class="col-7">
					<div class="box">
						Observaciones generales: {{ $receipt->pet->observation }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">Datos del alumno</div>
				<div class="col-6">
					<div class="box">Nombre: {{ $receipt->pet->name }}</div>
				</div>
				<div class="col-6">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Collar:</div>
							<div class="radio-checks">
								<div class="radio-option">SI <?= $receipt->pet->necklace == 1 ? 'X' : '' ?></div>
								<div class="radio-option">NO <?= $receipt->pet->necklace == 0 ? 'X' : '' ?></div>
							</div>
						</div>
						<div class="details-check">Especificar: {{ $receipt->pet->necklace_details }}</div>
					</div>
				</div>
				<div class="col-6">
					<div class="box">Carnet:</div>
				</div>
				<div class="col-6">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Alergias:</div>
							<div class="radio-checks">
								<div class="radio-option">SI <?= $receipt->pet->allergy == 1 ? 'X' : '' ?></div>
								<div class="radio-option">NO <?= $receipt->pet->allergy == 0 ? 'X' : '' ?></div>
							</div>
						</div>
						<div class="details-check">Especificar: {{ $receipt->pet->allergy_details }}</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row box">
						<div class="col-6">Raza: {{ $receipt->pet->race }}</div>
						<div class="col-6">Peso: {{ $receipt->pet->weight}}</div>
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Fracturas:</div>
							<div class="radio-checks">
								<div class="radio-option">SI <?= $receipt->pet->fracture == 1 ? 'X' : '' ?></div>
								<div class="radio-option">NO <?= $receipt->pet->fracture == 0 ? 'X' : '' ?></div>
							</div>
						</div>
						<div class="details-check">Especificar: {{$receipt->pet->fracture_details}}</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row box">
						<div class="col-12">Alimento:</div>
						<div class="col-12" style="margin-top: 10px">
							Porción:
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Cicatrices:</div>
							<div class="radio-checks">
								<div class="radio-option">SI <?= $receipt->pet->scar == 1 ? 'X' : '' ?></div>
								<div class="radio-option">NO <?= $receipt->pet->scar == 0 ? 'X' : '' ?></div>
							</div>
						</div>
						<div class="details-check">Especificar: {{$receipt->pet->scar_details}}</div>
					</div>
				</div>
				<div class="col-6">
					<div class="box">Médico actual: {{$receipt->pet->medic}} </div>
				</div>
				<div class="col-6">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Hospitalizaciones:</div>
							<div class="radio-checks">
								<div class="radio-option">SI <?= $receipt->pet->hospitalization == 1 ? 'X' : '' ?></div>
								<div class="radio-option">NO <?= $receipt->pet->hospitalization == 0 ? 'X' : '' ?></div>
							</div>
						</div>
						<div class="details-check">Especificar: {{$receipt->pet->hospitalization_details}}</div>
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						Costo por semana:
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						<div class="checks">
							<div class="title-checks">Conductas Agresivas:</div>
							<div class="radio-checks">
								<div class="radio-option">SI <?= $receipt->pet->is_aggressive == 1 ? 'X' : '' ?></div>
								<div class="radio-option">NO <?= $receipt->pet->is_aggressive == 0 ? 'X' : '' ?></div>
							</div>
						</div>
						<div class="details-check">Especificar: {{$receipt->pet->is_aggressive_details}}</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="box">
						Fecha de ingreso: {{$receipt->pet->admission_date}}
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						Duración del curso:
					</div>
				</div>
				<div class="col-6">
					<div class="box">
						Firma de recepción:
						<br />
						<br />
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
						<br />
						<br />
						______________________
						<br />
						{{ $receipt->customer->full_name }}
						<br />
					</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
