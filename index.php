<?php

  include('simple_html_dom.php');
    $search_query = "PHP";
    //$search_query = $_REQUEST["keywrod"];
    $search_query = urlencode( $search_query );
    $html = file_get_html( "https://www.google.com/search?q=$search_query&tbm=isch" );
	//echo $html;
    $image_container = $html->find('table.GpQGbf', 0);
    $images = $image_container->find('img');
    $image_count = 10; //Enter the amount of images to be shown
    $i = 0;
    foreach($images as $image){
        if($i == $image_count) break;
        $i++;
        // DO with the image whatever you want here (the image element is '$image'):
        echo $image."<br>";
    }
?>
