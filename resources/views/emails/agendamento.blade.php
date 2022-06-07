<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <link rel="shortcut icon" href="/oficial/assets/img/fiveicon13.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta</title>
</head>
<body>
<div>


<p>
    Saudações <b>Prototipos</b>
<p>
<p>
    O(a) Entidade <strong>{{$entidade}} </strong> solicita o agendamento de uma reunião do serviço {{$servico}}

       
</p>
    <ul>
        <li>
            <b>Entidade</b>: {{$entidade}}
        </li>
        <li>
            <b>Email</b>: {{$email}}
        </li>
        <li>
            <b>Contacto</b>: {{$contacto}}
        </li>
        <li>
            <b>Serviço</b>: {{$servico}}
        </li>
        <li>
            <b>Data</b>: {{$data}}
        </li>
        <li>
            <b>Horário</b> {{$horario}}
        </li>
        <li>
            <b>Mensagem</b>: {{$mensagem}}
        </li>
    </ul>

<p>
    Obrigado
</p>

<br>

<hr>
Email enviado em {{date('d/m/Y H:i:s')}}

</div>
</body>
</html>  