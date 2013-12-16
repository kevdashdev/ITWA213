<div class="row">
<h1 class='text-center'>Basic Payroll</h1>
<hr>
<form action='/payroll' method='post'>
    <div class="row">
      <div class="push-2 large-8 columns">

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="name">Name</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='name' placeholder='Kevin Candelaria' value="<?php if($name) echo $name; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="salaryPerDay">Salary / day</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='salaryPerDay' placeholder='&#8369;1,000,000.00' value="<?php if($salaryPerDay) echo $salaryPerDay; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="daysRendered">Days worked</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='daysRendered' placeholder='365'  value="<?php if($daysRendered) echo $daysRendered; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="sss">SSS Contribution</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='sss' placeholder='&#8369;250.00'  value="<?php if($sss) echo $sss; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="philhealth">Philhealth Contribution</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='philhealth' placeholder='&#8369;150.00'  value="<?php if($philhealth) echo $philhealth; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="pagibig">Pagibig Contribution</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='pagibig' placeholder='&#8369;50.00'  value="<?php if($pagibig) echo $pagibig; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="tax">Tax</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='tax' placeholder='12&#37;'  value="<?php if($tax) echo $tax; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="push-3 large-9 columns">
            <input type="submit" class='button' value='Compute' name='compute'>
          </div>
        </div>

      </div>
    </div>
  </form>
  <?php if($compute): ?>
      <hr>
    <table class='column centered'>
      <thead>
        <tr>
          <td>Name</td>
          <td>Gross</td>
          <td>Tax</td>
          <td>Contribution</td>
          <td>Net</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $name; ?></td>
          <td>&#8369;<?php echo number_format($gross, 2); ?></td>
          <td>&#8369;<?php echo number_format($taxDeduction, 2); ?></td>
          <td>&#8369;<?php echo number_format($contribution, 2); ?></td>
          <td>&#8369;<?php echo number_format($total, 2); ?></td>
        </tr>
      </tbody>
    </table>
  <?php endif; ?>
</div>
