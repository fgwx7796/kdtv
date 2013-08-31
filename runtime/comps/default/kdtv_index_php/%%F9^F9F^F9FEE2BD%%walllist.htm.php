<?php /* Smarty version 2.6.18, created on 2013-08-30 16:28:27
         compiled from wall/walllist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'wall/walllist.htm', 72, false),array('modifier', 'date_format', 'wall/walllist.htm', 74, false),)), $this); ?>
<ul class="wall">
    <?php if ($_SESSION['isLogin'] == 0): ?>
    	<li>
            <div id="" class="walllogin">
				<form action="<?php echo $this->_tpl_vars['app']; ?>
/user/islogin" method="post" accept-charset="utf-8">
                    <table border="0" class="loginmini">
                        <caption>
                            请登录之后留言
                        </caption>
                        <tr>
                            <td>
                                用户名：
                            </td>
                            <td colspan="2">
                                <input type="text" name="username" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                密码：
                            </td>
                            <td colspan="2">
                                <input type="password" name="passwd" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                验证码：
                            </td>
                            <td>
                                <input type="text" name="code" value="" size="7" />
                            </td>
                            <td>
                                <img class="vcode" src="<?php echo $this->_tpl_vars['url']; ?>
/code" onclick="this.src='<?php echo $this->_tpl_vars['url']; ?>
/code/'+Math.random()" />
                            </td>
                        </tr>
                    </table>
                    <input class="form_submit" type="submit" name="sub" value="登陆" />
					<a class="reg" href="<?php echo $this->_tpl_vars['app']; ?>
/user/reg" target="_blank">注册</a>
                </form>
            </div>
        </li>
        <?php else: ?>
            <li>
			<img class="faceLeft" src="<?php echo $_SESSION['faceurl2']; ?>
" alt="" title="" border="0"
                />
                <div id="" class="walladd">
                    <form action="<?php echo $this->_tpl_vars['app']; ?>
/wall/add" method="post" accept-charset="utf-8">
						<textarea class="form_input" type="text" name="content" value="" style="height:70px;width:190px;background-color:white;margin-bottom: 10px;max-height: 200px; max-width: 190px;"></textarea>
						验证码：<input type="text" name="code" value="" size="4" /><img class="vcode" src="<?php echo $this->_tpl_vars['url']; ?>
/code" onclick="this.src='<?php echo $this->_tpl_vars['url']; ?>
/code/'+Math.random()" /><br>
                        <input class="form_submit" type="submit" name="sub" value="留言" />
                        <input class="form_submit" type="reset" name="some_name" value="重置" />
                    </form>
                </div>
                <div style="clear:both">
                </div>
			</li>
		 <?php endif; ?>

            <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['wall']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<li>
			<?php if ($this->_sections['ls']['iteration']%2 == 0): ?>
				<img class="faceRight" src="<?php echo $this->_tpl_vars['wall'][$this->_sections['ls']['index']]['face']; ?>
" alt="" title="" border="0" />
			<?php else: ?>
				<img class="faceLeft" src="<?php echo $this->_tpl_vars['wall'][$this->_sections['ls']['index']]['face']; ?>
" alt="" title="" border="-1" />
			<?php endif; ?>

                    <p class="content">
                        <span class="username">
							<?php echo $this->_tpl_vars['wall'][$this->_sections['ls']['index']]['alias']; ?>
：
                        </span>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['wall'][$this->_sections['ls']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 350) : smarty_modifier_truncate($_tmp, 350)); ?>

                        <span class="date2">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['wall'][$this->_sections['ls']['index']]['ctime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

                        </span>
                    </p>
                    <div style="clear:both"></div>
                </li>
				<?php endfor; endif; ?>
				<?php echo $this->_tpl_vars['fpage']; ?>

     
</ul>
