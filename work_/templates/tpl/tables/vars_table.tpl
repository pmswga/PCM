{if $vars != NULL}
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Доступ</th>     
        <th>Тип</th>
        <th>Имя</th>
      </tr>
      {foreach from=$vars item=var}
        <tr>
          <td>
            {if $var->getAccessType() == 0}
              PUBLIC
            {elseif $var->getAccessType() == 1}
              PRIVATE
            {elseif $var->getAccessType() == 2}
              PROTECTED
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
        </tr>
      {/foreach}
    </tbody>
  </table>
{else}
  <h3 align='center'>Свойства не объявлены</h3>
{/if}