<?php 
error_reporting(0);
if($_GET["style"] == "web"){ 
?>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

<script>
	$( document ).ready(function() {
	    $(".full_msg_parent_text").parent().css({'margin-left':'20px', 'background-color':'#eee'})
	});
</script>

<style type="text/css">
	.post-auction-message-indent{
		margin-left: 50px;
	}
	ul{
		list-style-type: none;
	}
	li{
		margin-bottom: 20px;
		border-bottom: 1px solid black;
	}
</style>
<?php } ?>



<?php

$cats = json_decode('[{"id":1,"shipping":true,"name":"Antiques","children":[]},{"id":72061,"shipping":true,"name":"Art","children":[{"id":72064,"shipping":true,"name":"Paintings","children":[]},{"id":72062,"shipping":true,"name":"Photography","children":[]},{"id":72063,"shipping":true,"name":"Posters","children":[]},{"id":72065,"shipping":true,"name":"Other","children":[]}]},{"id":3,"shipping":true,"name":"Baby","children":[{"id":22,"shipping":true,"name":"Clothes","children":[]},{"id":128,"shipping":true,"name":"Diapers","children":[]},{"id":13362,"shipping":true,"name":"Gear","children":[]},{"id":23,"shipping":true,"name":"Toys","children":[]},{"id":9432,"shipping":true,"name":"Other","children":[]}]},{"id":4,"shipping":true,"name":"Books","children":[{"id":63,"shipping":true,"name":"Children","children":[]},{"id":64,"shipping":true,"name":"Cookbooks","children":[]},{"id":24,"shipping":true,"name":"Fiction","children":[]},{"id":25,"shipping":true,"name":"Nonfiction","children":[]},{"id":26,"shipping":true,"name":"Textbooks \u0026 Education","children":[]},{"id":13197,"shipping":true,"name":"Other","children":[]}]},{"id":5,"shipping":true,"name":"Cameras","children":[{"id":4067,"shipping":true,"name":"Accessories","children":[]},{"id":628,"shipping":true,"name":"Camcorders","children":[]},{"id":1452,"shipping":true,"name":"Digital Cameras","children":[]},{"id":279,"shipping":true,"name":"Memory \u0026 Storage","children":[]},{"id":71759,"shipping":true,"name":"Other","children":[]}]},{"id":6,"shipping":true,"name":"Cars, Vehicles \u0026 Parts","children":[{"id":5253,"shipping":true,"name":"Accessories","children":[]},{"id":6105,"shipping":true,"name":"Other","children":[]}]},{"id":7,"shipping":true,"name":"Cell Phones","children":[{"id":27,"shipping":true,"name":"Accessories","children":[]},{"id":1205,"shipping":true,"name":"Cases","children":[]},{"id":136,"shipping":true,"name":"Phones","children":[]},{"id":35244,"shipping":true,"name":"Other","children":[]}]},{"id":8,"shipping":true,"name":"Clothing, Shoes \u0026 Accessories","children":[{"id":28,"shipping":true,"name":"Boys","children":[]},{"id":29,"shipping":true,"name":"Girls","children":[]},{"id":809,"shipping":true,"name":"Handbags","children":[]},{"id":30,"shipping":true,"name":"Men","children":[{"id":72094,"shipping":true,"name":"Bottoms","children":[]},{"id":72095,"shipping":true,"name":"Outerwear","children":[]},{"id":72093,"shipping":true,"name":"Tops","children":[]},{"id":72096,"shipping":true,"name":"Other","children":[]}]},{"id":107,"shipping":true,"name":"Shoes","children":[]},{"id":278,"shipping":true,"name":"Wallets \u0026 Accessories","children":[]},{"id":31,"shipping":true,"name":"Women","children":[{"id":72090,"shipping":true,"name":"Bottoms","children":[]},{"id":72091,"shipping":true,"name":"Outerwear","children":[]},{"id":72089,"shipping":true,"name":"Tops","children":[]},{"id":72092,"shipping":true,"name":"Other","children":[]}]},{"id":16960,"shipping":true,"name":"Other","children":[]}]},{"id":9,"shipping":true,"name":"Collectibles","children":[{"id":32,"shipping":true,"name":"Coins","children":[]},{"id":33,"shipping":true,"name":"Comics","children":[]},{"id":52,"shipping":true,"name":"Stamps","children":[]},{"id":72086,"shipping":true,"name":"Toys","children":[]},{"id":34,"shipping":true,"name":"Trading Cards","children":[{"id":72087,"shipping":true,"name":"Gaming","children":[]},{"id":75,"shipping":true,"name":"Sports","children":[]},{"id":72088,"shipping":true,"name":"Other","children":[]}]},{"id":7862,"shipping":true,"name":"Other","children":[]}]},{"id":10,"shipping":true,"name":"Computers \u0026 Networking","children":[{"id":35,"shipping":true,"name":"Components","children":[]},{"id":36,"shipping":true,"name":"Desktops \u0026 Laptops","children":[]},{"id":37,"shipping":true,"name":"Drives \u0026 Storage","children":[]},{"id":38,"shipping":true,"name":"Keyboards \u0026 Mice","children":[]},{"id":39,"shipping":true,"name":"Software","children":[]},{"id":23403,"shipping":true,"name":"Other","children":[]}]},{"id":2,"shipping":true,"name":"Crafts","children":[{"id":48,"shipping":true,"name":"Beading \u0026 Jewelry Supplies","children":[]},{"id":1237,"shipping":true,"name":"Crochet","children":[]},{"id":57,"shipping":true,"name":"Knitting","children":[]},{"id":50,"shipping":true,"name":"Needlecraft","children":[]},{"id":5450,"shipping":true,"name":"Needlepoint","children":[]},{"id":49,"shipping":true,"name":"Scrapbooking \u0026 Paper Crafts","children":[]},{"id":51,"shipping":true,"name":"Sewing","children":[]},{"id":189,"shipping":true,"name":"Stickers","children":[]},{"id":8753,"shipping":true,"name":"Other","children":[]}]},{"id":12,"shipping":true,"name":"Electronics","children":[{"id":164,"shipping":true,"name":"DVD \u0026 Blu-ray Players","children":[]},{"id":680,"shipping":true,"name":"Music Players \u0026 Accessories","children":[]},{"id":1334,"shipping":true,"name":"TVs","children":[]},{"id":11815,"shipping":true,"name":"Other","children":[]}]},{"id":13,"shipping":true,"name":"Health \u0026 Beauty","children":[{"id":67,"shipping":true,"name":"Fragrances","children":[]},{"id":455,"shipping":true,"name":"Hair","children":[{"id":72083,"shipping":true,"name":"Products","children":[]},{"id":72084,"shipping":true,"name":"Tools \u0026 Accessories","children":[]},{"id":72085,"shipping":true,"name":"Other","children":[]}]},{"id":68,"shipping":true,"name":"Healthcare Goods","children":[]},{"id":66,"shipping":true,"name":"Makeup","children":[{"id":72077,"shipping":true,"name":"Eyes","children":[]},{"id":72078,"shipping":true,"name":"Face","children":[]},{"id":72079,"shipping":true,"name":"Lips","children":[]},{"id":72080,"shipping":true,"name":"Nails","children":[]},{"id":72081,"shipping":true,"name":"Tools \u0026 Accessories","children":[]},{"id":72082,"shipping":true,"name":"Other","children":[]}]},{"id":69,"shipping":true,"name":"Skincare, Bath \u0026 Body","children":[]},{"id":9839,"shipping":true,"name":"Other","children":[]}]},{"id":71,"shipping":true,"name":"Holiday \u0026 Seasonal","children":[{"id":523,"shipping":true,"name":"Birthday","children":[]},{"id":140,"shipping":true,"name":"Christmas","children":[]},{"id":114,"shipping":true,"name":"Halloween","children":[]},{"id":1909,"shipping":true,"name":"Wedding","children":[]},{"id":30920,"shipping":true,"name":"Other","children":[]}]},{"id":14,"shipping":true,"name":"Home \u0026 Garden","children":[{"id":432,"shipping":true,"name":"Decor","children":[]},{"id":42,"shipping":true,"name":"Furniture","children":[]},{"id":7178,"shipping":true,"name":"Gardening","children":[{"id":72075,"shipping":true,"name":"Live Plants","children":[]},{"id":60,"shipping":true,"name":"Seeds \u0026 Bulbs","children":[]},{"id":59,"shipping":true,"name":"Tools","children":[]},{"id":72076,"shipping":true,"name":"Other","children":[]}]},{"id":70,"shipping":true,"name":"Kitchen","children":[]},{"id":58,"shipping":true,"name":"Office Supplies","children":[]},{"id":24216,"shipping":true,"name":"Other","children":[]}]},{"id":15,"shipping":true,"name":"Jewelry \u0026 Watches","children":[{"id":333,"shipping":true,"name":"Body","children":[]},{"id":56,"shipping":true,"name":"Bracelets","children":[]},{"id":365,"shipping":true,"name":"Charms","children":[]},{"id":54,"shipping":true,"name":"Earrings","children":[]},{"id":53,"shipping":true,"name":"Necklaces","children":[]},{"id":55,"shipping":true,"name":"Rings","children":[]},{"id":752,"shipping":true,"name":"Sets","children":[]},{"id":81,"shipping":true,"name":"Watches","children":[]},{"id":2617,"shipping":true,"name":"Other","children":[]}]},{"id":11,"shipping":true,"name":"Movies \u0026 TV Shows","children":[{"id":47,"shipping":true,"name":"Blu-ray","children":[]},{"id":40,"shipping":true,"name":"DVD","children":[]},{"id":41,"shipping":true,"name":"VHS","children":[]},{"id":18327,"shipping":true,"name":"Other","children":[]}]},{"id":16,"shipping":true,"name":"Music \u0026 Instruments","children":[{"id":73,"shipping":true,"name":"CDs","children":[]},{"id":4226,"shipping":true,"name":"Instruments \u0026 Accessories","children":[]},{"id":74,"shipping":true,"name":"Records","children":[]},{"id":8115,"shipping":true,"name":"Other","children":[]}]},{"id":17,"shipping":true,"name":"Pet","children":[{"id":78,"shipping":true,"name":"Bird","children":[]},{"id":77,"shipping":true,"name":"Cat","children":[]},{"id":76,"shipping":true,"name":"Dog","children":[]},{"id":79,"shipping":true,"name":"Fish","children":[]},{"id":80,"shipping":true,"name":"Reptile","children":[]},{"id":21939,"shipping":true,"name":"Other","children":[]}]},{"id":18,"shipping":true,"name":"Sporting Goods","children":[{"id":895,"shipping":true,"name":"Baseball","children":[]},{"id":405,"shipping":true,"name":"Basketball","children":[]},{"id":1018,"shipping":true,"name":"Camping \u0026 Hunting","children":[]},{"id":10839,"shipping":true,"name":"Fishing","children":[]},{"id":1034,"shipping":true,"name":"Fitness","children":[]},{"id":156,"shipping":true,"name":"Football","children":[]},{"id":219,"shipping":true,"name":"Golf","children":[]},{"id":9458,"shipping":true,"name":"Other","children":[]}]},{"id":19,"shipping":true,"name":"Toys \u0026 Hobbies","children":[{"id":36404,"shipping":true,"name":"Building Toys","children":[]},{"id":170,"shipping":true,"name":"Cards","children":[]},{"id":706,"shipping":true,"name":"Cars \u0026 Trains","children":[]},{"id":397,"shipping":true,"name":"Dolls \u0026 Stuffed Animals","children":[]},{"id":287,"shipping":true,"name":"Games","children":[]},{"id":5428,"shipping":true,"name":"Other","children":[]}]},{"id":20,"shipping":true,"name":"Video Games \u0026 Consoles","children":[{"id":43,"shipping":true,"name":"Accessories","children":[]},{"id":45,"shipping":true,"name":"Consoles","children":[{"id":72068,"shipping":true,"name":"Nintendo","children":[]},{"id":72067,"shipping":true,"name":"PlayStation","children":[]},{"id":72066,"shipping":true,"name":"Xbox","children":[]},{"id":72069,"shipping":true,"name":"Other","children":[]}]},{"id":44,"shipping":true,"name":"Games","children":[{"id":72072,"shipping":true,"name":"Nintendo","children":[]},{"id":72073,"shipping":true,"name":"PC","children":[]},{"id":72071,"shipping":true,"name":"PlayStation","children":[]},{"id":72070,"shipping":true,"name":"Xbox","children":[]},{"id":72074,"shipping":true,"name":"Other","children":[]}]},{"id":82,"shipping":false,"name":"Prepaid Cards \u0026 Codes","children":[]},{"id":17734,"shipping":true,"name":"Other","children":[]}]},{"id":21,"shipping":true,"name":"Other Stuff","children":[{"id":72097,"shipping":false,"name":"Bitcoin","children":[]},{"id":46,"shipping":true,"name":"Gift Cards","children":[]},{"id":72,"shipping":false,"name":"Rewards Points","children":[]},{"id":1357,"shipping":true,"name":"Other","children":[]}]}]', 1);


