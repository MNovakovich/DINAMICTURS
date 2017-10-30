<?php

class DrzaveLjeto extends ActiveRecord {

	public static $key = "id";
	public static $tabela = "drzaveLjeto";
	
	public function show()
	   {
	   	 ?>
	               <article  class="product">
	             
	                <a href="odmaralista.php?drzava_id=<?= $this->id; ?>"><h2><?=$this->naslov;?></h2>
	                <div  class="imgProduct">
	                <?php
	                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $this->slika).'"/>';
	                    
	                 ?>
	                   
	                 </div>
	                 
	                <p></p>
	              <p class="button">Procitaj vise &raquo;</p></a>
	            </article>
	            <?php
	      }   

         // na stranici ljetovalista.php izbacuje u select opiji drzave
	      public static function showDrzaveAdmin ()
	      {
              
	      }

/*
	public static function getLjetovalistaDrzave($id)
	{
                   
              $db =static::getInstance();
              $res = $db->query("select naslov from ponuda where id = $id");
              $output = [];
              while ($row=$res->fetch(PDO::FETCH_OBJ)) {
                       	$output[]= $row;
                       return $output;

                       }         
	  }*/




}


