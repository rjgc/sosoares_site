$(document).ready(function() {
	$('select#pais').change(function(e){
        if ($(this).val().indexOf('Portugal') > -1) {
            document.getElementById('labelDistrito').style.display = "inherit";
            document.getElementById('labelConcelho').style.display = "inherit";
            document.getElementById('distrito').style.display = "inherit";
            document.getElementById('concelho').style.display = "inherit";
        } else {
        	document.getElementById('labelDistrito').style.display = "none";
            document.getElementById('labelConcelho').style.display = "none";
            document.getElementById('distrito').style.display = "none";
            document.getElementById('concelho').style.display = "none";
        }
    });

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