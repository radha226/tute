<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Javascript Classe</title>
	<script type="text/javascript">
		class baseModel{

			constructor(options = {}, data = []){
				this.name = 'Testing';
				this.url = 'http://google.com';
				this.options = options;
				this.data = data;
			}

			getName(){
				console.log(`Name value: ${this.name}`);
			}

			getData(){
				return this.data;
			}

			getOptions(){

				return this.options;
			}
		}

		class AccountModel extends baseModel{
			constructor(options, data){
				super(options={},data=[])
				this.name='AccountModel';
				
			}
			getNameAccount(){
				console.log(`Name value: ${this.name}`);
			}

			setValue(){
				this.name='AccountModel';
			}

		}

		class ManagerModel extends baseModel{
			constructor(options, data){
				super(options={}, data=[])
					this.name='ManagerModel';
				
			}
			getNameManager(){
				console.log(`Name value: ${this.name}`);
			}
		}


		//var classObject = new baseModel({test:'123'},[1,2,3]);
		//var classObject = new AccountModel({test:'123'},[1,2,3]);
		var classObject = new ManagerModel({test:'123'},[1,2,3]);
		classObject.getNameManager();
		
		//classObject.setValue();
		//classObject.getNameAccount();
		//console.log(classObject.getData());
		//console.log(classObject.getOptions());
	
	</script>
</head>
<body>
	
</body>
</html>