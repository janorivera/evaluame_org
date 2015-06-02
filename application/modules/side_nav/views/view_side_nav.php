<!-- Side Navigation -->
       

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="<?php echo $translations['Search']?>">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> <?php echo $translations['Home']?></a>
                        </li>
                      
                        
                        
                            <?php 
                          /* For now we pass the parameter 0 as userID   */
                          echo  '<li> <a href="'.base_url('mb_statistics/render_template/0').'"><i class="fa fa-line-chart fa-fw"></i> '.$translations['Statistics'].'</a></li>';
                          ?>
                        
                        
                        
                        <?php
                        $this->load->module('side_nav_politicians');
                        $this->side_nav_politicians->display_side_nav_politicians();
                        
                    /*    foreach ($pageViews ['sideNav']as $view){
                        	
                        	$pageViews [$view] = new $view;
                        	$view->render();
                        	
                        	
                        }
                */
				?>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> <?php echo $translations['Forums']?></a>
                        </li>
                       
                          <?php 
                          /* For now we pass the parameter 0 as userID   */
                          echo  '<li> <a href="'.base_url('mb_contact/render_template/0').'"><i class="fa fa-envelope-o fa-fw"></i> '.$translations['Contact'].'</a></li>';
                          ?>
                          
                            <?php 
                          /* For now we pass the parameter 0 as userID   */
                          echo  '<li> <a href="'.base_url('mb_privacy_policy/render_template/0').'"><i class="fa fa-lock fa-fw"></i> '.$translations['PrivacyPolicy'].'</a></li>';
                          ?>
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
   