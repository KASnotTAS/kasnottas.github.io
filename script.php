<?php
//Данные для подключения
define('DB_HOST', '127.0.0.1');
define('DB_PORT', '5432');
define('DB_NAME', 'ussr_films');
define('DB_USER', 'postgres');
define('DB_PASSWORD', 'Bigpassword1234');

class Database {
    private $connection;                // Подключение к БД
    
    public function __construct() {
        try {
            $dsn = "pgsql:host=" . DB_HOST . 
                   ";port=" . DB_PORT . 
                   ";dbname=" . DB_NAME . 
                   ";user=" . DB_USER . 
                   ";password=" . DB_PASSWORD;
            
            $this->connection = new PDO($dsn);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            die("Ошибка подключения: " . $e->getMessage());
        }
    }
    
    // Получить все фильмы (для страницы с карточками)
    public function getAllMovies() {
        $stmt = $this->connection->query(
            "SELECT id, title, description, image, year 
             FROM items 
             ORDER BY year DESC"
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Получить один фильм по ID (для страницы с детальной информацией)
    public function getMovieById($id) {
        $stmt = $this->connection->prepare(
            "SELECT * FROM items WHERE id = :id"
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Вставка данных из формы
    public function addMovie($title, $description, $director, $year) {
    $stmt = $this->connection->prepare(
        "INSERT INTO offers (title, description, director, year)
         VALUES (:title, :description, :director, :year)"
    );

    return $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':director' => $director,
        ':year' => $year
    ]);
}
}
?>
