<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
</head>
<body>

    <div class="hero hero is-primary">
    <div class="hero-body">
        <h1 class="container title">Contact Details</h1>
    </div>
    <button class="button is-dark">
    <a href="{{url('/add')}}">
    Add New
    </a>
    </button>

    </div>
    @if(session('msg'))
        <div class="notification is-danger">
            {{session('msg')}}
        </div>
    @endif
        @foreach($use as $use)
        <div class="card" style="width: 18rem">
        <img src="public/upload/{{$use->image}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h3 class="card-text">{{$use->name}}</h3>
        <p class="card-text">{{$use->email}}</p>
        <button class="button is-primary"><a href="{{url('/edit/'.$use->id)}}">Edit</a></button>
        <button class="button is-danger"><a href="{{url('/delete/'.$use->id)}}">Delete</a></button>
            
        </div>
        </div>
        <!-- <div class="card">
            
            <img src="public/upload/{{$use->image}}" class="card-img-top"alt="">
            </div>
            <div class="card-body">

            
            <div class="card-title">
            {{$use->name}}
            </div>
            <div class="card-text">
            {{$use->email }}
            </div>
            <button class="button is-primary"><a href="{{url('/edit/'.$use->id)}}">Edit</a></button>
            <button class="button is-danger"><a href="{{url('/delete/'.$use->id)}}">Delete</a></button>
                </div>
                </div>
            </div>
            
        </div> 
        </div>-->
        
        @endforeach
    
</body>
</html>