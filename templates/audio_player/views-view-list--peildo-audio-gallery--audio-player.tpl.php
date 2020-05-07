<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 *
 * @ingroup views_templates
 */
?>


    <!-- Blue Playlist Container -->
<!-- ############################ -->
<div id="blue-playlist-container">

  <!-- Amplitude Player -->
  <div id="amplitude-player">

    <!-- Left Side Player -->
    <div id="amplitude-left">
      <img data-amplitude-song-info="cover_art_url" class="album-art"/>
      <div class="amplitude-visualization" id="large-visualization">

        </div>
      <div id="player-left-bottom">
        <div id="time-container">
          <span class="current-time">
            <span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span>
          </span>
          <div id="progress-container">
            <div class="amplitude-wave-form">

                    </div>
            <input type="range" class="amplitude-song-slider"/>
            <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
            <progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
          </div>
          <span class="duration">
            <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
          </span>
        </div>

        <div id="control-container">
          <div id="repeat-container">
            <div class="amplitude-repeat" id="repeat"></div>
            <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
          </div>

          <div id="central-control-container">
            <div id="central-controls">
              <div class="amplitude-prev" id="previous"></div>
              <div class="amplitude-play-pause" id="play-pause"></div>
              <div class="amplitude-next" id="next"></div>
            </div>
          </div>

          <div id="volume-container">
            <div class="volume-controls">
              <div class="amplitude-mute amplitude-not-muted"></div>
              <input type="range" class="amplitude-volume-slider"/>
              <div class="ms-range-fix"></div>
            </div>
            <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle-right"></div>
          </div>
        </div>

        <div id="meta-container">
          <span data-amplitude-song-info="name" class="song-name"></span>

          <div class="song-artist-album">
            <span data-amplitude-song-info="artist"></span>
            <span data-amplitude-song-info="album"></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Left Side Player -->

    <!-- Right Side Player -->
    <div id="amplitude-right">
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Risin' High (feat Raashan Ahmad)</span>
          <span class="song-artist">Ancient Astronauts</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">The Gun</span>
          <span class="song-artist">Lorn</span>
        </div>
        <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:16</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Anvil</span>
          <span class="song-artist">Lorn</span>
        </div>
        <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:32</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">I Came Running</span>
          <span class="song-artist">Ancient Astronauts</span>
        </div>
        <a href="https://switchstancerecordings.bandcamp.com/track/i-came-running" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">3:30</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">First Snow</span>
          <span class="song-artist">Emancipator</span>
        </div>
        <a href="https://emancipator.bandcamp.com" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">5:12</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Terrain</span>
          <span class="song-artist">pg.lost</span>
        </div>
        <a href="https://pglost.bandcamp.com/track/terrain" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">5:29</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Vorel</span>
          <span class="song-artist">Russian Circles</span>
        </div>
        <a href="https://russiancircles.bandcamp.com/track/vorel" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">5:29</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="7">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Intro / Sweet Glory</span>
          <span class="song-artist">Jimkata</span>
        </div>
        <a href="http://jimkata.bandcamp.com/track/intro-sweet-glory" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">2:39</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="8">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Offcut #6</span>
          <span class="song-artist">Little People</span>
        </div>
        <a href="https://littlepeople.bandcamp.com/track/offcut-6" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">1:00</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="9">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Dusk To Dawn</span>
          <span class="song-artist">Emancipator</span>
        </div>
        <a href="https://emancipator.bandcamp.com/track/dusk-to-dawn-2" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">5:25</span>
      </div>
      <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
        <div class="song-now-playing-icon-container">
          <div class="play-button-container">

          </div>
          <img class="now-playing" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/now-playing.svg"/>
        </div>
        <div class="song-meta-data">
          <span class="song-title">Anthem</span>
          <span class="song-artist">Emancipator</span>
        </div>
        <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
          <img class="bandcamp-grey" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg"/>
          <img class="bandcamp-white" src="https://521dimensions.com/img/open-source/amplitudejs/blue-player/bandcamp-white.svg"/>
        </a>
        <span class="song-duration">5:40</span>
      </div>
    </div>
    <!-- End Right Side Player -->
  </div>
  <!-- End Amplitdue Player -->

  <a style="background: #00a0ff;-webkit-box-shadow: 0 1px 0 0 #003da5; box-shadow: 0 1px 0 0 #003da5; border-radius: 4px; display: block; width: 300px; text-align: center; height: 60px; line-height: 60px; color: #fff; cursor: pointer; font-size: 18px; font-weight: 700; margin: auto; margin-bottom: 20px; text-decoration: none;" href="https://serversideup.net/courses/amplitudejs-from-the-ground-up/" target="_blank">Learn More on Server Side Up</a>
</div>
<!-- ############################ -->
<h1> views-view-list--peildo-audio-gallery--audio-player.tpl.php.old </h1>
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>

