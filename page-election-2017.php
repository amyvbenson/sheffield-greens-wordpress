<?php /* Template Name: 2017 Election Campaign main */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>
  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

  <div class="container container--no-pad campaign--nb">

      <article class="page-section page-section--large post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="campaign__heading">
          <div class="col-70">
            <h1 class="sr-only">
              Vote Green on 8th June. Natalie Bennett for Sheffield Central
            </h1>
            </div>
            <a href="http://natalie4sheffield.org" class="col-30">
              Follow the campaign at natalie4sheffield.org
            </a>
        </div>

        <div class="actions-banner">
          <a href="#involved" class="actions-banner__action">
            <span class="actions-banner__heading">Get Involved</span>
            <span class="actions-banner__button">Join Team Natalie</span>
          </a>
          <a href="#donate" class="actions-banner__action">
            <span class="actions-banner__heading">Donate</span>
            <span class="actions-banner__button">Chip in today</span>
          </a>
          <a href="#register" class="actions-banner__action">
            <span class="actions-banner__heading">Register to vote</span>
            <span class="actions-banner__button">Find out how</span>
          </a>
        </div>

        <h2 class="issues-heading">Standing up for what matters</h2>

        <div class="issues-banner">
          <a href="https://www.natalie4sheffield.org/issues/brexit-guarantees" class="issues-banner__issue">
            <span class="issues-banner__heading">Brexit</span>
          </a>
          <a href="https://www.natalie4sheffield.org/issues/young-people" class="issues-banner__issue">
            <span class="issues-banner__heading">Young people</span>
          </a>
          <a href="https://www.natalie4sheffield.org/issues/our-nhs" class="issues-banner__issue">
            <span class="issues-banner__heading">Our NHS</span>
          </a>
          <a href="https://www.natalie4sheffield.org/issues/secure-homes" class="issues-banner__issue">
            <span class="issues-banner__heading">Secure homes</span>
          </a>
          <a href="https://www.natalie4sheffield.org/issues/natural-environment" class="issues-banner__issue">
            <span class="issues-banner__heading">Healthy Environment</span>
          </a>
          <a href="https://www.natalie4sheffield.org/issues/other-issues" class="issues-banner__issue">
            <span class="issues-banner__heading">Other issues</span>
          </a>
        </div>

        <div class="col-70">

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


              <div class="post__body">

                <?php the_content(); ?>

              </div>

        </div>
        </div>
        <div class="col-30 campaign__sidebar">
          <?php  include(TEMPLATEPATH . '/includes/election/election-2017-sidebar.php');  ?>
        </div>
      <?php endwhile; ?>
      </article>


    </div>

  </div>
  <?php get_footer(); ?>
</body>
</html>
