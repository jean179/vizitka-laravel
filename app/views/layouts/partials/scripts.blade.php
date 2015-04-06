<!-- JavaScripts-->
{{ HTML::script('thema/js/jquery.min.js') }}
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
	});
});
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
