<?php 

class Order extends Cart{
    protected $conn;
    public function __construct(){
        global $conn;
        $this->conn = $conn;
}

    public function create($delivery_address){
        //var_dump($this->get_cart_items());
        //var_dump($delivery_address);
        //KOD ZA DA SE VMETNE VO DVETE BAZI STAVKA 30) U NOTEPAD
        $stmt = $this->conn->prepare("INSERT INTO orders (user_id, delivery_address) VALUES (?, ?)");
        $stmt->bind_param("is",$_SESSION['user_id'], $delivery_address);
        $stmt->execute();

        $order_id = $this->conn->insert_id;

        $cart_items = $this->get_cart_items();

        $stmt = $this->conn->prepare("INSERT INTO order_items (order_id, product_id, quantity) VALUES(?, ?, ?)");
        //TUKA ovoj order_id e od ovoj $order_id linija 17 
        //SEA SO FOREACH pravime
        foreach($cart_items as $item){
        $stmt->bind_param("iis", $order_id,$item['product_id'],$item['quantity']);
        $stmt->execute();
        }
        $this->destroy_cart();
    }


    public function get_orders(){
        $user_id =$_SESSION['user_id'];
        //SQL query-upit
        $sql= "
        SELECT 
            orders.order_id,
            orders.delivery_address,
            orders.created_at,
            order_items.quantity,
            products.name,
            products.size,
            products.image,
            products.price
        FROM orders
        INNER JOIN order_items ON orders.order_id = order_items.order_id
        INNER JOIN products ON order_items.product_id = products.product_id
        WHERE orders.user_id = ?
        ";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();

        $result = $stmt->get_result();
        /*if ($result) {//MOZE I NA OVOJ NACIN A MOZE I DOLE SAMO DIREKTO SO RETURN BEZ DA PROVERUVAME
            //SPORED MENE BOLJE E DA SE PROVERE AMA AJDE NEKA GO SEA VAKA
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    
        // Inače, vrati prazan niz
        return [];
    }*/
    return $result->fetch_all(MYSQLI_ASSOC);// MISLAM DEKA GORE E BOLJE AMA AJ NEKA GO
}}
?>