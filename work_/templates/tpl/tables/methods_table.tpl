{if $methods != NULL}
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Доступ</th>     
        <th>Тип</th>
        <th>Имя</th>
      </tr>
      {foreach from=$methods item=method}
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
          <td>
            <a href="#{$method->getMethodName()}" class="method">{$method->getMethodName()} (
              {$methods = $method->getArgs()}
              {foreach from=$methods item=arg}
                {$arg->getArgName()}{if next($methods)},{/if}
              {/foreach}
            )</a>
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{else}
  <h3 align='center'>Методы не объявлены</h3>
{/if}