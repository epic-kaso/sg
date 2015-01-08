<?php
/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since Coeur 2.0
 * @author frenchtastic.eu
 */
class Coeur_Customize {
   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    * 
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *  
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since Coeur 2.0
    */
   public static function register ( $wp_customize ) {

        /**
        * Panels
        * @author Frenchtastic
        * @since Coeur 1.7
        */
        global $wp_version;
        if ( $wp_version >= 4.0 ) {

        // Layout
        $wp_customize->add_panel( 'coeur_layout', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Layout Options', 'coeur'),
        'description'    => '',
        ));

        }

        /*
        * Sections
        */
          
        // Post Content
        $wp_customize->add_section( 'coeur_postcontent' , array(
        'title'      => __( 'Post Content', 'coeur' ),
        'priority'   => 30,
        ));

        // Font Options
        $wp_customize->add_section( 'coeur_fonts' , array(
        'title'      => __( 'Font Options', 'coeur' ),
        'priority'   => 40,
        ));

        // Meta Options
        $wp_customize->add_section( 'coeur_meta' , array(
        'title'      => __( 'Meta Options', 'coeur' ),
        'priority'   => 50,
        ));

        // Container Width
        $wp_customize->add_section( 'coeur_container_width' , array(
        'title'      => __( 'Container Width', 'coeur' ),
        'priority'   => 10,
        'panel'  => 'coeur_layout',
        ));

        // Blog Layout
        $wp_customize->add_section( 'coeur_bloglayout' , array(
        'title'      => __( 'Blog Layout', 'coeur' ),
        'priority'   => 20,
        'panel'  => 'coeur_layout',
        ));

        // Post Layout
        $wp_customize->add_section( 'coeur_postlayout' , array(
        'title'      => __( 'Post Layout', 'coeur' ),
        'priority'   => 30,
        'panel'  => 'coeur_layout',
        ));

        // Page Layout
        $wp_customize->add_section( 'coeur_pagelayout' , array(
        'title'      => __( 'Page Layout', 'coeur' ),
        'priority'   => 40,
        'panel'  => 'coeur_layout',
        ));

        // Coeur Logo
        $wp_customize->add_section( 'coeur_logo' , array(
        'title'      => __( 'Logo', 'coeur' ),
        'priority'   => 50,        ));

        /**
        * Menu on single post pages
        * @author Frenchtastic
        * @since Coeur 1.6
        */
        $wp_customize->add_setting('single_menu_header', array(
            'default'        => 'no',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'sanitize_callback' => 'coeur_sanitize_menusingle',
            ));

        $wp_customize->add_control('single_menu_header', array(
            'label'      => __('Display menu on single post pages', 'coeur'),
            'section'    => 'nav',
            'settings'   => 'single_menu_header',
            'description' => 'Display menu on single post pages instead of post navigation and comment count.',
            'type'       => 'select',
            'choices'    => array(
                'yes'=> 'Yes',
                'no' => 'No'
                ),
        ));

