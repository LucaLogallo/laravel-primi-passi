<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>

    .container h1 {
      color: #f35626;
      background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      -webkit-animation: hue 60s infinite linear;
    }

    button{
      padding: 10px;
      margin: 20px
    }

    button a{
      text-decoration: none;
    }
    
  </style>
  <title>Document</title>
</head>
<body>
  <h1>Tipi di penne</h1>
  <div class="container">
    <ul>
      @foreach ($penne as $penna)
        <li>{{$penna['tipo']}}</li>        
      @endforeach
    </ul>
  </div>
  <h1>penne che hanno un prezzo basso</h1>
  <div class="container">
    <ul>
      @foreach ($penne as $penna)
        @if ($penna['costo'] === "basso")
          <li>{{$penna['tipo']}}||
              {{$penna['materiale']}}||
              {{$penna['livello_popolarita']}}||
              {{$penna['costo']}}
          </li>
        @endif
      @endforeach
    </ul>
  </div>
  <h1>penne che hanno un prezzo medio-basso</h1>
  <div class="container">
    <ul>
      @foreach ($penne as $penna)
        @if ($penna['costo'] === "basso")
          <li>{{$penna['tipo']}}||
              {{$penna['materiale']}}||
              {{$penna['livello_popolarita']}}||
              {{$penna['costo']}}
          </li>
        @endif
      @endforeach
    </ul>
  </div>
  <h1>penne che hanno un prezzo alto</h1>
  <div class="container">
    <ul>
      @foreach ($penne as $penna)
        @if ($penna['costo'] === "basso")
          <li>{{$penna['tipo']}}||
              {{$penna['materiale']}}||
              {{$penna['livello_popolarita']}}||
              {{$penna['costo']}}
          </li>
        @endif
      @endforeach
    </ul>
  </div>

  <button>
    <a href="http://127.0.0.1:8000/">HOME</a>
  </button>
</body>
</html>