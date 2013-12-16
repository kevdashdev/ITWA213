<div id="row">
  <div class='large-5 columns text-center large-centered'>
    <h1>Basic Calculator</h1>
    <hr>
    <form class='custom' action="/calculator" method='post'>
      <input type="text" placeholder='123'name='num1' value='<?php echo $num1; ?>'>
      <input type="text" placeholder='456'name='num2' value='<?php echo $num2; ?>'>

      <div class="row">
        <button class='large-4 button' type="submit" name='operation' value="+">&#43;</button>
        <button class='large-4 button' type="submit" name='operation' value="-">-</button>
      </div>
      <div class="row">
      <button class='large-4 button' type="submit" name='operation' value="*">&times;</button>
      <button class='large-4 button' type="submit" name='operation' value="/">&#247;</button>
      </div>

      <button type="submit" name='operation' value="reset" class='large-8 button'>&#8634;</button>

    </form>
    <hr>
    <h4>
    <?php
      if($result != '')
        echo $result;
      else
        echo 'The result will go here.'
    ?>
    </h4>
  </div>
</div>
