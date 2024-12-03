CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_number VARCHAR(20) NOT NULL,
    customer_name VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    status VARCHAR(20) DEFAULT 'open'
);

CREATE TABLE positions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    position_number VARCHAR(10) NOT NULL,
    description TEXT,
    FOREIGN KEY (order_id) REFERENCES orders(id)
);

CREATE TABLE material_prices (
    id INT PRIMARY KEY AUTO_INCREMENT,
    short_code VARCHAR(10) NOT NULL UNIQUE,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    unit VARCHAR(10) NOT NULL,
    waste_percentage DECIMAL(5,2) DEFAULT 0
);
