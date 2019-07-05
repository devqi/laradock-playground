<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))  // 1. variation: bind variables to prevent sql injection
            // implode(', ', array_values($parameters)) // 2. variation (need to add doule-quotes for string values)
        );

        // insert into users (name) values (:name);

        echo $sql;
        echo '<br>';

        try {
            $statement  = $this->pdo->prepare($sql);
            /* In the following, we bind values to the placeholder.
            ** In our case,  the placeholder is ':name' 
            ** 1. Option :
            **    $statement->bindParam(':name', 'Susan');
            */
            // 2. Option:
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('Boom, insertion failed because of ' . $e->getMessage());
        }
    }
}