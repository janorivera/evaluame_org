<!-- Top Navigation -->
        
      
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>">Evaluame.org</a>
            </div>
            <!-- /.navbar-header -->
          
            <ul class="nav navbar-top-links navbar-right">
             <?php 
             // debug- print the userId on the top_nav
            if (ENVIRONMENT=='development')
			{
            echo  ' <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"href="#">
                  UserId:'. $this->session->userId . ' 
                  </a>
                  </li>';
			}
			?>
              
	
	
             <?php 
             
             
		             $this->load->module('top_nav_lang');
		      
                     $this->top_nav_lang->drop_down_lang();
                     
		             $this->load->module('top_nav_fb_login');
		             
  						if ($ParentModule =='top_nav_fb_login'){
  							$this->$ParentModule->$ParentMethod($ParentParams);
  						} else $this->top_nav_fb_login->fb_login('login');
                        
                        
             ?>
  
  
            </ul>
            <!-- /.navbar-top-links -->

           