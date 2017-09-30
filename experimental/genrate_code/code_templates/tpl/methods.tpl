
    {* Генерация типа доступа *}
    
    {if $method->getAccessType() == 0}
      {$access_method = "public"}
    {elseif $method->getAccessType() == 1}
      {$access_method = "private"}
    {elseif $method->getAccessType() == 2}
      {$access_method = "protected"}
    {/if}
    
    {* Генерация аргументов *}
    {$args = $method->getArgs()}
    {foreach from=$args item=arg}
      {$_args = $_args|cat:"$arg"}
      {if next($args)}
        {$_args = $_args|cat:', '}
      {/if}
    {/foreach}