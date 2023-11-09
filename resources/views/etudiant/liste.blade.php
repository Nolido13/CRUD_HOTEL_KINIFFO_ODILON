<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MON CRUD</title>
</head>
<body>


    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>MON CRUD</h1>
                <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                            <td>1</td>
                            <td>JOH</td>
                            <td>Marc</td>
                            <td>4eme</td>
                            <td>
                                <a href="#" class="btn btn-info">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                       </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
</html>
