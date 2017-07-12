<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>json</title>
</head>
<body>
    <h3>1) default parameter</h3>
	<script type="text/javascript">
        //1 default parameter
        // var mynumber=function number(h){
        //      return h=33;
        // }
        // document.write(mynumber());


        // //new default parameter
        //   var msg=function mymsg(height=20){
        //      return height;
        //    }
        //    document.write(msg());
    </script>

    <h3>2) literals</h3>
    <script>
         //literals
        //  var name='my name is '+'radha ' + ' singh';
        //  document.write(name);

        //  //new literals
        // var first="radha";
        // var namenew= `Your name is ${first}.`;
        // console.log(namenew);
        // document.write(namenew);

    </script>

    <h3>mulit line string</h3>
    <script>
        //mutiline string
       /*var poem = 'Then took the other, as just as fair,\n\t'
                  + 'And having perhaps the better claim\n\t'
                     + 'Because it was grassy and wanted wear,\n\t';
        document.write(poem);
        console.log(poem);*/

        //new
        var fourAgreements = `<pre>You have the right to be you.
                              You can only be you when you do your best.
                              You have the right to be you</pre>`
         console.log(fourAgreements);
         document.write(fourAgreements);
    </script>

    <h3>5) object literals</h3>
        <script>

            //previous
        //     var serviceBase = {port: 3000, url: 'azat.co'},
        //     getAccounts = function(){return [1,2,3]}

        // var accountServiceES5 = {
        //   port: serviceBase.port,
        //   url: serviceBase.url,
        //   getAccounts: getAccounts,
        //   toString: function() {
        //     return JSON.stringify(this.valueOf())
        //   },
        //   getUrl: function() {return "http://" + this.url + ':' + this.port},
        //   valueOf_1_2_3: getAccounts()

        // }
        //  //console.log(accountServiceES5.getUrl());
        //  console.log(accountServiceES5);

        //new
            var serviceBase = {port: 3000, url: 'azat.co'},
            getAccounts = function(){return [1,2,3]}

            var accountServiceES5ObjectCreate = Object.create(serviceBase);
              console.log(accountServiceES5ObjectCreate);
            var accountServiceES5ObjectCreate = {
               // port: Object.create,    => ask how to access port here  
                  getAccounts: getAccounts,
                  toString: function() {
                    return JSON.stringify(this.valueOf())
                  },
                  getUrl: function() {return "http://" + this.url + ':' + this.port},
                  valueOf_1_2_311: getAccounts()
                }
                console.log( accountServiceES5ObjectCreate);
          
        </script>

   <!--  <script>
           function animal(){
            var privateData = 'foo'
            this.name = 'rover';
            this.set_name = function(name){
                 this.name = name;
               // alert(privateData);
            }
        }
        var animalData = new animal;
        //animalData.set_name('testing');
        //console.log(animalData.name);
        console.log(animalData.name);
        //console.log(animalData.set_name('test'));
        //console.log(animalData);
        </script>
 -->

    <script>
      

        // var serviceBase = {port: 3000, url: 'azat.co'},
        //     getAccounts = function(){return [1,2,3]}

        // var accountServiceES5 = {
        //   port: serviceBase.port,
        //   url: serviceBase.url,
        //   getAccounts: getAccounts,
        //   // toString() {
        //   //   return JSON.stringify(super.valueOf())
        //   // },
        //   toString: function(){
        //      return JSON.stringify(this.valueOf())
        //   },
        //   getUrl: function() {return "http://" + this.url + ':' + this.port},
        //   valueOf_1_2_3: getAccounts()
        // }
        // console.log(accountServiceES5.toString());
        //  console.log(accountServiceES5);
    </script>

    <script>
    var logUpperCase = function() {
    var _this = this

      this.string = this.string.toUpperCase()
      return function () {
        return console.log(_this.string)
      }
    }

    logUpperCase.call({ string: 'es6 rocks' })()

    //new
    var logUpperCase
</script>

  
</body>
</html>