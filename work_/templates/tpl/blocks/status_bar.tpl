{foreach from=$msgs item=msg}
  <div class="ui {$msg['type']} message">
    <i class="close icon"></i>
    <div class="header">
      {if $msg['type'] == "negative"}
        Ошибка
      {elseif $msg['type'] == "warning"}
        Предупреждение
      {elseif $msg['type'] == "info"}
        Уведомление
      {elseif $msg['type'] == "success"}
        Успешно
      {/if}
    </div>
    <p>{$msg['msg']}</p>
  </div>
{/foreach}