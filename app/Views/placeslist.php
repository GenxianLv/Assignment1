<!doctype html>
<html>
	<head>
		<title>DGPT4711 Lab 04</title>
	</head>
                <style>
            a{
                text-decoration: none;
            }
            a:hover{
                color:red;
                text-decoration: underline;
            }
            table{
                border:red;
            }
            .cc{
                background-color: pink;
            }
        </style>
	<body>
            <table border="1">
                <tr><td class="cc">
                        <h1>List of Marvel Heroes</h1></td></tr>
		{records}
                <tr><td>
		<p><a href="/heroes/showme/{id}">{name}</a></p></td></tr>
		{/records}
                <tr><td>
		<p><a href="/home">Home</a></p></td></tr>
            </table>
	</body>
</html>