        /**
        * Show/Hide categories on posts
        * @author Frenchtastic
        * @since Coeur 1.7
        */
        $wp_customize->add_setting( 'coeur_show_cat', array(
            'sanitize_callback' => 'coeur_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'coeur_show_cat',
          array(
            'description' => 'Show categories on posts?',
            'type' => 'checkbox',
            'label' => 'Show categories',
            'section' => 'coeur_meta',
            'std' => '0'
        ));

        /**
        * Show/Hide author on posts
        * @author Frenchtastic
        * @since Coeur 1.7
        */
        $wp_customize->add_setting( 'coeur_show_author', array(
            'sanitize_callback' => 'coeur_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'coeur_show_author',
          array(
            'description' => 'Show the post author on articles?',
            'type' => 'checkbox',
            'label' => 'Show post author',
            'section' => 'coeur_meta',
            'std' => '1'
        ));

        /**
        * Change text preceding date
        * @author Frenchtastic
        * @since Coeur 1.7
        */
        $wp_customize->add_setting('coeur_meta_posted', array(
            'default'        => 'Posted on',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'transport'      => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
            ));

        $wp_customize->add_control('coeur_meta_posted', array(
            'label'      => __('Posted on', 'coeur'),
            'section'    => 'coeur_meta',
            'settings'   => 'coeur_meta_posted',
            'description' => 'Change the text preceding the post date. Set to <b>"posted on"</b> by default.'
        ));

        /**
        * Excerpt or content
        */
        $wp_customize->add_setting('post_content', array(
            'default'        => 'excerpt',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'transport' => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            'sanitize_callback' => 'coeur_sanitize_content',
        ));

        $wp_customize->add_control('coeur_postcontent', array(
            'label'      => __('Post Content', 'coeur'),
            'section'    => 'coeur_postcontent',
            'settings'   => 'post_content',
            'description' => '<b>Show content</b> will show the whole post content while <b>show excerpt</b> will only show the first few lines',
            'type'       => 'radio',
            'choices'    => array(
                'content' => 'Show content',
                'excerpt' => 'Show excerpt'
                ),
        ));

        /*
        * Heading Link Color
        */ 
        $wp_customize->add_setting( 'heading_linkcolor', 
            array(
                'default' => '#333', //Default setting/value to save
                'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
                'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
                'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
                'sanitize_callback' => 'sanitize_hex_color',
            ) 
        );      
            
        $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'coeur_heading_linkcolor', //Set a unique ID for the control
            array(
                'label' => __( 'Headings Link Color', 'mytheme' ), //Admin-visible name of the control
                'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
                'settings' => 'heading_linkcolor', //Which setting to load and manipulate (serialized is okay)
                'priority' => 10, //Determines the order this control appears in for the specified section
            ) 
        ));

