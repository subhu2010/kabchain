<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>Kab Chain</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/css/toast.min.css')}}">
    

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Jquery 1.9.1 -->
    <script type="text/javascript" src="{{url('public/js/jquery-1.9.1.min.js')}}"></script>



</head>

<body>

<div>
    @include('frontend.layout.header.header')
</div>

<div style="min-height: 50vh">
    @yield('content')
</div>

<div>
    @include('frontend.layout.footer.footer')
</div>
    
</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>



<!-- Global JS -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>
<script type="text/javascript" src="{{url('public/js/toast.min.js')}}"></script>
<script>
    const TYPES = ['info', 'warning', 'success', 'error'],
        TITLES = {
            'info': 'Notice!',
            'success': 'Awesome!',
            'warning': 'Watch Out!',
            'error': 'Doh!'
        },
        CONTENT = {
            'info': 'Hello, world! This is a toast message.',
            'success': 'The action has been completed.',
            'warning': 'It\'s all about to go wrong',
            'error': 'It all went wrong.'
        },
        POSITION = ['top-right', 'top-left', 'top-center', 'bottom-right', 'bottom-left', 'bottom-center'];

    $.toastDefaults.position = 'bottom-center';
    $.toastDefaults.dismissible = true;
    $.toastDefaults.stackable = true;
    $.toastDefaults.pauseDelayOnHover = true;

    $('.snack').click(function () {
        var type = TYPES[Math.floor(Math.random() * TYPES.length)],
            content = CONTENT[type];

        $.snack(type, content);
    });

    $('.toast-btn').click(function () {
        var rng = Math.floor(Math.random() * 2) + 1,
            type = TYPES[Math.floor(Math.random() * TYPES.length)],
            title = TITLES[type],
            content = CONTENT[type];

        if (rng === 1) {
            $.toast({
                type: type,
                title: title,
                subtitle: '11 mins ago',
                content: content,
                delay: 5000
            });
        } else {
            $.toast({
                type: type,
                title: title,
                subtitle: '11 mins ago',
                content: content,
                delay: 5000,
                img: {
                    src: 'https://via.placeholder.com/20',
                    alt: 'Image'
                }
            });
        }
    });
</script>

</html>
