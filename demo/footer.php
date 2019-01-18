		<footer class="main-footer">
			<div class="footer-copyright text-center">
				<div class="container">					
					<p>&copy; Copyright - Fursandy Anggita Pradana Putra</p>
				</div>
			</div>
		</footer>
	</div>
	<!-- /#wrapper -->

	<noscript id="deferred-styles">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700" rel="stylesheet">
	</noscript>

	<script type="text/javascript">
		// CSS async
		var loadDeferredStyles = function() {
			var addStylesNode = document.getElementById("deferred-styles");
			var replacement = document.createElement("div");
			replacement.innerHTML = addStylesNode.textContent;
			document.head.appendChild(replacement)
			addStylesNode.parentElement.removeChild(addStylesNode);
		};
		var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
		window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
		if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
		else window.addEventListener('load', loadDeferredStyles);
	</script>

	<script src="../assets/js/script.min.js?v=0.2"></script>
	<script src="assets/js/demo.js"></script>
</body>
</html>