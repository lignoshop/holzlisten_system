<?php
class Order {
    private $conn;
    private $table_name = "orders";

    public $id;
    public $order_number;
    public $customer_name;
    public $date;
    public $status;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                 SET order_number=:order_number, 
                     customer_name=:customer_name, 
                     date=:date, 
                     status=:status";

        $stmt = $this->conn->prepare($query);

        $this->order_number = htmlspecialchars(strip_tags($this->order_number));
        $this->customer_name = htmlspecialchars(strip_tags($this->customer_name));
        $this->status = htmlspecialchars(strip_tags($this->status));

        $stmt->bindParam(":order_number", $this->order_number);
        $stmt->bindParam(":customer_name", $this->customer_name);
        $stmt->bindParam(":date", $this->date);
        $stmt->bindParam(":status", $this->status);

        return $stmt->execute();
    }
}
