<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>New Player</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2 class="text-center mb-4">Add new player</h2>
                <form action="<?= base_url('/player/create') ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Club</label>
                        <input name="club" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input name="price" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Attack</label>
                        <input name="attack" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Defense</label>
                        <input name="defense" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Stamina</label>
                        <input name="stamina" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Aggression</label>
                        <input name="aggression" type="number" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>