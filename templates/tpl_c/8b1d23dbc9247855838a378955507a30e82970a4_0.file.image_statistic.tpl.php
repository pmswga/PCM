<?php
/* Smarty version 3.1.29, created on 2017-09-30 20:52:57
  from "C:\OpenServer\domains\PCM\templates\tpl\tables\image_statistic.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59cfd9f9d092b3_32070318',
  'file_dependency' => 
  array (
    '8b1d23dbc9247855838a378955507a30e82970a4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\tables\\image_statistic.tpl',
      1 => 1506793947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfd9f9d092b3_32070318 ($_smarty_tpl) {
?>
<form name="removeClassesForm" method="POST">
  <div class="ui stackable grid">
    <div class="row">
      <div class="sixteen wide column">
        <div class="actions">
          <input type="submit" name="removeClassesButton" value="Удалить" class="ui negative button">
        </div>
      </div>
    </div>
    <?php
$_from = $_smarty_tpl->tpl_vars['image']->value->getClasses();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_0_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_0_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
      <div class="row">
        <div class="fourteen wide column">        
          <div class="ui styled accordion" style="width: 100%;">
            <div class="title">
              <i class="dropdown icon"></i>
              <?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>

            </div>
            <div class="content">
              <fieldset>
                  <legend>Свойства</legend>
                  <?php if ($_smarty_tpl->tpl_vars['class']->value->getVars() != NULL) {?>
                    <table class="ui table striped" id="vars_table">
                      <thead>
                        <tr>
                          <th>Доступ</th>
                          <th>Тип</th>
                          <th>Имя</th>
                          <th>Действие</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['class']->value->getVars();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_var_1_saved_item = isset($_smarty_tpl->tpl_vars['var']) ? $_smarty_tpl->tpl_vars['var'] : false;
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['var']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
$__foreach_var_1_saved_local_item = $_smarty_tpl->tpl_vars['var'];
?>
                          <tr>
                            <td>
                              <?php if ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 0) {?>
                                <span class="public">PUBLIC</span>
                              <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 1) {?>
                                <span class="private">PRIVATE</span>
                              <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getAccessType() == 2) {?>
                                <span class="protected">PROTECTED</span>
                              <?php }?>
                            </td>
                            <td>
                              <?php if ($_smarty_tpl->tpl_vars['var']->value->getVarType() == 0) {?>          
                                NATIVE
                              <?php } elseif ($_smarty_tpl->tpl_vars['var']->value->getVarType() == 1) {?>
                                STATIC
                              <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['var']->value->getVarName();?>
</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                        <?php
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_1_saved_local_item;
}
if ($__foreach_var_1_saved_item) {
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_1_saved_item;
}
?>
                      </tbody>
                    </table>
                  <?php } else { ?>
                    <h3 align="center">Не объявлены</h3>
                  <?php }?>
              </fieldset>
              <fieldset>
                  <legend>Методы</legend>
                  <?php if ($_smarty_tpl->tpl_vars['class']->value->getVars() != NULL) {?>
                    <table class="ui table striped" id="method_table">
                      <thead>
                        <tr>
                          <th>Доступ</th>
                          <th>Тип</th>
                          <th>Имя</th>
                          <th>Действие</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$_from = $_smarty_tpl->tpl_vars['class']->value->getMethods();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_method_2_saved_item = isset($_smarty_tpl->tpl_vars['method']) ? $_smarty_tpl->tpl_vars['method'] : false;
$_smarty_tpl->tpl_vars['method'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['method']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->_loop = true;
$__foreach_method_2_saved_local_item = $_smarty_tpl->tpl_vars['method'];
?>
                          <tr>
                            <td>
                              <?php if ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 0) {?>
                                <span class="public">PUBLIC</span>
                              <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 1) {?>
                                <span class="private">PRIVATE</span>
                              <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getAccessType() == 2) {?>
                                <span class="protected">PROTECTED</span>
                              <?php }?>
                            </td>
                            <td>
                              <?php if ($_smarty_tpl->tpl_vars['method']->value->getMethodType() == 0) {?>          
                                NATIVE
                              <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getMethodType() == 1) {?>
                                STATIC
                              <?php } elseif ($_smarty_tpl->tpl_vars['method']->value->getMethodType() == 2) {?>
                                ABSTRACT
                              <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
 (
                                  <?php $_smarty_tpl->tpl_vars['methods'] = new Smarty_Variable($_smarty_tpl->tpl_vars['method']->value->getArgs(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'methods', 0);?>
                                  <?php
$_from = $_smarty_tpl->tpl_vars['methods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_arg_3_saved_item = isset($_smarty_tpl->tpl_vars['arg']) ? $_smarty_tpl->tpl_vars['arg'] : false;
$_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['arg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['arg']->value) {
$_smarty_tpl->tpl_vars['arg']->_loop = true;
$__foreach_arg_3_saved_local_item = $_smarty_tpl->tpl_vars['arg'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['arg']->value->getArgName();
if (next($_smarty_tpl->tpl_vars['methods']->value)) {?>,<?php }?>
                                  <?php
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_3_saved_local_item;
}
if ($__foreach_arg_3_saved_item) {
$_smarty_tpl->tpl_vars['arg'] = $__foreach_arg_3_saved_item;
}
?>
                                )
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                        <?php
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_2_saved_local_item;
}
if ($__foreach_method_2_saved_item) {
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_2_saved_item;
}
?>
                      </tbody>
                    </table>
                  <?php } else { ?>
                    <h3 align="center">Не объявлены</h3>
                  <?php }?>
              </fieldset>                
            </div>
          </div>
        </div>
        <div class="two wide column">
          <div class="ui checkbox">
            <input type="checkbox" name="classes[]" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
">
            <label></label>
          </div>
        </div>
      </div>
    <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
  </div>
</form><?php }
}
