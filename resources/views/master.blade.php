<!DOCTYPE html> 
<html lang="vi-VN">
    <head>
        <title>Tìm việc làm theo cách hoàn toàn mới</title>
        
        <link rel="preload" as="font" type="font/woff" crossorigin="anonymous" href="/static/assets/css/fonts/et-line.woff">
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" href="/static/assets/css/fonts/fontawesome-webfont.woff2?v=4.6.2">
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" href="/static/assets/css/fonts/glyphicons-halflings-regular.woff2">
        <link rel="stylesheet preload prefetch" as="style" type="text/css" crossorigin="anonymous" href="/static/assets/css/home.min.css">

        <link rel="stylesheet" type="text/css" href="css/demo3.css">
        <script type="text/javascript" src="js/plugins.js"></script>
        <link rel="preload" as="font" type="font/woff" crossorigin="anonymous" href="/static/assets/css/fonts/et-line.woff">
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" href="/static/assets/css/fonts/fontawesome-webfont.woff2?v=4.6.2">
        <link rel="preload" as="font" type="font/woff2" crossorigin="anonymous" href="/static/assets/css/fonts/glyphicons-halflings-regular.woff2">
        <link rel="stylesheet preload prefetch" as="style" type="text/css" crossorigin="anonymous" href="/static/assets/css/style.min.css?v=1.198">
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        @if(Session::has('success'))
        <script type="text/javascript">
          alert('{{ Session::get('success')}}');
        </script>
        @endif
    </head>
    <body>

		@include('header')
		@yield('content')
		@include('footer')
	   


        <script type="text/javascript" src="js/join.js"></script>
        <script type="text/javascript" src="js/ui.js"></script>
        <script type="text/javascript" src="js/globalOnBoardingModals.js"></script>
    </body>
</html>