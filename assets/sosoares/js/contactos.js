$(document).ready(function() {
	$('select#distrito').change(function(e){            
		var newOptions = getNewOptions($(this).val());
		$('select#concelho').html('');

		$.each(newOptions,function(i,o){
			$('<option value='+ o +'>' + o + '</option>').appendTo('select#concelho');
		});            
	});

	function getNewOptions(val){
		var concelhos = [];
		var url = "";
		var tmpUrl = window.location.href.split('/');

		for (var i = 0; i < tmpUrl.length - 4 ; i++) {
			url += tmpUrl[i] + "/";
		}

		var rawFile = new XMLHttpRequest();
		rawFile.open("GET", url + "assets/uploads/"+val+".txt", false);
		rawFile.onreadystatechange = function ()
		{
			if(rawFile.readyState === 4)
			{
				if(rawFile.status === 200 || rawFile.status == 0)
				{
					var allText = rawFile.responseText;
					var lines = allText.split("\n");

					concelhos.push(item);
					concelhos.push(' ');

					for(var i = 0; i < lines.length; i ++)
					{
						concelhos.push(lines[i]);
					}
				}
			}
		}
		rawFile.send(null);

		return concelhos;
	}

	$(function() {
		document.getElementById("jq_msg2").style.width = document.getElementById("nome").offsetWidth + "px";
	});
	
	$(window).resize(function () 
	{
		$(function() {
			document.getElementById("jq_msg2").style.width = document.getElementById("nome").offsetWidth + "px";
		});
	});
});