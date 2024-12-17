<?php
class ReservationApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["reservations"=>Reservation::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["reservations"=>Reservation::pagination($page,$perpage),"total_records"=>Reservation::count()]);
	}
	function find($data){
		echo json_encode(["reservation"=>Reservation::find($data["id"])]);
	}
	function delete($data){
		Reservation::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$reservation=new Reservation();
		$reservation->user_id=$data["user_id"];
		$reservation->customer_detail_id=$data["customer_detail_id"];
		$reservation->room_id=$data["room_id"];
		$reservation->check_in_date=$data["check_in_date"];
		$reservation->check_out_date=$data["check_out_date"];
		$reservation->special_requests=$data["special_requests"];

		$reservation->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$reservation=new Reservation();
		$reservation->id=$data["id"];
		$reservation->user_id=$data["user_id"];
		$reservation->customer_detail_id=$data["customer_detail_id"];
		$reservation->room_id=$data["room_id"];
		$reservation->check_in_date=$data["check_in_date"];
		$reservation->check_out_date=$data["check_out_date"];
		$reservation->special_requests=$data["special_requests"];
		$reservation->updated_at=date("Y-m-d H:i:s");

		$reservation->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
