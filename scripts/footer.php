</div><!--  end outerWrap  -->
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
<?php 
	if (isset($_REQUEST['page'])) {
		$page = $_REQUEST['page'];
		switch ($page) {
			case 'new_user_form':
				echo '<script type="text/javascript" src="js/ajax.js"></script>';
				break;
			case 'user_page':
				echo '<script type="text/javascript" src="js/ajax.delete.js"></script>';
				break;
		}
	}
 ?>

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