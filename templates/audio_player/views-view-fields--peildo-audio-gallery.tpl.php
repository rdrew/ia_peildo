<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$originalDate = $fields['mods_originInfo_dateIssued_s']->raw;
$newDate = date("F d, Y", strtotime($originalDate));
?>
<!-- top  -->
<section class="audio_player">
  <div class="player_title">
    <?php //print $fields['mods_originInfo_dateIssued_s']->content; ?>
    <div class="session_date">
      <?php print $newDate; ?>
    </div>
    <div class="session_number">
    <?php print $fields['mods_titleInfo_subTitle_mt']->content; ?>
    </div>
  </div>
  <audio controls preload="metadata">
    <source src="https://peildo.dev.islandarchives.ca/islandora/object/<?php print $fields['PID']->raw; ?>/datastream/PROXY_MP3" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio>
</section>
<!-- bottom  -->
