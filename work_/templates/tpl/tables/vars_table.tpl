{if $vars != NULL}
  <table class="ui table striped">
    <thead>
      <tr>
        <th>Доступ</th>
        <!-- <th>Тип</th> -->
        <th>Имя</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$vars item=var}
        <tr>
          <td>
            {if $var->getAccessType() == 0}
              <span class="public">PUBLIC</span>
            {elseif $var->getAccessType() == 1}
              <span class="private">PRIVATE</span>
            {elseif $var->getAccessType() == 2}
              <span class="protected">PROTECTED</span>
            {/if}
          </td>{*
          <td class="type">
            {if $var->getVarType() == 0}          
              NATIVE
            {elseif $var->getVarType() == 1}
              STATIC
            {/if}
          </td>*}
          <td>{$var->getVarName()}</td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{else}
  <h3 align='center'>Свойства не объявлены</h3>
{/if}