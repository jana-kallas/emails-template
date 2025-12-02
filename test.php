<?php
 /** * Base blog post template * * @package WordPress * @subpackage TejoMaya * @since 1.0.0 * * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/ */ if ($args) {
 extract($args);
 }
 use App\Acf\Fields\Link;
 use App\TableOfContent\TableOfContent;
 $body_styles = get_field('body_styles', get_the_ID());
 $hero_fields = get_fields();
 $heroType = $hero_fields['hero_type'] === 'home_page' ? 'home-page' : 'other-page';
 // $heroType = $hero_fields['hero_type'] === 'home_page' ? 'home-page' : ($hero_fields['hero_type'] === 'blog_page' ? 'blog-page' : 'other-page');
 $rightSide = $hero_fields['right_side'];
 $quickTitle = explode(' ', $hero_fields['title']);
 $small_image = get_field('small_image');
 $display_image= get_field('display_image');
 $show_social_block = get_field('one_blog_post')['show_social_column'];
 $social_fields = get_field('one_blog_post', 'options');
 $current_post = get_post(get_the_ID());
 $post_type = $current_post->post_type;
 $current_post_practices = get_the_terms( $current_post->ID, $post_type . '-practice' );
 $articles_fields = get_field('articles_block');
 $show_articles_block = get_field('show_articles_block');
 $block_title = $articles_fields['block_title'];
 $title = $articles_fields['title'];
 $description = $articles_fields['description'];
 $button = $articles_fields['button'];
 $blog_articles = $articles_fields['blog_articles'];
 $subscribe_fields = get_field('subscribe', 'options');
 $show_subscribe_block = get_field('show_subscribe_block', 'options');
 $contact_form_fields = get_field('get_a_free_e-book', 'options')["contact_form_block"];
 $show_contact_form_block = get_field('get_a_free_e-book', 'options')['show_contact_form_block'];
 $contact_form_title_block = $contact_form_fields['block_title'];
 $contact_form_title = $contact_form_fields['title'];
 $contact_form_desc = $contact_form_fields['description'];
 $contact_form_image = $contact_form_fields['image'];
 $contact_form_job_title = $contact_form_fields['job_title'];
 $contact_form_name = $contact_form_fields['name'];
 $type_of_form = $contact_form_fields['type_of_form'];
 $contact_form = $contact_form_fields['contact_form'];
 $contact_form_download_file = get_field('download_file_from_contact_form')['pdf_file'];
 get_header();
 ?> <style> .hero.home-page {
 background-color: <?php
 echo $hero_fields['background_color'] ?>;
 color: <?php
 echo $hero_fields['text_color'] ?>;
 }
 .hero.other-page {
 background-color: <?php
 echo $hero_fields['background_color_other'] ?>;
 color: <?php
 echo $hero_fields['text_color_other'] ?>;
 }
 </style> <main id="single_blog_post" class="blog-post-page <?php
 echo $body_styles ?>"> <?php
 if (!empty($hero_fields['add_breadcrumbs'])): ?> <div class="breadcrumbs"> <div class="container body"> <a href="<?php
 echo get_permalink($hero_fields['breadcrumbs']->ID) ?>"><?php
 echo $hero_fields['breadcrumbs']->post_title ?></a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none"> <path d="M1.5 8.5L14 8.5" stroke="#B5B8C1"/> <path d="M10.5 12L14 8.5L10.5 5" stroke="#B5B8C1"/> </svg> <div class="child desktop"><?php
 echo $hero_fields['title'];
 ?></div> <div class="child mobile"><?php
 echo $quickTitle[0] . '...';
 ?></div> </div> </div> <?php
 endif;
 ?> <section class="hero <?php
 echo $heroType ?><?php
 echo $hero_fields['background_image'] ? ' image-bg' : '' ?><?php
 echo is_singular( 'blog' ) ? ' blog-post': '' ?>"> <div class="container"> <div class="hero__content <?php
 echo $heroType ?>"> <?php
 if (!empty($hero_fields['background_image'])): ?> <div class=""> <div class="hero__content--image" style="background-image: url('<?php
 echo $hero_fields['background_image'];
 ?>')"> <h1 class="hero__content--title <?php
 echo $heroType ?> <?php
 echo $hero_fields['small_mobile_title'] ? 'small-m-title' : '' ?> <?php
 echo $hero_fields['small_title'] ? 'small-title' : '' ?>"><?php
 echo $hero_fields['title'];
 ?></h1> </div> <?php
 $m_backdround = $hero_fields['background_image_mobile'] ?? $hero_fields['background_image'];
 ?> <div class="hero__content--image-mobile" style="background-image: url('<?php
 echo $m_backdround;
 ?>')"> <h1 class="hero__content--title <?php
 echo $heroType ?> <?php
 echo $hero_fields['small_mobile_title'] ? 'small-m-title' : '' ?> <?php
 echo $hero_fields['small_title'] ? 'small-title' : '' ?>"><?php
 echo $hero_fields['title'];
 ?></h1> </div> </div> <?php
 endif;
 ?> <?php
 if ($heroType === 'home-page'): ?> <h1 class="hero__content--title <?php
 echo $heroType ?> <?php
 echo $hero_fields['small_mobile_title'] ? 'small-m-title' : '' ?> <?php
 echo $hero_fields['small_title'] ? 'small-title' : '' ?>"><?php
 echo $hero_fields['title'];
 ?></h1> <div class="hero__content--description"> <?php
 echo $hero_fields['description']?> </div> <div class="hero__content--buttons"> <?php
 if (!empty($hero_fields['buttons'])): ?> <?php
 foreach ($hero_fields['buttons'] as $button): if ($button['dark_color_button']) {
 if ($button['transparent_background']) {
 $buttonClass = 'button transparent-blue';
 }
 else {
 $buttonClass = 'button dark-blue';
 }
 }
 else {
 if ($button['transparent_background']) {
 $buttonClass = 'button transparent-white';
 }
 else {
 $buttonClass = 'button blue';
 }
 }
 $buttonClass .= ' big';
 ?> <?php
 echo Link::render_acf_link($button['button'], $buttonClass);
 ?> <?php
 endforeach;
 ?> <?php
 endif;
 ?> </div> <?php
 endif;
 ?> <?php
 if ($heroType === 'other-page' && !$hero_fields['show_additional_content'] && empty($hero_fields['background_image'])): ?> <div class="container with-content center"> <h1 class="hero__content--title with-content <?php
 echo $heroType ?> <?php
 echo $hero_fields['small_mobile_title'] ? 'small-m-title' : '' ?> <?php
 echo $hero_fields['small_title'] ? 'small-title' : '' ?>"><?php
 echo $hero_fields['title'];
 ?></h1> </div> <?php
 endif;
 ?> <?php
 if ($heroType === 'other-page' && $hero_fields['show_additional_content']): ?> <?php
 $content_class = !empty($hero_fields['left_side']) && reset($hero_fields['left_side'])['acf_fc_layout'] == ' icon' ? ' with-icon' : ''?> <div class="container with-content center"> <h1 class="hero__content--title with-content <?php
 echo $heroType ?> <?php
 echo $hero_fields['small_mobile_title'] ? 'small-m-title' : '' ?> <?php
 echo $hero_fields['small_title'] ? 'small-title' : '' ?>"><?php
 echo $hero_fields['title'];
 ?></h1> <div class="hero__content--additional-content title-border-top <?php
 echo $content_class;
 ?><?php
 echo is_singular( 'blog' ) ? ' blog-post': '' ?>"> <div class="hero__content--additional-content__left-side <?php
 echo $rightSide['description_size'] == '50' ? 'half' : 'little-half'?>"> <?php
 if( have_rows('left_side') ): ?> <?php
 while ( have_rows('left_side') ) : the_row();
 ?> <?php
 if ( get_row_layout() == 'text' ): ?> <h3><?php
 echo get_sub_field('sub_title');
 ?></h3> <?php
 elseif ( get_row_layout() == 'icon' ): ?> <p class="icon"> <img src="<?php
 echo get_sub_field('icon');
 ?>" alt="Acquisit"> </p> <?php
 elseif ( get_row_layout() == 'button' ): ?> <a href="<?php
 echo get_sub_field('button')['url'];
 ?>" class="button blue big" <?php
 if (!empty(get_sub_field('button')['target'])):?> target="_blank" <?php
 endif;
 ?> > <?php
 echo get_sub_field('button')['title'];
 ?> </a> <?php
 elseif ( get_row_layout() == 'post_info' ): $current_post_categories = get_the_terms(get_the_ID(), get_post_type(get_the_ID()) . '-categories');
 ?> <div class="post-info"> <div class="categories"> <?php
 if (!empty($current_post_categories)):?> <?php
 foreach ($current_post_categories as $post_category): ?> <span onclick="window.open('<?php
 echo '/'. get_post_type(get_the_ID()) .'/?category=' . $post_category->slug ?>')"><?php
 echo $post_category->name ?></span> <?php
 endforeach;
 ?> <?php
 endif;
 ?> </div> <p><?php
 echo get_the_date('M jS, Y', get_the_ID()) ?></p> </div> <?php
 endif;
 ?> <?php
 endwhile;
 ?> <?php
 endif;
 ?> <?php
 if ($notFound): ?> <?php
 foreach ($hero_fields['left_side'] as $field): ?> <?php
 switch ($field['acf_fc_layout']): case 'button': ?> <a href="<?php
 echo $field['button']['url'];
 ?>" class="button blue" <?php
 if (!empty($field['button']['target'])):?> target="_blank" <?php
 endif;
 ?> > <?php
 echo $field['button']['title'];
 ?> </a> <?php
 break;
 ?> <?php
 case 'icon': ?> <p class="icon"> <img src="<?php
 echo $field['icon'];
 ?>" alt="Acquisit"> </p> <?php
 break;
 ?> <?php
 case 'text': ?> <h3><?php
 echo $field['sub_title'];
 ?></h3> <?php
 break;
 ?> <?php
 endswitch;
 ?> <?php
 endforeach;
 ?> <?php
 endif;
 ?> </div> <div class="hero__content--additional-content__right-side <?php
 echo $rightSide['description_size'] == '50' ? 'half' : 'more-half'?>"> <?php
 if (!empty($rightSide['arrow_button_link']['url'])): ?> <a href="<?php
 echo $rightSide['arrow_button_link']['url'] ?>" class="arrow-link"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"> <path d="M16 3V27.9999" stroke="#0F2D52" stroke-width="2"/> <path d="M9 21L16 28L23 21" stroke="#0F2D52" stroke-width="2"/> </svg> </a> <div class="description <?php
 echo $rightSide['list_in_one_line'] ? 'one-line' : '' ?>"> <?php
 echo $rightSide['description'];
 ?> </div> <?php
 endif;
 ?> </div> </div> </div> <?php
 endif;
 ?> <?php
 if ($heroType === 'other-page' && $hero_fields['display_author']): ?> <?php
 $post = get_post(get_the_ID());
 ?> <?php
 if ($post): ?> <?php
 $post_author_id = $post->post_author;
 ?> <div class="author"> <?php
 echo get_avatar($post_author_id, 104) ?> <p><?php
 echo get_the_author_meta('first_name', $post_author_id) . ' ' . get_the_author_meta('last_name', $post_author_id) ?></p> </div> <?php
 else: ?> <p>Post not found</p> <?php
 endif;
 ?> <?php
 endif;
 ?> <!-- <?php
 if ($heroType === 'blog-page'): ?> <h1 class="hero__content--title <?php
 echo $heroType ?><?php
 echo $hero_fields['title'];
 ?>"></h1> <?php
 endif;
 ?> --> </div> <?php
 if (!empty($hero_fields['media_file'])): ?> <div class="hero__media"> <img src="<?php
 echo $hero_fields['media_file'] ?>" alt="Acquisit"> </div> <?php
 endif;
 ?> </div> </section> <section class="blog-post-content"> <div class="container <?php
 echo $show_social_block ?: 'without_social' ?>"> <div class="blog-post-content__left-column"> <img src="<?php
 echo get_the_post_thumbnail_url($current_post->ID, 'full')?>" alt="<?php
 echo $current_post->post_title;
 ?>" class="post-image-thumbnail <?php
 echo $small_image ? ' small' : '';
 ?>"style="<?php
 echo $display_image ? '' : 'display:none';
 ?>"> <?php
 if (!empty($social_fields['title_for_content_block'])):?> <div class="blog-post-content__content-block mobile"> <details> <summary class="title"><?php
 echo $social_fields['title_for_content_block'];
 ?></summary> <div class="content"> <?php
 TableOfContent::render_table_of_content(get_the_content()) ?> </div> </details> </div> <?php
 endif;
 ?> <div class="blog-post-content__post-content"> <?php
 echo TableOfContent::add_ids_to_header_tags(get_the_content()) ?> </div> <?php
 if (!empty($current_post_practices)):?> <div class="blog-post-content__practices"> <p class="list-of-practices"><?php
 _e('Tags:', 'acquisit');
 ?></p> <?php
 foreach ($current_post_practices as $post_practice):?> <span class="practice" onclick="window.open('<?php
 echo '/'. $post_type .'/?category=All&tags=' . $post_practice->slug ?>')"> <?php
 echo $post_practice->name ?> </span> <?php
 endforeach;
 ?> </div> <?php
 endif;
 ?> </div> <?php
 if ($show_social_block): ?> <div class="blog-post-content__right-column"> <div class="sticky-container"> <?php
 if (!empty($social_fields['title_for_content_block'])):?> <div class="blog-post-content__content-block desktop"> <p class="title"> <?php
 echo $social_fields['title_for_content_block'];
 ?> </p> <div class="content"> <?php
 TableOfContent::render_table_of_content(get_the_content()) ?> </div> </div> <?php
 endif;
 ?> <?php
 if (!empty($social_fields['title_for_social_block']) && !empty($social_fields['social_media'])):?> <div class="blog-post-content__social-media-block"> <p class="title"> <?php
 echo $social_fields['title_for_social_block'];
 ?> </p> <div class="content"> <?php
 foreach ($social_fields['social_media'] as $social): ?> <?php
 if (!empty($social['social_link']['url'])) : ?> <a href="<?php
 echo $social['social_link']['url'] ?>" class="social" target="<?php
 echo $social['social_link']['target'] ? '_black' : '_self'?>"> <?php
 echo wp_get_attachment_image($social['sоcial_icon'], 'full', false , ['class' => 'no-lazy']);
 ?> </a> <?php
 endif;
 ?> <?php
 endforeach;
 ?> </div> </div> <?php
 endif;
 ?> </div> </div> <?php
 endif;
 ?> </div> </section> <?php
 if ($show_subscribe_block): ?> <section class="subscribe"> <div class="container"> <?php
 if ($subscribe_fields['title_for_block']) : ?> <div class="subscribe__title title-border-top blue"> <?php
 echo $subscribe_fields['title_for_block'];
 ?> </div> <?php
 endif;
 ?> <div class="subscribe__content"> <div class="subscribe__left-side"> <?php
 if ($subscribe_fields['title']) : ?> <h3><?php
 echo $subscribe_fields['title'];
 ?></h3> <?php
 endif;
 ?> <?php
 if ($subscribe_fields['description']) : ?> <div class="description"> <?php
 echo $subscribe_fields['description'];
 ?> </div> <?php
 endif;
 ?> </div> <div class="subscribe__right-side"> <div class="form-container" data-title="<?php
 echo get_the_title();
 ?>"> <?php
 echo do_shortcode('[contact-form-7 id="' . $subscribe_fields['choose_form'] .'" html_class="form-' . $subscribe_fields['choose_form'] .'"]');
 ?> </div> </div> </div> </div> </section> <?php
 endif;
 ?> <?php
 if ($show_articles_block): ?> <section class="blog-articles"> <div class="container"> <?php
 if ($block_title) : ?> <div class="blog-articles__title title-border-top"> <?php
 echo $block_title;
 ?> </div> <?php
 endif;
 ?> <div class="blog-articles__text"> <?php
 if ($title) : ?> <h2 class="blog-articles__text_title"> <?php
 echo $title;
 ?> </h2> <?php
 endif;
 ?> <?php
 if ($description) : ?> <div class="blog-articles__text_desc"> <?php
 echo $description;
 ?> </div> <?php
 endif;
 ?> <?php
 if ($button) : ?> <div class="blog-articles__text_btn"> <?php
 echo Link::render_acf_link($button, 'button big transparent-blue');
 ?> </div> <?php
 endif;
 ?> </div> <?php
 if ($blog_articles) : ?> <div class="blog-articles__list"> <div class="swiper-wrapper"> <?php
 foreach ($blog_articles as $case) : $title = get_the_title($case);
 $desc = get_the_excerpt($case);
 $date = get_the_date('F j, Y', $case);
 $link = get_the_permalink($case);
 $img = get_the_post_thumbnail($case, 'large');
 ?> <div class="blog-articles__wrap-card swiper-slide"> <a href="<?php
 echo $link;
 ?>" class="blog-articles__card"> <div class="blog-articles__card_img"> <?php
 echo $img;
 ?> </div> <div class="blog-articles__card_date"> <?php
 echo $date;
 ?> </div> <h4 class="blog-articles__card_title"> <?php
 echo $title;
 ?> </h4> <?php
 if ($desc) : ?> <div class="blog-articles__card_desc"> <?php
 echo $desc;
 ?> </div> <?php
 endif;
 ?> <div class="blog-articles__card_btn"> <div class="button dark-blue"> <?php
 echo __('Read More', 'acquisit') ?> </div> </div> </a> </div> <?php
 endforeach;
 ?> </div> </div> <?php
 endif;
 ?> <?php
 if ($button) : ?> <div class="blog-articles__text_btn mobile"> <?php
 echo Link::render_acf_link($button, 'button big transparent-blue');
 ?> </div> <?php
 endif;
 ?> </div> </section> <?php
 endif;
 ?> <?php
 if ($show_contact_form_block): ?> <section class="contact-form" id="contact-form"> <div class="container"> <?php
 if ($contact_form_title_block) : ?> <div class="contact-form__title title-border-top blue"> <?php
 echo $contact_form_title_block;
 ?> </div> <?php
 endif;
 ?> <div class="contact-form__wrap"> <div class="contact-form__left"> <?php
 if ($contact_form_title && $type_of_form !== "title_over_form") : ?> <h2 class="contact-form__left_title"><?php
 echo $contact_form_title;
 ?></h2> <?php
 endif;
 ?> <?php
 if ($contact_form_desc && $type_of_form !== "title_over_form") : ?> <div class="contact-form__left_desc"><?php
 echo $contact_form_desc;
 ?></div> <?php
 endif;
 ?> <?php
 if ($contact_form_image && $type_of_form !== "title_over_form") : ?> <div class="contact-form__left_img"> <?php
 echo wp_get_attachment_image($contact_form_image, 'large');
 ?> <?php
 if ($contact_form_name or $contact_form_job_title) : ?> <div class="contact-form__left_img-text"> <?php
 if ($contact_form_name) : ?> <h4 class="name"><?php
 echo $contact_form_name;
 ?></h4> <?php
 endif;
 ?> <?php
 if ($contact_form_job_title) : ?> <div class="job_title"><?php
 echo $contact_form_job_title;
 ?></div> <?php
 endif;
 ?> </div> <?php
 endif;
 ?> </div> <?php
 endif;
 ?> <?php
 if ($contact_form_image && $type_of_form === "title_over_form") : ?> <div class="contact-form__left_img"> <?php
 echo wp_get_attachment_image($contact_form_image, 'full', false, ['class' => 'contact-form-image']);
 ?> </div> <?php
 endif;
 ?> </div> <?php
 if ($contact_form) : ?> <div class="contact-form__right"> <?php
 if ($type_of_form === "title_over_form") : ?> <h3 class="contact-form__left_title"><?php
 echo $contact_form_title;
 ?></h3> <div class="contact-form__left_desc"><?php
 echo $contact_form_desc;
 ?></div> <?php
 endif;
 ?> <div class="form-container" data-title="<?php
 echo get_the_title();
 ?>"> <?php
 echo do_shortcode('[contact-form-7 id="' . $contact_form .'" html_class="form-' . $contact_form .'"]');
 ?> <?php
 if ($contact_form_download_file): ?> <a href="<?php
 echo $contact_form_download_file;
 ?>" class="download-file-from-contact-form" id="<?php
 echo 'download-' . $contact_form;
 ?>" download></a> <?php
 endif;
 ?> </div> </div> <?php
 endif;
 ?> </div> </div> </section> <?php
 endif;
 ?> </main> <?php
 get_footer();
 ?>