<html>
  <head>
    <title>Equazioni | secondo grado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>Equazioni di 2° GRADO </h2>
      <form method="GET">
        <div class="form-group">
          <label for="exampleInputNumber">Inserisci il coefficiente <b>a</b></label>
          <input type="number" class="form-control" id="exampleInputNumber" aria-describedby="emailHelp" name="a" required>
          <label for="exampleInputNumber1">Inserisci il coefficiente <b>b</b></label>
          <input type="number" class="form-control" id="exampleInputNumber1" aria-describedby="emailHelp" name="b" required>
          <label for="exampleInputNumber2">Inserisci il coefficiente <b>c</b></label>
          <input type="number" class="form-control" id="exampleInputNumber2" aria-describedby="emailHelp" name="c" required>
        </div>
        <button type="submit" name="submit" class="btn btn-outline-primary">Calcola</button>
      </form>
      <?php
        if (isset($_REQUEST['submit'])) {
          $a = ($_REQUEST['a']);
          $b = ($_REQUEST['b']);
          $c = ($_REQUEST['c']);
          if ($a != 0) {
            $result = ((-$b)+(sqrt((pow($b,2))-(4*$a*$c))))/(2*$a);
            echo "x1 = <b style='font-size:20px;'> $result </b><br>" ;
            $result2 = ((-$b)-(sqrt((pow($b,2))-(4*$a*$c))))/(2*$a);
            echo "x2 = <b style='font-size:20px;'> $result2 </b><br>" ;
          }
          else {
            echo "<b style='color:red;'>ATTENZIONE!</b> il coefficiente <b>a</b> non può essere = 0";
          }
        }
      ?> 
    </div>
  </body>
</html>