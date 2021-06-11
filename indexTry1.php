  <?php
function test($test){
echo"<pre>";

$res=file_get_contents($test);
$data=json_decode($res,true);


  echo "Пример функции.\n";
  //echo"<br>";
 // var_dump($data);
 //print_r(array_chunk($data, 1));
 for ($i=0; $i < count($data['contacts']); $i++) { 
   # code...
 
 $user=($data['contacts'][$i]['user'])-1;
 $role=($data['users'][$user]['role'])-1;
 $permission=($data['users'][$user]['permissions'])-1;
 //print($data['contacts'][0]);
 print($data['users'][$user]['name']);
 print($data['roles'][$role]['roleName']);
 print($data['contacts'][$i]['firstName']);
 print($data['contacts'][$i]['lastName']);
 print('-');
 print($data['permissions'][$permission]['value']);
 echo"<br>";
}
}
test('json.json');
   ?>