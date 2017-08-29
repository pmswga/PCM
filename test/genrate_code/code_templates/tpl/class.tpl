{* Основные параметры класса *}

{$class_name  = $class->getClassName()}
{$super_class = $class->getSuperClassName()}
{$class_type  = $class->getClassType()}

{* Задаём параметры генерации *}

{if $super_class != ""}
  {$require_link = "require_once "|cat: '"'|cat: "$super_class"|cat: '.php";'}
  {$_super_class_name = "extends $super_class"}
{/if}

{if $class_type == 0}
  {$_class_type = ""}
{elseif $class_type == 1}
  {$_class_type = "abstract"}
{/if}

{* Генерация класса *}

<?php

  {$require_link}
  
  {$_class_type}class {$class_name} {$_super_class_name}
  {
  
  {* Генерация констант *}
  
  {foreach from=$class->getConsts() item=const}
    const ${$const->getConstName()} = {$const->getConstValue()};
  {/foreach}
  
  {* Генерация свойств *}
  
  {foreach from=$class->getVars() item=var}
  
    {* Генерация типа доступа *}
    
    {if $var->getAccessType() == 0}
      {$access_var = "public"}
    {elseif $var->getAccessType() == 1}
      {$access_var = "private"}
    {elseif $var->getAccessType() == 2}
      {$access_var = "protected"}
    {/if}
    
    {* Генерация свойства *}

    {$access_var} ${$var->getVarName()};
  {/foreach}
  
  {* Генерация методов *}
  
  {foreach from=$class->getMethods() item=method}
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
       
    {* Генерация метода *}
    
    {$access_method} function {$method->getMethodName()}({$_args})
    {
      {$method->getSrc()}
    }
    
  {/foreach}

  }
  
?>

