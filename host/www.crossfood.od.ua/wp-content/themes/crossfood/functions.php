<?php 
	function crossfood_setup() {
		function nav($content) {
			$pattern = "<a ";
			$replacement = '<a itemprop="url" ';
			$content = str_replace($pattern, $replacement, $content);
			return $content;
		}
		add_filter('wp_nav_menu', 'nav');
		add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );
		add_filter( 'image_send_to_editor', 'remove_wps_width_attribute', 10 );
		function remove_wps_width_attribute( $html ) {
			$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
			return $html;
		}
		add_theme_support('post-thumbnails');
		add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );
		add_theme_support('html5', array(
			'search_form',
			'comment_form',
			'comment_list',
			'gallery',
			'caption'
		));
		add_theme_support('post-formats', array(
			'aside',
			'image',
			'video',
			'gallery'
		));
		add_theme_support('pageparentdiv');
		function new_excerpt_length($length) {
			return 55;
		}
		
		add_filter('excerpt_more', function($more) {
			return '...';
		});
		add_filter('excerpt_length', 'new_excerpt_length');
	}
	add_action('after_setup_theme', 'crossfood_setup');

// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);
function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}
// код блока
function extra_fields_box_func( $post ){
	?>
	<p><label>Title статьи <br> <input type="text" name="extra[news_title]" value="<?php echo get_post_meta($post->ID, 'news_title', 1); ?>" style="width:50%" /></label></p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

	
	<p><label>Description статьи <br> <input type="text" name="extra[news_description]" value="<?php echo get_post_meta($post->ID, 'news_description', 1); ?>" style="width:90%" /></label></p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />


	<p><label>Автор статьи <br> <input type="text" name="extra[news_author]" value="<?php echo get_post_meta($post->ID, 'news_author', 1); ?>" style="width:50%" /></label></p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

	<p><label>Ссылка для банера (jpg/png 1200x400) <br> <input type="text" name="extra[news_banner]" value="<?php echo get_post_meta($post->ID, 'news_banner', 1); ?>" style="width:50%" /></label></p>

	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

    <hr>

    <p><label>Цена <i>(только sweets*)</i><br> <input type="text" name="extra[desserts_price]" value="<?php echo get_post_meta($post->ID, 'desserts_price', 1); ?>" style="width:50%" /></label></p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />


    <p><label>Калории <i>(только sweets*)</i><br> <input type="text" name="extra[desserts_cal]" value="<?php echo get_post_meta($post->ID, 'desserts_cal', 1); ?>" style="width:50%;" /></label></p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

    <p><label>Белки <i>(только sweets*)</i><br> <input type="text" name="extra[desserts_prot]" value="<?php echo get_post_meta($post->ID, 'desserts_prot', 1); ?>" style="width:50%;" /></label></p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

    <p><label>Жиры <i>(только sweets*)</i><br> <input type="text" name="extra[desserts_fat]" value="<?php echo get_post_meta($post->ID, 'desserts_fat', 1); ?>" style="width:50%;" /></label></p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />

    <p><label>Углеводы <i>(только sweets*)</i><br> <input type="text" name="extra[desserts_car]" value="<?php echo get_post_meta($post->ID, 'desserts_car', 1); ?>" style="width:50%;" /></label></p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />


	<?php
}
// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);
/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	if ( !isset($_POST['extra_fields_nonce']) || !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__) ) return false; // проверка
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false; // если это автосохранение
	if ( !current_user_can('edit_post', $post_id) ) return false; // если юзер не имеет право редактировать запись
	if( !isset($_POST['extra']) ) return false; 
	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map('trim', $_POST['extra']);
	foreach( $_POST['extra'] as $key=>$value ){
		if( empty($value) ){
			delete_post_meta($post_id, $key); // удаляем поле если значение пустое
			continue;
		}
		update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
	}
	return $post_id;
}


// _________________________________________


add_action('wp_ajax_hello', 'say_hello');
add_action('wp_ajax_nopriv_hello', 'say_hello');

function say_hello() {
	if(empty($_POST['name'])){
		$name = 'stand-2-su';	
	} else {
		$name = esc_attr( $_POST['name'] );	
	}

	$args = array(
		'category_name'    => $name,
	);

	$posts_array = get_posts( $args );
	echo json_encode($posts_array);
	wp_die();
}


// _________________________________________

function crossfood_scripts() {

	wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/src/js/main.js',"","1.45", true);
	// wp_enqueue_script( 'ajax-post-load', get_template_directory_uri() . '/src/js/ajax-post-load.js',"","1.015", array('jquery'));

	wp_localize_script('main', 'myPlugin', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'name' => wp_get_current_user()->display_name
	));
}

add_action( 'wp_enqueue_scripts', 'crossfood_scripts' );


// ga

add_action( 'wp_footer', 'ga_callback_func' );
 
function ga_callback_func() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '2085' == event.detail.contactFormId ) {
			ga('send', 'event', {
			  'eventCategory': 'Callback',
			  'eventAction': 'Callback_click',
			  eventLabel: 'Callback',
			  hitCallback: function() {
		      console.log('sent ga - callback');
		    }
			});
    }
}, false );
</script>
<?php
}


add_action( 'wp_footer', 'ga_purchase_func' );
 
function ga_purchase_func() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '2087' == event.detail.contactFormId ) {
			ga('send', 'event', {
			  'eventCategory': 'Purchase',
			  'eventAction': 'Purchase_click',
			  eventLabel: 'Purchase',
			  // 'eventValue': jQuery("#form-input_price").val().replace(/\W/g, ''),
			  'eventValue': 3.40, //0.87% от 385 грн (средняя цена заказа)
			  hitCallback: function() {
		      console.log('sent ga - 3.40');
		    }
			});
    }
}, false );
</script>
<?php
}


add_action( 'wp_footer', 'ga_desserts_func' );

function ga_desserts_func() {
    ?>
    <script type="text/javascript">
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            if ( '3052' == event.detail.contactFormId ) {
                ga('send', 'event', {
                    'eventCategory': 'Desserts',
                    'eventAction': 'Desserts_click',
                    eventLabel: 'Desserts',
                    'eventValue': 1,
                    hitCallback: function() {
                        console.log('sent ga desserts - 1');
                    }
                });
            }
        }, false );
    </script>
    <?php
}
