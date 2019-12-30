<html>
    <head><title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Comun -->
        @include('nav')
        <br>
        <center>
        <div class="list-group">
        @foreach($materias as $materia)
            <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $materia->nombre }} <span class="badge badge-secondary">{{$materia->sigla}}</span> </h5>
                <p class="card-text">Creditos: {{$materia->creditos}}</p>
                <a href="/Materia/{{$materia->id}}" class="btn btn-primary">Ver</a>
            </div>
            </div>
        @endforeach
        </div>
        <center>
    </body>
</html>