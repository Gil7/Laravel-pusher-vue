<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<style>
		.list-group{
			overflow-y:scroll;
			height: 400px;
		}
	</style>
</head>
<body>
	<div class="container" id="app">
		<div class="row">
			<h1>Chat Room</h1>
			<li class="list-group-item active">Chat Room</li>
			<ul class="list-group offset-4 col-4" v-chat-scroll>
				<message v-for="(message, index) in chat.messages" color="success" :text="message" :key="index"></message>
				
			</ul>
			<input type="text" class="form-control" value="Type your message..." v-model="messageToSend" @keyup.enter="sendMessage">
		</div>
	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>