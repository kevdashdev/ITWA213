<div id="row">
  <div class='large-6 columns text-center large-centered'>
    <h1>Number to Word Converter</h1>
    <hr>
    <form class='custom' action="/converter" method='post'>
      <div class="row collapse">
        <div class="small-10 columns">
          <input type="text" placeholder='123' name='number' value='<?php echo $number; ?>'>
        </div>
        <div class="small-2 columns">
          <button type="submit" class='button prefix'>Convert</button>
        </div>
      </div>
    </form>
    <hr>
    <h4>
    <?php
      if( ! $number == 0 )
        echo $convertedNumber;
      else
        echo ''
    ?>
    </h4>
  </div>
</div>
