<?php
/**
 * gpc Theme Customizer
 *
 * @package gpc
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gpc_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

//Landing page
$wp_customize->add_panel('landing',array(
	'title'=>'Home Page',
	'priority'=>10,
	'capability'=>'edit_theme_options'
));
$wp_customize->add_section('landingHero',array(
	'title'=>'Hero',
	'description'=>'Home page hero customization section',
	'panel' => 'landing',
));

//Hero section
$wp_customize->add_setting('heroH1Text',array(
	'default'=>__('Information for change')
));
$wp_customize->add_control('heroH1Text',array(
	'label'=>'H1',
	'section'=>'landingHero',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('heroH3Text',array(
	'default'=>__('Human Rights Protection Community Development Public Accountability Media')
));
$wp_customize->add_control('heroH3Text',array(
	'label'=>'H3',
	'section'=>'landingHero',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('heroBgImage',array(
	'default'=> get_bloginfo('template_url') . '/assets/img/background.png'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'heroBgImage',array(
	'label'=>'Backgroung image',
	'section'=>'landingHero',
	'priority'=>7
)));

//Our values section
$wp_customize->add_section('ourValues',array(
	'title'=>'Our values',
	'description'=>'Our values section customization',
	'panel' => 'landing',
));

$wp_customize->add_setting('ourValuesTitle',array(
	'default'=>__('Our Values')
));
$wp_customize->add_control('ourValuesTitle',array(
	'label'=>'Our values',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value1',array(
	'default'=>__('Integrity')
));
$wp_customize->add_control('value1',array(
	'label'=>'Value 1',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value1text',array(
	'default'=>__('Responsible Reliable Coorparative')
));
$wp_customize->add_control('value1text',array(
	'label'=>'Value 1 text',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value2',array(
	'default'=>__('Fair-minded')
));
$wp_customize->add_control('value2',array(
	'label'=>'Value 2',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value2text',array(
	'default'=>__('Tolerant Objective Principled')
));
$wp_customize->add_control('value2text',array(
	'label'=>'Value 2 text',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value3',array(
	'default'=>__('Progressive')
));
$wp_customize->add_control('value3',array(
	'label'=>'Value 3',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value3text',array(
	'default'=>__('Constructive Innovative Developing')
));
$wp_customize->add_control('value3text',array(
	'label'=>'Value 3 text',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value4',array(
	'default'=>__('Dynamic')
));
$wp_customize->add_control('value4',array(
	'label'=>'Value 4',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('value4text',array(
	'default'=>__('Creative Inventive Advancing')
));
$wp_customize->add_control('value4text',array(
	'label'=>'Value 4 text',
	'section'=>'ourValues',
	'priority'=>1,
	'type'=>'text'
));

//Posts slider

$wp_customize->add_section('postsSlider',array(
	'title'=>'Posts slider',
	'description'=>'Posts slider customization section',
	'panel' => 'landing',
));

$wp_customize->add_setting('categoryTitle',array(
	'default'=>__('Իրադարձային')
));
$wp_customize->add_control('categoryTitle',array(
	'label'=>'Category Title',
	'section'=>'postsSlider',
	'priority'=>1,
	'type'=>'text'
));
$wp_customize->add_setting('categoryName',array(
	'default'=>__('Events')
));
$wp_customize->add_control('categoryName',array(
	'label'=>'Category Name',
	'section'=>'postsSlider',
	'priority'=>1,
	'type'=>'text'
));

//Partners section
$wp_customize->add_section('partnersSection',array(
	'title'=>'Partners section',
	'description'=>'Partners section customization section',
	'panel' => 'landing',
));

$wp_customize->add_setting('goToWebsite',array(
	'default'=>__('Go to Website')
));
$wp_customize->add_control('goToWebsite',array(
	'label'=>'Url button text',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'text'
));


$wp_customize->add_setting('partner1Text',array(
	'default'=>__('The news team at Goris Press Club creates diverse media content covering 
	various communities in the Syunik region. Click here to read about major events, issues, and developments in the region.')
));
$wp_customize->add_control('partner1Text',array(
	'label'=>'Partner 1 text',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'textarea'
));
$wp_customize->add_setting('partner1Url',array(
	'default'=>__('#')
));
$wp_customize->add_control('partner1Url',array(
	'label'=>'Partner 1 url',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('partner1Logo',array(
	'default' => get_template_directory_uri()."/assets/images/mediapoint_logo_2.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner1Logo',array(
	'label'=>'Partner 1 Logo',
	'section'=>'partnersSection',
	'priority'=>1
)));


$wp_customize->add_setting('partner2Text',array(
	'default'=>__('The news team at Goris Press Club creates diverse media content covering 
	various communities in the Syunik region. Click here to read about major events, issues, and developments in the region.')
));
$wp_customize->add_control('partner2Text',array(
	'label'=>'Partner 2 text',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'textarea'
));
$wp_customize->add_setting('partner2Url',array(
	'default'=>__('#')
));
$wp_customize->add_control('partner2Url',array(
	'label'=>'Partner 2 url',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('partner2Logo',array(
	'default' => get_template_directory_uri()."/assets/images/infohouselogo_2.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner2Logo',array(
	'label'=>'Partner 2 Logo',
	'section'=>'partnersSection',
	'priority'=>1
)));



$wp_customize->add_setting('partner3Text',array(
	'default'=>__('The news team at Goris Press Club creates diverse media content covering 
	various communities in the Syunik region. Click here to read about major events, issues, and developments in the region.')
));
$wp_customize->add_control('partner3Text',array(
	'label'=>'Partner 3 text',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'textarea'
));
$wp_customize->add_setting('partner3Url',array(
	'default'=>__('#')
));
$wp_customize->add_control('partner3Url',array(
	'label'=>'Partner 3 url',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('partner3Logo',array(
	'default' => get_template_directory_uri()."/assets/images/youthhouse_logo_2.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner3Logo',array(
	'label'=>'Partner 3 Logo',
	'section'=>'partnersSection',
	'priority'=>1
)));

$wp_customize->add_setting('partner4Logo',array(
	'default' => get_template_directory_uri()."/assets/images/USAID_logo.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner4Logo',array(
	'label'=>'Partner 4 Logo',
	'section'=>'partnersSection',
	'priority'=>1
)));

$wp_customize->add_setting('partner5Logo',array(
	'default' => get_template_directory_uri()."/assets/images/logo.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner5Logo',array(
	'label'=>'Partner 5 Logo',
	'section'=>'partnersSection',
	'priority'=>1
)));


$wp_customize->add_setting('partner4Text',array(
	'default'=>__('This web-site is created by the Goris Press Club (GPC), and is made possible by the generous 
	support of the American People through the United States Agency for International Development (USAID). The contents of 
	this web-site are the sole responsibility of Goris Press Club and do not necessarily reflect the views of USAID or the 
	United States Government.')
));
$wp_customize->add_control('partner4Text',array(
	'label'=>'Partner 4 text',
	'section'=>'partnersSection',
	'priority'=>1,
	'type'=>'textarea'
));









//Footer
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$wp_customize->add_section('footer',array(
	'title'=>'Footer',
	'description'=>'Footer customization section',
	
));
//Footer logo 1
$wp_customize->add_setting('footerlogo1',array(
	'default' => get_template_directory_uri()."/assets/images/logo.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footerlogo1',array(
	'label'=>'Logo 1',
	'section'=>'footer',
	'priority'=>1
)));

$wp_customize->add_setting('footerlogo1_url',array(
	'default'=>__('#')
));
$wp_customize->add_control('footerlogo1_url',array(
	'label'=>'Logo 1 url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));
//Footer logo 2
$wp_customize->add_setting('footerlogo2',array(
	'default' => get_template_directory_uri()."/assets/images/youthhub_logo.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footerlogo2',array(
	'label'=>'Logo 2',
	'section'=>'footer',
	'priority'=>1
)));

$wp_customize->add_setting('footerlogo2_url',array(
	'default'=>__('#')
));
$wp_customize->add_control('footerlogo2_url',array(
	'label'=>'Logo 2 url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));
//Footer logo 3
$wp_customize->add_setting('footerlogo3',array(
	'default' => get_template_directory_uri()."/assets/images/infohouselogo.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footerlogo3',array(
	'label'=>'Logo 3',
	'section'=>'footer',
	'priority'=>1
)));

$wp_customize->add_setting('footerlogo3_url',array(
	'default'=>__('#')
));
$wp_customize->add_control('footerlogo3_url',array(
	'label'=>'Logo 3 url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

//Footer logo 4
$wp_customize->add_setting('footerlogo4',array(
	'default' => get_template_directory_uri()."/assets/images/mediapoint_logo.png"
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footerlogo4',array(
	'label'=>'Logo 4',
	'section'=>'footer',
	'priority'=>1
)));

$wp_customize->add_setting('footerlogo4_url',array(
	'default'=>__('#')
));
$wp_customize->add_control('footerlogo4_url',array(
	'label'=>'Logo 4 url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

//Footer locations
$wp_customize->add_setting('footerlocations',array(
	'default'=>__('Locations')
));
$wp_customize->add_control('footerlocations',array(
	'label'=>'Locations',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('footerlocation1',array(
	'default'=>__('Armenia, Goris, Garegin Nzhdeh street 45/1')
));
$wp_customize->add_control('footerlocation1',array(
	'label'=>'Location 1',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('footerlocation2',array(
	'default'=>__('Armenia, Goris, Mashtots street 3')
));
$wp_customize->add_control('footerlocation2',array(
	'label'=>'Location 2',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

//Footer contacts

$wp_customize->add_setting('footercontacts',array(
	'default'=>__('Contacts')
));
$wp_customize->add_control('footercontacts',array(
	'label'=>'Contacts',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));


$wp_customize->add_setting('footerphone',array(
	'default'=>__('Phone: +374 98 99 97 31')
));
$wp_customize->add_control('footerphone',array(
	'label'=>'Phone',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));


$wp_customize->add_setting('footermail',array(
	'default'=>__('Mail: info@gorispressclub.am')
));
$wp_customize->add_control('footermail',array(
	'label'=>'Mail',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));



$wp_customize->add_setting('footerOnSocialMedia',array(
	'default'=>__('On Social Media')
));
$wp_customize->add_control('footerOnSocialMedia',array(
	'label'=>'On social media',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('footerInstagramUrl',array(
	'default'=>__('https://instagram.com/')
));
$wp_customize->add_control('footerInstagramUrl',array(
	'label'=>'Instagram url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('footerFaceBookUrl',array(
	'default'=>__('https://facebook.com/')
));
$wp_customize->add_control('footerFaceBookUrl',array(
	'label'=>'Facebook url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));



$wp_customize->add_setting('footerYoutubeUrl',array(
	'default'=>__('https://youtube.com/')
));
$wp_customize->add_control('footerYoutubeUrl',array(
	'label'=>'Youtube url',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));



$wp_customize->add_setting('footerCopyright',array(
	'default'=>__('© Goris Press Club 2024')
));
$wp_customize->add_control('footerCopyright',array(
	'label'=>'Copyright',
	'section'=>'footer',
	'priority'=>1,
	'type'=>'text'
));

//Footer end

//Category page
$wp_customize->add_section('category',array(
	'title'=>'Category',
	'description'=>'Category customization section',
	
));


$wp_customize->add_setting('projectsSubtitle',array(
	'default'=>__('Below are some of the Goris Press Club’s ongoing and completed projects.')
));
$wp_customize->add_control('projectsSubtitle',array(
	'label'=>'Subtitle for projects category page',
	'section'=>'category',
	'priority'=>1,
	'type'=>'text'
));

$wp_customize->add_setting('readMoreButton',array(
	'default'=>__('Read more')
));
$wp_customize->add_control('readMoreButton',array(
	'label'=>'Read more',
	'section'=>'category',
	'priority'=>1,
	'type'=>'text'
));


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	



	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'gpc_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'gpc_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'gpc_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gpc_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gpc_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gpc_customize_preview_js() {
	wp_enqueue_script( 'gpc-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'gpc_customize_preview_js' );