$ch = curl_init();
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
$cookie= dirname(__FILE__)."/cookie.txt";
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);

switch ($_GET["action"]) {
	case 'login':
		login($ch, $_GET["user"], $_GET["pass"]);
		break;
		
	case 'geo':
		file_put_contents("log.txt", "asd");
		break;

	case 'detect_category':
		$info["id"] = detect_category(explode(">", $_POST["category"]), $cats);
		echo json_encode($info);
		break;

	case 'notify':
		echo json_encode(jsonNotify(getNotifyRaw($ch)));
		break;

	case 'list':
		

		//$raw_cat =  explode(">", "Home & Garden>Home Décor>Pillows");
		//print_r(detect_category($raw_cat ,$cats));

		//exit;
		$ebayinfo = json_decode($_POST["ebayinfo"]);

		//foreach ($ebayinfo->categorys as $category) {
			//$raw_cat =  explode(">", $category);
			//echo detect_cat($raw_cat ,$cats, 0);
		//}

		//print_r($ebayinfo);

		//echo $ebayinfo->location;

		if($ebayinfo->choosed_category == ""){
			$info["error"] = true;
			echo json_encode($info);
			exit;
		}

		$geoinfo = getGeocode($ebayinfo->location);



		$result = doListItem($ch, array(
			"title" => $ebayinfo->title,
			"cat_id" => $ebayinfo->choosed_category,
			"description" => $ebayinfo->mota,
			"price" => (float)$ebayinfo->price + (float)$ebayinfo->profit,
			"location_long" => $ebayinfo->location,
			"location_short" => $geoinfo->address_components[count($geoinfo->address_components) - 1]->short_name,
			"latitude" => $geoinfo->geometry->location->lat,
			"longitude" => $geoinfo->geometry->location->lng,
			"images"	=> $ebayinfo->images
		));

		try{
			$info["test"] = $result;
			if($result->redirect_url != null){
				preg_match("/https:\/\/www.listia.com\/auction\/(.*?)-/", $result->redirect_url, $matches);
				try{
					if($matches[1] == "" || $matches[1] == null)
						$info["id_listia"] = $result->redirect_url;
					else
						$info["id_listia"] = $matches[1];
				}catch(Exception $e){
					$info["id_listia"] = $result->redirect_url;
				}
				$info["error"] = false;
			}
		}catch(Exception $e){
			$info["error"] = true;
		}
			
		echo json_encode($info);
		
		break;


	case 'chucnang':
		$info = getInfo($ch);
		if(!$info["error"]){
			echo "<h1 style='text-align:center;'><a href='listia_post.php?action=chucnang' style='color:red;'>.::Automatic Listia Home::.</a></h1>";
			echo "<h2><img src='".$info["avatar"]."' />Tài khoản : <span style='color:green;'><a href='https://listia.com/profile/".$info["profile_id"]."'>".$info["username"]."</a></span></h2>";
			echo "<h2><a href='listia_post.php?action=chucnang&is=inboxlist&page=1&style=web'>".$info["inbox"]."</a></h2>";
			echo "<h2 style='color:blue;'>Xem Notification(no-id) hoặc Auction(au-id)</h2>";
			echo '<form action="listia_post.php" method="get">
				<input type="hidden" name="action" value="chucnang">
				<input type="hidden" name="is" value="auction_detail">
				<input type="hidden" name="style" value="web">
				<input type="text" name="id" >
				<input type="submit" value="Xem">
			</form>';
			echo "<h2 style='color:blue;'>Gửi tin nhắn tới User</h2>";
			echo '<form action="listia_post.php" method="get">
				<input type="hidden" name="action" value="chucnang">
				<input type="hidden" name="is" value="send_message_user">
				<input type="hidden" name="style" value="web">
				User ID : <input type="text" name="id" >
				<input type="submit" value="Tiếp">
			</form>';

			switch ($_GET['is']) {
				case 'inboxlist':
					echo "<h2 style='text-align:center;color:blue;'>Danh sách tin nhắn trang ".$_GET["page"]."</h2>";
					$inboxlist = inboxPage($ch, (int)$_GET["page"])["messages"];
					echo "<table>";
					echo "<tr>";
						echo "<th>Title</th>";
						echo "<th>From</th>";
					echo "<tr>";
					foreach ($inboxlist as $item) {
						echo "<tr>";

						echo "<td><a href='listia_post.php?action=chucnang&style=web&is=message_detail&id=".$item->id."' style='color:".(($item->read == 0)?'blue':'black').";'>".$item->title."</a></td>";

						echo "<td>".$item->from."</td>";

						echo "<tr>";
					}
					echo "</table>";

					break;

				case 'message_detail':
					echo "<h2 style='text-align:center;color:blue;'>Chi tiết tin nhắn</h2>";
					$mess_detail = inboxMessageDetail($ch, $_GET["id"]);

					echo $mess_detail["msg_date"][0];
					echo $mess_detail["full_msg_text"];

					echo '
						<form action="listia_post.php?action=chucnang&is=send_message" method="POST">
							<textarea rows="4" cols="50" name="message_body"></textarea>
							<input type="hidden" name="authenticity_token" value="'.$mess_detail["authenticity_token"].'">
							<input type="hidden" name="conversation_id" id="conversation_id" value="'.$mess_detail["conversation_id"].'">
							<input type="hidden" name="parent_id" id="message_parent_id" value="'.$mess_detail["message_parent_id"].'">
							<input type="hidden" name="message_type" id="message_message_type" value="'.$mess_detail["message_message_type"].'">
							<input type="submit" value="Trả lời">
						</form>
					';
					break;

				case 'send_message':
					echo "<h2 style='text-align:center;color:blue;'>Gửi tin nhắn</h2>";
					sendMessage($ch, array(
						"authenticity_token" => $_POST["authenticity_token"],
						"mess_body" => $_POST["message_body"],
						"conversation_id" => $_POST["conversation_id"],
						"parent_id" => $_POST["parent_id"],
						"message_type" => $_POST["message_type"]
					));
					echo "Đã send";
					break;

				case 'auction_detail':
					echo "<h2 style='text-align:center;color:blue;'>Chi tiết Auction</h2>";
					$type_id = explode("-", $_GET["id"]);
					if($type_id[0] == "no")
						$auction_info = getAuctionFromNotify($ch, array("notification" => $type_id[1]));
					else
						$auction_info = getAuctionFromNotify($ch, array("auction" => $type_id[1]));

					echo "<h3 style='text-align:center;'>".$auction_info["title"]."</h3>";
					echo '<h4>Địa chỉ nhận hàng<h4>';
					echo '<div style="margin-left:20px;background-color:#eee;width:20%;">'.$auction_info["address_confirmation"].'</div>';
					echo '<h4>Các tin nhắn<h4>';
					echo '<ul>';
					foreach ($auction_info["message_log"] as $mess) {
						echo $mess;
					}
					echo '</ul>';
					echo '<h4>Số người bid<h4>';
					echo $auction_info["div_bid"];

					//print_r($auction_info["form_action"]);
					echo '
						<form action="listia_post.php?action=chucnang&is=send_message_contact" method="POST">
							<input type="hidden" name="action_link" value="'.$auction_info["form_action"].'">
							<textarea rows="4" cols="50" name="message_body"></textarea>
					';

					foreach ($auction_info["input_form"] as $key => $value) {
						echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
					}
					echo '
							<input type="submit" value="Trả lời">
						</form>
					';

					break;

				case 'send_message_contact':
					echo "<h2 style='text-align:center;color:blue;'>Gửi tin nhắn</h2>";
					sendMessageContact($ch, array(
						"authenticity_token" => $_POST["authenticity_token"],
						"mess_body" => $_POST["message_body"],
						"parent_id" => $_POST["parent_id"],
						"message_type" => $_POST["type"],
						"subject" => $_POST["subject"],
						"div_id" => $_POST["div_id"],
						"receiver" => $_POST["receiver"],
						"recipient" => $_POST["recipient"]
					), $_POST["action_link"]);
					echo "Đã send<br />";
					echo "<a href='".$_SERVER['HTTP_REFERER']."'>Quay về</a>";
					break;
				
				case 'send_message_user':

					if($_GET["process"] != "to"){
						$contact_info = getContactUser($ch, $_GET["id"]);
						echo "<h2 style='color:blue;'>Gửi tin nhắn tới <span style='color:orange;'>".$contact_info["user"]."</span></h2>";
						echo '<form action="listia_post.php?action=chucnang&is=send_message_user&style=web&process=to" method="post">
							<input type="hidden" name="id" value="'.$_GET["id"].'">
							<input type="hidden" name="authenticity_token" value="'.$contact_info["input_form"]["authenticity_token"].'">
							<input type="hidden" name="message_type" value="'.$contact_info["input_form"]["message[message_type]"].'">
							<input type="hidden" name="user" value="'.$contact_info["user"].'">
							<textarea rows="4" cols="50" name="message_body"></textarea>
							<input type="submit" value="Gửi">
						</form>';
					}else{
						sendMessageUser($ch, array(
							"authenticity_token" => $_POST["authenticity_token"],
							"mess_body" => $_POST["message_body"],
							"message_type" => $_POST["message_type"],
							"id" => $_POST["id"],
						));
						echo 'Đã gửi cho'.$_POST["user"];
					}
					
					break;
			}


		}else{
			echo "<h2 style='color:red;'>Chưa đăng nhập</h2>";
		}

		//print_r(inboxPage($ch, 2));

		break;

	default:
		//echo "{'username' : 'cuong077', 'avatar':'noavatar'}";
		echo json_encode(getInfo($ch));
		break;
}


