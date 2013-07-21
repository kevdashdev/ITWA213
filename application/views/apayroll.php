<div class="row">
<h1 class='text-center'>Advance Payroll</h1>
<hr>
<?php echo form_open('/apayroll'); ?>
    <div class="row">
      <div class="push-2 large-8 columns">

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="name">Name</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'name',
                  'placeholder' =>'Kevin Candelaria',
                  'value' => set_value('name')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="salaryPerDay">Salary / day</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'salaryPerDay',
                  'placeholder' =>'&#8369;1,000,000.00',
                  'value' => set_value('salaryPerDay')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="daysRendered">Days worked</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'daysRendered',
                  'placeholder' =>'365',
                  'value' => set_value('daysRendered')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="sss">SSS Contribution</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'sss',
                  'placeholder' =>'&#8369;250.00',
                  'value' => set_value('sss')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="philhealth">Philhealth Contribution</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'philhealth',
                  'placeholder' =>'&#8369;150.00',
                  'value' => set_value('philhealth')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="pagibig">Pagibig Contribution</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'pagibig',
                  'placeholder' =>'&#8369;50.00',
                  'value' => set_value('pagibig')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="large-3 columns">
            <label for="tax">Tax</label>
          </div>
          <div class="large-9 columns">
            <?php
              $data = array(
                  'type' => "text",
                  'name' =>'tax',
                  'placeholder' =>'12&#37;',
                  'value' => set_value('tax')
                );
              echo form_input($data);
            ?>
          </div>
        </div>

        <div class="row collapse">
          <div class="push-3 large-9 columns">
            <?php
              $data = array(
                  'type' => "submit",
                  'name' =>'compute',
                  'class' =>'button',
                  'value' => 'Compute'
                );
            echo form_submit($data); ?>
          </div>
        </div>

      </div>
    </div>
<?php echo form_close(); ?>
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
