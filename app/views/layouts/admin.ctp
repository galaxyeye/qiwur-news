<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>租房</title>
  <?php echo $this->element('css', array('css' => array('admin'))); ?>
</head>

<body id="<?php echo Inflector::variable($this->params['controller']).Inflector::classify($this->params['action']) ?>">
  <div id="container">

  <div id="nav">
    <h1 class="logo">
      <a href="<?php echo Router::url('/admin/') ?>" title="租房">租房</a>
    </h1>
    <div class="user"><?php echo $currentUser['name'] ?></div>
    <ul id="menu" class="clearfix">
      <li class="item">
        <a href="<?php echo Router::url('/admin/properties') ?>">房源</a>
      </li>
      <li class="item2">
        <a href="<?php echo Router::url('/admin/compounds') ?>">小区</a>
      </li>
      <li class="item3">
        <a href="<?php echo Router::url('/admin/schools') ?>">学校</a>
      </li>
      <li class="item4">
        <a href="<?php echo Router::url('/admin/articles') ?>">文章</a>
      </li>
      <li class="item5">
        <a href="<?php echo Router::url('/admin/enquiries') ?>">咨询&看房</a>
      </li>
      <li class="item6">
        <a href="<?php echo Router::url('/admin/landlords') ?>">业主</a>
      </li>
      <li class="lgo">
        <a href="<?php echo Router::url('/admin/users/logout') ?>" class="lbOn" title="Logout!">退出</a>
      </li>
    </ul>
  </div><!--nav-->

  <div id="stage">
    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>
  </div><!--stage-->

  </div><!--container-->

  <img id="bottom" src="/img/bottom.png" alt="" />
  <div id="footer">
    <h1 class="logo"><a href="<?php echo Router::url('/') ?>">奇点驱动</a></h1>
    <p> &middot; <strong>奇点驱动</strong> &middot; 上海奇点驱动网络科技有限公司 &middot;</p>
  </div><!--footer-->

<!-- JavaScript -->
<?php 
  echo $this->element('sql_dump');
  if(isset($js)) echo $this->element('js', array('scripts_for_layout' => $scripts_for_layout));
?>

</body>
</html>
