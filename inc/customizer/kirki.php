<?php

/* configuration Kirki */
Kirki::add_config( 'coolprintingswb', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'coolswb',
) );


/* Setting panel Homepage */
Kirki::add_panel( 'homepage_set', array(
    'priority'    => 10,
    'title'       => __( 'Atur Laman Depan', 'printingcool' ),
    'description' => __( 'Pengaturan Untuk Laman Depan', 'printingcool' ),
) );

/* Change Logo Homepage */
Kirki::add_section( 'big_logo_for_homepage', array(
    'title'          => __( 'Logo Laman Depan', 'printingcool' ),
    'description'    => __( 'Logo ini akan tampil pada halaman depan/home/beranda', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'image',
    'settings'     => 'homepage_logo',
    'label'       => __( 'Logo Halaman Depan', 'printingcool' ),
    'section'     => 'big_logo_for_homepage',
    'default'     => get_template_directory_uri() . '/images/logo-radja-printing-big.png',
    'priority'    => 10,
) );

/* Section Block Menu Homepage 1 */
Kirki::add_section( 'block_menu_homepage_1', array(
    'title'          => __( 'Pengaturan Menu 1', 'printingcool' ),
    'description'    => __( 'Pengaturan isi laman depan Menu 1. Sebaiknya tidak melebihi 2 baris', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );


/* Field Block Menu Homepage 1 */
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'title_menu_1',
    'label'       => __( 'Judul Menu 1', 'printingcool' ),
    'section'     => 'block_menu_homepage_1',
    'default'     => 'HOME',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'textarea',
    'settings'     => 'content_menu_1',
    'label'       => __( 'Isi Menu 1', 'printingcool' ),
    'section'     => 'block_menu_homepage_1',
    'default'     => 'Kami berkomitmen memberikan produk berkualitas',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'link_menu_1',
    'label'       => __( 'Link Menu 1', 'printingcool' ),
    'section'     => 'block_menu_homepage_1',
    'default'     => '#',
    'priority'    => 10,
) );

/*Kirki::add_field( 'coolprintingswb', array(
    'type'     => 'dashicons',
    'settings' => 'icon_menu_1',
    'label'    => __( 'Icon Menu 1', 'printingcool' ),
    'section'  => 'block_menu_homepage_1',
    'default'  => 'menu',
    'priority' => 10,
) );*/

// Get All Pages
/*
$args = array(
	'sort_order' => 'desc',
	'sort_column' => 'post_title',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
); 

$pages = get_pages($args); 
foreach ($pages as $page) {
	$pages_array[get_permalink($page->ID)] = esc_attr__( $page->post_title, 'printingcool' );
}

Kirki::add_field( 'my_config', array(
	'type'        => 'select',
	'settings'    => 'link_menu_1_1',
	'label'       => __( 'Pilih Halaman', 'printingcool' ),
	'section'     => 'block_menu_homepage_1',
	'default'     => 'home',
	'priority'    => 10,
	'multiple'    => 0,
	'choices'     => $pages_array,
) );*/

//* Section Block Menu Homepage 2 */
Kirki::add_section( 'block_menu_homepage_2', array(
    'title'          => __( 'Pengaturan Menu 2', 'printingcool' ),
    'description'    => __( 'Pengaturan isi laman depan Menu 2. Sebaiknya tidak melebihi 2 baris', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

/* Field Block Menu Homepage 2 */
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'title_menu_2',
    'label'       => __( 'Judul Menu 2', 'printingcool' ),
    'section'     => 'block_menu_homepage_2',
    'default'     => 'TENTANG KAMI',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'textarea',
    'settings'     => 'content_menu_2',
    'label'       => __( 'Isi Menu 2', 'printingcool' ),
    'section'     => 'block_menu_homepage_2',
    'default'     => 'Informasi lengkap tentang perusahaan kami.',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'link_menu_2',
    'label'       => __( 'Link Menu 2', 'printingcool' ),
    'section'     => 'block_menu_homepage_2',
    'default'     => '#',
    'priority'    => 10,
) );

/* Section Block Menu Homepage 3 */
Kirki::add_section( 'block_menu_homepage_3', array(
    'title'          => __( 'Pengaturan Menu 3', 'printingcool' ),
    'description'    => __( 'Pengaturan isi laman depan Menu 3. Sebaiknya tidak melebihi 2 baris', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

/* Field Block Menu Homepage 3 */
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'title_menu_3',
    'label'       => __( 'Judul Menu 3', 'printingcool' ),
    'section'     => 'block_menu_homepage_3',
    'default'     => 'KLIEN KAMI',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'textarea',
    'settings'     => 'content_menu_3',
    'label'       => __( 'Isi Menu 3', 'printingcool' ),
    'section'     => 'block_menu_homepage_3',
    'default'     => 'Siapa saja pelanggan yang telah kami layani?',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'link_menu_3',
    'label'       => __( 'Link Menu 3', 'printingcool' ),
    'section'     => 'block_menu_homepage_3',
    'default'     => '#',
    'priority'    => 10,
) );

/* Section Block Menu Homepage 4 */
Kirki::add_section( 'block_menu_homepage_4', array(
    'title'          => __( 'Pengaturan Menu 4', 'printingcool' ),
    'description'    => __( 'Pengaturan isi laman depan Menu 4. Sebaiknya tidak melebihi 2 baris', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

/* Field Block Menu Homepage 3 */
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'title_menu_4',
    'label'       => __( 'Judul Menu 4', 'printingcool' ),
    'section'     => 'block_menu_homepage_4',
    'default'     => 'PRODUK & LAYANAN',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'textarea',
    'settings'     => 'content_menu_4',
    'label'       => __( 'Isi Menu 4', 'printingcool' ),
    'section'     => 'block_menu_homepage_4',
    'default'     => 'Lihat produk apa saja yang kami berikan.',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'link_menu_4',
    'label'       => __( 'Link Menu 4', 'printingcool' ),
    'section'     => 'block_menu_homepage_4',
    'default'     => '#',
    'priority'    => 10,
) );

/* Section Block Menu Homepage 5 */
Kirki::add_section( 'block_menu_homepage_5', array(
    'title'          => __( 'Pengaturan Menu 5', 'printingcool' ),
    'description'    => __( 'Pengaturan isi laman depan Menu 5. Sebaiknya tidak melebihi 2 baris', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

/* Field Block Menu Homepage 5 */
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'title_menu_5',
    'label'       => __( 'Judul Menu 5', 'printingcool' ),
    'section'     => 'block_menu_homepage_5',
    'default'     => 'INFO KAMI',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'textarea',
    'settings'     => 'content_menu_5',
    'label'       => __( 'Isi Menu 5', 'printingcool' ),
    'section'     => 'block_menu_homepage_5',
    'default'     => 'Semua informasi termasuk promo dari kami.',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'link_menu_5',
    'label'       => __( 'Link Menu 5', 'printingcool' ),
    'section'     => 'block_menu_homepage_5',
    'default'     => '#',
    'priority'    => 10,
) );


/* Section Block Menu Homepage 6 */
Kirki::add_section( 'block_menu_homepage_6', array(
    'title'          => __( 'Pengaturan Menu 6', 'printingcool' ),
    'description'    => __( 'Pengaturan isi laman depan Menu 6. Sebaiknya tidak melebihi 2 baris', 'printingcool' ),
    'panel'          => 'homepage_set', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

/* Field Block Menu Homepage 6 */
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'title_menu_6',
    'label'       => __( 'Judul Menu 6', 'printingcool' ),
    'section'     => 'block_menu_homepage_6',
    'default'     => 'HUBUNGI KAMI',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'textarea',
    'settings'     => 'content_menu_6',
    'label'       => __( 'Isi Menu 6', 'printingcool' ),
    'section'     => 'block_menu_homepage_6',
    'default'     => 'Untuk informasi lebih lanjut segera hubungi kami.',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'link_menu_6',
    'label'       => __( 'Link Menu 6', 'printingcool' ),
    'section'     => 'block_menu_homepage_6',
    'default'     => '#',
    'priority'    => 10,
) );



/* General Setting */
Kirki::add_panel( 'theme_settings', array(
    'priority'    => 10,
    'title'       => __( 'Pengaturan Tema', 'printingcool' ),
    'description' => __( 'Pengaturan tema secara keseluruhan keseluruhan.', 'printingcool' ),
) );

/* Change Logo Homepage */
Kirki::add_section( 'general_setting', array(
    'title'          => __( 'Pengaturan Umum', 'printingcool' ),
    'description'    => __( 'Pengaturan umum tema', 'printingcool' ),
    'panel'          => 'theme_settings', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );

Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'image',
    'settings'    => 'header_logo',
    'description' => 'Logo website pada halaman dalam (bukan home) yang berada pada pojok kiri atas. Untuk melihat langsung (live) perubahan pada hasil disini, pilih salah satu tautan dari home disamping kanan ini.',
    'label'       => __( 'Logo Header', 'printingcool' ),
    'section'     => 'general_setting',
    'default'     => get_template_directory_uri() . '/images/logo-radja-printing.png',
    'priority'    => 10,
) );

Kirki::add_field( 'coolprintingswb', array(
	'type'        => 'radio',
	'settings'    => 'page_sidebar_default',
	'label'       => __( 'Default Sidebar Umum', 'printingcool' ),
	'description' => 'Pilih "Ya" apabila ingin setiap halaman (page) secara default menggunakan sidebar.',
	'section'     => 'general_setting',
	'default'     => 'no',
	'priority'    => 10,
	'choices'     => array(
		'yes'   => esc_attr__( 'Ya', 'printingcool' ),
		'no' => esc_attr__( 'Tidak', 'printingcool' ),
	),
) );

Kirki::add_field( 'coolprintingswb', array(
	'type'        => 'radio',
	'settings'    => 'post_sidebar_default',
	'label'       => __( 'Default Sidebar Post', 'printingcool' ),
	'description' => 'Seperti diatas tetapi untuk post. Pilih "Ya" apabila ingin setiap postingan (post) secara default menggunakan sidebar.',
	'section'     => 'general_setting',
	'default'     => 'yes',
	'priority'    => 10,
	'choices'     => array(
		'yes'   => esc_attr__( 'Ya', 'printingcool' ),
		'no' => esc_attr__( 'Tidak', 'printingcool' ),
	),
) );

/* Footer Settings */
Kirki::add_section( 'footer_setting', array(
    'title'          => __( 'Pengaturan Footer', 'printingcool' ),
    'description'    => __( 'Pengaturan Footer tema (copyright)', 'printingcool' ),
    'panel'          => 'theme_settings', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', 
) );
Kirki::add_field( 'coolprintingswb', array(
    'type'        => 'text',
    'settings'     => 'copyright_text',
    'label'       => __( 'Copyright', 'printingcool' ),
    'section'     => 'footer_setting',
    'default'     => 'Copyright 2018 © New Radja Digital Printing Samarinda.',
    'priority'    => 10,
) );
/* end footer settings */

Kirki::add_field( 'coolprintingswb', array(
	'type'        => 'radio',
	'settings'    => 'archive_sidebar_default',
	'label'       => __( 'Default Sidebar Arsip', 'printingcool' ),
	'description' => 'Seperti diatas tetapi untuk halaman kategori dan tag. Pilih "Ya" apabila ingin secara default menggunakan sidebar.',
	'section'     => 'general_setting',
	'default'     => 'yes',
	'priority'    => 10,
	'choices'     => array(
		'yes'   => esc_attr__( 'Ya', 'printingcool' ),
		'no' => esc_attr__( 'Tidak', 'printingcool' ),
	),
) );