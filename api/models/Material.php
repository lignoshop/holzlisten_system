<?php
class Material {
    private $conn;
    private $table_name = "material_prices";

    public $id;
    public $short_code;
    public $description;
    public $price;
    public $unit;
    public $waste_percentage;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                 SET short_code=:short_code, 
                     description=:description, 
                     price=:price, 
                     unit=:unit, 
                     waste_percentage=:waste_percentage";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":short_code", $this->short_code);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":unit", $this->unit);
        $stmt->bindParam(":waste_percentage", $this->waste_percentage);

        return $stmt->execute();
    }
}
