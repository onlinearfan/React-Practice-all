1)wordpress theme devlopment steps :
*)creat folder of the theme and add all file and folder ,
*)edit all file into php and make header,footer,functions,style.css,sidebar,page,single,archive,404,
searchform,search,assect folder and css,js file

*)open index.php and add all dynamic demo code, language,bloginfo,body_class,
*)add style and script by functions.php and wp_head and wp_foooter 
*)add all img dynamic link get_template_directory_uri(), 
*)after all link and demo code add make part of index by header footer,sidebar etc,

2)main part code start --------
*) add header code dynamic ,menu dynamic (header,footer,dropdown,),logo with link home_uri(),site_url()
*)add footer add code dynamic, 
*)creat post and page as html template has and give a title and heading and paragraph and feature img,
you can use plugin for make it 
*)slider dynamic,
*)add sidebar dynamic if have 

3)how to make dynamic menu  --------
*) function php = register_nav_menus(array(idname => 'Primary Menu',idNamefooter=>__('footer menu')));
*)index.php = wp_nav_menu(array(theme_location=>'idname', add_class,tag etc for defoult style)) see documentation,

4)how to add feature img  = add_theme_support('post_thumbsnail'). the_post_thumbnail();

5)some hook name = after_setup_theme,wp_enqueue_scripts,widgets_init,wp_head,

6)how to register widget = 
*)function.php = register_sidebar(array('name' =>'left',id=>'left-widget',before_widget,title_wrap))
add code in main part dynamic_sidebar('idname')

7)how to add meta post = the_author_posts_link, the_times(hmd),the_catagory(, ).
8)include other file in function.php = requeried(get_template_directory_uri().'/path');
9)single.php = its works for single post page , archive,404,page.php,sidebar.php, individual page = name-page.php,fullwidthtemplate


-==--==-=-==-==-=-=-==-=--===--=-=-=-===----==-=-==-==-==---=--=--==--==--==-==--=-=-=--==--=--=--=




=====================================================

1)wordpress theme basic setup,
*)add defoult function like bloginfo(),language_attributes(),
*)add style and script file by function.php 
*)add img link all by php get_template_directory_uri()
*) part index code into header,footer,sidebar,menu,function,
*)make dynamic menu, dynamic header,dynamic sidebar,dynamic footer,

<?php 

register_post_type('custom-slider',array(
    'labels' => array(
        'name' => 'sliderName'
    ),
    'public' =>true,
));



register_post_type('custom-slider',array(
    'labels' =>array(
        'name' => 'sliderName',
    ),
    'public' =>true,
    'supports' =>array(
        'title','thumbnail'
    ),
    'add_new_item' => 'Add New Slider',
));



$custom_slider_add = new wp_query(
    array(
        'post_type' => 'custom-slider',
    )
);

while($custom_slider_add->have_posts()):$custom_slider_add->the_post();
    echo "run slider";
endwhile;

// register slider in function.php 
register_post_type('name-slider-id',array(
    'labels' =>array(
        'name' => 'slider',
        'add_new_item' =>"ADD New Slider",
    ),
    'public' => true,
    'supports' =>array(
        'title','thumbnail',
    ),
    
    

));


$custom_slider_catch = new wp_query(
    array(
        'post_type' => 'name-slider-id',
    )
);

while($custom_slider_catch->have_posts()):$custom_slider_catch->the_post();
    the_post_thumbnail();

endwhile;
?>


=========================================================

1)first theme make ---
*)add wp-content theme folder theme
*)add index.php and style.css and add comment in style.css bio of theme maker 
*)see in wordpress appearence your making theme

2)dynamic website title---------
*) add wp function bloginfo('name') for title 
*)bloginfo('description') - for description of website 
*)bloginfo('charset') for utf-8 
*)bloginfo(''),
*)language_attributes(''); for lang attribute
*)body_class() = for body tag class 
*)home_url('') - home page link add in a tag 
*)the_permalink('') = add in post link in a tag,

