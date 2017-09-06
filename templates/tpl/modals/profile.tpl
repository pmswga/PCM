<div class="ui big modal" id="profileModal">
  <div class="header">
    Профиль: {$profile->login()}
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="six wide column">
          <table class="ui table striped">
            <thead>
              <tr>
                <th colspan="2">Основная информация</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Фамилия</td>
                <td>{$profile->secondName()}</td>
              </tr>
              <tr>
                <td>Имя</td>
                <td>{$profile->firstName()}</td>
              </tr>
              <tr>
                <td>Тип акканута</td>
                <td>{$profile->accountType()}</td>
              </tr>
              <tr>
                <td>Дата удаления акканута</td>
                <td>{$profile->expirationDate()|date_format:'d.m.Y'}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="ten wide column">
          <div id="message_box" class="ui message">
            <i class="close icon"></i>
            <div id="message_header" class="header"></div>
            <p id="message_content"></p>
          </div>
          <div class="ui styled accordion">
            <div class="title">
              Изменить тип акканута
            </div>
            <div class="content">
              <div class="ui two column internally celled grid">
                <div class="row">
                  <div class="column">
                    <h4 align="center">Free</h4>
                  </div>
                  <div class="column">
                    <h4 align="center">Standart</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="column" style="display: flex; justify-content: center;">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>
                  <div class="column" style="display: flex; justify-content: center;">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>
                </div>
              </div>
            </div>
            <div class="title">
              Сменить пароль
            </div>
            <div class="content">
              <form name="changeProfilePasswordForm" method="POST" class="ui form">
                <div class="field">
                  <label>Старый пароль</label>
                  <input type="password" name="oldPassword" >
                </div>
                <div class="field">
                  <label>Новый пароль</label>
                  <input type="password" name="newPassword" >
                </div>
                <div class="field">
                  <label>Повторите пароль</label>
                  <input type="password" name="newRetryPassword" >
                </div>
                <div class="field">
                  <input type="submit" name="changeProfilePasswordButton" value="Изменить" class="ui orange button">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="actions">
    <form name="workWithProfile" method="POST">
      <input type="submit" name="removeAccountButton" value="Удалить акканут" class="ui negative button">
      <a href="php/logout.php" value="Выйти" class="ui button">Выйти</a>
    </form>
  </div>
</div>
<script type="text/javascript">

  function visibleMessageBox(visible = false, header = "", content = "", status = "info")
  {
    $("#message_header").text(header);
    $("#message_content").text(content);
    $("#message_box").attr("class", "ui " + status + " message");
  
    if (visible) {
      $("#message_box").show();
    } else {
      $("#message_box").hide();
    }
  }
  
  visibleMessageBox(false);
  
  $("[name='changeProfilePasswordForm']").on("submit", function(){
  
    var oldPassword = $("[name='oldPassword']").val();
    var newPassword = $("[name='newPassword']").val();
    var retryPassword = $("[name='newRetryPassword']").val();
    
    if ((oldPassword != "") && (newPassword != "") && (retryPassword != "")) {    
      if (newPassword === retryPassword) {
        return true;
      } else {
        visibleMessageBox(true, "Ошибка", "Пароли не совпадают", "negative");
      }
    } else {
      visibleMessageBox(true, "Ошибка", "Заполните необходимые поля", "negative");
    }
    
    return false;
  });

</script>