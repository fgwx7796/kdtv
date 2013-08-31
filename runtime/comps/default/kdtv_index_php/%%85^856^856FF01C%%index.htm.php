<?php /* Smarty version 2.6.18, created on 2013-08-30 16:28:27
         compiled from index/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index/index.htm', 8, false),)), $this); ?>
<div id="slider1" class="sliderwrapper">
	<div class="slider_content">
		<div id="featured">
			<?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['topVideo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ls']['name'] = 'ls';
$this->_sections['ls']['start'] = (int)'0';
$this->_sections['ls']['step'] = ((int)'1') == 0 ? 1 : (int)'1';
$this->_sections['ls']['max'] = (int)'5';
$this->_sections['ls']['show'] = true;
if ($this->_sections['ls']['max'] < 0)
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
			<div id="fragment-<?php echo $this->_sections['ls']['iteration']; ?>
" class="ui-tabs-panel" style="">
					<img src="<?php echo $this->_tpl_vars['topVideo'][$this->_sections['ls']['index']]['picurl']; ?>
" alt="<?php echo $this->_tpl_vars['topVideo'][$this->_sections['ls']['index']]['title']; ?>
" title="<?php echo $this->_tpl_vars['topVideo'][$this->_sections['ls']['index']]['title']; ?>
" border="0" style="width:630px"/>
					<div class="info" >
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['topVideo'][$this->_sections['ls']['index']]['summary'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</p>
					</div>
				</div>
			<?php endfor; endif; ?>
		<ul class="ui-tabs-nav">
		<?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['topVideo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-<?php echo $this->_sections['ls']['iteration']; ?>
"><a href="#fragment-<?php echo $this->_sections['ls']['iteration']; ?>
"><?php echo $this->_tpl_vars['topVideo'][$this->_sections['ls']['index']]['title']; ?>
</a></li>
            
		<?php endfor; endif; ?>
	    </ul>
	   </div>
	</div>
</div>  <!--end of slider --> 

		<div class="center_content">
        	<div class="leftbox">
		
              <h2>最新视频</h2>
			  <ul id="" class="col">

				  <?php unset($this->_sections['ls']);
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['newVideo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				  <li class="colleft"><a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php/video/player/vid/<?php echo $this->_tpl_vars['newVideo'][$this->_sections['ls']['index']]['vid']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['newVideo'][$this->_sections['ls']['index']]['picurl']; ?>
" alt="<?php echo $this->_tpl_vars['newVideo'][$this->_sections['ls']['index']]['title']; ?>
" title="" border="0" />
					  <p class="title"><?php echo $this->_tpl_vars['newVideo'][$this->_sections['ls']['index']]['title']; ?>
</p></a>
					</li>
				<?php endfor; endif; ?>
				
				</ul>
 				<div style="clear:both"></div>

        	</div>
        	<div class="leftbox_right">
				<h2>留言墙</h1>
				<div id="fpage" class="">
						无留言
				</div>
		
        	</div>

        </div>
        <div class="clear"></div>
		<span onclick="window.scrollTo('0','0')" id="scrolltop" style="left: 1190px; visibility: visible;">回顶部</span>
		
		<script>
			var cache=new Array();
			function setPage(url){
				var obj=document.getElementById("fpage");
				
				if(typeof(cache[url])=="undefined"){
					var ajax=Ajax();

					ajax.get(url,function(data){
							obj.innerHTML=data;
							cache[url]=data;	
						});
				}else{
					obj.innerHTML=cache[url];	
				}	
			}
			function ajaxBox(url, id){
				var obj=document.getElementById(id);
						obj.style.display = "block";
				var ajax=Ajax();
				ajax.get(url,function(data){
						obj.innerHTML=data;
						obj.style.display = "block";
					});
			}
			function ajaxQuery(url){
				var ajax=Ajax();
				ajax.get(url);
			}
			setPage("<?php echo $this->_tpl_vars['app']; ?>
/wall/walllist?page=1");
			ajaxBox("<?php echo $this->_tpl_vars['app']; ?>
/video/videolistindex?cid=<?php echo $this->_tpl_vars['col']['cid']; ?>
", "video");
			ajaxBox("<?php echo $this->_tpl_vars['app']; ?>
/video/videolistindex?cid=<?php echo $this->_tpl_vars['col']['cid']; ?>
", "video");
			ajaxBox("<?php echo $this->_tpl_vars['app']; ?>
/video/videolistindex?cid=<?php echo $this->_tpl_vars['col']['cid']; ?>
", "video");
		</script>