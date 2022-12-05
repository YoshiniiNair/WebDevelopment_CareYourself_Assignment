<?php

class Post {

    // database connection and table name
    private $conn;
    private $table_name = "posts";
    // object properties
    public $post_id;
    public $user_id;
    public $post_title;
    public $post_content;

    // constructor with $db as database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // read products
    function read() {

        // select all query
        $query = "SELECT
                u.user_id as user_id, p.post_id, p.post_title, p.post_content
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    users u
                        ON p.user_id = u.user_id
            ORDER BY
                p.created DESC";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    // create product
    function create() {

        // query to insert record
        $query = "INSERT INTO
                " . $this->table_name . "
            SET
                post_title=:post_title, post_content=:post_content, user_id=:user_id";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->post_title = htmlspecialchars(strip_tags($this->post_title));
        $this->post_content = htmlspecialchars(strip_tags($this->post_content));
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));

        // bind values
        $stmt->bindParam(":post_title", $this->post_title);
        $stmt->bindParam(":post_content", $this->post_content);
        $stmt->bindParam(":user_id", $this->user_id);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // used when filling up the update product form
    function readOne() {

        // query to read single record
        $query = "SELECT
                u.user_id as user_id, p.post_id, p.post_title, p.post_content
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    users u
                        ON p.user_id = u.user_id
            WHERE
                p.post_id = ?
            LIMIT
                0,1";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->post_title = $row['post_title'];
        $this->post_content = $row['post_content'];
        $this->user_id = $row['user_id'];
    }

    // update the product
    function update() {

        // update query
        $query = "UPDATE
                " . $this->table_name . "
            SET
                post_title = :post_title,
                post_content = :post_content,
                user_id = :user_id
            WHERE
                post_id = :post_id";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->post_title = htmlspecialchars(strip_tags($this->post_title));
        $this->post_content = htmlspecialchars(strip_tags($this->post_content));
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->post_id = htmlspecialchars(strip_tags($this->post_id));

        // bind new values
        $stmt->bindParam(':post_title', $this->post_title);
        $stmt->bindParam(':post_content', $this->post_content);
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':post_id', $this->post_id);

        // execute the query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // delete the product
    function delete() {

        // delete query
        $query = "DELETE FROM " . $this->table_name . " WHERE post_id = ?";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->post_id = htmlspecialchars(strip_tags($this->post_id));

        // bind id of record to delete
        $stmt->bindParam(1, $this->post_id);

        // execute query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // search products
    function search($keywords) {

        // select all query
        $query = "SELECT
                u.user_id as user_id, p.post_id, p.post_title, p.post_content
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    users u
                        ON p.user_id = u.user_id
            WHERE
                p.post_title LIKE ? OR p.post_content LIKE ? OR c.user_id LIKE ?
            ORDER BY
                p.created DESC";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $keywords = htmlspecialchars(strip_tags($keywords));
        $keywords = "%{$keywords}%";

        // bind
        $stmt->bindParam(1, $keywords);
        $stmt->bindParam(2, $keywords);
        $stmt->bindParam(3, $keywords);

        // execute query
        $stmt->execute();

        return $stmt;
    }

}

?>