<?php

interface Hewan
{
   public function Berjalan();
   public function Makan();
   public function Bersuara();
   public function Sepeda();
}
class Monyet implements Hewan
{
   public function Berjalan()
   {
      return "Monyet merupakan salah satu dari jenis Hewan,Monyet mempunyai kemampuan untuk Berjalan<br/>";
   }

   public function Makan()
   {
      return "Monyet suka makan sejenis buah-buahan seperti pisang<br/>";
   }

   public function Bersuara()
   {
      return "Monyet bersuara <i>'uuaak...uuaak'</i><br/>";
   }
   public function Sepeda()
   {
      return "Suatu saat Monyet apabila dilatih akan bisa Berkendara seperti naik sepeda yang tidak dipunyai oleh hewan lainnya.<br/>";
   }
}
?>
<div class="kotak">
   <h3>MONYET</h3>
   <p>
      <?php
      $Monyet = new Monyet;
      echo "<b>Kemampuan yang dimiliki Monyet : </b><br/>";
      echo $Monyet->Makan();
      echo $Monyet->Berjalan();
      echo $Monyet->Bersuara();

      echo "<b>Kemampuan yang dimiliki Monyet jika dilatih : </b><br/>";
      echo $Monyet->Sepeda();
      ?>