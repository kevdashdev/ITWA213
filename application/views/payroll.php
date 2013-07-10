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
            <input type="text" name='name' placeholder='Brandon Stark' value="<?php echo $name; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="salaryPerDay">Salary / day</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='salaryPerDay' placeholder='&#8369;1,000,000.00' value="<?php echo $salaryPerDay; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="daysRendered">Days worked</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='daysRendered' placeholder='365'  value="<?php echo $daysRendered; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="sss">SSS Contribution</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='sss' placeholder='&#8369;250.00'  value="<?php echo $sss; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="philhealth">Philhealth Contribution</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='philhealth' placeholder='&#8369;150.00'  value="<?php echo $philhealth; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="pagibig">Pagibig Contribution</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='pagibig' placeholder='&#8369;50.00'  value="<?php echo $pagibig; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="tax">Tax</label>
          </div>
          <div class="large-9 columns">
            <input type="text" name='tax' placeholder='&#8369;250.00'  value="<?php echo $tax; ?>">
          </div>
        </div>

        <div class="row collapse">
          <div class="push-3 large-9 columns">
            <input type="submit" class='button' value='Compute'>
          </div>
        </div>

      </div>
    </div>
  </form>
      <hr>
    <h4>
    <table>
      <tr>
        <td>Name</td>
        <td>Gross</td>
        <td>Deduction</td>
        <td>Total</td>
      </tr>
      <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $gross; ?></td>
        <td><?php echo $taxDeduction; ?></td>
        <td><?php echo $total; ?></td>
      </tr>
    </table>
    </h4>
</div>
