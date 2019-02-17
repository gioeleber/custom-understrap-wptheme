<?php
function get_wpb_social_links() {
  $socials = [
    'facebook' => '#',
    'instagram' => '#',
    'twitter' => '#',
    'youtube' => '#',
    'linkedin'=> '#',
  ];
  return $socials;
}

function the_wpb_social_icons($socials) {

  $the_social_icons = "
  <div class='col-sm-3 social-icons order-1 order-sm-12 text-center text-md-right'>
    <p class='mb-3 mb-md-0'>";

      foreach ($socials as $social => $social_url) {
        $the_social_icons .= "
        <a href='$social_url'>
          <img class='ml-2' width='24' src='" . get_template_directory_uri() . "/img/$social-circle.svg' alt='$social_url logo icon'>
        </a>";
      }

  $the_social_icons .= "
    </p>
  </div>";

  return $the_social_icons;
}
?>
