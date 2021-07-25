<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Firebase</title>
</head>
<body>
	<div>
		<input type="number" id="age">
		<input type="text" id="fname">
		<button type="button" onclick="submit()">submit</button>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
	async function submit() {
		let age = document.getElementById("age").value
		let fname = document.getElementById("fname").value
		const params = new URLSearchParams()
		params.append("age", age)
		params.append("fname", fname)
		const response = await axios.post("<?= base_url('Firebase/submit') ?>", params)
		const data = response.data
		console.log(data);
	}
</script>	

</html>