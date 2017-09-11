{if $image != NULL}
  <div class="ui grid">
    <div class="row">
      <div class="six wide column">
        {$classes = $image->getClasses()}
        {if $classes != NULL}
          <table class="ui table striped">
            <thead>                          
              <tr>
                <th>Название класса</th>
              </tr>
            </thead>
            <tbody>
                {foreach from=$classes item=class}
                  <tr>
                    <td>{$class->getClassName()}</td>
                  </tr>
                {/foreach}
            </tbody>
          </table>
        {else}
          <h3 align="center">В образе нет классов</h3>
        {/if}
      </div>
      <div class="ten wide column">
        <div class="ui internally grid">
          <div class="row">
            <div class="sixteen wide column">
              <form name="generateForm" method="POST" class="ui form">
                <div class="field">
                  <input type="submit" name="generateImageButton" value="Сгенерировать" class="ui button">
                </div>
                <div class="field">
                  <textarea rows="50" id="generatedCode" width="100%">{$image}</textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{else}
  <h3 align="center">{$image_no_set}</h3>
{/if}