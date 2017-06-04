<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
        );
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Marck+Script|Bitter|Fredericka+the+Great', false);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//Adding typed.js functionality
wp_enqueue_script('typed', get_stylesheet_directory_uri() . '/js/lib/typed.js', array(), 1.0, true);
wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);

function tutorial () {
	global $pagenow;
	if ($pagenow == 'index.php') {
		echo '
			<div class="notice notice-warning is-dismissible">
				<h1><u>General Information</u></h1><br><br>
				<div style="width: 30%; display: inline-block;">
					<em><u>To add a question, or edit the FAQ page</u></em><br>
					<strong><u>Adding a question</u></strong>
					<ol>
						<li>Go to `Posts` page on the menu at the left of the screen</li>
						<li>Click `Add New` at the top of the page</li>
						<li>Enter a title for the question (i.e. "Do you take cash?"). This will take the place of the header of the question on the FAQ page</li>
						<li>Enter text in the body. This will take the place of the body of the question on the FAQ page</li>
						<li><strong>IMPORTANT:</strong> Go to the `Categories` section (located on the right side of the new-post page you are currently on), and select (e.g. "check") the `FAQ` section.</li>
						<li>Click `Update`. Your new question should be posted on the FAQ</li>
					</ol>
					<strong><u>Editing a FAQ question</u></strong>
					<ol>
						<li>Go to `Posts` page.</li>
						<li>Click on the FAQ question that you would like to change the wording for.</li>
						<li>Edit whatever you want of the question, whether it be the body or title</li>
						<li>Click `Update`. Your question will have all the changes you made saved to it now.</li>
					</ol>
				</div>
				<div style="width: 30%; display: inline-block; vertical-align: top;">
					<em><u>To add or edit a Testimonial</u></em><br>
					<strong><u>Adding a Testimonial</u></strong>
					<ol>
						<li>Go to the `Posts` page on the menu at the left of the screen</li>
						<li>Click `Add New` at the top of the page</li>
						<li>A title for the post is not needed, but it is strongly recommended you add one</li>
						<li>Insert the body of the testimonial in the main text section</li>
						<li><strong>IMPORTANT:</strong> Go to the `Categories` section (located on the right side of the new-post page you are currently on), and select (e.g. "check") the `Testimonial` section.</li>
						<li><strong>IMPORTANT:</strong> Go to the bottom of the page, to the `Add New Custom Field` section, and select `From` in the dropdown box. In the value area (to the right of the dropdown), add the name of the person that gave the testimonial</li>
						<li>Click `Update` to save all the changes. Your new testimonial should be on your site.</li>
					</ol>
					<strong><u>Editing a Testimonial</u></strong>
					<ol>
						<li>Got to the `Posts` page</li>
						<li>Scroll through the posts to get to the testimonial you want to edit, and click on it to edit</li>
						<li>Edit the post</li>
						<li>Click `Update` to save all changes to the testimonial</li>
					</ol>
				</div>
				<div style="display: inline-block; width: 30%; vertical-align: top;">
					<em><u>To add or edit a book on the `Resources` page</u></em>
					<strong><u>Adding a book</u></strong>
					<ol>
						<li><strong>IMPORTANT: </strong>Upload a picture of the book you are adding to the site by clicking the `Media` page on the left menu, and either browse for the file you want to upload, or drag it to the upload section of the site.</li>
						<li>Go to the `Posts` page</li>
						<li>Click `Add New` at the top of the page</li>
						<li>Enter the title of the book in the title text box</li>
						<li><strong>IMPORTANT: </strong>Go to the `Categories` section (located on the right side of the new-post page you are currently on), and first select (e.g. "check") the genre of the book (i.e. "Allegorical", "Meditation", etc...), and then select the `Book` category. Make sure that the genre of the book is the primary category.</li>
						<li><strong>IMPORTANT: </strong>Scroll down to the `Featured Image` section (below the `Categories` section) and click <u>Set Featured Image</u>. A window will pop up of all of your image uploads, so choose the image that represents the book you are adding to the site.</li>
						<li><strong>IMPORTANT: </strong>Next, go to the `Add New Custom Field` section and click on the dropdown menu. Select "Author". In the `Value` box next to the dropdown, put in the author of the book that you are adding.</li>
						<li>Click on the `Publish` button to add your new book to your website. Your new book should be under the category section that you chose when making the book.</li>
						<li>If your book is in the wrong category section on your site, you can always change it by unclicking the current category it is a part of and selecting another category.</li>
					</ol>
				</div>
			</div>';
	}
}
add_action('admin_notices', 'tutorial');
?>