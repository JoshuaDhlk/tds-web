<!doctype html>
<html lang="en">
  <head>
    <title>Contactez-moi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8 m-4">
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <div class="text-center">
                            <h1>Contactez-moi ! </h1>
                        </div>
                        <div class="d-flex">
                            <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                            <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                        <br/>
                        <textarea rows="10" name="message" placeholder="Votre message" class="form-control"></textarea>
                        <br/>
                        <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>