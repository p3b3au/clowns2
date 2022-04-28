<?php
    class Clowns
    {

        // Connection
        private $conn;

        // Table
        private $db_table = 'comedien';

        // Columns
        public $id;
        public $pseudo;
        public $actif;
        public $sexeHomme;
        public $musicien;
        public $couleur;
        public $pic;
       
        // Db connection
        public function __construct($db)
        {
            $this->conn = $db;
        }

        // GET ALL
        public function getClowns()
        {
            $sqlQuery = "SELECT id, pseudo, actif, sexeHomme, musicien, couleur, pic FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        /*      public function createClown()
              {
                  $sqlQuery = "INSERT INTO
                               $this->db_table
                          SET
                      pseudo = :title,
                      director = :director,
                      year_release = :year_release,
                      country = :country,
                      photo = :photo,
                      child = :child,
                      summary = :summary"
                 ;

                  $stmt = $this->conn->prepare($sqlQuery);

                  // sanitize
                  $this->title=htmlspecialchars(strip_tags($this->title));
                  $this->director=htmlspecialchars(strip_tags($this->director));
                  $this->year_release=htmlspecialchars(strip_tags($this->year_release));
                  $this->country=htmlspecialchars(strip_tags($this->country));
                  $this->photo=(strip_tags($this->photo));
                  $this->child=htmlspecialchars(strip_tags($this->child));
                  $this->summary=htmlspecialchars(strip_tags($this->summary));

                  // bind data
                  $stmt->bindParam(':title', $this->title);
                  $stmt->bindParam(':director', $this->director);
                  $stmt->bindParam(':year_release', $this->year_release);
                  $stmt->bindParam(':country', $this->country);
                  $stmt->bindParam(':photo', $this->photo);
                  $stmt->bindParam(':child', $this->child);
                  $stmt->bindParam(':summary', $this->summary);

                  if ($stmt->execute()) {
                      return true;
                  }
                  return false;
              } */

        // UPDATE
        public function getSingleClown($id)
        {
          

            $stmt = $this->conn->prepare("SELECT
            *
        FROM
            $this->db_table
        WHERE 
           id = :id");

            

            $stmt->execute([
                ":id"=>$id
            ]);

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id = $dataRow['id'];
            $this->pseudo = $dataRow['pseudo'];
            $this->actif = $dataRow['actif'];
            $this->sexeHomme = $dataRow['sexeHomme'];
            $this->musicien = $dataRow['musicien'];
            $this->couleur = $dataRow['couleur'];
            $this->pic = $dataRow['pic'];
        }
    }

/*         // UPDATE
        public function updateFilm()
        {
            $sqlQuery = "UPDATE
                    $this->db_table
                    SET
                    title = :title,
                    director = :director,
                    year_release = :year_release,
                    country = :country,
                    photo = :photo,
                    child = :child,
                    summary = :summary
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->title=htmlspecialchars(strip_tags($this->title));
            $this->director=htmlspecialchars(strip_tags($this->director));
            $this->year_release=htmlspecialchars(strip_tags($this->year_release));
            $this->country=htmlspecialchars(strip_tags($this->country));
            $this->photo=(strip_tags($this->photo));
            $this->child=htmlspecialchars(strip_tags($this->child));
            $this->summary=htmlspecialchars(strip_tags($this->summary));
            $this->id=htmlspecialchars(strip_tags($this->id));

        
            // bind data
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':director', $this->director);
            $stmt->bindParam(':year_release', $this->year_release);
            $stmt->bindParam(':country', $this->country);
            $stmt->bindParam(':photo', $this->photo);
            $stmt->bindParam(':child', $this->child);
            $stmt->bindParam(':summary', $this->summary);
            $stmt->bindParam(':id', $this->id);
        
            if ($stmt->execute()) {
                return true;
            }
            return false;
        }

        // DELETE
        public function deleteFilm()
        {
            $sqlQuery = "DELETE FROM $this->db_table WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if ($stmt->execute()) {
                return true;
            }
            return false;
        }
    }
?> */

