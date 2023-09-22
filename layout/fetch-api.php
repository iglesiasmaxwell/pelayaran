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
$title = strip_tags($title_post['content']);

// HEADER IMAGE DATA
$header_img_post = $posts[7];
$header_img = strip_tags($header_img_post['content']);
if (empty($header_img)) {
	$header_img_link = 'Image/shipyard.jpg';
} else {
	$header_img_link = trim($header_img);
}

// HEADER POST DATA
$header_post = $posts[1];
$header_content = strip_tags($header_post['content']);
$header_content_first_word = explode(' ', $header_content)[0];
$header_content_rest = str_replace($header_content_first_word, '', $header_content);

// HEADER QUOTE POST DATA
$quote_post = $posts[6];
$quote_content = strip_tags($quote_post['content']);

// BRAND POST DATA
$brand_post = $posts[2];
$brand = strip_tags($brand_post['content']);

// NAV MENU POST DATA
$nav_menu_post = $posts[3];
$nav_menu = strip_tags($nav_menu_post['content']);
$nav_menu_array = explode(',', $nav_menu);
foreach ($nav_menu_array as $outerarr) {
	$nav_menu_multi_array[] = explode('=', $outerarr);
}
for ($i = 0; $i < count($nav_menu_multi_array); $i++) {
	$nav_menu_array_icon[] = explode('+', $nav_menu_multi_array[$i][1]);
	if (empty(trim($nav_menu_array_icon[$i][0]))) {
		$nav_menu_icon_style[] = 'solid';
	} else {
		$nav_menu_icon_style[] = 'brands';
	}
}

// NAV LINK POST DATA
$nav_link_post = $posts[5];
$nav_link = strip_tags(trim($nav_link_post['content']));
$nav_link_array = explode(',', $nav_link);
$nav_link_icon_array = explode('+', $nav_link_array[2]);
if (empty(trim($nav_link_icon_array[0]))) {
	$nav_link_icon_style = 'solid';
} else {
	$nav_link_icon_style = 'brands';
}

// NAV BUTTON POST DATA
$nav_btn_post = $posts[4];
$nav_btn = strip_tags($nav_btn_post['content']);
$nav_btn_array = explode('=', $nav_btn);
$nav_btn_icon_array = explode('+', $nav_btn_array[1]);
if (empty(trim($nav_btn_icon_array[0]))) {
	$nav_btn_icon_style = 'solid';
} else {
	$nav_btn_icon_style = 'brands';
}

// SERVICES IMAGE POST DATA
$services_img_post = $posts[8];
$services_img = strip_tags($services_img_post['content']);
$services_img_array = explode('_', $services_img);
$services_img_count = count($services_img_array);
foreach ($services_img_array as $outerarr) {
	$services_img_multi_array[] = explode('=', $outerarr);
}
if (empty(trim($services_img_multi_array[0][1]))) {
	$services_img_multi_array[0][1] = 'Image/tugboat.jpg';
}
if (empty(trim($services_img_multi_array[1][1]))) {
	$services_img_multi_array[1][1] = 'Image/barge.png';
}
if (empty(trim($services_img_multi_array[2][1]))) {
	$services_img_multi_array[2][1] = 'Image/repair.jpg';
}
if (empty(trim($services_img_multi_array[3][1]))) {
	$services_img_multi_array[3][1] = 'Image/production.jpg';
}

// ABOUT POST DATA
$about_post = $posts[9];
$about = strip_tags($about_post['content']);
$about_array = explode('=', $about);

// ACHIEVEMENT POST DATA
$achievement_post = $posts[10];
$achievement = strip_tags($achievement_post['content']);
$achievement_array = explode('=', $achievement);
$achievement_array_text = explode('_', $achievement_array[1]);
$achievement_array_text_count = count($achievement_array_text);

// SOCIALS POST DATA
$socials_post = $posts[11];
$socials = strip_tags($socials_post['content']);
$socials_array = explode(' ', $socials);

// FEATURES POST DATA
$features_post = $posts[12];
$features = strip_tags($features_post['content']);
$features_array = explode('|', $features);
foreach ($features_array as $outerarr) {
	$features_multi_array[] = explode('~', $outerarr);
}
if (empty(trim($features_multi_array[0][3]))) {
	$features_multi_array[0][3] = '../Image/mockup-img-dashboard.jpg';
}
if (empty(trim($features_multi_array[1][3]))) {
	$features_multi_array[1][3] = '../Image/mockup-img-order.jpg';
}
if (empty(trim($features_multi_array[2][3]))) {
	$features_multi_array[2][3] = '../Image/mockup-img-holiday.jpg';
}
if (empty(trim($features_multi_array[3][3]))) {
	$features_multi_array[3][3] = 'https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen.png';
}
if (empty(trim($features_multi_array[4][3]))) {
	$features_multi_array[4][3] = 'https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen.png';
}
if (empty(trim($features_multi_array[5][3]))) {
	$features_multi_array[5][3] = 'https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen.png';
}
for ($i = 0; $i < count($features_multi_array); $i++) {
	$features_array_icon[] = explode('+', $features_multi_array[$i][6]);
	if (empty(trim($features_array_icon[$i][0]))) {
		$features_icon_style[] = 'solid';
	} else {
		$features_icon_style[] = 'brands';
	}
}
