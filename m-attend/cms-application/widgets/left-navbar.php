<?php
/*$q = "SELECT * FROM admin_pages WHERE id = $admin_pageid";
$r = mysqli_query($conn,$q);
$admin_page = mysqli_fetch_assoc($r);*/
?>
<div id="left-navbar "class="list-group">

    <a href="?admin_page=1" class="list-group-item <?php if($admin_pageid == 1) echo 'active';else echo 'lk-list-item'; ?>">
          <span class="badge">14</span>
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-th" aria-hidden="true"></i> &nbsp;Dashboard</h5>
    </a>
    <a href="?admin_page=2" class="list-group-item <?php if($admin_pageid == 2) echo 'active';else echo 'lk-list-item'; ?>">
          <span class="badge">4</span>
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-comment" aria-hidden="true"></i> &nbsp;Notifications</h5>
    </a>
    <a href="?admin_page=3" class="list-group-item <?php if($admin_pageid == 3) echo 'active';else echo 'lk-list-item'; ?>">
          <span class="badge">1</span>
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Campaigns</h5>
    </a>
    <a href="?admin_page=4" class="list-group-item <?php if($admin_pageid == 4) echo 'active';else echo 'lk-list-item'; ?>">
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-exchange" aria-hidden="true"></i> &nbsp;Exchange</h5>
    </a>
    <a href="?admin_page=5" class="list-group-item <?php if($admin_pageid == 5) echo 'active';else echo 'lk-list-item'; ?>">
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-users" aria-hidden="true"></i> &nbsp;Affilites</h5>
    </a>
    <a href="?admin_page=6" class="list-group-item <?php if($admin_pageid == 6) echo 'active';else echo 'lk-list-item'; ?>">
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp;Store</h5>
    </a>
    <a href="?admin_page=7" class="list-group-item <?php if($admin_pageid == 7) echo 'active';else echo 'lk-list-item'; ?>">
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-university" aria-hidden="true"></i> &nbsp;Comunity</h5>
    </a>
    <a href="?admin_page=8" class="list-group-item <?php if($admin_pageid == 8) echo 'active';else echo 'lk-list-item'; ?>">
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-cog" aria-hidden="true"></i> &nbsp;Settings</h5>
    </a>
    <a href="logout.php" class="list-group-item <?php if($admin_pageid == 9) echo 'active';else echo 'lk-list-item';  ?>">
          <h5 class="list-group-item-heading">&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i> &nbsp;Logout</h5>
    </a>
</div>
