<?php /* Smarty version 2.6.18, created on 2013-08-30 16:32:35
         compiled from notice/noticelist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'notice/noticelist.htm', 4, false),array('modifier', 'date_format', 'notice/noticelist.htm', 7, false),)), $this); ?>
<ul id="" class="noticeList">
	<?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['notice']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <h1 id="noticeTitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['notice'][$this->_sections['ls']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 21) : smarty_modifier_truncate($_tmp, 21)); ?>
</h1>
        <p style="text-indent: 2em;"><?php echo ((is_array($_tmp=$this->_tpl_vars['notice'][$this->_sections['ls']['index']]['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 21) : smarty_modifier_truncate($_tmp, 21)); ?>
</p>
        <p style="text-indent: 2em;">开始时间：<span
            class="noticeTime"><?php echo ((is_array($_tmp=$this->_tpl_vars['notice'][$this->_sections['ls']['index']]['strtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>结束时间：<span
            class="noticeTime"><?php echo ((is_array($_tmp=$this->_tpl_vars['notice'][$this->_sections['ls']['index']]['stptime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span> </p>
    </li>

    <?php endfor; else: ?>	
				无公告
    <?php endif; ?>
    <?php echo $this->_tpl_vars['fpage']; ?>

</ul>


