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
        <form action="{{route('shortLink.store')}}" method="post">
            @csrf
            <div class="input-group mt-5 mb-3">
                <input type="text" name ='link' class="form-control" placeholder="Put link">
                <input type="submit" value="submit" class="btn btn-outline-secondary">
            </div>
        </form>
        @if(session('success'))
        <div class="alert alert-success d-flex justify-content-between">
            <div>A simple success alert—check it out!</div>
            <div class="stretched-link">X</div>
        </div>
        @endif
        <div class="alert alert-danger d-flex justify-content-between">
            <div>A simple danger alert—check it out!</div>
            <div class="stretched-link">X</div>
        </div>
        @if($links->count())
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>shot link</th>
                    <th>link</th>
                </tr>
            </thead>
            <tbody>
                @foreach($links as $link)
                <tr>
                    <th>
                        <a href="{{route('shortLink.redirect', $link->short_link)}}">
                        {{$link->short_link}}
                        </a>
                    </th>
                    <th>
                        <a href="{{$link->link}}">
                        {{$link->link}}
                        </a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-success d-flex justify-content-between">
            <div>пусто</div>
            <div class="stretched-link">X</div>
        </div>
    `   @endif
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