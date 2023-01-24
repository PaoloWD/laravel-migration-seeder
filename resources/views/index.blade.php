<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Treni in partenza oggi</h3>
        @foreach ($trainsToday as $train)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$train->agency}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Stazione di partenza: {{$train->departure_station}}</h6>
              <p class="card-text">Stazione di arrivo: {{$train->arrival_station}}</p>
              <p class="card-text">Data di partenza: {{$train->departure_time}}</p>
              <p class="card-text">Data di arrivo: {{$train->arrival_time}}</p>
            </div>
          </div>
        @endforeach
    </div>
</body>
</html>