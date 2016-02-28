<style>
body {
  background: -webkit-linear-gradient(to bottom, rgba(119, 89, 131, 0.89) 50%, rgba(100, 33, 33, 0.97)) !important;
  background: -moz-linear-gradient(to bottom, rgba(119, 89, 131, 0.89) 50%, rgba(100, 33, 33, 0.97)) !important;
  background: -ms-linear-gradient(to bottom, rgba(119, 89, 131, 0.89) 50%, rgba(100, 33, 33, 0.97)) !important;
  background: -o-linear-gradient(to bottom, rgba(119, 89, 131, 0.89) 50%, rgba(100, 33, 33, 0.97)) !important;

}
</style>
  <div class="row">
    <script src="<?=base_url("assets/js/angular.js")?>"></script> 
    <script src="<?=base_url("assets/js/bootstrap-datepicker.js")?>"></script>

    <div class="Absolute-Center is-Responsive">
      <div id="logo-container"></div>
      
      <div class="col-sm-12 col-md-10 col-md-offset-1">

        <?=form_open("Login/login");?>
          
          <div class="form-group ">
            <?=form_error('username'); ?>
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='username' placeholder="Officer_id" value="<?=set_value("username");?>"/>          
          </div>
          <div class="form-group">
          <?=form_error('password'); ?>
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="password"value="<?=set_value("password");?>"/>     
          </div>
          <div class="form-group ">
          <?=form_error('year'); ?>
          </div>
          <div class="form-group ">
             <select name="year" class='span-9'>
              <?php for($i=$year-1; $i<$year+20; $i++): ?>
                <option>APR FOR (<?php echo $i . "-" . ($i+1) ?>)</option>
              <?php endfor; ?>
             </select>   
          </div>
                    
          <div class="form-group ">
          <?=form_error('optionlist'); ?>
          </div>
          <div class="form-group">
              
              <select class='span-9' name='optionlist'>
                <option value=0 <?=set_value('optionlist',0);?>>Select Type of Officer</option>
                <option value=1 <?=set_select('optionlist',1);?>>Officer</option>
                <option value=2 <?=set_select('optionlist',2);?>>Reporting Officer</option>
                <option value=3 <?=set_select('optionlist',3);?>>Reviewing Officer</option>
              </select>
                
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <div class="form-group text-center">
            <!--<a href="#">Forgot Password</a>&nbsp;|&nbsp;<a href="#">Support</a> -->
          </div>
        </form>        
      </div>  
    </div>    
  </div>