3)dynamic post show in ---------
*)if(have_posts) --> while(have_posts) the_post('') = loop will run by post number
*) loop e amra jani seta mittha na hoya porjonto gurte thake
*the_tilte('') post title show korbe the_content() = post er bitor content show korbe 
*)the_permalink shudu title er wrapper a te kaj korabo 

4)main theme development part (html to wordpress) ---------
*)we can learn wordpress in wordpress codex site 
*)ekta theme pabar por theme er defoult setting hobe
 [ language_attributes,bloginfo(name,charset,description,styelsheet_url ),body_class, bloginfo('styelsheet_url'),post_class()
  ]

5)wp enqueue script add by style  -------
*)functions.php file add for add style and more function 
*)make a fuction and wp_enqueue_style('style',get_stylesheet_uri()  )

add_action('wp_enqueue_scripts','functionCalling')
*) add wp_head and wp_footer in html code for wordpress fully see 

6) seperate code in parts ==========
*) add header.php / footer.php / single.php / functions.php / archive.php / page.php / 
*)get_header() = for header code add get_footer = for footer code add
*)get_template_part('name') name.php external code add 

7)dynamic header make by add code in title tag 

8)dynamic menu ----
*) delete your main menu ul tag fully and add a function wp_nav_menu(),
*)wp_nav_menu($agrg) = for menu make 
*)ragister_nav_menus(array()) = for ragistration
*)meta show in post = 

9)the_author_post_link(), 


the_author_post_link() , the_time(M d,Y) , the_catagory(', '), 


10)feature img add in website post ---

*)add_theme_support('post_thumbnails') -- the_post_thumbnails();

11)single.php make ------
*)single.php bananor por kono single post e click korle seta ekhn single.php theke show korbe,
*)etar dara amra sob post page kmn dekhabe ta handle korabo

12)page.php -----------
*)page.php diye home page chara onno page gulo kmn dekhabe ta set korbo 
*) onno page link e click korbe eitar gula shob show korbe 
*)

13)page-about-us.php ----------
*)individual page banate evabe amra use korbo seta individually use hobe 
*)

14)fullwidth template setup --------
*)fullwidth_template.php name file banabo and setai comment add korbo template name fullwidth_template


======================================

wordpress hyrarchi ======
*)build in template = page.php(static page), single.php(single post), index/home.php/front.php(home na thkle index for blog) (blog page) 404.php,
(code replace - sidebar.php,header,footer),comment-popup.php,functions.php(all functions of dynamic), style.css(for active)
*)archive.php(for tag,author,catagory page style), searce.php(search result page),
*)archive = catagory.php,tag.php,date.php,author.php,taxonomy.php use for archive page individual
*)front page thekle eitai age load hobe eita ekhn use hoi na
*)home.php load hobe jodi static page set na thkae or page.php creat na thake like index.php er viporit use hoi
*)home.php na thkle index.php load hobe,
*)style.css and index.php not use is recommand use template
*)static page select er khetre post page select krle seta show krbe thkle home.php/index.php show korbe
*)page.php theke custom page bananor jonno page-slug/id.php 
*)full-widht.php comment diye banano jai new fullwidht template



1)site front page = 
-------------------------
*)front-page.php jodi eta banano thake tahole eitai show krbe load hole
*)home.php(blog page) eita index.php er replace hisebe kaj kore - static page set na thakle eita show krbe and set thakle eita blog
page hisebe show krbe and static page page.php theke run krbe

*)page.php kaj korbe static page er khetre ta thkle ekhan theke run hobe page.php na thkle home.php 
*)page-about.php baniye individual page banano jai








