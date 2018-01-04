<div class="row">
  <div class="lk-header">

   <div class="lk-brand-icon">
          <a href="http://learn-kevin.blogspot.com"><span >YTRider</span></a>
   </div>
   <div class="lk-user-profile-top">
     <ul class="nav navbar-nav navbar-right">
       <li><span id="clint" class="btn btn-primary">Clint 3.0.1</span></li>
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php $u = user($conn,$_SESSION['id']);echo $u['fullname'];?><span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#">Account settings</a></li>
           <li><a href="#">Privacy settings</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="#">Logout</a></li>
         </ul>
    </div>

  </div>
</div>
