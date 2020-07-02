$(document).ready ( function() {
	$("select[name='country']").bind("change", function() {
		$.get("data.php", {country: $("select[name='country']").val()}, function (data){
			data = JSON.parse(data);
			$("select[name='city']").empty();
			for(var id in data){
				$("select[name='city']").append($("<option value='"+ id +"'>"+ data[id] +"</option>"));
			}
		});
	});
	});