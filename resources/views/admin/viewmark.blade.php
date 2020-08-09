<!DOCTYPE html>
<html>
<head>
	<title>view marks</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->

</head>
<body>
<h1>student internal marks</h1>
<table class="table table-bordered table-striped">
    <tr>
      <th>subject</th>
      <th>marks</th>
      <th>edit</th>
      <th>delete</th>
      </tr>
      @foreach($res as $value)

      <tr>
      <td>{{ $value->subject }}</td>
      <td>{{ $value->marks }}</td>
      <td><a href="/editmark/{{ $value->mid }}" class="btn btn-info">edit</a></td>
       <td><a href="/deletemark/{{ $value->mid }}" class="btn btn-danger">delete</a></td> 
       </tr>
        
       @endforeach
       
       
       </table>


      
       
       
</body>
</html>