//print_r(getIDImageBeforeList($ch, getTokenDoList($ch)["token"], array("concept.jpg")));

//login($ch);

//print_r(getGeocode("China"));

//print_r(getTokenDoList($ch));

//print_r(file_get_contents("https://d3d71ba2asa5oz.cloudfront.net/12033963/images/7777777-r005130067_089__1.jpg"));

//echo basename("7777777-r005130067_089__1.jpg");
/*
print_r(doListItem($ch, array(
	"title" => "Sua trang da",
	"cat_id" => "1357",
	"description" => "Welcome to my listia!",
	"price" => "5.99",
	"location_long" => "United States",
	"location_short" => "US",
	"latitude" => "37.09024",
	"longitude" => "-95.71289100000001",
	"images"	=> array("https://i.ebayimg.com/images/g/ao4AAOSwoFVagyYy/s-l500.jpg", "https://d3d71ba2asa5oz.cloudfront.net/12033963/images/m000073-r001130062_183__1.jpg")
)));
*/


//echo (int)null;

function getContactUser($ch, $id){
	$url = "https://www.listia.com/profile/contact/".$id;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	try {
		$dom = new DOMDocument();
		$dom->loadHTML($response);


		$result = array();

		$xpath = new DOMXpath($dom);

		if($xpath->query("*//form[@id = 'new_message']/input")->length){
			$input_forms = $xpath->query("*//form[@id = 'new_message']/input");

			foreach ($input_forms as $input) {
				$result["input_form"][$input->getAttribute("name")] = $input->getAttribute("value");
			}
		}

		if($xpath->query("//div[@class = 'title']/span[@class = 'colored']")->length){
			$result["user"] = $xpath->query("//div[@class = 'title']/span[@class = 'colored']")[0]->nodeValue;
		}
		
	}catch (Exception $e) {

	    $result["error"] = true;

	}

	return $result;
}

