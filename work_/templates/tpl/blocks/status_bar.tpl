{if $msgs != NULL}
  {foreach from=$msgs item=msg}
    <div class="alert alert-{$msg['type']} fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <p class="message bg-">{$msg['msg']}</p>    
    </div>
  {/foreach}
{/if}
