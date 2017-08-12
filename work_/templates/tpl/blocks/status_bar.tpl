{if $msgs != NULL}
  <div id="status_bar">
    {foreach from=$msgs item=msg}
      <div class="message bg-{$msg['type']}"
        data-toggle="popover" 
        data-placement="top"                  
        data-html="true"
        {if $msg['type'] == "success"}
          title="Уведомление"
        {elseif $msg['type'] == "info"}
          title="Информация"
        {elseif $msg['type'] == "warning"}
          title="Предупреждение"
        {elseif $msg['type'] == "danger"}
          title="Ошибка"
        {/if}
        data-content="{$msg['msg']}">
        {if $msg['type'] == "success"}
          <a href="#">S</a>
        {elseif $msg['type'] == "info"}
          <a href="#">I</a>
        {elseif $msg['type'] == "warning"}
          <a href="#">W</a>
        {elseif $msg['type'] == "danger"}
          <a href="#">E</a>
        {/if}
      </div>
    {/foreach}
  </div>
{/if}
