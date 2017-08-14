					<footer id="footer">
						<UkazID class="pull-left icon fa-ban" onClick="$('.idStroje').css('visibility','visible');"></UkazID>
						<ul class="copyright">
							<li><span id="footer-rok"></span> &copy; GradeD MG s.r.o.</li>
							<li>IČO: 29156050</li>
							<li>DIČ: CZ29156050</li>
							<li>ČÚ: 107-2014190297/0100</li>
						</ul>
					</footer>
					<script>
						var d = new Date();
    					var n = d.getFullYear();
						document.getElementById("footer-rok").innerHTML = n;
						//var datum = d.getDate() + "." + (d.getMonth()+1) + "." + d.getFullYear();
					</script>