1)html template er sob page analysis kora and grap chart banabo kivabe ki krbo sob 
2)new wordpress theme name baniye tate index.php and style.css baniye comment add kore dibo and html er ss niye ta screenshot e dibo 
3)sob html page gulo k ekta folder e rakhbo alada and j gulo niye kaj korbo oi gulo shudu php te convert korbo
4)index.html file gulo page.php te dibo and blog.html er file gulo home/index.php te dibo 
5)header.php,footer.php,functions.php,sidebar.php, egulo banabo and 
6)home.php niye jeheto 1st e kaj korbo tai setar basic kaj gulo kore felbo (dynamic gulo)
(language,title,charset,body_class,) 
7)style.css k main.css e convert korbo and functions.php er bitor import krbo style and scripts gulo 
*)inc folder e functions.php er file import korbo 
8)img gulo get_template_directory_uri()/ kore and korbo sob jtai kaj korbo 
9)wp_head and wp_footer and krbo and header,footer,sidebar alada kore dibo ,
*)full template peye gele kaj suru krbo 
*)sob page er upor ekta name diye heading banabo jte cena jai 
-----------------
10)menu register logo dropdown thakle add korbo(header and footer)
11)post loop and for dynamic(the_title,the_content,the_catagory,post meta,)
13)single.php banabo and setai comment box add krbo loop sesh 
12)feature img register krbo ,
11)sidebar register 
13)custom sidebar and 
14)search.php archive.php,page.php,page-about.php,fullwidht.php banabo lagle and upor e title diye dibo cenar jonno 
15)searchform.php banabo




*************
wordpess all function i know 
_______________
<?php 
bloginfo('name/charset/description'); // title name, charset, dynamic description 
require_once(get_template_directory().'/inc/enqueue.php'); // function e file adding er jonno 
language_attributes(); // language er jonno
get_template_part('link'); // alada page er content show krte 
bloginfo('stylesheet_uri'); // css style.css pawate, 
the_title();the_content(); echo get_the_title(); // page post tilt and content show and return 
wp_head(); wp_footer(); // style,script er support and dashboard support er jonno 
get_header(); get_footer(); get_sidebar(); get_template_part('link'); // code alada korar por eita diye add korbo 
the_permalink(); echo home_url(); echo site_url(); // post link and home page link
the_author(); //author name show krbe without link 
the_author_posts_link(); //author name asbe and click krle set author er sob post dekhabe
the_category(', '); the_tags(); get_the_tag_list( ); //kon catagory tar name dekhabe
the_time();the_date(); //time show krbo and date er ta date show krbe shudu
add_action('hookName','functionName'); //hook and function adding process
register_nav_menu( "footermenu", __( "Footer Menu", "alpha" ) ); //nav and sidebar register
//frontend code.
wp_nav_menu(
	array(
		'theme_location' => 'footermenu',
		'menu_id'        => 'footermenucontainer',
		'menu_class'     => 'list-inline text-right',
	),
);

