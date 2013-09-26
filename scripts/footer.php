</div><!--  end outerWrap  -->
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#searchBox").autocomplete({
			source: function(request, response) {
            $.ajax({
                url: 'scripts/autocomplete.php',
                dataType: "json",
                data: {
                    term : request.term,
                    type : $("#searchType").val()
                },
                success: function(data) {
                    response(data);
                }
            });
        }
		});
	});
</script>
</body>
</html>