<span>
    <div class="input-append pgui-datetime-editor">
        <input
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editors/editor_options.tpl", 'smarty_include_vars' => array('Editor' => $this->_tpl_vars['DateTimeEdit'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            class="pgui-date-time-edit"
            type="text"
            value="<?php echo $this->_tpl_vars['DateTimeEdit']->GetValue(); ?>
"
            data-picker-format="<?php echo $this->_tpl_vars['DateTimeEdit']->GetFormat(); ?>
"
            data-picker-show-time="<?php if ($this->_tpl_vars['DateTimeEdit']->GetShowsTime()): ?>true<?php else: ?>false<?php endif; ?>"
            data-picker-first-day-of-week="<?php echo $this->_tpl_vars['DateTimeEdit']->GetFirstDayOfWeek(); ?>
"
        ><button
            class="btn pgui-date-time-edit-picker"
            id="<?php echo $this->_tpl_vars['DateTimeEdit']->GetName(); ?>
_trigger"
            <?php if ($this->_tpl_vars['DateTimeEdit']->GetReadonly() || ! $this->_tpl_vars['DateTimeEdit']->getEnabled()): ?>
                disabled="disabled"
            <?php endif; ?>
            onclick="return false;">
            <i class="pg-icon-datetime-picker"></i>
        </button>
    </div>
</span>