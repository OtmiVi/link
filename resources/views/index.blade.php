<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <div class="input-group mt-5 mb-3">
                <input type="text" class="form-control" placeholder="Put link">
                <input type="submit" value="submit" class="btn btn-outline-secondary">
            </div>
        </form>
        <div class="alert alert-success d-flex justify-content-between">
            <div>A simple success alert—check it out!</div>
            <div class="stretched-link">X</div>
        </div>
        <div class="alert alert-danger d-flex justify-content-between">
            <div>A simple danger alert—check it out!</div>
            <div class="stretched-link">X</div>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>shot link</th>
                    <th>link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ffef3</th>
                    <th>test/com</th>
                </tr>
                <tr>
                    <th>ffef3</th>
                    <th>test/com</th>
                </tr>
                <tr>
                    <th>ffef3</th>
                    <th>test/com</th>
                </tr>
                <tr>
                    <th>ffef3</th>
                    <th>test/com</th>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        const buttons = document.querySelectorAll(".stretched-link");
        buttons.forEach(function(button) {
            button.addEventListener('click', function(){
                button.parentElement.remove();
            });
        });
    </script>
</body>
</html>