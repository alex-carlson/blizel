<?php
/**
 * Template Name: Homepage Template
 */

 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $args= array(
   'posts_per_page' => -1,
   'paged' => $paged
 );
 query_posts($args);
?>

<section class="splash">
  <h1>Digital designer <br> and bike rider.</h1>
  <span class="logo"></span>
  <ul>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</section>
<section>
  <aside  class="sidebar-primary">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="617.3 4910.2 361.5 178.5"><g fill="#FFF"><path d="M888.4 5075.1c0-22.2 7.7-57 24.3-164.9 0 0-32 11.7-67.5 11.7l.5 1.6c8.4 0 12.4 2.8 11 11.9l-13.3 93.9c-.9 6.5-1.4 12.1-1.4 18.4 0 1.3 0 2.6.1 3.9-2 17.1-9.9 23.2-13.3 25.9-2.2 1.3-4.4 1.9-6.4 1.9-2.8 0-4.7-2.1-4.7-5.8 0-8.9 7.9-58.1 7.9-58.1 1.6-10 2.8-18.2 2.8-26.6 0-13.8-11.4-21.5-24.3-21.5-13.5 0-29 3.3-42.7 27.1l-9.3 16c1.2-7.8 2.1-15.2 2.1-21.6 0-13.8-11.4-21.5-24.3-21.5-13.3 0-28.5 3.2-42.1 26.1l-.4.8c-.1.1-.1.2-.2.3l-13.4 23c2.3-13.6 5.6-29.5 10.2-50.1 0 0-23.6 11.4-66.6 11.4l.7 1.6c7.2 0 11 2.3 11.2 8.4 0 2.1-.2 4.9-.7 8.2l-8.6 61.2c-.5 3-.5 5.4-.5 8.2.7 17.1 12.6 22.4 27.3 22.4 15.6 0 24.8-3.7 24.8-3.7-1.6-3-2.6-8.6-2.6-14.9 0-14.7.9-27.6 3.2-43 4.3-13.6 14.1-28.4 16.1-31.5 4.2-6.5 8.2-10.7 11.4-10.7 1.9 0 3 1.2 3.3 4.7 0 4-.5 8.9-1.4 14.7l-7.7 53c-.5 3.3-.7 5.4-.7 9.1 0 18.4 16.8 22.4 27.3 22.4 15.6 0 24.1-3.7 24.1-3.7-1.4-4.4-1.9-8.6-1.9-14.9 0-11.9 3.6-28.6 6.7-45 .1-.3.1-.6.2-.9 2.2-10.4 12.9-28.5 12.9-28.5 4.2-6.5 8.2-10.7 11.4-10.7 1.9 0 3 1.2 3.3 4.7 0 4-.5 8.9-1.4 14.7l-7.7 53c-.5 3.3-.7 5.4-.7 9.1 0 18.4 16.6 22.4 27.1 22.4 23.4 0 35.3-10 35.3-10 6.1-4.7 11.3-12.8 13.3-19.3 3.5 16.2 15.8 29.7 48.4 30.7l.5-2.1c-2.4-1.9-3.6-7.3-3.6-13.4zM942.1 4968.6c-13.3 0-25.9 7.9-33.2 18.4l.9 1.4c2.6-3.3 5.1-4.7 7.5-4.7 3.3 0 6.3 3 6.3 12.1 0 43.2-12.4 87.3-24.3 92.2l-.5 1.9c47.6-1.9 79.9-38.3 79.9-80.3.1-25.1-13.2-41-36.6-41z"/></g></svg>
    <h3>Work</h3>
    <ul>
      <?php while(the_flexible_field('project')) { ?>
        <li data-project="<?php the_sub_field('title'); ?>"><a><?php the_sub_field('title'); ?></a></li>
      <?php } ?>
    </ul>
    <a href="#">About</a>
    <a href="#">Contact</a>
  </aside>
  <content class="main <?php the_sub_field('title'); ?>">
    <?php while(the_flexible_field('project')) { ?>
      <article style="display: none" data-project="<?php the_sub_field('title'); ?>">
        <?php the_sub_field('content'); ?>
        <aside class="sidebar-secondary">
          <ul>
            <li class="title"><?php the_sub_field('title'); ?></li>
            <li class="agency"><?php the_sub_field('agency'); ?></li>
            <li class="project_lead"><?php the_sub_field('project_lead'); ?></li>
            <li class="design_lead"><?php the_sub_field('design_lead'); ?></li>
            <li class="background"><?php the_sub_field('background'); ?></li>
          </ul>
        </aside>
      </article>
    <?php } ?>
  </content>
</section>
