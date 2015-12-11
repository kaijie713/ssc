<?php
/**mongodb会默认连接本地的
 *查询返回是一个数据对象，详见mongodb的php部分api
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

 $m = new MongoClient();


  $db = $m->test;

   $col = $db->testcol;

   // $arr = array( 
   //    "title" => "MongoDB", 
   //    "description" => "database", 
   //    "likes" => 100,
   //    "url" => "http://www.w3cschool.cc/mongodb/",
   //    "by", "w3cschool.cc"
   // );
   // $col->insert($arr);


   $data = $col->find();

   var_dump($data);

   echo "<br>";
   // 迭代显示文档标题
   foreach ($data as $arr) {
      var_dump($arr);
      echo $arr["title"] . "\n";
      echo "<br>";echo "<br>";echo "<br>";echo "<br>";
   }







//mongod   --rest --port 27017

?>



