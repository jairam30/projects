
  <?php
    include('master.php');
     include_once'/helper.php';
     //$item=$obj->query("SELECT * FROM tbl_category_list");
     $sql=$obj->query("SELECT * FROM tbl_menu");
	 
	 $item=$obj->query("SELECT tbl_category.cat_id, tbl_category.cat_name, tbl_menu.menu_name
                FROM tbl_category
                INNER JOIN tbl_menu
                ON tbl_category.menu_id=tbl_menu.menu_id");
     $itemid=1;
	 
	if(count($sql) > 1)
	 {
		  foreach($sql as $data)
		 {
			$itemid++;
		 }
	 }
		// echo '<pre>';
		// echo print_r($sql);
		// echo '</pre>';

  ?>
        <div class="right_col" role="main">
          <div class="x_content">

                    <a href='addcat.php'><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Add New</button></a>
                    <a href='cat_index.php'><button type="button" class="btn btn-default"><i class="fa fa-list"></i>  List </button></a><br><br>
                   

                   <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="insertcat.php" method="post">
                      <span class="section">Add new Item</span>


                       <div class="item form-group">
                        <label id="itemname" class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Category Id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <lable id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="cat_id" placeholder="" required="required" type="text" ><?php echo $itemid; ?></lable>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label id="itemname" class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text" >
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Menu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                        <?php
							
                          if(is_array($sql))
                          {
					
                            echo '<select id="heard" class="form-control" required name="listname">
                                      <option value="">Choose..</option>';

                            Foreach($sql as $val)
                            {
                              echo "<option value='".$val['menu_name']."'>".$val['menu_name']."</option>";
                            }
                            echo " </select>";
                          }
                        ?>
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
        
        <!-- /page content -->

        <!-- footer content -->
<?php
  include('footer.php');
?>