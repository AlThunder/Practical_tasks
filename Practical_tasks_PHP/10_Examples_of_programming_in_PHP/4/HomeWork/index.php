<!DOCTYPE html>
<html lang='ru'>
<head>
	<title>Ajax и JSON</title>
	<meta http-equiv="Cotent-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			$("input").bind("click", function(event) {
				ajax({'func' : selection.textContent});
			});
		});
		function ajax(data) {
			$.ajax({
				url: '/api.php',
				type: "POST",
				data: data,
				dataType: "text",
				error: error,
				success: success
			});
		}
		function error() {
			alert('Ошибка при загрузке данных!');
		}
		function success(result) {
			var result = $.parseJSON(result);
			var str = result;
			/*for (var i in result)
				str += '<b>' + i + '</b>: ' + result[i] + '<br/>';*/
			$('#result').empty();
			$('#result').append(str);
		}
	</script>
</head>
<body>
	<div id="result"></div>

<form name="myForm">
    <select name="language" size="1">
    	<option selected="selected">Выберите пояс</option>
        <option value="Russia/Moscow" >Russia/Moscow</option>
        <option value="USA/New-York">USA/New-York</option>
        <option value="China/Honп Kong">China/Honп Kong</option>
        <option value="Japan/Tokio">Japan/Tokio</option>
    </select>
</form>
<input type="submit" value="Получить время"/>
<div id="selection"></div>
<script>
var languagesSelect = myForm.language;
 
function changeOption(){
     
    var selection = document.getElementById("selection");
    var selectedOption = languagesSelect.options[languagesSelect.selectedIndex];
    selection.textContent = selectedOption.text;
}
 
languagesSelect.addEventListener("change", changeOption);
</script>
	
	<div>
		<h3 style='cursor: pointer;'></h3>
	</div>	
</body>
</html>