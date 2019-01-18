		<footer class="main-footer">
			<div class="footer-menu-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-6">
							<div class="footer-menu__widget">
								<div class="footer-menu__title text-uppercase">Sample Title</div>
								<div class="footer-menu__addrs">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
									<p>
										Lorem Ipsum ST. 14,5 Dolor <br>
										Consectetur 55584 <br>
										Adipiscing: <a href="tel:+62 111 898444">+62 111 898444</a> <br>
										Elit: +62 111 898444 <br>
										Eiusmod: <a href="mailto:mail@email.com">mail@email.com</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="footer-menu__widget">
								<div class="footer-menu__title text-uppercase">Sample Title</div>
								<div class="footer-menu__item">
									<ul>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="footer-menu__widget">
								<div class="footer-menu__title text-uppercase">Sample Title</div>
								<div class="footer-menu__item">
									<ul>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="footer-menu__widget">
								<div class="footer-menu__title text-uppercase">Sample Title</div>
								<div class="footer-menu__item">
									<ul>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
										<li><a href="#">Sample Menu</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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

	<script src="../assets/js/sandstrap.min.js?v=0.2"></script>
	<script src="assets/js/demo.js"></script>
</body>
</html>