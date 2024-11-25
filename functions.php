<script src="https://kit.fontawesome.com/d6418d4463.js" crossorigin="anonymous"></script>
<?php

// Creating the child theme, this is to enqueue the styles sheets from parent and child.
function my_child_theme_enqueue_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');


// enqueuing JS

function my_child_theme_enqueue_js (){
    wp_enqueue_script('child-js' , get_stylesheet_directory_uri().'/main.js');
}

add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_js');

// Thinking about implementing a shortcode in the future.
//add_shortcode('popup_form', 'my_custom_shortcode');

function popup_form(){
if (is_front_page()){
?>
<!-- Creating the form inside the pop up -->

<div id="main-popup" class="container hidden">
    <div class="containerpopup">
        <div class="elementscontainer">
            <div id="x-container"><a href="#" id="close-btn"><i  class="fa-solid fa-x"></i></a></div>
            
            <form action="<?php echo admin_url('proccess_form.php');?>" method="POST">
                <fieldset>
                <label for="name">Name <input name="name" id="name-field" type="text"> </label>
                <label for="last-name">Last Name <input name="last-name" id="last-name-field" type="text"></label>
                <label for="phone-number">Phone number <input name="phone-number" id="number-field" type="number"></label>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php } }

add_action('template_redirect','popup_form');