<div class="col-md-7 col-md-offset-2" style="border: thin solid #ccc; background-color: #FAFAFA; border-radius: 3px;">
  <form class="" action="" method="post">

    <div class="form-group">
      <label for="First name" class="col-md-3 control-label">Firstname</label>
      <div class="col-md-9">
        <input type="text" name="firstname" class="form-control" value="">
      </div>
    </div><br/><br/>

    <div class="form-group">
      <label for="Middle name" class="col-md-3 control-label">Middlename</label>
      <div class="col-md-9">
        <input type="text" name="middlename" class="form-control" value="">
      </div>
    </div><br/><br/>

    <div class="form-group">
      <label for="Last name" class="col-md-3 control-label">Last name</label>
      <div class="col-md-9">
        <input type="text" name="lastname" class="form-control" value="">
      </div>
    </div><br/><br/>

    <div class="form-group">
      <label for="Last name" class="col-md-3 control-label">Year Level</label>
      <div class="col-md-9">
        <select class="form-control" name="">
          <option value="1">First Year</option>
          <option value="2">Second Year</option>
          <option value="3">Third Year</option>
          <option value="4">Fourth Year</option>
        </select>
      </div>
    </div><br/><br/>

    <div class="form-group">
      <label for="Student ID" class="col-md-3 control-label">Student ID</label>
      <div class="col-md-9">
        <input type="text" name="student_id" class="form-control" value="">
      </div>
    </div><br/><br/>

    <font style="font-size: 12px;">Do you have any relative here?</font>
    <div class="input-group">
      <span class="input-group-addon">
        <div class="col-md-6">
            <input type="radio" name="bool" id="yes"> Yes
        </div>
        <div class="col-md-offset-6">
            <input type="radio" name="bool" id="no"> No
        </div>
      </span>
    </div><!-- /input-group --><br/>

    <div class="form-group yes"  style="display: none;">
      <label for="GuardianEmail" class="control-label col-md-4 col-md-offset-1">Search Relative</label>
      <div class="col-md-6">
        <input type="text" class="form-control"name="" placeholder="Search Relative...">
      </div>
    </div>

    <div class="form-group no" style="display: none;">
      <div class="panel panel-default">
        <div class="panel-heading">Father's Name</div>
        <div class="panel-body">
          <div class="form-group">
            <label for="First Name" class="col-md-3 control-label">First Name</label>
            <div class="col-md-9">
              <input type="text" name="student_id" class="form-control" value="">
            </div>
          </div><br/><br/>

          <div class="form-group">
            <label for="Last Name" class="col-md-3 control-label">Last Name</label>
            <div class="col-md-9">
              <input type="text" name="lastname" class="form-control" value="">
            </div>
          </div><br/><br/>
          
          <div class="form-group">
            <label for="Email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
              <input type="text" name="fatherEmail" class="form-control" value="">
            </div>
          </div><br/><br/>

        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Mother's Name</div>
        <div class="panel-body">
          <div class="form-group">
            <label for="First Name" class="col-md-3 control-label">First Name</label>
            <div class="col-md-9">
              <input type="text" name="student_id" class="form-control" value="">
            </div>
          </div><br/><br/>

          <div class="form-group">
            <label for="Last Name" class="col-md-3 control-label">Last Name</label>
            <div class="col-md-9">
              <input type="text" name="lastname" class="form-control" value="">
            </div>
          </div><br/><br/>

          <div class="form-group">
            <label for="Email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
              <input type="text" name="fatherEmail" class="form-control" value="">
            </div>
          </div><br/><br/>

        </div>
      </div>
    </div><br/>

    <div class="form-group">
        <button type="button" class="btn btn-primary" name="subButton">Submit</button>
      </div>
    </div><br/><br/>

  </div>
  </form>
</div>

<script>
  $(document).ready(function(){

    $('#yes, #no').click(function(){
      if($('#yes').is(':checked')){
        $('.yes').show();
        $('.no').hide();
      }
      else if($('#no').is(':checked')){
        $('.no').show();
        $('.yes').hide();
      }
    });
  });
</script>
