<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'style_block', 'editors/text_edit.tpl', 29, false),)), $this); ?>
<?php if ($this->_tpl_vars['TextEdit']->getPrefix() && $this->_tpl_vars['TextEdit']->getSuffix()): ?>
    <div class="input-prepend input-append">
<?php elseif ($this->_tpl_vars['TextEdit']->getPrefix()): ?>
    <div class="input-prepend">
<?php elseif ($this->_tpl_vars['TextEdit']->getSuffix()): ?>
    <div class="input-append">
<?php endif; ?>
<?php if ($this->_tpl_vars['TextEdit']->getPrefix()): ?>
    <span class="add-on"><?php echo $this->_tpl_vars['TextEdit']->getPrefix(); ?>
</span>
<?php endif; ?>
<input
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editors/editor_options.tpl", 'smarty_include_vars' => array('Editor' => $this->_tpl_vars['TextEdit'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    class="input-xlarge"
    value="<?php echo $this->_tpl_vars['TextEdit']->GetHTMLValue(); ?>
"
    <?php if ($this->_tpl_vars['TextEdit']->getPlaceholder()): ?>
        placeholder="<?php echo $this->_tpl_vars['TextEdit']->getPlaceholder(); ?>
"
    <?php endif; ?>
    <?php if ($this->_tpl_vars['TextEdit']->GetPasswordMode()): ?>
        type="password"
    <?php else: ?>
        type="text"
    <?php endif; ?>
    <?php if ($this->_tpl_vars['TextEdit']->GetMaxLength()): ?>
        maxlength="<?php echo $this->_tpl_vars['TextEdit']->GetMaxLength(); ?>
"
    <?php endif; ?>
    <?php if ($this->_tpl_vars['TextEdit']->GetSize()): ?>
        size="<?php echo $this->_tpl_vars['TextEdit']->GetSize(); ?>
"
    <?php endif; ?>
    <?php $this->_tag_stack[] = array('style_block', array()); $_block_repeat=true;smarty_block_style_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        width: auto;
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_style_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
>
<?php if ($this->_tpl_vars['TextEdit']->getSuffix()): ?>
    <span class="add-on"><?php echo $this->_tpl_vars['TextEdit']->getSuffix(); ?>
</span>
<?php endif; ?>
<?php if ($this->_tpl_vars['TextEdit']->getPrefix() || $this->_tpl_vars['TextEdit']->getSuffix()): ?>
    </div>
<?php endif; ?>