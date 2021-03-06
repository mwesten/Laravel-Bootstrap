<?=View::make('admin.inc.meta')->render()?>
    <title>Koki Studio Dashboard</title>
  </head>
  <body>
    <?=View::make('admin.inc.header')->render()?>
    <div class="container">

      <div class="row-fluid">

        <div class="span3"> <!-- Sidebar -->
          <div class="well">
            <?=View::make('admin.inc.sidebar')->render()?>
          </div>
        </div> <!-- /Sidebar -->

        <div class="span9 crud">
          <h1>Help &amp; Support</h1>
          <p>If you're having trouble using the system, use the form below to send a support alert to us. We'll be in touch to help you out as soon as possible.</p>
          <?=Messages::get_html()?>
          <?=Form::open('admin/help/index', 'POST', array('class'=>'form-horizontal'))?>
          <fieldset>
            <legend>Help &amp; Support Form</legend>
            <div class="control-group">
              <?=Form::label('name', 'Your Name',array('class'=>'control-label'))?>
              <div class="controls">
                <?=Form::text('name', $user->fullname,array('placeholder'=>'Enter Your Name...','disabled'=>'true'))?>
              </div>
            </div>

            <div class="control-group">
              <?=Form::label('email', 'Your Email Address',array('class'=>'control-label'))?>
              <div class="controls">
                <?=Form::text('email', $user->email,array('placeholder'=>'Enter Your Email Address...','disabled'=>'true'))?>
              </div>
            </div>

            <div class="control-group">
              <?=Form::label('issue', 'Your Issue',array('class'=>'control-label'))?>
              <div class="controls">
                <?=Form::textarea('issue', Input::old('issue') ,array('placeholder'=>'Enter Your Issue...'))?>
              </div>
            </div>

            <div class="form-actions">
              <input type="reset" class="btn" value="Clear" />
              <input type="submit" class="btn btn-primary" value="Send Support Issue" />
            </div>
          </fieldset>
          <?=Form::close()?>
        </div>

      </div>

    </div> <!-- /container -->

    <?=View::make('admin.inc.scripts')->render()?>
  </body>
</html>
