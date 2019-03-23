</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 Shop linh kiện | Design by  <a href="https://www.facebook.com/khang.vohoang.31" target="_blank">Nguyên Võ</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script>
	new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
<!-- script-for-menu -->

<!-- /circle-->
<script type="text/javascript" src="js/circles.js"></script>
				  
<!-- //circle -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<script>
	 var icons = new Skycons({"color": "#fcb216"}),
		  list  = [
			"partly-cloudy-day"
		  ],
		  i;

	  for(i = list.length; i--; )
		icons.set(list[i], list[i]);
	  icons.play();
</script>
<script>
	 var icons = new Skycons({"color": "#fff"}),
		  list  = [
			"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
		  ],
		  i;

	  for(i = list.length; i--; )
		icons.set(list[i], list[i]);
	  icons.play();
</script>
<!--//skycons-icons-->
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<script src="js/flipclock.js"></script>
	
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock({
		        clockFace: 'HourlyCounter'
		    });
		});
	</script>
<script src="js/bars.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
</body>
</html>