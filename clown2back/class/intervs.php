<?php
    class Intervs
    {

        // Connection
        private $conn;

        // Table
        private $db_inter = 'intervention';
        

        // Columns
        public $id;
        public $dateHeure;
        public $id_comedien1;
        public $id_comedien2;
       
        // Db connection
        public function __construct($db)
        {
            $this->conn = $db;
        }

      
        

        public function getBuddy2($id)
        {  
            

            $stmt = $this->conn->prepare("CALL bino($id)");
                      
           
$stmt->execute();
                   
                
         
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->buddy = $dataRow['buddy'];
            $this->dateHeure = $dataRow['dateHeure'];
          
                    }
    };
;