function sendMessageUser($ch, $data){

	$postinfo = "utf8=%E2%9C%93&authenticity_token=".urlencode($data["authenticity_token"])."&message%5Bbody%5D=".urlencode($data["mess_body"])."&message%5Bmessage_type%5D=".$data["message_type"]."&commit=Send";

	curl_setopt($ch, CURLOPT_URL, "https://www.listia.com/profile/contact/".$data["id"]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
	$html = curl_exec($ch);
}

function getAuctionFromNotify($ch, $list_id = array()){
	if($list_id["notification"] != "")
		$url = "https://www.listia.com/notifications/".$list_id["notification"];
	else
		$url = "https://www.listia.com/auction/".$list_id["auction"];
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	try {
		$dom = new DOMDocument();
		$dom->loadHTML($response);


		$result = array();

		$xpath = new DOMXpath($dom);

		if($xpath->query("//title")->length){
			$title = $xpath->query("//title")[0]->nodeValue;
			$result["title"] = $title;
		}
		

		if($xpath->query("//div[@class = 'address_confirmation_bubble']")->length){
			$address_confirmation_bubble = $xpath->query("//div[@class = 'address_confirmation_bubble']");
			if($address_confirmation_bubble){
				$maddress_confirmation_bubble_html = $dom->saveHTML($address_confirmation_bubble[0]);
				$result["address_confirmation"] = $maddress_confirmation_bubble_html;
			}else{
				$result["address_confirmation"] = "";
			}
		}

		if($xpath->query("//div[@class = 'message-log']/ul[@class = 'comments']/li")->length){
			$message_log = $xpath->query("//div[@class = 'message-log']/ul[@class = 'comments']/li");

			foreach ($message_log as $mess) {
				$result["message_log"][] = $dom->saveHTML($mess);
			}
		}

		if($xpath->query("*//form[@id = 'auction-agent-form-email-form-2']/input")->length){
			$input_forms = $xpath->query("*//form[@id = 'auction-agent-form-email-form-2']/input");

			foreach ($input_forms as $input) {
				$result["input_form"][$input->getAttribute("name")] = $input->getAttribute("value");
			}
			$result["input_form"]["subject"] = $xpath->query("//input[@id = 'subject']")[0]->getAttribute("value");
		}
		
		if($xpath->query("//form[@id = 'auction-agent-form-email-form-2']")->length){
			$form_action = $xpath->query("//form[@id = 'auction-agent-form-email-form-2']")[0]->getAttribute("action");
			$result["form_action"] = $form_action ;
		}

		if($xpath->query("//div[@id = 'bid-history-list']")->length){
			$div_bid = $dom->saveHTML($xpath->query("//div[@id = 'bid-history-list']")[0]);
			$result["div_bid"] = $div_bid ;
		}

		
	}catch (Exception $e) {

	    $result["error"] = true;

	}

	return $result;
}

function sendMessageContact($ch, $data, $action_link){

	$postinfo = "utf8=%E2%9C%93&authenticity_token=".urlencode($data["authenticity_token"])."&message=".urlencode($data["mess_body"])."&parent_id=".$data["parent_id"]."&type=".$data["message_type"]."&subject=".urlencode($data["subject"])."&div_id=".$data["div_id"]."&receiver=".urlencode($data["receiver"])."&recipient=".urlencode($data["recipient"])."&commit=Send+Email";
	curl_setopt($ch, CURLOPT_URL, "https://www.listia.com".$action_link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
	curl_setopt($ch, CURLOPT_HTTPHEADER , array(
	    "X-CSRF-Token: ".$data["authenticity_token"],
		"X-Requested-With: XMLHttpRequest"
	));
	$html = curl_exec($ch);
}

function sendMessage($ch, $data){

	$postinfo = "utf8=%E2%9C%93&authenticity_token=".urlencode($data["authenticity_token"])."&message%5Bbody%5D=".urlencode($data["mess_body"])."&conversation_id=".$data["conversation_id"]."&message%5Bparent_id%5D=".$data["parent_id"]."&message%5Bmessage_type%5D=".$data["message_type"]."&commit=Send+Reply";

	curl_setopt($ch, CURLOPT_URL, "https://www.listia.com/messages");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
	$html = curl_exec($ch);
}

function inboxMessageDetail($ch, $id){
	$url = "https://www.listia.com/account/message/".$id;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	try {
		$dom = new DOMDocument();
		$dom->loadHTML($response);


		$result = array();

		$xpath = new DOMXpath($dom);

		$full_msg_date = $xpath->query("*//span[@class = 'full_msg_date']");

		foreach ($full_msg_date as $msg) {
			$result["msg_date"][] = $dom->saveHTML($msg);
		}
		

		$full_msg_text = $xpath->query("//div[@class = 'full_msg_text']");
		$full_msg_text_html = $dom->saveHTML($full_msg_text[0]);

		$result["full_msg_text"] = $full_msg_text_html;
		
		$authenticity_token = $xpath->query("//form[@id = 'new_message']/input[@name = 'authenticity_token']")[0]->getAttribute("value");
		
		$result["authenticity_token"] = $authenticity_token;

		$conversation_id = $xpath->query("//form[@id = 'new_message']/input[@name = 'conversation_id']")[0]->getAttribute("value");

		$result["conversation_id"] = $conversation_id;

		$message_parent_id = $xpath->query("//form[@id = 'new_message']/input[@name = 'message[parent_id]']")[0]->getAttribute("value");

		$result["message_parent_id"] = $message_parent_id;

		$message_message_type = $xpath->query("//form[@id = 'new_message']/input[@name = 'message[message_type]']")[0]->getAttribute("value");

		$result["message_message_type"] = $message_message_type;

		$result["error"] = false;

	}catch (Exception $e) {

	    $result["error"] = true;

	}
	return $result;
}


function inboxPage($ch, $page = 1){
	$url = "https://www.listia.com/account/inbox?page=".$page;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	try {
		$dom = new DOMDocument();
		$dom->loadHTML($response);


		$result = array();

		$xpath = new DOMXpath($dom);

		$list_message_1 = $xpath->query("*//form[@id = 'message_form']/div[@onmouseover]");

		$list_message_2 = array();


		foreach ($list_message_1 as $mess) {
			
			$mess_class = new Message();

			$mess_class->title = trim(getElementByClass($mess, "div", "msg_subject")->nodeValue);

			$mess_class->from = getElementByClass($mess, "span", "msg_from")->nodeValue;

			$mess_class->id = str_replace("/account/message/", "", getElementByClass($mess, "span", "msg_subject")->getElementsByTagName("a")[0]->getAttribute("href"));

			if((int)(getElementByClass($mess, "div", "msg_subject")->getElementsByTagName("b")->length) > 0)
				$mess_class->read = 0;
			else
				$mess_class->read = 1;
				
			$list_message_2[] = $mess_class;
		}

		$result["messages"] = $list_message_2;

		$result["error"] = false;

	}catch (Exception $e) {

	    $result["error"] = true;

	}
	return $result;
}


function getInfo($ch){
	$url = "https://www.listia.com";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	try {
		$dom = new DOMDocument();
		$dom->loadHTML($response);


		$result = array();

		if(!$dom->getElementById("sub_menu_your_auctions")){
			$result["error"] = false;
			return $result;
		}
		
		$list_a_list = $dom->getElementById("sub_menu_your_auctions")->getElementsByTagName("a");

		
		foreach ($list_a_list as $va) {

			if($va->getAttribute("href") == "/account/auctions_listed"){
				$result["listed"] = $va->nodeValue;
				break;
			}

		}


		$list_a_mess = $dom->getElementById("sub_menu_msgs")->getElementsByTagName("a");

		
		foreach ($list_a_mess as $va) {
			if($va->getAttribute("href") == "/account/inbox"){
				$result["inbox"] = $va->nodeValue;
				break;
			}
		}

		
		$result["username"] = getElementByClass($dom, "a", "lt-user-login")->nodeValue;

		$result["profile_id"] = str_replace("/profile/", "", getElementByClass($dom, "a", "lt-user-login")->getAttribute("href"));

		$result["avatar"] = getElementByClass($dom, "div", "avatar")->getElementsByTagName("img")[0]->getAttribute("src");
		


		$result["error"] = false;

	}catch (Exception $e) {

	    $result["error"] = true;

	}

	return $result;
}



function jsonNotify($notify_raw){
	$dom = new DOMDocument();
	$dom->loadHTML($notify_raw);
	$arr = array();
	foreach($dom->getElementsByTagName("li") as $li){
		$temp_title = getElementByClass($li, "span", "notification-body");

		$temp_link = getElementByClass($li, "a", "notification-linker");
		
		$arr[] = array(
			"title" => $temp_title->textContent,
			"id"	=> str_replace("/notifications/", "", $temp_link->getAttribute("href"))
		);
		
	}
	return $arr;
}


function getNotifyRaw($ch, $page = 0){
	$url = "https://www.listia.com/notifications.json".(($page != 0)?("?page=".$page):"");
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	$temp = json_decode($response)->content;

	if((int)json_decode($response)->next_page != 0)
		$temp .= getNotifyRaw($ch, (int)json_decode($response)->next_page);

	return $temp;
}


function login($ch, $user, $password){
	curl_setopt($ch, CURLOPT_URL, "https://www.listia.com/login");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	$dom = new DOMDocument();
	$dom->loadHTML($response);

	foreach ($dom->getElementsByTagName('input') as $link) 
	{
	    if ($link->getAttribute('name') == 'authenticity_token') {
	        $token = $link->getAttribute('value');
	        break;
	    }
	}

	$postinfo = "utf8=%E2%9C%93&login=".$user."&password=".$password."&remember_me=1&commit=Log+in&authenticity_token=".urlencode($token);

	curl_setopt($ch, CURLOPT_URL, "https://www.listia.com/login");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
	$html = curl_exec($ch);

	}


function getTokenDoList($ch){

	$results = array();

	$url = "https://www.listia.com/list";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);

	$dom = new DOMDocument();
	$dom->loadHTML($response);

	foreach ($dom->getElementsByTagName('input') as $link) 
	{
	    if ($link->getAttribute('name') == 'authenticity_token') {
	        $token = $link->getAttribute('value');
	        break;
	    }
	}
	$results["1i"] = $dom->getElementById("auction_form_auction_params_start_time_1i")->getAttribute("value");
	$results["2i"] = $dom->getElementById("auction_form_auction_params_start_time_2i")->getAttribute("value");
	$results["3i"] = $dom->getElementById("auction_form_auction_params_start_time_3i")->getAttribute("value");
	$results["4i"] = $dom->getElementById("auction_form_auction_params_start_time_4i")->getAttribute("value");
	$results["5i"] = $dom->getElementById("auction_form_auction_params_start_time_4i")->getAttribute("value");

	$results["something"] = $dom->getElementById("something")->getAttribute("value");

	$results["token"] = $token;
	
	return $results;
}


function getIDImageBeforeList($ch, $token, $images){
	$TOKEN = $token;

	// data fields for POST request
	$fields = array("authenticity_token"=> $TOKEN);

	// files to upload
	$filenames = $images;

	$files = array();
	foreach ($filenames as $f){
	   $files[basename($f)] = file_get_contents($f);
	}

	// URL to upload to
	$url = "https://www.listia.com/photo/async_upload";


	$boundary = uniqid();
	$delimiter = '-------------' . $boundary;

	$post_data = build_data_files($boundary, $fields, $files);


	curl_setopt_array($ch, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => 1,
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POST => 1,
	  CURLOPT_POSTFIELDS => $post_data,
	  CURLOPT_HTTPHEADER => array(
	    "X-CSRF-Token: ".$TOKEN,
		"X-Requested-With: XMLHttpRequest",
	    "Content-Type: multipart/form-data; boundary=" . $delimiter,
	    "Content-Length: " . strlen($post_data)
	  ),

	  
	));

	$response = curl_exec($ch);

	return json_decode($response)->photo->id;
}