register_sidebar(
	array(
		'name'          => __( 'Single Post Sidebar', 'alpha' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Right Sidebar', 'alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	)
);

if ( is_active_sidebar( "sidebar-1" ) ) {
	dynamic_sidebar( "sidebar-1" );
  }
add_action('widgets_init','funName');
//feature img show in browser title er niche dibo 
the_post_thumbnail(
	'large',array()
);
//feature img support
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-logo');


echo site_url(); echo home_url(); //home page ei link er jonnok,
is_active_sidebar('name');
current_theme_supports('custom_header');
header_image( ); //header custom img,
get_header_textcolor();
display_header_text(); //header text ache ki nain

add_action('wp_head','functionName'); // eit diye style sheet add korbe,


get_post_meta(get_the_ID(),'placeholder',true); // eita custom post meta show krte use hoi
//style and script pawate add korbo functions.php te
wp_enqueue_style('name',get_template_directory_uri().'/path',array(),'1.00','all');
wp_enqueue_scripts('nameJd',get_template_directory_uri().'/path',array('jquery'),'1.0.0','true');
get_theme_file_uri('link'); // eita css/js adding er jonno 4.0 er upor e 
get_stylesheet_uri(); // for style.css adding ,
get_page_template(); //eita page er base name link ber kore, basename(get_page_template);
wp_link_pages(); // nextpage = eita long content text k vag krte use hoi,
get_the_post_thumbnail_url(null,'large'); // eita thumbnail er jonno link ber krbe,
get_the_content(); // eita return krbe,
post_class(); body_class( ); // class adding in body and post eita single post e use krbo,
the_post_thumbnail('large',array('class' =>'img-fluid')); //
//true false calling
is_single();is_category(); is_archive();is_page();is_front_page();is_tag();is_author();comments_open();
get_the_tag_list(); // tag er jonno
register_post_type('customPostType',array('label,public, support')); // add slider post img
get_comments_number(); //comment number and 
single_cat_title(); //single catagory name show 
comments_popup_link();  //comment number showing 5 ta paramiter
comments_template(); //comment box show krbe, 
next_post_link( ); previous_post_link(); //eita simple single post pagination
//pagination() , = code in it bari
//$ = jQuery 
get_the_author_meta('display_name');

function default_support(){
	load_theme_textdomain('alpha');
	add_theme_support('title-tags');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
	add_theme_support('custom-logo');
	add_theme_support('post-formats',array('audio','vidoe','link','quote'));
}
add_action('after_setup_theme','default_support');

if(comments_open() || get_comments_number())

have_posts(); //last post dorbe,
the_post(); //sob post gurbe, 

//some hook name, 
add_action('after_setup_theme/widgets_init/wp_enqueue_scripts/vc_after_init','');
//pagination adding code 

the_posts_pagination(array(
	'screen_reader_text'=>'',
	'mid_size' => 2,
	'prev_text' => __('<i class="flaticon-left-arrow"></i>', 'consult') ,
	'next_text' => __('<i class="flaticon-right-arrow"></i>', 'barrister') ,
));

//avater img showing 
get_avatar(get_the_author_meta('ID'),100);
//author post url show in a tag, 
echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));
//discription of author
the_author_meta('description'); 
//adding cash busting,

if(site_url() == 'www.arfankhan.com'){
	define('VERSION',time());
}
else{
	define('VERSION',wp_get_theme()->get('Version'));
}


//collect custom field value
$placeholder_text = get_post_meta(get_the_ID(),"placeholder",true);
$button_label = get_post_meta(get_the_ID(),"button label",true);
$hint = get_post_meta(get_the_ID(),"hint",true);

//echo text
esc_attr($button_label);
echo esc_html($hint);


//it bari excerpt function code
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'>[...]</a>";
	echo $excerpt;
}


/* it bari Custom Pagination */
function pagination($pages = '', $range = 4){ 
    $showitems = ($range * 2)+1;        
	global $paged;     
	if(empty($paged)) $paged = 1;      
	if($pages == ''){         
		global $wp_query;         
		$pages = $wp_query->max_num_pages;         
		if(!$pages){$pages = 1;}
	}
	if(1 != $pages){
		echo "<div class=\"pagination\"><span>Page No- ".$paged." of ".$pages."</span>";
		
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";             
				}
		} 
		if ($paged < $pages && $showitems < $pages) 
			echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next Page &rsaquo;</a>";           if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last Page &raquo;</a>";
		echo "</div>\n";
	}}

//custom post type 


function custom_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Amit', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 10,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_portfolio' );




?>


<html>
<!-- // searchform.php  -->

<form class = "search-style" role="search" method="get" id="searchform" class="searchform" action="http://localhost/wp-dev/">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="admin" name="s" id="s">
		<input type="submit" id="searchsubmit" value="Search">
	</div>
</form>

<!-- html 5  -->
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

</html>

//img adding
<img src= "<?php echo get_template_directory_uri(); ?>/path   "/>

