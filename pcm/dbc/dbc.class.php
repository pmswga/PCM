<?php
	declare(strict_types = 1);
	namespace PCM\DataBase;
  
  require_once "connection_settings.consts.php";
  
  /*!
    
    \class DBC dbc.class.php "pcm/dbc/dbc.class.php"
    \brief Базовый класс для все остальных менеджеров
    \author pmswga
    \version 1.0
    
    Все запросы к базе данных осуществляются через PDO
    
    Базовые функций, выполняемые менеджером:
      1. Добавление данных
      2. Удаление данных
      3. Выполнение запросов к БД
      4. Работа с логами (Выборка, удаление)
    
  */
  
	abstract class DBC
	{
		private $DBC; ///< Контроллер базы данных (PDO)
		
    /*!
      \brief Задаёт контроллер базы данных
      
      Базовый конструктор для всех унаследованных менеджеров
      
      \param[in] $dbc - Контроллер базы данных
      \note Объект класса PDO
    */
    
		function __construct(\PDO $dbc = null)
		{
      if (!empty($dbc)) {        
        $this->DBC = $dbc;
      } else {
        
        $this->DBC = new \PDO("mysql:dbname=".DATABASE_NAME.";host=".HOST, USER_NAME, USER_PASSWORD);
        $this->DBC->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->DBC->exec("SET NAMES utf8");
        
      }
		}
    
    /*!
      \brief Возвращает контроллер базы данных
      \return Контроллер базы данных
      \note Объект класса PDO
    */
		
		public function dbc()
		{
			return $this->DBC;
		}
		
    /*!
      \brief Выполняет запрос
      \param[in] $sql    - SQL код
      \param[in] $params - Аргументы
      \returns TRUE или FALSE, если запрос не предполагает выборку данных, а иначе ассоциативный массив с данными
    */
    
		public function query(string $sql, array $params = array())
		{
			if (!empty($params)) {
				$query = $this->dbc()->prepare($sql);
				$result = $query->execute($params);
        return ($result) ? $query->fetchAll(\PDO::FETCH_ASSOC) : false;
			} else {
        return $this->dbc()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
      }
		}
    
    /*!
      \brief Добавление каких-либо данных в базу данных
      \param[in] $data - Данные для добавления
    */
    
		abstract public function add($data);
    
    /*!
      \brief Удаление каких-либо данными из базы данных
      \param[in] $what - Данные для удаления
    */
    
		abstract public function remove($what);
		
	}
	
?>