        /**
        * Primary color
        * @author Frenchtastic
        * @since Coeur 1.0
        */
        $wp_customize->add_setting( 'primary_color' , array(
            'default'     => '#00c9bf',
            'transport'   => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
            ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coeur_primary_color', array(
            'label'        => __( 'Primary Color', 'coeur' ),
            'section'    => 'colors',
            'settings'   => 'primary_color',
        )));

        /*
        * Link Color
        */ 
        $wp_customize->add_setting( 'link_textcolor', 
            array(
            'default' => '#00c9bf', //Default setting/value to save
            'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            'sanitize_callback' => 'sanitize_hex_color',
        ));           

        $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
            $wp_customize, //Pass the $wp_customize object (required)
            'coeur_link_textcolor', //Set a unique ID for the control
            array(
            'label' => __( 'Link Color', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'link_textcolor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
            ) 
        ));

        /*
        * Blog Layout
        */
        $wp_customize->add_setting('bloglayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'sanitize_callback' => 'coeur_sanitize_layout',
        ));

        $wp_customize->add_control('coeur_option_bloglayout', array(
            'label'      => __('Layout', 'eiffel'),
            'section'    => 'coeur_bloglayout',
            'settings'   => 'bloglayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => 'Left',
                'full_width' => 'Content Full Width / No sidebar',
                'right'   => 'Right'
                ),
        ));

        /*
        * Post Layout
        */
        $wp_customize->add_setting('postlayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'sanitize_callback' => 'coeur_sanitize_layout',
        ));

        $wp_customize->add_control('coeur_option_postlayout', array(
            'label'      => __('Layout', 'eiffel'),
            'section'    => 'coeur_postlayout',
            'settings'   => 'postlayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => 'Left',
                'full_width' => 'Content Full Width / No sidebar',
                'right'   => 'Right'
                ),
        ));

        /*
        * Page Layout
        */
        $wp_customize->add_setting('pagelayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'sanitize_callback' => 'coeur_sanitize_layout',
        ));

        $wp_customize->add_control('coeur_option_pagelayout', array(
            'label'      => __('Layout', 'eiffel'),
            'section'    => 'coeur_pagelayout',
            'settings'   => 'pagelayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => 'Left',
                'full_width' => 'Content Full Width / No sidebar',
                'right'   => 'Right'
                ),
        ));

        /**
        * Container width
        * @author Frenchtastic
        * @since Coeur 2.0
        */
        $wp_customize->add_setting('container_width', array(
            'default'        => '970px',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'coeur_sanitize_width',
            ));

        $wp_customize->add_control('coeur_option_container_width', array(
            'label'      => __('Width', 'coeur'),
            'section'    => 'coeur_container_width',
            'settings'   => 'container_width',
            'description' => 'Choose site width. <br> <b>Please note:</b> This option will not make any changes to your site as you site in customizer because the view is too small.',
            'type'       => 'select',
            'choices'    => array(
                '970px' => 'Standard site width',
                '1170px' => 'Wider site width'
                ),
        ));

        /**
        * Headings
        * @author Frenchtastic
        * @since Coeur 2.0
        */
        $wp_customize->add_setting('headings_weight', array(
            'default'        => '100',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            'sanitize_callback' => 'coeur_sanitize_weight',
            ));

        $wp_customize->add_control('coeur_headings_weight', array(
            'label'      => __('Headings', 'coeur'),
            'section'    => 'coeur_fonts',
            'settings'   => 'headings_weight',
            'description' => 'Make headings/titles bolder.',
            'type'       => 'select',
            'choices'    => array(
                '100' => 'Thin',
                '200' => 'Bold',
                '400' => 'Bolder'
                ),
            ));

        /**
        * Body Font
        * @author Frenchtastic
        * @since Coeur 2.0
        */
        $wp_customize->add_setting('body_font', array(
            'default'        => 'Helvetica Neue',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            'sanitize_callback' => 'coeur_sanitize_fontfamily',
            ));

        $wp_customize->add_control('coeur_body_font', array(
            'label'      => __('Body Font', 'coeur'),
            'section'    => 'coeur_fonts',
            'settings'   => 'body_font',
            'description' => 'Pick a font for body text.',
            'type'       => 'select',
            'choices'    => array(
                'Helvetica Neue' => 'Helvetica Neue',
                'Open Sans' => 'Open Sans',
                'Arial' => 'Arial',
                'Comic Sans MS' => 'Comic Sans MS',
                'Times New Roman' => 'Times New Roman',
                'Verdana' => 'Verdana'
                ),
            ));

        /**
        * Headings
        * @author Frenchtastic
        * @since Coeur 2?0
        */
        $wp_customize->add_setting('headings_font', array(
            'default'        => 'Helvetica Neue',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            'sanitize_callback' => 'coeur_sanitize_fontfamily',
            ));

        $wp_customize->add_control('coeur_headings_font', array(
            'label'      => __('Heading Font', 'coeur'),
            'section'    => 'coeur_fonts',
            'settings'   => 'headings_font',
            'description' => 'Pick a font for all headings.',
            'type'       => 'select',
            'choices'    => array(
                'Helvetica Neue' => 'Helvetica Neue',
                'Open Sans' => 'Open Sans',
                'Arial' => 'Arial',
                'Comic Sans MS' => 'Comic Sans MS',
                'Times New Roman' => 'Times New Roman',
                'Verdana' => 'Verdana'
                ),
        ));

        /**
        * Logo
        * @author Frenchtastic
        * @since Coeur 1.6
        */
        $wp_customize->add_setting( 'coeur_logo' );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coeur_logo_option', array(
        'label'    => __( 'Logo', 'coeur' ),
        'section'  => 'coeur_logo',
        'settings' => 'coeur_logo',
        )));

        /**
        * Footer copyright text
        * @author Frenchtastic
        * @since Coeur 1.0
        */
        $wp_customize->add_setting('footer_copyright', array(
            'default'        => '<a href="'.esc_url('http://frenchtastic.eu').'">Design by Frenchtastic.eu</a>',
            'capability'     => 'edit_theme_options',
            'type'           => 'option',
            'transport'      => 'refresh'
            ));

        $wp_customize->add_control('coeur_footer_copyright', array(
            'label'      => __('Footer Copyright', 'coeur'),
            'section'    => 'title_tagline',
            'settings'   => 'footer_copyright'
        ));
              
        //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
        $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        $wp_customize->get_setting( 'heading_linkcolor' )->transport = 'postMessage';
        $wp_customize->get_setting( 'primary_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'headings_weight' )->transport = 'postMessage';
        $wp_customize->get_setting( 'headings_font' )->transport = 'postMessage';
        $wp_customize->get_setting( 'body_font' )->transport = 'postMessage';
   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head'
    * 
    * @see add_action('wp_head',$func)
    * @since Coeur 2.0
    */
   public static function header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
           <?php self::generate_css('#site-title a', 'color', 'header_textcolor', '#'); ?> 
           <?php self::generate_css('body', 'background-color', 'background_color', '#'); ?> 
           <?php self::generate_css('a, a:hover', 'color', 'link_textcolor'); ?>
           <?php self::generate_css('.btn-primary, .bypostauthor .media-heading, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary', 'background-color', 'primary_color'); ?>
           <?php self::generate_css('blockquote, .sticky, .form-control:focus, .search-field:focus, .btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary', 'border-color', 'primary_color'); ?>
           <?php self::generate_css('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a', 'color', 'heading_linkcolor'); ?>
           <?php self::generate_css('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, 
    h4, .h4, h5, .h5, h6, .h6, .site-description', 'font-weight', 'headings_weight'); ?>
           <?php self::generate_css('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, 
    h4, .h4, h5, .h5, h6, .h6, .site-description', 'font-family', 'headings_font'); ?>
           <?php self::generate_css('body', 'font-family', 'body_font'); ?>
           @media (min-width: 1200px) {
              <?php self::generate_css('.container', 'width', 'container_width'); ?>
            }
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    * @since Coeur 2.0
    */
   public static function live_preview() {
      wp_enqueue_script( 'theme-customizer', get_template_directory_uri() . '/framework/js/theme-customizer.js', array(  'jquery', 'customize-preview' ), '', true);
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     * 
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since Coeur 2.0
     */
    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }
}

/**
 * Sanitize Checkbox
 * 
 * @since 0.1
 * @access public
 * @param mixed $input
 * @return int|bool
 */
function coeur_sanitize_checkbox( $input ) {
    if ( $input ) {
    $output = '1';
    } else {
    $output = false;
    }
    return $output;
}

/**
* Sanitize layout options
*
* @since Coeur 2.0.2
*
* @param string $layout Layout type.
* @return string Filtered layout type (left|full_width|right).
*/
function coeur_sanitize_layout( $layout ) {
    if ( ! in_array( $layout, array( 'left', 'full_width', 'right' ) ) ) {
        $layout = 'right';
    }

    return $layout;
}

/**
* Sanitize site width
*
* @since Coeur 2.0.2
*
* @param string $width Width type.
* @return string Filtered Width type (970px|1170px).
*/
function coeur_sanitize_width( $width ) {
    if ( ! in_array( $width, array( '970px', '1170px' ) ) ) {
        $width = '970px';
    }

    return $width;
}

/**
* Sanitize site font
*
* @since Coeur 2.0.2
*
* @param string $font font type.
* @return string Filtered font type (Helvetica Neue|Open Sans|Arial|Comic Sans MS|Times New Roman|Verdana).
*/
function coeur_sanitize_fontfamily( $font ) {
    if ( ! in_array( $font, array( 'Helvetica Neue', 'Open Sans', 'Arial', 'Comic Sans MS', 'Times New Roman', 'Verdana' ) ) ) {
        $font = 'Helvetica Neue';
    }

    return $font;
}

/**
* Sanitize blog content
*
* @since Coeur 2.0.2
*
* @param string $content content type.
* @return string Filtered content type (content|excerpt).
*/
function coeur_sanitize_content( $content ) {
    if ( ! in_array( $content, array( 'content', 'excerpt' ) ) ) {
        $content = 'excerpt';
    }

    return $content;
}

/**
* Sanitize font weight
*
* @since Coeur 2.0.2
*
* @param string $weight weight type.
* @return string Filtered weight type (100|200|400).
*/
function coeur_sanitize_weight( $weight ) {
    if ( ! in_array( $weight, array( '100', '200', '300' ) ) ) {
        $weight = '100';
    }

    return $weight;
}

/**
* Sanitize 'show menu on single pages option'
*
* @since Coeur 2.0.2
*
* @param string $show show type.
* @return string Filtered show type (yes|no).
*/
function coeur_sanitize_menusingle( $show ) {
    if ( ! in_array( $show, array( 'yes', 'no' ) ) ) {
        $show = 'no';
    }

    return $show;
}

add_filter( 'coeur_sanitize_choices', 'coeur_sanitize_choices', 10, 2);

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'Coeur_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'Coeur_Customize' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'Coeur_Customize' , 'live_preview' ) );