<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\Pro\projet1\resources\css\style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <h1><marquee>BIENVENUE A LA LP GL G3 VOICI LA LISTE DES FORMATIONS </marquee></h1>
  <div class="container mt-5">
  <div class="row">
  
  <div class="card-body">

<table class="table table-striped table-border table table-hover ">
<thead class="thead-dark">
  <tr>
      <th  >Id</th>
      <th  >NomFormation</th>
    </tr>
</thead>
  <tbody>
@foreach($liste as $formation)
    <tr>
      <td>{{$formation->id}}</td>
      <td>{{$formation->nomFormations}}</td>
    </tr> 
@endforeach


    </tbody>
</table>
</div>
  </div>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  

  </body>
</html>
