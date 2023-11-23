<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESERVATION HOTEL</title>
</head>
<body>


    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>RESERVATION HOTEL</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">RESERVER L'HOTEL</a>
                <hr>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>

                @endif



                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Description de l'hotel</th>
                            <th>Nom de la chambre</th>
                            <th>Prix</th>
                            <th>Nombre de lits</th>
                            <th>Max d'adultes</th>
                            <th>Enfants maximum autorisé</th>
                            <th>Attributs</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $ide=1;
                        @endphp
                                       

                        @foreach ($hotels as $hotel )
                       <tr>
                            <td> {{$ide}} </td>
                            <td>{{$hotel->nom_hotel}}</td>
                            <td>{{$hotel->description}}</td>
                            <td>{{$hotel->nom_chambre}}</td>
                            <td>{{$hotel->Prix}}</td>
                            <td>{{$hotel->Nombre_lits}}</td>
                            <td>{{$hotel->Max_adult}}</td>
                            <td>{{$hotel->Enfant_max}}</td>
                            <td>{{$hotel->Attribut}}</td>
                            <td>{{$hotel->Status}}</td>
                            <td>
                                <a href="/update-hotel/{{$hotel->id}}" class="btn btn-info">Update</a>
                                <a href="/delete-hotel/{{$hotel->id}}" class="btn btn-danger">Delete</a>
                            </td>
                       </tr>
                       @php
                           $ide +=1;
                       @endphp
                       @endforeach ()
                    </tbody>
                </table>

                {{ $hotels ->links() }}

            </div>

        </div>
    </div>


</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
</html>
