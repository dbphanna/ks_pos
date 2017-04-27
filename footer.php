		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="#" target="_blank">Phanna</a>. All Rights Reserved.</p>
			</div>
		</footer>

	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script src ="assets/datatable/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="dist/DateTimePicker.min.js"></script>
	<script type="text/javascript" src = "assets/js/select2.min.js"></script>
	<script type="text/javascript">
		$('.select2').select2();
	</script>
	<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
	<script type="text/javascript">
	   $(document).ready(function()
		{
		 $("#dtBox").DateTimePicker();
		});

	</script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);
	});
	</script>


</body>

</html>
