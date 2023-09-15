<?php
$curl = curl_init();
curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://public-api.wordpress.com/rest/v1.1/sites/maxwellchandra.wordpress.com/posts/?order=ASC&pretty=true',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
));
$response = curl_exec($curl);
curl_close($curl);

$json = json_decode($response, true);
$posts = $json['posts'];

// SITE TITLE POST DATA
$title_post = $posts[0];
$title = strip_tags($title_post['excerpt']);

// HEADER POST DATA
$header_post = $posts[1];
$quote_content = strip_tags($header_post['excerpt']);
$quote_content_first_word = explode(' ', $quote_content)[0];
$quote_content_rest = str_replace($quote_content_first_word, '', $quote_content);

// BRAND POST DATA
$brand_post = $posts[2];
$brand = strip_tags($brand_post['excerpt']);

// NAV MENU POST DATA
$nav_menu_post = $posts[3];
$nav_menu = strip_tags($nav_menu_post['excerpt']);
$nav_menu_array = explode(',', $nav_menu);
$nav_menu_start = $nav_menu_array[0];
$nav_menu_end = end($nav_menu_array);

// NAV LINK POST DATA
$nav_link_post = $posts[5];
$nav_link = strip_tags(trim($nav_link_post['excerpt']));
$nav_link_array = explode(',', $nav_link);
$nav_link_text = $nav_link_array[0];
$nav_link_href = $nav_link_array[1];

// NAV BUTTON POST DATA
$nav_btn_post = $posts[4];
$nav_btn = strip_tags($nav_btn_post['excerpt']);
?>