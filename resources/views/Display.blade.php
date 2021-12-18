<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Display</title>
    <style>
        .img {
        width: 75px;
        height: 75px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
  </head>
  <body>
  <br/>
  <br/>
    <div class="container" align="center">
        <h2>Display Data</h2>
    </div>
  <br/>
  <br/>
  <br/>
      <div class="container">
        <table class="table">
            <thead>
            
              <tr>
                <th scope="col">#id</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Subject</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
              
            </thead>
            <tbody>
            @foreach ($data as $item)
              <tr>
                <th scope="row">{{$item->rid}}</th>
                <td><img class="img"src={{$item->image}}></td>
                <td>{{$item->fname}}  {{$item->lname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->subject}}</td>
                <td><a class="btn btn-primary" href="/edit/{{$item->rid}}" role="button">Edit</a></td>
                <td><a class="btn btn-danger" href="/delete/{{$item->rid}}" role="button">Delete</a></td>
              </tr>
              @endforeach
              <td colspan="8" align="center"><a class="btn btn-success" href="/" role="button">Register New Data</a></td>
            </tbody>
          </table>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>