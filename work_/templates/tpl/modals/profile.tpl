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
          <div class="ui styled accordion">
            <div class="title">
              Изменить тип акканута
            </div>
            <div class="content">
              <div class="ui three column internally celled grid">
                <div class="row">
                  <div class="column">
                    Free
                  </div>
                  <div class="column">
                    Standart
                  </div>
                  <div class="column">
                    Developer 
                  </div>                
                </div>
                <div class="row">
                  <div class="column">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>
                  <div class="column">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>
                  <div class="column">
                    <input type="submit" value="Перейти" class="ui primary button">
                  </div>                
                </div>
              </div>
            </div>
            <div class="title">
              Сменить логин
            </div>
            <div class="content">
              <form class="ui form">
                <div class="field">
                  <label>Новый логин</label>
                  <input type="password">
                </div>
                <div class="field">
                  <input type="submit" value="Изменить" class="ui orange button">
                </div>
              </form>
            </div>
            <div class="title">
              Сменить пароль
            </div>
            <div class="content">
              <form class="ui form">
                <div class="field">
                  <label>Старый пароль</label>
                  <input type="password">
                </div>
                <div class="field">
                  <label>Новый пароль</label>
                  <input type="password">
                </div>
                <div class="field">
                  <label>Повторите пароль</label>
                  <input type="password">
                </div>
                <div class="field">
                  <input type="submit" value="Изменить" class="ui orange button">
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