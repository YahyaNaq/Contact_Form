<?php
$query=require 'bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="assets\YahyaNmini.png" type="image/x-icon"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://cdn.tailwindcss.com"></script>
	<title>Confirm Submission</title>
</head>
<body class="bg-gradient-to-l from-gray-700 to-gray-800 flex justify-around items-center flex-wrap">
	<div class="text-center">
	    <h1 class="text-[2.5rem] text-[#666af6] mt-4 font-medium">Are your Sure?</h1>
	    <h3 class="text-[1.5rem] text-[#f9f9f9] font-thin">Please confirm your details</h3>
	    <img src="assets\contact_illustration.svg" class="h-80 w-auto scale-x-[-1]">
	</div>
	<div class="px-10 pb-4 h-[100vh] w-[50vw] mr-16 align-middle bg-white drop-shadow-xl">
		<h1 class="text-[2.5rem] mb-4 mt-4 font-bold text-gray-700">Please confirm your details</h1>
		<div class="mb-6">
			<h3 class="block uppercase tracking-wide font-bold text-gray-700">First name</h3>
			<?= $_POST["FirstName"] ?>	
		</div>
		<div class="mb-6">
			<h3 class="block uppercase tracking-wide font-bold text-gray-700">Last name </h3>
			<?= $_POST["LastName"] ?>
		</div>
		<div class="mb-6">
			<h3 class="block uppercase tracking-wide font-bold text-gray-700">Email Address</h3>
			<?= $_POST["Email"] ?>
		</div>	
		<div class="mb-6">	
			<h3 class="block uppercase tracking-wide font-bold text-gray-700">Issue</h3>
			<?= $_POST["Issue"] ?>
		</div>
		<div class="mb-6 break-words text-justify">
			<h3 class="block uppercase tracking-wide font-bold text-gray-700">Comment</h3>
			<?php if(preg_match("/[a-zA-Z]/i", $_POST["Comment"])): ?>
				<p><?= $_POST["Comment"] ?></p>
			<?php else: ?>
				<p>None</p>
			<?php endif; ?>
		</div>
		<button class="bg-[#666af6] hover:bg-transparent
	      text-white font-semibold hover:text-[#666af6] py-2
	      px-4 border border-[#666af6] hover:border-[#666af6] rounded duration-500"
	      onclick= "history.back(-1)";
	      >
	        Edit
	      </button>
	    <button
	    class="confirm bg-transparent hover:bg-[#666af6] text-[#666af6]
	    font-semibold hover:text-white py-2 px-4 border
	    border-[#666af6] hover:border-[#666af6] rounded duration-500
	    disabled:opacity-75 disabled:hover:bg-transparent
	    disabled:hover:text-[#666af6] disabled:cursor-not-allowed"
	    name='confirm'
	    type='submit'
	    value='confirm'
	    >
	        Confirm
	    </button>
	</div>
	<?php $query->InsertRecord('contact',$form_record); ?>
<!-- jquery -->
</body>
</html>