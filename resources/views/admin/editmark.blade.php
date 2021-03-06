<!DOCTYPE html>
<html>
<head>
	<title>edit user info</title>
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
 <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">edit student marks</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">

<form method ="post" action="/editmarkqry" style="width:45%;">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    @foreach($res as $value)
    <input type="hidden" name="mid"value="{{$value->mid }}">
    <div class="form-group">
    <label>subject</label>
    <input type="text" name="subject" class="form-control" value="{{$value->subject}}"><br>
    </div>
    <div class="form-group">
    <label>marks</label>
    <input type="text" name="marks" class="form-control"value="{{$value->marks}}"><br>
    </div>
    @endforeach
    <input type="submit" name="add" class="btn btn-info"value="insert">
    </form>
</div>
</div>
</div>
</body>

</html>