<?php 
$args = array(
	//meta query 
	'meta_query' =>array(
		'relation' =>'AND',
		array(
		  'key' =>'homepage',
		  'value' =>1,
		  'compare' =>'=',
		),
		array(
		  'key' =>'feature',
		  'value' =>1,
		  'compare' =>'=',
		),
	
	),

	//tax query 
	'order' =>'ASC',
  	'tex_query' => array(
    'relation' => 'OR',
    	array(
      'texonomy' => 'post_format',
      'field' => 'slug',
      'terms' => array(
        'post-format-audio',
        'post-format-video',
      )
    ),
    'operator' => 'NOT IN' //ei gulo bade shob,
),


	//tax query 2 

	'tax_query' => array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array( 'quotes' ),
		),
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-quote' ),
		),
	),

	//draft post day post
	'year' => 2019,
  'monthnum' =>5,
  'post_status' =>'draft',
  'post_status' => array( 'pending', 'draft', 'future' )


);
$_p = new WP_Query($args);

while($_p->have_posts()){
	$_p->the_post();
}
wp_reset_query();
wp_reset_postdata();


$paged          = get_query_var( "paged" ) ? get_query_var( "paged" ) : 1;
$posts_per_page = 2;
$total = 9;
$post_ids       = array( 58, 68, 43, 56, 81, 70, 38 );
$_p             = new WP_Query( array(
	'posts_per_page' => $posts_per_page,
	'author_in'     => array( 1 ),
	'numberposts'=>$total,
	'orderby'        => 'post__in',
	'paged'          => $paged
) );

array(

	'numberposts'      => 5,
	'category'         => 0,
	'orderby'          => 'post_in',
	'order'            => 'DESC',
	'include'          => array(),
	'exclude'          => array(),
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'suppress_filters' => true,
)

?>


<?php

//wp query paginate links
    echo paginate_links( array(
        'total' => $_p->max_num_pages,
        'base'               => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
        'format'             => $format, // ?page=%#% : %#% is replaced by the page number.
        'total'              => $total,
        'current'            => $paged,
        'aria_current'       => 'page',
        'show_all'           => false,
        'prev_next'          => true,
        'prev_text'          => __( '&laquo; Previous' ),
        'next_text'          => __( 'Next &raquo;' ),
        'end_size'           => 1,
        'mid_size'           => 2,
        'type'               => 'plain',
        'add_args'           => array(), // Array of query args to add.
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => '',
    ) );
 ?>


 <?php 
 //child theme dequeue and enqueue 




function alpha_child_assets_dequeue(){
  wp_dequeue_style("alpha-style");
  wp_deregister_style("alpha-style");
  wp_enqueue_style("alpha-style",get_theme_file_uri("/assets/css/alpha.css"));
}
add_action("wp_enqueue_scripts","alpha_child_assets_dequeue",14);

function alpha_child_bootstrap_ed(){
  wp_dequeue_style("bootstrap");
  wp_deregister_style("bootstrap");
  wp_enqueue_style("bootstrap","//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap-grid.css");
}
add_action("wp_enqueue_scripts","alpha_child_bootstrap_ed",11);

//child theme adding parent file  

wp_enqueue_style("parent-style",get_parent_theme_file_uri("/style.css"),array("bootstrap"));

?>

<?php 
//eita use korle srcset cole jbe,
function alpha_image(){
  return null;
}
add_filter('wp_calculate_image_srcset','alpha_image');

add_filter('wp_calculate_image_srcset',__return_null());


//wp default function ase return null er moto,
?>

<?php 
//true hole - center, center,
add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array );
add_image_size('name_of_img',400,600,array(X,Y)); //
add_image_size('name_of_img2',400,600,array('center','top')); //ei ta kaj korbe na jehetu size 2ta img er same halk
?>


<?php 
if(is_search()):
echo get_search_form(); //form show krbe,
the_search_query(); //search result show krbe,
endif;

_e('you search for','alpha'); //kno text dekhar somoy use krbo, eita echo kre,
__('text','domain'); //eita functions.php te hard text e use krbo,
?>

<?php 
//get query var er use 
$day = get_query_var('monthnum');

echo esc_html($day);
echo get_query_var('monthnum'); //eita month number show krbe,  5 
echo get_query_var('year'); 
echo get_query_var('day'); //eita day show korbo,

$month_number = get_query_var('monthnum');