function doListItem($ch, $data){

	$page_list = getTokenDoList($ch);

	$TOKEN = $page_list["token"];

	$post_data = "utf8=✓".
	"$email=".
	"&authenticity_token=".$TOKEN.
	"&auction_form[auction_params][title]=".$data["title"].
	"&auction_form[auction_params][category_id]=".$data["cat_id"].
	"&auction_form[auction_params][relisting]=".
	"&auction_form[auction_params][ordered_photo_ids][]=";

	foreach($data["images"] as $key => $image){
		$post_data .= "&auction_form[auction_params][ordered_photo_ids][]=".getIDImageBeforeList($ch, $TOKEN, array($image));
		if($key == 8)
			break;
	}

	$post_data .= "&auction_form[auction_params][description]=".$data["description"].
	"&listing_toggle=auction".
	"&auction_form[listing_type]=auction".
	"&auction_form[auction_params][start_bid]=".
	"&auction_form[auction_params][start_now]=0".
	"&auction_form[auction_params][start_now]=1".
	"&auction_form[auction_params][start_time(1i)]=".$page_list["1i"].
	"&auction_form[auction_params][start_time(2i)]=".$page_list["2i"].
	"&auction_form[auction_params][start_time(3i)]=".$page_list["3i"].
	"&auction_form[auction_params][start_time(4i)]=".$page_list["4i"].
	"&auction_form[auction_params][start_time(5i)]=".$page_list["5i"].
	"&something=".$page_list["something"].
	"&auction_form[auction_params][num_days]=7".
	"&auction_form[auction_params][auto_relist]=0".
	"&auction_form[auction_params][auto_relist]=1".
	"&delivery_toggle=physical".
	"&auction_form[digital]=0".
	"&auction_form[shipping]=1".
	"&auction_form[pickup]=0".
	"&auction_form[destinations][][price]=".$data["price"].
	"&auction_form[destinations][][location_id]=111".
	"&auction_form[location]=".$data["location_long"].
	"&auction_form[auction_params][country]=".$data["location_short"].
	"&auction_form[latitude]=".$data["latitude"].
	"&auction_form[longitude]=".$data["longitude"].
	"&listing_type=list"
	;

	$post_data .= "&auction_form[auction_params][confirmed_costs]=&show_verification_popup_on_redirect=&adv_options_open=";


	$url = "https://www.listia.com/list";

	curl_setopt_array($ch, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => 1,
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLINFO_HEADER_OUT => true,
	  CURLOPT_POST => 1,
	  CURLOPT_POSTFIELDS => $post_data,
	  CURLOPT_HTTPHEADER => array(
	    "X-CSRF-Token: ".$TOKEN,
		"X-Requested-With: XMLHttpRequest"
	  )
	));

	$response = curl_exec($ch);

	return json_decode($response);
}


