<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Dokapack</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="inicio" data-spy="scroll" data-target="#bd-main-nav" data-offset="50">
        
        @include('layout.header')

        @yield('content')

        @include('layout.footer')

        <script type="text/javascript" src="{{url('/')}}/plugins/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="{{url('/')}}/plugins/tether/dist/js/tether.min.js"></script>
		<script type="text/javascript" src="{{url('/')}}/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{{url('/')}}/plugins/slick-carousel/slick/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="{{url('/')}}/plugins/mask/dist/jquery.mask.js"></script>

		<script type="text/javascript">
			$('.carousel-photos').slick({
				centerMode:true,
				slidesToShow:4,
				arrows:true,
				responsive:[
				{
					breakpoint:1290,
					settings:{
						slidesToShow:3
					}
				},
				{
					breakpoint:992,
					settings:{
						slidesToShow:2
					}
				},
				{
					breakpoint:766,
					settings:{
						slidesToShow:1
					}
				}]
			});
		</script>

		<script type="text/javascript">
			var src_video = $("#iframe-video").attr('src');

			$('#myModal').on('show.bs.modal', function (e) {
				$("#iframe-video").attr('src',src_video);
				
				var new_src = src_video + "?autoplay=1";
				$("#iframe-video").attr('src',new_src);
			})

			$('#myModal').on('hide.bs.modal', function (e) {
				$("#iframe-video").attr('src','');
			})
		</script>

		<script type="text/javascript">
			$(function(){$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:target.offset().top-0},1000);return false;}}});});

			$(".navbar-toggler").click(function(){
				$(this).toggleClass('toggled');
			})

			$(".section-products .item a").click(function(e){
				e.preventDefault();

				var target = $(this).attr('data-target');
				$('.section-products .dimmer').hide('fast')
				$(target).show('fast');

				$('.section-products .item').removeClass('active');
				$(this).parent().addClass('active');
			})

			$('.section-contact').click(function () {
				$('.section-contact iframe').css("pointer-events", "auto");
			});

			$( ".section-contact" ).mouseleave(function() {
				$('.section-contact iframe').css("pointer-events", "none"); 
			});
		</script>
    </body>
</html> 