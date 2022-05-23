<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>

    <h1>STAZIONE TRENI</h1>
    @foreach ($arrayTreni as $treno)
        <div class="train">
            @if ($treno->in_orario === 1)
                <div>
                    <strong>
                        <h2>TRENO IN PARTENZA</h2>
                    </strong>
                    <strong>
                        <h3>Treno n. {{ $treno->codice_treno }} </h3>
                    </strong>
                </div>
            @else
                <strong>
                    <h2>TRENO CANCELLATO</h2>
                </strong>
                <strong>
                    <h3>Treno n. {{ $treno->codice_treno }} </h3>
                </strong>
            @endif
            <p>In partenza da: {{ $treno->stazione_di_partenza }}</p>
            <p>Arrivo a {{ $treno->stazione_di_arrivo }}</p>
            <p>Orario di partenza {{ $treno->orario_di_partenza }}</p>
            <p>Orario di arrivo {{ $treno->orario_di_arrivo }}</p>

        </div>
    @endforeach


</body>


</html>