function getGeocode($address){
	$url = "https://maps.google.com/maps/api/geocode/json?address=".urlencode($address)."&sensor=false&key=AIzaSyDfFdfw49kYpTtX5iwsMLl7zH2p8pKc740&language=en";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	$response = curl_exec($ch);
	curl_close($ch);
	return json_decode($response)->results[0];
}

function detect_cat($raw_cat, $denfine_cat, $pos_raw, $result = array()){

		
		$result_temp = $result;

		if(count($denfine_cat) == 0)
			return;

		if($pos_raw > count($raw_cat)-1)
			return;
	
		$percent_define = 50;
		$pos_define = -1;

		foreach($denfine_cat as $key => $value){

			similar_text($value["name"], vn_str_filter($raw_cat[$pos_raw]), $percent);

			if($percent > $percent_define){
				$percent_define = $percent;
				$pos_define = $key;
			}

		}
		if($pos_raw == count($raw_cat)-1 && $pos_define == -1){
			return $denfine_cat[count($denfine_cat) - 1]["id"];
		}


		
		if($pos_define != -1)
			if($denfine_cat[$pos_define]["name"] != ""){
				$result_temp[] = $denfine_cat[$pos_define]["id"];
				//print_r($result_temp);
			}

		
		$pos_raw++;
		

		if($pos_define != -1)
			detect_cat($raw_cat, $denfine_cat[$pos_define]["children"], $pos_raw, $result_temp);
		else
			detect_cat($raw_cat, $denfine_cat, $pos_raw, $result_temp);
}

