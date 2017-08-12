{if $methods != NULL}
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Доступ</th>     
        <th>Тип</th>
        <th>Имя</th>
        <th>Аргументы</th>
      </tr>
      {foreach from=$methods item=method}
        <tr>
          <td>
            {if $method->getAccessType() == 0}
              PUBLIC
            {elseif $method->getAccessType() == 1}
              PRIVATE
            {elseif $method->getAccessType() == 2}
              PROTECTED
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
            <a href="#{$method->getMethodName()}" class="method">{$method->getMethodName()}</a>
          </td>
          <td>
            {foreach from=$method->getArgs() item=arg}
              <ul>
                <li>{$arg->getArgName()}</li>
              </ul>
            {/foreach}
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{else}
  <h3 align='center'>Методы не объявлены</h3>
{/if}