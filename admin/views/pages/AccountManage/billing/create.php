<?php
echo Page::title(["title"=>"Create Billing"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"billing", "text"=>"Manage Billing"]);
echo Page::context_open();
echo Form::open(["route"=>"billing/save"]);
	echo Form::input(["label"=>"Invoice","name"=>"invoice_id","table"=>"invoices"]);
	echo Form::input(["label"=>"Reservation","name"=>"reservation_id","table"=>"reservations"]);
	echo Form::input(["label"=>"User","name"=>"user_id","table"=>"users"]);
	echo Form::input(["label"=>"Customer Detail Name","type"=>"text","name"=>"customer_detail_name"]);
	echo Form::input(["label"=>"Itemized Names","type"=>"textarea","name"=>"itemized_names"]);
	echo Form::input(["label"=>"Itemized Charges","type"=>"text","name"=>"itemized_charges"]);
	echo Form::input(["label"=>"Discount Amount","type"=>"text","name"=>"discount_amount"]);
	echo Form::input(["label"=>"Tax Amount","type"=>"text","name"=>"tax_amount"]);
	echo Form::input(["label"=>"Total Amount","type"=>"text","name"=>"total_amount"]);
	echo Form::input(["label"=>"Payment","name"=>"payment_id","table"=>"payments"]);
	echo Form::input(["label"=>"Payment Amount","type"=>"text","name"=>"payment_amount"]);
	echo Form::input(["label"=>"Payment Method","type"=>"text","name"=>"payment_method"]);
	echo Form::input(["label"=>"Payment Status","type"=>"text","name"=>"payment_status"]);
	echo Form::input(["label"=>"Payment Date","type"=>"text","name"=>"payment_date"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
