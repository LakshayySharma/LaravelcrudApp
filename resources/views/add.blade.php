<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if($errors->any())

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

@endif
    <form  method="post" enctype="multipart/form-data">
          {{csrf_field()}}

      name: <input type="text" name="name" value=""><br><br>

      email: <input type="email" name="email" value=""><br><br>
      attach: <input type="file" name="att" value=""><br><br>
      <input type="submit" name="sub" value="register">


    </form>

  </body>
</html>
