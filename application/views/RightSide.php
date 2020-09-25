<div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">Normal User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">Agency</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper ps" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
          <ul class="chat-list">
        
             
              <?php
                        $count=1;
                        $re=$this->db->query("select * from tbl_userdetails where UserType='Normal'");
                        foreach($re->result() as $item)
                      {?>
                <li class="list active">
                      <div class="profile"><img src="<?php echo base_url(); ?>Client_Assets/ClientImage/ClientProfile/<?php echo $item->PersonalImage; ?>" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p><?php echo ucwords($item->FirstName); ?></p>
                  <p><?php echo ucwords($item->PhoneNumber); ?></p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
                      <?php } ?> 
              </ul>
            
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
          <!-- To do section tab ends -->
         
         
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
          <ul class="chat-list">
          <?php
                  $count=1;
                  $re=$this->db->query("select * from tbl_userdetails where UserType='Agency'");
                  foreach($re->result() as $item)
                {?>
        <li class="list active">
      
          <div class="profile"><img src="<?php echo base_url(); ?>Client_Assets/ClientImage/ClientProfile/<?php echo $item->PersonalImage; ?>" alt="image"><span class="online"></span></div>
          <div class="info">
            <p><?php echo ucwords($item->AgencyName); ?></p>
            <p><?php echo ucwords($item->PhoneNumber); ?></p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
                <?php } ?> 
        </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>