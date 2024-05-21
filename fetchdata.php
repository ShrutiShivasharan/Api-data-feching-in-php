<?php 

$url = 'https://dummyjson.com/users';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if($response){
	// echo $response;
	$data = json_decode($response, true);

	// echo "<ul>";
	// foreach ($data['users'] as $user) {
	// 	echo "<li>Name : ".$user['firstName']."</li>";
	// 	echo "<li>Email : ".$user['email']."</li>";
	// }
	// echo "</ul>";

	echo '<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Phone</th>
		    </tr>
		  </thead>
		  <tbody>';
	foreach ($data['users'] as $user) {
		echo '<tr>
		      <th>'.$user['id'].'</th>
		      <td>'.$user['firstName'].'</td>
		      <td>'.$user['lastName'].'</td>
		      <td>'.$user['email'].'</td>
		      <td>'.$user['phone'].'</td>
		      </tr>';
	}
	echo '</tbody>
	</table>';
}
curl_close($ch);
?>