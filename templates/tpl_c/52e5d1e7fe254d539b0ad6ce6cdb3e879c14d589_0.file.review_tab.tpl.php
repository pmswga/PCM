<?php
/* Smarty version 3.1.29, created on 2017-09-11 23:36:00
  from "C:\OpenServer\domains\PCM\templates\tpl\pages\index.page\review_tab.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59b6f3b074b0f6_63600692',
  'file_dependency' => 
  array (
    '52e5d1e7fe254d539b0ad6ce6cdb3e879c14d589' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\pages\\index.page\\review_tab.tpl',
      1 => 1505162155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tables/image_statistic.tpl' => 1,
  ),
  'tpl_function' => 
  array (
    'stat' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl_c\\52e5d1e7fe254d539b0ad6ce6cdb3e879c14d589_0.file.review_tab.tpl.php',
      'uid' => '52e5d1e7fe254d539b0ad6ce6cdb3e879c14d589',
      'call_name' => 'smarty_template_function_stat_1604759b6f3b06aae56_11336103',
    ),
  ),
),false)) {
function content_59b6f3b074b0f6_63600692 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['image']->value != NULL) {?>
  <div class="ui internally grid">
    <div class="row">
      <div class="eight wide column">
        <div class="actions">
          <form name="workWithImageForm" method="POST" class="ui form">
            <input type="submit" name="saveImageButton" value="Скачать файл образа" class="ui orange button">
            <input type="submit" name="removeImageButton" value="Удалить образ" class="ui negative button">
          </form>
        </div>
        <table class="ui table striped">
          <tbody>
            <tr>
              <td>Классов</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['countOfClasses']->value)===null||$tmp==='' ? 0 : $tmp);?>
</td>
            </tr>
            <tr>
              <td>Методов</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['countOfMethods']->value)===null||$tmp==='' ? 0 : $tmp);?>
</td>
            </tr>
            <tr>
              <td>Свойств</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['countOfVars']->value)===null||$tmp==='' ? 0 : $tmp);?>
</td>
            </tr>
          </tbody>
        </table>
        <fieldset>
          <legend style="color: black;"><h1>Структура образа</h1></legend>
          
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'stat', array('data'=>$_smarty_tpl->tpl_vars['image']->value->getClassHierarchia()), true);?>

        </fieldset>
      </div>
      <div class="eight wide column">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tables/image_statistic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
    </div>
  </div>
<?php } else { ?>
  <h3 align="center"><?php echo $_smarty_tpl->tpl_vars['image_no_set']->value;?>
</h3>
<?php }
}
/* smarty_template_function_stat_1604759b6f3b06aae56_11336103 */
if (!function_exists('smarty_template_function_stat_1604759b6f3b06aae56_11336103')) {
function smarty_template_function_stat_1604759b6f3b06aae56_11336103($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
            <ul class="ui list" id="image_structures">
              <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_0_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_0_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                <li class="item">
                  <i class="folder open icon"></i>
                  <div class="content">
                    <div class="header">
                      <a href="#<?php echo $_smarty_tpl->tpl_vars['entry']->value['supclass']->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['supclass']->getClassName();?>
</a>
                    </div>
                    <div class="content">
                      <ul class="ui list">
                        <?php
$_from = $_smarty_tpl->tpl_vars['entry']->value['supclass']->getVars();
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
                          <li class="item">
                            <div class="content">
                              <div class="header">var $<?php echo $_smarty_tpl->tpl_vars['var']->value->getVarName();?>
</div>
                            </div>
                          </li>
                        <?php
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_1_saved_local_item;
}
if ($__foreach_var_1_saved_item) {
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_1_saved_item;
}
?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['entry']->value['supclass']->getMethods();
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
                          <li class="item">
                            <div class="content">
                              <div class="header">method <?php echo $_smarty_tpl->tpl_vars['method']->value->getMethodName();?>
()</div>
                            </div>
                          </li>
                        <?php
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_2_saved_local_item;
}
if ($__foreach_method_2_saved_item) {
$_smarty_tpl->tpl_vars['method'] = $__foreach_method_2_saved_item;
}
?>
                      </ul>
                    </div>
                    <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value['subclass'])) {?>
                      <ul class="list">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'stat', array('data'=>$_smarty_tpl->tpl_vars['entry']->value["subclass"]), true);?>

                      </ul>
                    <?php }?>
                  </div>
                </li>
              <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_local_item;
}
if ($__foreach_entry_0_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_item;
}
?>
            </ul>
          <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_stat_1604759b6f3b06aae56_11336103 */
}
