<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJOUTER UN ETUDIANT</title>
</head>
<body>
    <h1>AJOUTER ETUDIANT</h1>
    <hr>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @endif

        <form action="/ajouter/traitement" method="POST" class="px-4 py-3">
            @csrf
          <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="Nom" name="nom">
          </div>
          <div class="mb-3">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="Prenom" name="prenom">
          </div>
          <div class="mb-3">
            <label for="Classe" class="form-label">Classe</label>
            <input type="text" class="form-control" id="Classe" name="classe">
          </div>


          <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
          <br> <br/>

          <a href="/etudiant" class="btn btn-danger">Revenir sur liste des etudiants</a>
        </form>



</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
</html>
