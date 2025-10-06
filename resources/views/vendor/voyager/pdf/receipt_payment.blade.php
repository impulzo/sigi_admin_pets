<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de Pago</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 210mm;
            height: 297mm;
            font-size: 70%;
        }
        .receipts-container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .receipt {
            width: 210mm;
            height: 148.5mm;
            padding: 10px;
            box-sizing: border-box;
            position: relative;
        }
        .receipt:first-child {
            border-bottom: 1px dashed #000;
        }
        .header {
            text-align: center;
            margin-bottom: 10px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
        }
        .logo {
            max-width: 100px;
            margin-bottom: 5px;
        }
        .receipt-info {
            margin-bottom: 10px;
        }
        .section {
            margin-bottom: 8px;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 3px;
            font-size: 110%;
        }
        .footer {
            margin-top: 15px;
            text-align: center;
            border-top: 1px dashed #000;
            padding-top: 5px;
            font-size: 90%;
        }
        .total {
            font-size: 110%;
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }
        .copy-label {
            position: absolute;
            top: 0;
            right: 0;
            background: #000;
            color: white;
            padding: 2px 5px;
            font-size: 80%;
        }
    </style>
</head>
<body>
    <div class="receipts-container">
        <!-- Original -->
        <div class="receipt">
            <div class="header">
                <img src="https://app.casawuauyacan.com.mx/settings/December2024/h3pCHPiE2jZjxTbItvU6.png" alt="Logo" class="logo">
                <h2>RECIBO DE PAGO</h2>
                <p>Fecha: {{ \Carbon\Carbon::parse($receipt->date)->format('d/m/Y') }}</p>
            </div>

            <div class="receipt-info">
                <div class="section">
                    <div class="section-title">Datos del Cliente</div>
                    <p>Nombre: {{ $receipt->customer->full_name }}</p>
                    <p>Dirección: {{ $receipt->customer->address }}</p>
                    <p>Teléfono: {{ $receipt->customer->phone }}</p>
                </div>

                <div class="section">
                    <div class="section-title">Datos de la Mascota</div>
                    <p>Nombre: {{ $receipt->pet->name }}</p>
                    <p>Raza: {{ $receipt->pet->race }}</p>
                </div>

                <div class="section">
                    <div class="section-title">Detalles del Servicio</div>
					@if($receipt->concepts)
                            <p>Concepto(s): {{ implode(', ', json_decode($receipt->concepts, true)) }}</p>
                        @endif
                    @foreach($receipt->services as $service)
                        <p>Servicio: {{ $service->name }} .............. {{ $service->pivot->service_unit ?? $receipt->service_unit }} Unidad(es) </p>
                    @endforeach
                </div>
            </div>

            <div class="total">
                Total: ${{ number_format($receipt->amount, 2) }}
            </div>

            <div class="footer">
                <p>Gracias por su preferencia</p>
                <p>Este recibo es un comprobante de pago</p>
            </div>
        </div>

        <!-- Copia -->
        <div class="receipt">
            <div class="copy-label">COPIA CLIENTE</div>
            <div class="header">
                <img src="https://app.casawuauyacan.com.mx/settings/December2024/h3pCHPiE2jZjxTbItvU6.png" alt="Logo" class="logo">
                <h2>RECIBO DE PAGO</h2>
                <p>Fecha: {{ \Carbon\Carbon::parse($receipt->date)->format('d/m/Y') }}</p>
            </div>

            <div class="receipt-info">
                <div class="section">
                    <div class="section-title">Datos del Cliente</div>
                    <p>Nombre: {{ $receipt->customer->full_name }}</p>
                    <p>Dirección: {{ $receipt->customer->address }}</p>
                    <p>Teléfono: {{ $receipt->customer->phone }}</p>
                </div>

                <div class="section">
                    <div class="section-title">Datos de la Mascota</div>
                    <p>Nombre: {{ $receipt->pet->name }}</p>
                    <p>Raza: {{ $receipt->pet->race }}</p>
                </div>

				<div class="section">
                    <div class="section-title">Detalles del Servicio</div>
					@if($receipt->concepts)
                            <p>Concepto(s): {{ implode(', ', json_decode($receipt->concepts, true)) }}</p>
                        @endif
                    @foreach($receipt->services as $service)
                        <p>Servicio: {{ $service->name }} .............. {{ $service->pivot->service_unit ?? $receipt->service_unit }} Unidad(es) </p>
                    @endforeach
                </div>
            </div>

            <div class="total">
                Total: ${{ number_format($receipt->amount, 2) }}
            </div>

            <div class="footer">
                <p>Gracias por su preferencia</p>
                <p>Este recibo es un comprobante de pago</p>
            </div>
        </div>
    </div>
</body>
</html>
