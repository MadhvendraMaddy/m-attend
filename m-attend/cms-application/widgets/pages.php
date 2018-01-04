

<?php

$admin_pagid = 3;
$auther = user($conn);
$page_addError = 0; // find any error at adding the page
?>

<ul class="nav nav-tabs">
  <li role="presentation" class="<?php if($event_id == 1)echo 'active';?>"><a href="<?php $url=page_event($admin_pagid,1);echo $url;?>" data-toggle="tab" >Select page</a></li>
  <li role="presentation" class="<?php if($event_id == 2)echo 'active';?>"><a href="<?php $url=page_event($admin_pagid,2);echo $url;?>" data-toggle="tab" >Edit page</a></li>
  <li role="presentation" class="<?php if($event_id == 3)echo 'active';?>"><a href="<?php $url=page_event($admin_pagid,3);echo $url;?>" data-toggle="tab" >Preview</a></li>
</ul>
<br>




<?php

if($event_id == 1 )
{

  include('widgets/page_selector.php');
}
elseif ($event_id == 2 )
{

  include('widgets/page_editor.php');
}
elseif($event_id == 3)
{
	include('widgets/preview.php');
}
?>
