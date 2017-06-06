<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Json</title>
	<!-- <script type="text/javascript" src="main.js"></script> -->
	<script type="text/javascript">

		var serviceBase = {port: 3000, url: 'azat.co'},
		    getAccounts = function(){return [1,2,3]}

		var accountServiceES5 = {
		  port: serviceBase.port,
		  url: serviceBase.url,
		  getAccounts: getAccounts,
		  /*toString() {
		    return JSON.stringify(super.valueOf())
		  },*/
		  toString: function(){
		  	return JSON.stringify(this.valueOf())
		  },
		  getUrl: function() {return "http://" + this.url + ':' + this.port},
		  valueOf_1_2_3: getAccounts()
		}
		console.log(accountServiceES5.toString());

		// var accountServiceES5ObjectCreate = Object.create(serviceBase);
		// var accountServiceES5ObjectCreate = {
		//   getAccounts: getAccounts,
		//   toString: function() {
		//     return JSON.stringify(this.valueOf())
		//   },
		//   getUrl: function() {return "http://" + this.url + ':' + this.port},
		//   valueOf_1_2_3: getAccounts()
		// }
		// console.log(accountServiceES5ObjectCreate);

		/*function animal(){
			var privateData = 'foo'
		    this.name = 'rover';
		    this.set_name = function(name){
		         this.name = name;
		         //alert(privateData);
		    }
		}
		var animalData = new animal;
		animalData.set_name('testing');
		console.log(animalData.name);
		console.log(animalData)*/
		//console.log(animalData.set_name('test'));
		//console.log(animalData);
		//
		/*var serviceBase = {port: 3000, url: 'azat.co'},
	    	getAccounts = function(){return [1,2,3]}
			var accountServiceES5ObjectCreate = {
			   __proto__: serviceBase,
    		   getAccounts: getAccounts,
    		   toString() {
			     return JSON.stringify(this.valueOf())
			    },
			}
		console.log(Object.create(accountServiceES5ObjectCreate).toString());*/

	</script>
</head>
<body>
	<form>
		<input type="text" name="username" />
		<input type="text" name="password" />
	</form>
</body>
</html>