$dataMonth = DateTime::createFromFormat('!m',$month_number);

echo $dataMonth->format('F')

body_class(array('class-1','class-2','class-3'));
//filter body class 
function alph_body_class($class){
	$class[] ="body-2";
	unset($class[array_search('body-class-2',$class)]);
	return $class;
  }
  add_filter('body_class','alph_body_class');
  
//sidebar active check 
$class_sidebar = 'col-8';
if(!is_active_sidebar('id')){
  $class_sidebar = "col-10 offset-1";
}


add_theme_support( "post-formats", array( "image", "quote", "video", "audio", "link" ) );
//post format check 
if(current_theme_supports('post-formats')){
	$post_format =  get_post_format(); // eita echo resutl dei
	if($post_format == 'video'){
		echo "video";
	}
	elseif($post_format =="audio"){
		echo "audio";
	}
	elseif($post_format =="image"){
		echo "image";
	}
	elseif($post_format =="gallery"){
		echo "gallery";
	}
	elseif($post_format =="quote"){
		echo "quote";
	}
}

wp_link_pages();
//javascript e data pathano,
wp_enqueue_script( "main-jquery-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery" ), time(), true );
$launcher_year  = get_post_meta( get_the_ID(), "year", true );
$launcher_month = get_post_meta( get_the_ID(), "month", true );
$launcher_day   = get_post_meta( get_the_ID(), "day", true );

wp_localize_script( "main-jquery-js", "datedata", array(
    "year"  => $launcher_year,
    "month" => $launcher_month,
    "day"   => $launcher_day,
) );

//collect custom field value
$placeholder_text = get_post_meta(get_the_ID(),"placeholder",true);
$button_label = get_post_meta(get_the_ID(),"button label",true);
$hint = get_post_meta(get_the_ID(),"hint",true);

//echo text
esc_attr($button_label);
echo esc_html($hint);

header_image(); // header image link show krbe,
get_header_textcolor(); //color echo krbe,
!display_header_text(); // true false,


?>
 






*)codestar framework = 
*)cs_get_option() = add text form cd frmk
*)wp_get_attarchment_img_src(cs_get_option('id'),full)[0]  = for add img by codestar frmwrk



hello wordpress course --------------
18) codestar framwork intigrate---------
*)download from github,
*) add folder in your theme name 
*) add zip file and add link in funcitons.php file 
*)integar successfully

19)add options on codestar framework = 
*)go to config of codestar frameword and options[] =

20)codestar color picker adding =  
*)add color_picker tyle and 
*)add style= color:code;

21)

36)TGM pLUGIN ----------
*)download krbo github theke 
*)zip extrac kore file 2 ta add krbo inc folder e 
*)activation e code korbo
*)activation file k funcitons.php te add korbo 
*)tgm plugin er function banabo and hook krbo and example.php theke $plugin,$config er value copy krbo 
*)tgmpa($plugin,$config);

37)Breadcum adding --------
*)download Breadcum from google and php file in inc folder
*)add requried_once in functions.php file 
*)mj breadcum file call in frontend file 
*)true krte hobe

*)wordpress pagination er jonno -------------
--------------------------------------
PHP =============
<ul class="pagination pagination-lg">
<?php
		the_posts_pagination(array(
			'mid_size' => 2,
			'prev_text' => __('<i class="flaticon-left-arrow"></i>', 'consult') ,
			'next_text' => __('<i class="flaticon-right-arrow"></i>', 'barrister') ,
		));

 </ul>

 html =============

 <ul class="pagination pagination-lg">
							        
	<nav class="navigation pagination" role="navigation" aria-label="Posts">
		<h2 class="screen-reader-text">Posts navigation</h2>
		<div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
<a class="page-numbers" href="http://localhost/hello-theme/page/2/">2</a>
<a class="page-numbers" href="http://localhost/hello-theme/page/3/">3</a>
<a class="next page-numbers" href="http://localhost/hello-theme/page/2/"><i class="flaticon-right-arrow"></i></a></div>
	</nav>
                                </ul>

