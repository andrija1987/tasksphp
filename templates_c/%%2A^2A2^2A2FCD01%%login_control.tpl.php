<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escapeurl', 'login_control.tpl', 35, false),)), $this); ?>
<div class="well">
    <form method="post" class="pgui-login-form">

        <fieldset>
            <div class="control-group">
                <label class="control-label" for="username"><?php echo $this->_tpl_vars['Captions']->GetMessageString('Username'); ?>
</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="username" id="username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password"><?php echo $this->_tpl_vars['Captions']->GetMessageString('Password'); ?>
</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" name="password" id="password">
                </div>
            </div>

            <div class="control-group">
                <label class="checkbox" >
                    <input type="checkbox" name="saveidentity" id="saveidentity" <?php if ($this->_tpl_vars['LoginControl']->GetLastSaveidentity()): ?> checked="checked"<?php endif; ?>>
                    <?php echo $this->_tpl_vars['Captions']->GetMessageString('RememberMe'); ?>

                </label>
            </div>
        </fieldset>

        <?php if ($this->_tpl_vars['LoginControl']->GetErrorMessage() != ''): ?>
            <div class="alert alert-error">
                <?php echo $this->_tpl_vars['LoginControl']->GetErrorMessage(); ?>

            </div>
        <?php endif; ?>

        <div class="form-actions">
            <button class="btn btn-large btn-primary" type="submit"><?php echo $this->_tpl_vars['Captions']->GetMessageString('Login'); ?>
</button>
            <?php if ($this->_tpl_vars['LoginControl']->CanLoginAsGuest()): ?>
            <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['LoginControl']->GetLoginAsGuestLink())) ? $this->_run_mod_handler('escapeurl', true, $_tmp) : smarty_modifier_escapeurl($_tmp)); ?>
" class="btn btn-large"><?php echo $this->_tpl_vars['Captions']->GetMessageString('LoginAsGuest'); ?>
</a>
            <?php endif; ?>
        </div>

    </form>
</div>