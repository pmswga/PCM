
  <div class="ui styled accordion">
    {foreach from=$image->getClasses() item=class}
      <div class="title">
        <i class="dropdown icon"></i>
        {$class->getClassName()}
      </div>
      <div class="content">
        <div class="accordion">
          <div class="title">
            Свойства
          </div>
          <div class="content">
            {if $class->getVars() != NULL}
              <table class="ui table striped">
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
                      <td><i class="trash icon"></i>, <input type="checkbox"></td>
                    </tr>
                  {/foreach}
                </tbody>
              </table>
            {else}
              <h3 align="center">Не объявлены</h3>
            {/if}
          </div>
          <div class="title">
            Методы
          </div>
          <div class="content">
            {if $class->getVars() != NULL}
              <table class="ui table striped">
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
                      <td><i class="trash icon"></i>, <input type="checkbox"></td>
                    </tr>
                  {/foreach}
                </tbody>
              </table>
            {else}
              <h3 align="center">Не объявлены</h3>
            {/if}
          </div>
        </div>
      </div>
    {/foreach}  
  </div>
  