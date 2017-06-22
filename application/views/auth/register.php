<div class="row">
  <div class="col s12 l4 m12 offset-l4">
    <h3>Register</h3>
    <div class="card">
      <div class="card-content">
        <?php echo form_open('auth/register') ?>
          <div class="row">
            <div class="input-field col s12">
              <script type="text/javascript">
                Materialize.toast("<?php echo form_error('email'); ?>", 4000);
              </script>
              <input class="validate" type="email" name="email" data-length="50" value="<?php echo set_value('email'); ?>"> <br>
              <label for="email">Email</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <script type="text/javascript">
                Materialize.toast("<?php echo form_error('password'); ?>", 4000);
              </script>
              <input class="validate" type="password" name="passwword" data-length="12"> <br>
              <label for="password">Password</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <script type="text/javascript">
                Materialize.toast("<?php echo form_error('password2'); ?>", 4000);
              </script>
              <input class="validate" type="password" name="password2" data-length="12"> <br>
              <label for="password2">Konfirmasi Password</label>
            </div>
          </div>

          <div class="card-action">
            <div class="row">
              <div class="input-field col s12">
                <input class="red waves-effect waves-light btn right" type="submit" name="submit" value="register">
              </div>
            </div>
          </div>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