/* Hàm hệ thống*/

function build_data_files($boundary, $fields, $files){
    $data = '';
    $eol = "\r\n";

    $delimiter = '-------------' . $boundary;

    foreach ($fields as $name => $content) {
        $data .= "--" . $delimiter . $eol
            . 'Content-Disposition: form-data; name="' . $name . "\"".$eol.$eol
            . $content . $eol;
    }


    foreach ($files as $name => $content) {
        $data .= "--" . $delimiter . $eol
            . 'Content-Disposition: form-data; name="photo[data]"; filename="' . $name . '"' . $eol
            . 'Content-Type: image/jpeg'.$eol
            . 'Content-Transfer-Encoding: binary'.$eol
            ;

        $data .= $eol;
        $data .= $content . $eol;
    }
    $data .= "--" . $delimiter . "--".$eol;


    return $data;
}

function getElementByClass(&$parentNode, $tagName, $className, $offset = 0) {
    $response = false;

    $childNodeList = $parentNode->getElementsByTagName($tagName);
    $tagCount = 0;
    for ($i = 0; $i < $childNodeList->length; $i++) {
        $temp = $childNodeList->item($i);
        if (stripos($temp->getAttribute('class'), $className) !== false) {
            if ($tagCount == $offset) {
                $response = $temp;
                break;
            }

            $tagCount++;
        }

    }

    return $response;
}

