<?php /* Smarty version 2.6.18, created on 2013-08-30 15:59:00
         compiled from public/header.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>科大电视台首页</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/style.css" />
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/date.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/ajax.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
});
</script>

</head>
<body>
<div id="main_container">

        
	<div class="header">

            <div class="logo"><a href="<?php echo $this->_tpl_vars['app']; ?>
">adaria</a></div>
            <div class="slogan">| free css template</div> 
    </div> <!--end of header--> 
    
    <div class="menu">
        <ul>
        <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/index">首页</a></li>
		<li><a href="">频道</a>
			<ul>
				<?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['cols']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ls']['name'] = 'ls';
$this->_sections['ls']['start'] = (int)'0';
$this->_sections['ls']['step'] = ((int)'1') == 0 ? 1 : (int)'1';
$this->_sections['ls']['show'] = true;
$this->_sections['ls']['max'] = $this->_sections['ls']['loop'];
if ($this->_sections['ls']['start'] < 0)
    $this->_sections['ls']['start'] = max($this->_sections['ls']['step'] > 0 ? 0 : -1, $this->_sections['ls']['loop'] + $this->_sections['ls']['start']);
else
    $this->_sections['ls']['start'] = min($this->_sections['ls']['start'], $this->_sections['ls']['step'] > 0 ? $this->_sections['ls']['loop'] : $this->_sections['ls']['loop']-1);
if ($this->_sections['ls']['show']) {
    $this->_sections['ls']['total'] = min(ceil(($this->_sections['ls']['step'] > 0 ? $this->_sections['ls']['loop'] - $this->_sections['ls']['start'] : $this->_sections['ls']['start']+1)/abs($this->_sections['ls']['step'])), $this->_sections['ls']['max']);
    if ($this->_sections['ls']['total'] == 0)
        $this->_sections['ls']['show'] = false;
} else
    $this->_sections['ls']['total'] = 0;
if ($this->_sections['ls']['show']):

            for ($this->_sections['ls']['index'] = $this->_sections['ls']['start'], $this->_sections['ls']['iteration'] = 1;
                 $this->_sections['ls']['iteration'] <= $this->_sections['ls']['total'];
                 $this->_sections['ls']['index'] += $this->_sections['ls']['step'], $this->_sections['ls']['iteration']++):
$this->_sections['ls']['rownum'] = $this->_sections['ls']['iteration'];
$this->_sections['ls']['index_prev'] = $this->_sections['ls']['index'] - $this->_sections['ls']['step'];
$this->_sections['ls']['index_next'] = $this->_sections['ls']['index'] + $this->_sections['ls']['step'];
$this->_sections['ls']['first']      = ($this->_sections['ls']['iteration'] == 1);
$this->_sections['ls']['last']       = ($this->_sections['ls']['iteration'] == $this->_sections['ls']['total']);
?>	
				<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/col/index/cid/<?php echo $this->_tpl_vars['cols'][$this->_sections['ls']['index']]['cid']; ?>
" title=""><?php echo $this->_tpl_vars['cols'][$this->_sections['ls']['index']]['cname']; ?>
</a></li>
				<?php endfor; endif; ?>
            </ul>
		</li>
		<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/notice">公告</a></li>
		<!--<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/wall">留言墙</a></li>-->
		<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/member">关于我们</a></li>
		<?php if ($_SESSION['isLogin'] == 1): ?>
		<li style="float:right;"><a href="<?php echo $this->_tpl_vars['app']; ?>
/user/isLogout" style="font-size: 15px;">用户<b style="color:red"><?php echo $_SESSION['alias']; ?>
</b>你好,点击此处退出！</a></li>
		<?php endif; ?>
			
        </ul>
    </div>