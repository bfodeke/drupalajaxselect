<?php
  $module_path = drupal_get_path('module', 'dh_contact_map');
  drupal_add_js($module_path . '/dh_contact_map.js', 'external');
  $image_map = $module_path . '/assets/NEW-Territory-Map.png';

  $select_list = drupal_render(drupal_get_form('dh_contact_map_form_map_1'));
?>

<div id="image-map-1" class="map-block">
  <div id="mobile-image-map-1" class="mobile-only">
    <?php print $select_list; ?>
  </div>

  <div class="desktop-only">
    <img src="<?php print $image_map; ?>" width="800" height="788" border="0" usemap="#Map" />
    <map name="Map" id="Map">
      <area class="map-region" shape="poly" coords="47,28,174,35,148,159,59,135,45,30,45,31,45,31" href="####17####" data-region="17" />
      <area class="map-region" shape="poly" coords="176,45,153,157,182,164,168,244,320,259,322,195,300,194,308,65,255,15,225,13" href="####18####" data-region="18" />
      <area class="map-region" shape="poly" coords="59,138,180,163,172,200,62,210,13,190,10,175" href="####16####" data-region="16" />
      <area class="map-region" shape="poly" coords="63,211,107,207,157,286,146,314,45,295,42,283" href="####14####" data-region="14" />

      <area class="map-region" shape="poly" coords="110,207,172,203,167,246,307,265,302,340,220,344,188,366,144,365,156,283" href="####28####" data-region="28" />

      <area class="map-region" shape="poly" coords="261,347,304,345,309,270,347,270,348,299,384,315,424,319,434,377,383,414,384,446,296,425" href="####21####" data-region="21" />

      <area class="map-region" shape="poly" coords="303,162,392,168,415,226,419,314,377,308,349,298,348,268,312,270,311,263,324,263,325,196,305,192" href="####23####" data-region="23" />
      <area class="map-region" shape="poly" coords="347,10,381,10,383,35,349,36" href="####23####" data-region="23" />
      <area class="map-region" shape="poly" coords="311,63,304,161,390,165,389,155,453,152,462,169,495,166,501,125,453,95,467,81,442,25,410,26,402,65" href="####08###" data-region="08" />
      <area class="map-region" shape="poly" coords="397,161,453,156,467,178,451,201,467,231,499,205,501,232,481,266,420,265,417,225" href="####12####" data-region="12" />
      <area class="map-region" shape="rect" coords="464,27,500,50" href="####12####" data-region="12" />
      <area class="map-region" shape="rect" coords="523,48,557,73" href="####06####" data-region="06" />
      <area class="map-region" shape="poly" coords="468,169,492,167,501,197,470,227,454,203" href="####06####" data-region="06" />
      <area class="map-region" shape="poly" coords="558,100,522,108,506,136,503,182,504,239,486,265,656,238,636,219,621,198,604,207,589,202,579,164,556,137,590,119,588,100" href="####11####" data-region="11" />
      <area class="map-region" shape="poly" coords="511,428,492,392,437,379,428,319,424,313,421,272,525,264,549,346,517,354,512,354,502,366,540,408,540,428" href="####09####" data-region="09" />
      <area class="map-region" shape="poly" coords="655,45,707,41,734,79,751,103,752,264,716,261,712,221,658,232,624,196,593,201,584,167,600,149,598,141,620,127,628,108,622,69,620,49" href="####20####" data-region="20" />
      <area class="map-region" shape="poly" coords="698,283,662,242,528,264,552,329,606,327,670,307,695,306" href="####07####" data-region="07" />
      <area class="map-region" shape="poly" coords="654,348,622,349,608,330,549,332,551,351,516,359,516,369,562,373,589,383,622,384,655,370" href="####04####" data-region="04" />
      <area class="map-region" shape="poly" coords="590,386,624,388,686,406,685,428,611,449,589,402" href="####02####" data-region="02" />
      <area class="map-region" shape="poly" coords="92,430,198,390,253,414,271,497,321,541,228,558,113,549" href="####17####" data-region="17" />
      <area class="map-region" shape="poly" coords="293,462,414,466,408,522,327,525" href="####HI####" data-region="HI" />
      <area class="map-region" shape="poly" coords="372,533,553,519,671,495,794,591,683,787,404,673" href="####03####" data-region="03" />
    </map>
  </div>
</div>