<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    <title>Bootstrap test</title>
  </head>
  <body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!--carousel dot buttons-->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!--wrapper for slideshow-->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{ URL::asset('images/beach1.jpg') }}" alt="beachimg1" />
        </div>
        <div class="item">
          <img src="{{ URL::asset('images/beach2.jpg') }}" alt="beachimg2" />
        </div>
        <div class="item">
          <img src="{{ URL::asset('images/beach3.jpg') }}" alt="beachimg3" />
        </div>
      </div>
    </div>
  </body>
</html>
