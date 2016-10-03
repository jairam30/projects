
  <?php
    include('master.php');
     include_once'/helper.php';
     $item=$obj->query("SELECT * FROM tbl_menu");
     //$sql=$obj->query("SELECT * FROM tbl_item");
     $itemid=1;
     if(count($item) > 1)
	 {
		  foreach($item as $data)
		 {
			$itemid++;
		 }
	 }

  ?>
        <div class="right_col" role="main">
          <div class="x_content">

                    <a href='#'><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Add New</button></a>
                    <a href='menu.php'><button type="button" class="btn btn-default"><i class="fa fa-list"></i>  List </button></a><br><br>
                   

                   <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="insertmenu.php" method="post">
                      <span class="section">Add new Menu</span>
                       <div class="item form-group">
                        <label id="itemname" class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Menu Id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <lable id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="itemid" placeholder="" required="required" type="text" ><?php echo $itemid; ?></lable>
                        </div>
                      </div>
					  
                      <div class="item form-group">
                        <label id="itemname" class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Menu Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text" >
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label id="itemname" class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number of people<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="numofpeople" placeholder="" required="required" type="text" >
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3"><br><br>
                          <button id="send" type="submit" class="btn btn-success" style="width :150px;">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <?php
		  include('footer.php');
		?>