function vn_str_filter($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
		return $str;
}

function detect_category($raw_cat, $default_cat){

	//raw_cat : là cate cần tìm ( listia )
	//default_cat : là list cate sẵn có

	$chieu_dai_raw_cat = count($raw_cat);

	$phan_tram_giong_nhau = 50;

	$tang_default = $default_cat; //Chia ra các tầng để vào sâu trong child, mặc định là nguyên list cat

	$vi_tri_raw_cat = -1;

	//Vòng lặp này cho raw_cat
	for($i = 0; $i < $chieu_dai_raw_cat; $i++){

		//Bắt đầu so sánh tầng hiện tại || vòng này cho $tang_default

		$percent_cu = $phan_tram_giong_nhau;

		foreach ($tang_default as $cat_default){


			similar_text($cat_default["name"], vn_str_filter($raw_cat[$i]), $percent);

			if($percent >= $percent_cu){
				$cat_tam = $cat_default;
				$percent_cu = $percent;
			}

			if($percent == 100)
				break;
		}

		if(count($cat_tam)){
			$vi_tri_raw_cat = $i; //Vị trí của raw_cat đã trùng khớp
			$default_cat = $cat_tam;
			break;
		}
	}

	//Sau vòng lặp trên ta có thể xác định được 2 cate đầu trùng nhau của 2 mảng
	if($vi_tri_raw_cat < $chieu_dai_raw_cat){


		$vi_tri_tiep_theo_raw_cat = $vi_tri_raw_cat + 1;

		for($i = $vi_tri_tiep_theo_raw_cat; $i < $chieu_dai_raw_cat; $i++){

			$percent_cu = $phan_tram_giong_nhau;

			if(count($default_cat["children"]) != 0){
				foreach ($default_cat["children"] as $cat_default){

					
					similar_text($cat_default["name"], vn_str_filter($raw_cat[$i]), $percent);

					if($percent >= $percent_cu){
						$cat_tam = $cat_default;
						$percent_cu = $percent;
					}

				}

				if(count($cat_tam)){
					$default_cat = $cat_tam;
				}

			}else{
				return $default_cat["id"];
			}
		}

		if(count($default_cat["children"]) != 0){
			while(count($default_cat["children"]) != 0){
				$default_cat = $default_cat["children"][count($default_cat["children"]) - 1];
			}
		}
		return $default_cat["id"];

	}else{
		//Chọn other từ vị trí hiện tại
		//Tức là chọn other từ $default_cat[children]
		if(count($default_cat["children"]) != 0){
			while(count($default_cat["children"]) != 0){
				$default_cat = $default_cat["children"][count($default_cat["children"]) - 1];
			}
		}
		return $default_cat["id"];
	}
}

function contains($string, $keyword)
  {
    if (empty($string) || empty($keyword)) return false;
    $keyword_first_char = $keyword[0];
    $keyword_length = strlen($keyword);
    $string_length = strlen($string);

    // case 1
    if ($string_length < $keyword_length) return false;

    // case 2
    if ($string_length == $keyword_length) {
      if ($string == $keyword) return true;
      else return false;
    }

    // case 3
    if ($keyword_length == 1) {
      for ($i = 0; $i < $string_length; $i++) {

        // Check if keyword's first char == string's first char
        if ($keyword_first_char == $string[$i]) {
          return true;
        }
      }
    }

    // case 4
    if ($keyword_length > 1) {
      for ($i = 0; $i < $string_length; $i++) {
        /*
        the remaining part of the string is equal or greater than the keyword
        */
        if (($string_length + 1 - $i) >= $keyword_length) {

          // Check if keyword's first char == string's first char
          if ($keyword_first_char == $string[$i]) {
            $match = 1;
            for ($j = 1; $j < $keyword_length; $j++) {
              if (($i + $j < $string_length) && $keyword[$j] == $string[$i + $j]) {
                $match++;
              }
              else {
                return false;
              }
            }

            if ($match == $keyword_length) {
              return true;
            }

            // end if first match found
          }

          // end if remaining part
        }
        else {
          return false;
        }

        // end for loop
      }

      // end case4
    }

    return false;
  }


class Message{
	public $title = "";
	public $read;
	public $id = "";
	public $from = "";
}
