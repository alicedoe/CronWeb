<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Clar de luna - Campana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A responsive HTML5/PHP crontab manager.">
    <meta name="author" content="Fisher Innovation">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="nav-new active"><a href="#new" onclick="changePage('new');">Crear una novela tasca</a></li>
          <li class="nav-active"><a href="#active" onclick="changePage('active');">Tascas en cors</a></li>
        </ul>
        <h1><a onclick="changePage('new');">Clar de luna - Campana</a></h1>
      </div>

      <hr>

      <div id="new">
        <div class="row-fluid">
          <form>
          <div class="span6">
              <fieldset>
                <legend>Legenda</legend>
                <label>Minuta</label>
                <input class="add-minute" type="text" placeholder="0-59 ou *">
                
                <label>Ora</label>
                <input class="add-hour" type="text" placeholder="0-23 ou *">
                
                <label>Jorn (Mes)</label>
                <input class="add-daymonth" type="text" placeholder="0-31 ou *">

                <label>Mes</label>
                <input class="add-month" type="text" placeholder="0-12 ou *">

                <label>Jorn (Setmana)</label>
                <input class="add-dayweek" type="text" placeholder="0-6 ou *">
              </fieldset>
          </div>

          <div class="span6">
            <h4>Comanda a faire</h4>
            <p>Picar una comanda a faire sul sistemi (utilisator : www-data), o la referencia cap a un script a faire.</p>
            <textarea class="add-command" style="width:100%;" rows="5"></textarea>
            <p>
              <a id="save-btn" class="btn btn-large btn-success">Salvagardar la novela tasca</a>
            </p>
          </div>
          </form>
        </div>
      </div>

      <div id="active">
        <h3>Tascas en cors</h3>
        <p><a class="btn btn-danger delete-all-btn">Escafar totas las tascas</a></p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Minuta</th>
              <th>Ora</th>
              <th>Jorn (Mes)</th>
              <th>Mes</th>
              <th>Jorn (Setmana)</th>
              <th>Comanda</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="active-job-list">
          </tbody>
        </table>
      </div>

        <hr>

        <div class="footer">
          <p>&copy; <?php echo date('Y'); ?> <a href="http://www.fisherinnovation.com" target="_blank">Fisher Innovation</a></p>
        </div>
      </div>
    </div>

    <script src="js/jquery-1.9.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
