<?php /* Smarty version 2.6.18, created on 2013-08-30 16:37:49
         compiled from video/recommend.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'video/recommend.htm', 7, false),)), $this); ?>
<?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['video']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<a href="<?php echo $this->_tpl_vars['app']; ?>
/video/player/vid/<?php echo $this->_tpl_vars['video'][$this->_sections['ls']['index']]['vid']; ?>
" title="">
		<img src="<?php echo $this->_tpl_vars['video'][$this->_sections['ls']['index']]['picurl']; ?>
" alt="<?php echo $this->_tpl_vars['video'][$this->_sections['ls']['index']]['title']; ?>
" title="<?php echo $this->_tpl_vars['video'][$this->_sections['ls']['index']]['title']; ?>
" border="0" class="pages_pic" style="width:100px;height:70px;float:left;">
		<span class="vsummary"><?php echo $this->_tpl_vars['video'][$this->_sections['ls']['index']]['title']; ?>
</span><br>
		<span class="vsummary">播放次数：<?php echo $this->_tpl_vars['video'][$this->_sections['ls']['index']]['time']; ?>
次</span><br>
		<span class="vsummary"><?php echo ((is_array($_tmp=$this->_tpl_vars['video'][$this->_sections['ls']['index']]['ltime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
	</a><div style="clear:both"> </div>
</li>
<?php endfor; else: ?>	
		无视频
<?php endif; ?>

