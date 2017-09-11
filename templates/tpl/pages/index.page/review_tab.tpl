{if $image != NULL}
  <div class="ui internally grid">
    <div class="row">
      <div class="eight wide column">
        <div class="actions">
          <form name="workWithImageForm" method="POST" class="ui form">
            <input type="submit" name="saveImageButton" value="Скачать файл образа" class="ui orange button">
            <input type="submit" name="removeImageButton" value="Удалить образ" class="ui negative button">
          </form>
        </div>
        <table class="ui table striped">
          <tbody>
            <tr>
              <td>Классов</td>
              <td>{$countOfClasses|default:0}</td>
            </tr>
            <tr>
              <td>Методов</td>
              <td>{$countOfMethods|default:0}</td>
            </tr>
            <tr>
              <td>Свойств</td>
              <td>{$countOfVars|default:0}</td>
            </tr>
          </tbody>
        </table>
        <fieldset>
          <legend style="color: black;"><h1>Структура образа</h1></legend>
          {function stat}
            <ul class="ui list" id="image_structures">
              {foreach from=$data item=entry}
                <li class="item">
                  <i class="folder open icon"></i>
                  <div class="content">
                    <div class="header">
                      <a href="#{$entry['supclass']->getClassName()}">{$entry['supclass']->getClassName()}</a>
                    </div>
                    <div class="content">
                      <ul class="ui list">
                        {foreach from=$entry['supclass']->getVars() item=var}
                          <li class="item">
                            <div class="content">
                              <div class="header">var ${$var->getVarName()}</div>
                            </div>
                          </li>
                        {/foreach}
                        {foreach from=$entry['supclass']->getMethods() item=method}
                          <li class="item">
                            <div class="content">
                              <div class="header">method {$method->getMethodName()}()</div>
                            </div>
                          </li>
                        {/foreach}
                      </ul>
                    </div>
                    {if is_array($entry['subclass'])}
                      <ul class="list">
                        {stat data=$entry["subclass"]}
                      </ul>
                    {/if}
                  </div>
                </li>
              {/foreach}
            </ul>
          {/function}
          {stat data=$image->getClassHierarchia()}
        </fieldset>
      </div>
      <div class="eight wide column">
        {include file="tables/image_statistic.tpl"}
      </div>
    </div>
  </div>
{else}
  <h3 align="center">{$image_no_set}</h3>
{/if}