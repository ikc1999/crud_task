<?php
require('connection.php');
?>
<html>
    <head>
        <title>User Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="card text-center">
                <div class="card-title">
                    <h2>User Login</h2>
                </div>
                <div class="card-body align-items-center d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" placeholder="User Name" required/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>