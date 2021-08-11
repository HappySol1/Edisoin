<?php 

add_theme_support( 'post-thumbnails'); 

add_action( 'init', 'register_post_types' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
function register_post_types(){
    // хук для регистрации
add_action( 'init', 'create_taxonomy' );
    register_taxonomy( 'taxonomy', [ 'course' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Technology',
            'singular_name'     => 'Technology',
            'search_items'      => 'Search technologies',
            'all_items'         => 'All technologies',
            'view_item '        => 'View technology',
            'parent_item'       => 'Parent technology',
            'parent_item_colon' => 'Parent technology:',
            'edit_item'         => 'Edit technology',
            'update_item'       => 'Update technology',
            'add_new_item'      => 'Add New technology',
            'new_item_name'     => 'New technology Name',
            'menu_name'         => 'Technologies',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        // 'publicly_queryable'    => null, // равен аргументу public
        // 'show_in_nav_menus'     => true, // равен аргументу public
        // 'show_ui'               => true, // равен аргументу public
        // 'show_in_menu'          => true, // равен аргументу show_ui
        // 'show_tagcloud'         => true, // равен аргументу show_ui
        // 'show_in_quick_edit'    => null, // равен аргументу show_ui
        'hierarchical'          => false,

        'rewrite'               => true,
        //'query_var'             => $taxonomy, // название параметра запроса
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );
    register_post_type( "review", [
        'label'  => null,
        'labels' => [
            'name'               => 'отзыв', // основное название для типа записи
            'singular_name'      => 'отзыв', // название для одной записи этого типа
            'add_new'            => 'Добавить отзыв', // для добавления новой записи
            'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
            'new_item'           => 'Новый отзыв', // текст новой записи
            'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
            'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
            'not_found'          => 'Не найдено отзыва', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Отзывы', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => "dashicons-media-default",
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( "course", [
        'label'  => null,
        'labels' => [
            'name'               => 'курс', // основное название для типа записи
            'singular_name'      => 'курсы', // название для одной записи этого типа
            'add_new'            => 'Добавить курс', // для добавления новой записи
            'add_new_item'       => 'Добавление курса', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование курса', // для редактирования типа записи
            'new_item'           => 'Новое курсы', // текст новой записи
            'view_item'          => 'Смотреть курс', // для просмотра записи этого типа.
            'search_items'       => 'Искать курс', // для поиска по этим типам записи
            'not_found'          => 'Не найдено курса', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Курсы', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => "dashicons-book",
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => ['Technology'],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
};
## заменим слово «записи» на «статьи»
//$labels = apply_filters( "post_type_labels_{$post_type}", $labels );
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
    $new = array(
        'name'                  => 'Новости',
        'singular_name'         => 'новость',
        'add_new'               => 'Добавить новость',
        'add_new_item'          => 'Добавить новость',
        'edit_item'             => 'Редактировать новость',
        'new_item'              => 'Новая новость',
        'view_item'             => 'Просмотреть новость',
        'search_items'          => 'Поиск новостей',
        'not_found'             => 'новостей не найдено.',
        'not_found_in_trash'    => 'новостей в корзине не найдено.',
        'parent_item_colon'     => '',
        'all_items'             => 'Все статьи',
        'archives'              => 'Архивы статей',
        'insert_into_item'      => 'Вставить в статью',
        'uploaded_to_this_item' => 'Загруженные для этой статьи',
        'featured_image'        => 'Миниатюра статьи',
        'filter_items_list'     => 'Фильтровать список статей',
        'items_list_navigation' => 'Навигация по списку статей',
        'items_list'            => 'Список статей',
        'menu_name'             => 'Новости',
        'name_admin_bar'        => 'Статью', // пункте "добавить"
    );

    return (object) array_merge( (array) $labels, $new );
}

wp_localize_script( 'twentyfifteen-script', 'ajax_posts', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    'noposts' => __('No older posts found', 'twentyfifteen'),
)); 


function root_acf_format_value( $value, $post_id, $field ) {
    
    $value = do_shortcode($value);
    
    return $value;
}

add_filter('acf/format_value/type=text', 'root_acf_format_value', 10, 3);

function ajax_load_posts(){
  $args = unserialize( stripslashes( $_POST['query'] ) );
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  // $args['lang'] = 'ru';
  
  // if(have_posts()){
  //   echo 1;
  // }else{
  //   echo 0;
  // }
  // обычно лучше использовать WP_Query, но не здесь
  $args2 = array(
        'post_type'      => 'post',
        'lang'           => $mainleng,
        'posts_per_page' => 6,
        'paged'          => $_POST['page'] + 1,
        'post_status'    => 'publish'

    );
  query_posts( $args2 );
  $i = 0;
  $wrap_div = "<div class='news-sec2-wrap'>";
  // $query = new WP_Query( 'cat=1&posts_per_page=12' ); 
  // если посты есть
  // echo $args["paged"];
  if( have_posts() ) :
     // запускаем цикл
    echo $wrap_div;
     while( have_posts() ): the_post();
        if ( $i % 6 == 0 && $i != 0 && ( $i + 1 ) != $total_posts ) {
                    echo '</div>' . $wrap_div;
                }
         ?>

                    <a href="<?php the_permalink(); ?>" class="news-sec2-items ibg">
                        <?php the_post_thumbnail() ?>
                        <div class="news-sec2-items-age">
                            <?php echo get_the_date() ?>
                        </div>
                        <p><?php the_title();?> </p>
                    </a>
                <?php
                // echo $i;
                $i ++;
     endwhile;
 
  endif;

  echo "</div>";
  die();
}
 
add_action('wp_ajax_loadmore', 'ajax_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'ajax_load_posts');
 ?>
