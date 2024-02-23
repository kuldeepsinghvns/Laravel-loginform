<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show all data</title>
</head>
<body>
    <button onclick="showdata()">Show Data</button>
    <div id="get"></div>
    <script>
        function showdata(){
            fetch('http://localhost/loginform/public/api/showdata')
            .then(response=>{
                if(response.ok){
                    return response.json();
                }
                else{
                    throw new Error("Network response was not ok.");
                }
            })
            .then(data=>{
            //    console.log(data.result);
               const n=data.result.length;

                const div=document.getElementById('get');
                let text = `<table><tr><th>Name</th><th>UserName</th><th>Password</th></tr>`;
                for(let i=0;i<=n-1;i++)
                {
                    console.log(data.result[i].name);
                    console.log(data.result[i].username);
                    console.log(data.result[i].password);
                    text+=`<tr><td>${data.result[i].name}</td><td>${data.result[i].username}</td><td>${data.result[i].password}</td></tr>`;
                }
             
               text+=`</table>`;
               div.innerHTML=text;
            }
            
            )
            .catch(error=>{
                console.log('There was a problem with the fetch operation:', error);
            });

        }
    </script>

    <!-- Direct show All Data -->

    <!-- <script>showdata()</script> -->

    
</body>
</html>