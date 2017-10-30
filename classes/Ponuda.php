<?php
/**
* klasa koja iz tabele ponuda izlistava koji je tip aranzmana(npr. ljeto, hot destinacije, zimovanje...)
* Takodje, pomocu stranog kuljca u koloni drzaveLjeto_id odredjujem kojoj drzavi pripada ponuda. Ovo je specificno samo za  
* ljetovalista dok nazive drzava za ostale tipove aranzmana unosim u naslov
*/
class Ponuda extends ActiveRecord{
	
    public static $key = "id";
	public static $tabela = "ponuda";


	public static function getLjetovalista($sql)
	{
		$db = Db::getInstance();

               $res=$db->query("select * from ponuda where drzaveLjeto_id = $sql");
				$res->setFetchMode(PDO::FETCH_CLASS, get_called_class());
				$output=[];
		       
				while($row=$res->fetch()){
					$output[]=$row;
				}
				return $output;
	}


    /****************************************
     PRIKAZ LJETOVALISTA NA STRANICI ljetovalista.php
    */
	public static function ljetoPrikaz($q){
		$db = Db::getInstance();
        $res=$db->query("select * from ponuda where drzaveLjeto_id = $q order by id desc");
				$res->setFetchMode(PDO::FETCH_CLASS, get_called_class());
				$output=[];
		       
				while($row=$res->fetch()){
					$output[]=$row;
				}
				$show ="<table>
				<tr >
				<th>id</th>
				<th>Ljetovaliste</th>
				
				</tr>";
				 foreach ($output as $key => $value)
				  {

				 ?>
                <div class="container-fluid">
                	<div class="row">
                		<div class="col-md-6" ng-repeat="bend in bendovi">
    					    <div class="panel panel-default">
    						     <div class="panel-heading">
    						         <h3><?=$value->naslov;?></h3>
    						     </div><!-- panel heading -->
    						     <div class="panel-body">
    						
    									<img style="max-width: 100%;" src="../<?=$value->slika;?>" class="img-responsive img-tumbnail">
    							
    						</div><!-- body -->
    						<div class="panel-footer">
    							<a href="formaUnosLjetovanja.php?izmeni=<?=$value->id;?>"><button  class="btn btn-primary  text-left"> izmeni</button></a>
    							<button class="btn btn-primary  text-right" >obrisi</button>
    						</div><!-- footer -->
    					</div>
    				</div><!-- md 6 -->
                	</div><!-- row -->

                </div><!-- container fluid -->  

              <?php

            	}

		

    }



}

