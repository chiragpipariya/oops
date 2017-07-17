<?php

/* * ********************************************************************** 
 * Mathod Chaining
 * @read more :: http://www.techflirt.com/tutorials/oop-in-php/php-method-chaining.html
 * @video :: https://youtu.be/hF1imZKR90g?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * Its rather simple really, you have a series of mutator methods that all returns the original (or other) objects, that way you can keep calling functions.
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note :: With the help of php method chaining or PHP function chaining we can call more than one method or function of the class in single instruction. 
 */
class DBManager {

    private $selectables = array();
    private $table;
    private $whereClause;
    private $limit;

    public function select()
    {
        $this->selectables = func_get_args();
        return $this;
    }

    public function from($table)
    {
        $this->table = $table;
        return $this;
    }

    public function where($where)
    {
        $this->whereClause = $where;
        return $this;
    }

    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function result()
    {
        $query[] = "SELECT";
        // if the selectables array is empty, select all
        if (empty($this->selectables))
        {
            $query[] = "*";
        }
        // else select according to selectables
        else
        {
            $query[] = join(', ', $this->selectables);
        }

        $query[] = "FROM";
        $query[] = $this->table;

        if (!empty($this->whereClause))
        {
            $query[] = "WHERE";
            $query[] = $this->whereClause;
        }

        if (!empty($this->limit))
        {
            $query[] = "LIMIT";
            $query[] = $this->limit;
        }

        return join(' ', $query);
    }

}

echo "<pre> ";
echo "<br>===============<br>";
echo "Result :: DBManager call";
echo "<br>===============<br>";

// Now to use the class and see how METHOD CHAINING works
// let us instantiate the class DBManager
$testOne = new DBManager();
$testOne->select()->from('users');
echo "<br>testOne (1)<br>";
echo $testOne->result();
echo "<br>";
// OR
echo "<br>testOne (2)<br>";
echo $testOne->select()->from('users')->result();
echo "<br>";
// both displays: 'SELECT * FROM users'

$testTwo = new DBManager();
$testTwo->select()->from('posts')->where('id > 200')->limit(10);
echo "<br>testTwo<br>";
echo $testTwo->result();
echo "<br>";
// this displays: 'SELECT * FROM posts WHERE id > 200 LIMIT 10'

$testThree = new DBManager();
$testThree->select(
        'firstname', 'email', 'country', 'city'
)->from('users')->where('id = 2399');
echo "<br>testThree<br>";
echo $testThree->result();
echo "<br>";
// this will display:
// 'SELECT firstname, email, country, city FROM users WHERE id = 2399'




echo "<br>";
echo "</pre>" . __FILE__ . ' ( Line Number ' . __LINE__ . ')';
