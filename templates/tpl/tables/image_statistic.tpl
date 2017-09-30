<form name="removeClassesForm" method="POST">
  <div class="ui stackable grid">
    <div class="row">
      <div class="sixteen wide column">
        <div class="actions">
          <input type="submit" name="removeClassesButton" value="Удалить" class="ui negative button">
        </div>
      </div>
    </div>
    {foreach from=$image->getClasses() item=class}
      <div class="row">
        <div class="fourteen wide column">        
          <div class="ui styled accordion" style="width: 100%;">
            <div class="title">
              <i class="dropdown icon"></i>
              {$class->getClassName()}
            </div>
            <div class="content">
              <fieldset>
                  <legend>Свойства</legend>
                  {if $class->getVars() != NULL}
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
                        {foreach from=$class->getVars() item=var}
                          <tr>
                            <td>
                              {if $var->getAccessType() == 0}
                                <span class="public">PUBLIC</span>
                              {elseif $var->getAccessType() == 1}
                                <span class="private">PRIVATE</span>
                              {elseif $var->getAccessType() == 2}
                                <span class="protected">PROTECTED</span>
                              {/if}
                            </td>
                            <td>
                              {if $var->getVarType() == 0}          
                                NATIVE
                              {elseif $var->getVarType() == 1}
                                STATIC
                              {/if}
                            </td>
                            <td>{$var->getVarName()}</td>
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                        {/foreach}
                      </tbody>
                    </table>
                  {else}
                    <h3 align="center">Не объявлены</h3>
                  {/if}
              </fieldset>
              <fieldset>
                  <legend>Методы</legend>
                  {if $class->getVars() != NULL}
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
                        {foreach from=$class->getMethods() item=method}
                          <tr>
                            <td>
                              {if $method->getAccessType() == 0}
                                <span class="public">PUBLIC</span>
                              {elseif $method->getAccessType() == 1}
                                <span class="private">PRIVATE</span>
                              {elseif $method->getAccessType() == 2}
                                <span class="protected">PROTECTED</span>
                              {/if}
                            </td>
                            <td>
                              {if $method->getMethodType() == 0}          
                                NATIVE
                              {elseif $method->getMethodType() == 1}
                                STATIC
                              {elseif $method->getMethodType() == 2}
                                ABSTRACT
                              {/if}
                            </td>
                            <td>{$method->getMethodName()} (
                                  {$methods = $method->getArgs()}
                                  {foreach from=$methods item=arg}
                                    {$arg->getArgName()}{if next($methods)},{/if}
                                  {/foreach}
                                )
                            <td>
                              <div class="ui checkbox">
                                <input type="checkbox">
                                <label></label>
                              </div>
                            </td>
                          </tr>
                        {/foreach}
                      </tbody>
                    </table>
                  {else}
                    <h3 align="center">Не объявлены</h3>
                  {/if}
              </fieldset>                
            </div>
          </div>
        </div>
        <div class="two wide column">
          <div class="ui checkbox">
            <input type="checkbox" name="classes[]" value="{$class->getClassName()}">
            <label></label>
          </div>
        </div>
      </div>
    {/foreach}
  </div>
</form>