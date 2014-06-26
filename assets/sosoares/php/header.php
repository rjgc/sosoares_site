<?php if (strpos($_SERVER['REQUEST_URI'], '/pt/')) {
    echo "<script>$('#lang-2').addClass('inactive'); 
    $('#lang-3').addClass('inactive'); 
    $('#lang-4').addClass('inactive');</script>";
} else if (strpos($_SERVER['REQUEST_URI'], '/en/')) {
    echo "<script>$('#lang-1').addClass('inactive'); 
    $('#lang-3').addClass('inactive'); 
    $('#lang-4').addClass('inactive');</script>";
} else if (strpos($_SERVER['REQUEST_URI'], '/fr/')) {
    echo "<script>$('#lang-1').addClass('inactive');
    $('#lang-2').addClass('inactive');                  
    $('#lang-4').addClass('inactive');</script>";
} else if (strpos($_SERVER['REQUEST_URI'], '/es/')) {
    echo "<script>$('#lang-1').addClass('inactive'); 
    $('#lang-2').addClass('inactive'); 
    $('#lang-3').addClass('inactive');</script>";
} ?>