-----------end----------------


author avatar er jonno ------------------
*)  <?php echo get_avatar(get_the_author_meta('ID'),100); ?> = eta avater show er kaj kore akadik admin er khetre 
*) <?php the_author();?> = author er name show korbe 
*)<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>" class="admin" = for show author post link
*)<?php the_author_meta('description'); ?> = for description show
php ==================
<div class="content_blog_a fix">
	<div class="e_blog_A">
		 <?php echo get_avatar(get_the_author_meta('ID'),100); ?>
 
	</div>
	<div class="blog_a_text">
	
		<h5><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>" class="admin"><?php the_author();?></a></h5>
		
		<p><?php the_author_meta('description'); ?></p>
    </div>
</div>

-----------end----------------
*)<?php echo wp_trim_words(get_the_content(),15); ?> / the_excerpt('20'), = excerpt content show 
*)wp_reset_postdata(); = reset after end if condition
*)the_tags('','','','<br>'); = tags er jonno 

html =========
<div class="blog_tag">
<a href="http://localhost/hello-theme/tag/medvedev/" rel="tag">medvedev</a>
<a href="http://localhost/hello-theme/tag/norway/" rel="tag">norway</a>
<a href="http://localhost/hello-theme/tag/russia/" rel="tag">russia</a>

</div>

*)creat custom widget in wordpress =============

steps___
*)register your sidebar in widget_init hook in funcitons.php or external file,
*)add custom widget code in your funcitons.php or external file 
*) edit all as you want 
*)dynamic_sidebar add and call id 
*)show to front end by it 

<?php

function blog_sidebar(){
   register_sidebar( array(
    'name' => __( 'Blog Sidebar', 'theme-slug' ),
    'id' => 'sidebar-blog',
    'description' => __( 'Blog Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => ' <div class="blog_right_widget blog_widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="blog_widget_title">',
	'after_title'   => '</h3>',
    ) );	
}
add_action('widgets_init','blog_sidebar');




/**
 * Adds Foo_Widget widget.
 */
class consult_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Widget Title', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Foo Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo apply_filters( 'title', $instance['title'] );
		}
		?>
		<br>
		<?php
		if ( ! empty( $instance['description'] ) ) {
			echo apply_filters( 'description', $instance['description'] );
		}

		echo $args['after_widget'];
    }
    
        /**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
        $description = !empty($instance['description']) ?$instance['description']:esc_html__('New Description','text_domain');
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>">
        <?php esc_attr_e( 'Description:', 'text_domain' ); ?>
        </label>
        <br>
        <textarea id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" value="<?php echo esc_attr( $description ); ?>" ></textarea>
        </p>
		
		<?php 
	}
    

    /**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';

		return $instance;
	}
	
 




} // class Foo_Widget

add_action( 'widgets_init', function(){
     register_widget( 'consult_Widget' );
});

end------------

create comment==============
steps--
*)add code in single.php loop er bitor eita ekta default comment box dekhabe 
*) box ta edit er jonno comments.php file banabo and default code paste korbo 
*)edit krbo pagination,title, etc 
*)style er code comments.php te add krbo 
*)change commnet pagination start number in discussion options in wordpress

cmt customize steps-------
*)add code in custom-comment.php file add callback in your comments.php code 
*)edit comment box in comments.php file

<?php  

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
?>

****commnet top adding ****

function consult_wpb_move_comment_field_to_bottom($fields)
{

    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'consult_wpb_move_comment_field_to_bottom');

*****reply reload stop by enqueue **********
 // COMMENT 
 wp_enqueue_style( 'consult-comment-style', get_stylesheet_uri() );
 if ( is_singular() ) wp_enqueue_script( 'comment-reply' );


********** add remember me in commnet*********

add_filter( 'comment_form_default_fields', 'wc_comment_form_hide_cookies' );
function wc_comment_form_hide_cookies( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}


*******custom post type creating ***********
*)custom-portfolio.php add in function.php 

