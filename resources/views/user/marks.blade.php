<!DOCTYPE html>
<html>
<head>
	<title>internal marks</title>
            <!-- Meta Tags -->
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


@foreach($sdetails as $value)
<h4 style="font-family:arial"><label style="font-family:arial">Name:</label>{{$value->name}}</h4>
<h4 style="font-family:arial"><label>Registration no:</label>{{$value->rno}}</h4>
<h4 style="font-family:arial"><label>Semester:</label>{{$value->sem}}</h4>
<h4 style="font-family:arial"><label>Address:</label>{{$value->address}}</h4>

@endforeach



<table class="table table-bordered table-striped">
    <tr>

      <th>subject</th>
      <th>marks</th>
     
      
      </tr>
      @foreach($marks as $value)
      

      <tr>
       
       <td>{{ $value->subject }}</td>
       <td>{{ $value->marks }}</td>
       
       </tr>
        
       @endforeach
      
       
 </table>      
        

<a href="/ulogout" class="btn btn-success">Logout</a>
                                                          
</body>
</html>