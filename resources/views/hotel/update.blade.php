<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MODIFIER LES INFORMATION DE RESERVATION</title>
</head>
<body>
    <h1>MODIFIER LES INFORMATIONS DE RESERVATION</h1>
    <hr>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @endif

       <ul>
            @foreach ($errors->all() as $error )
                <li class="alert alert-danger"> {{$error}} </li>
            @endforeach
       </ul>
      

        <form action="/update/traitement" method="POST" class="px-4 py-3">
            @csrf

            <input type="text" name="id" style="display: none;" value="{{$hotels->id}}">

            <div class="mb-3">
                <label for="nom_hotel" class="form-label">Nom de l'hotel</label>
                <input type="text" class="form-control" id="nom_hotel" name="nom_hotel" value="{{$hotels->nom_hotel}}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description de l'hotel</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$hotels->description}}">
              </div>
              <div class="mb-3">
                <label for="nom_chambre" class="form-label">Nom de chambre</label>
                <input type="text" class="form-control" id="nom_chambre" name="nom_chambre" value="{{$hotels->nom_chambre}}">
              </div>
              <div class="mb-3">
                <label for="Prix" class="form-label">Prix</label>
                <input type="number" class="form-control" id="Prix" name="Prix" value="{{$hotels->Prix}}">
              </div>
              <div class="mb-3">
                <label for="Nombre_lits" class="form-label">Nombre de lits</label>
                <input type="nimber" class="form-control" id="Nombre_lits" name="Nombre_lits" value="{{$hotels->Nombre_lits}}">
              </div>
              <div class="mb-3">
                <label for="Max_adult" class="form-label">Max d'adulte</label>
                <input type="number" class="form-control" id="Max_adult" name="Max_adult" value="{{$hotels->Max_adult}}">
              </div>
              <div class="mb-3">
                <label for="Enfant_max" class="form-label">Enfants maximum autorisé</label>
                <input type="number" class="form-control" id="Enfant_max" name="Enfant_max" value="{{$hotels->Enfant_max}}">
              </div>
              <div class="mb-3">
                <label for="Attribut" class="form-label">Attributs</label>
                <select name="Attribut" id="Attribut">
                    <option value=""></option>
                    <option value="{{$hotels->Attribut}}">Services de réveil</option>
                    <option value="{{$hotels->Attribut}}">Télévision</option>
                    <option value="{{$hotels->Attribut}}">Service de néttoyage</option>
                    <option value="{{$hotels->Attribut}}">Petit déjeuner</option>
                    
                  </select>
                  
                
              </div>
              <div class="mb-3">
                <label for="Status" class="form-label">Status</label>
                <select name="Status" id="Status">
                    <option value=""></option>
                    <option value="{{$hotels->Status}}">Disponible</option>
                    <option value="{{$hotels->Status}}">Non disponible</option>
                  </select>
                
              </div>

          <button type="submit" class="btn btn-primary">MODIFIER LES INFOS DE RESERVATION</button>
          <br> <br/>

          <a href="/hotel" class="btn btn-danger">Revenir sur liste des hotels</a>
        </form>



</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
</html>
