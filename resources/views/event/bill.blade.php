<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Factura de control Nº {{ $event->facture_code }}</title>
        <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">
        <style>
            @page { margin: 180px 50px; }
            #header {
                position: fixed;
                left: 0px;
                top: -140px;
                right: 0px;
                height: 150px;
                text-align: center;
            }
            #footer {
                position: fixed;
                left: 0px;
                bottom: -180px;
                right: 0px;
                height: 150px;
            }
            #footer .page:after {
                content: counter(page, upper-roman);
            }
        </style>
    </head>
    <body marginwidth="0" marginheight="0">
        <div id="header">
            <div style="float:left">
                <br>
                <b>Dirección completa</b>
                <br>
                <b>de la organización</b>
                <br>
                <b>INSERTE RIF AQUI</b>
            </div>
            <div style="float:right">
                <img src="{{ asset('assets/images/logo.png') }}" width="auto" height="100px">
            </div>
            <br>
            <div style="padding-top: 110px; text-align:center">
                <div style="float:left">
                    <b>Maturín, {{ $date }}</b>
                </div>
                <div style="float:right">
                    <b>Factura de control Nº {{ $event->facture_code }}</b>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="page-number"></div>
        </div>
        <table cellpadding="2" cellspacing="0" id="cabecera" border="1" width="100%" style="padding-top: 40px;">
            <tbody style="padding-top: 100px">
                <tr>
                    <td colspan="4">Nombre o razón social: {{ $event->name }}</td>
                </tr>
                <tr>
                    <td colspan="4">Domicilio fiscal: {{ $event->address }}</td>
                </tr>
                <tr>
                    <td colspan="2">Rif. / C.I: {{ $event->identification }}</td>
                    <td colspan="2">Teléfono: {{ $event->phone }}</td>
                </tr>
                <tr>
                    <td colspan="4">Correo: {{ $event->email }}</td>
                </tr>
                <tr>
                    <td colspan="2">Condición de pago: {{ $event->payment_method }}</td>
                    <td colspan="2">Nº referencia: {{ $event->reference_code }}</td>
                </tr>
                <tr>
                    <td align="center"><b>Cantidad</b></td>
                    <td align="center"><b>Descripción</b></td>
                    <td align="center"><b>Precio Unitario</b></td>
                    <td align="center"><b>Total</b></td>
                </tr>
                @foreach ($event->products as $data)
                <tr>
                    <td align="right">{{ $data->pivot->quantity }}</td>
                    <td>{{ $data->name }}</td>
                    <td align="right">{{ number_format($data->price, 2, ',', '.') }}</td>
                    <td align="right">{{ number_format($data->pivot->quantity * $data->price, 2, ',', '.') }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" align="right">SUB-TOTAL Bs.: {{ number_format($subtotal, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td colspan="4" align="right">IVA: {{ number_format($iva, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td colspan="4" align="right"><b>TOTAL BS.: {{ number_format($total, 2, ',', '.') }}</b></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
